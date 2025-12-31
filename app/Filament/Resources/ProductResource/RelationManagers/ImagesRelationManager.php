<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';
    
    protected static ?string $title = 'Hình ảnh sản phẩm';
    
    protected static ?string $modelLabel = 'Hình ảnh';
    
    protected static ?string $pluralModelLabel = 'Hình ảnh';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                CuratorPicker::make('media_id')
                    ->label('Chọn hình ảnh')
                    ->directory('products')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->required()
                    ->helperText('Chọn hình ảnh từ thư viện Media hoặc upload mới'),
                
                Forms\Components\Toggle::make('is_primary')
                    ->label('Hình ảnh chính')
                    ->default(false)
                    ->helperText('Hình ảnh này sẽ hiển thị làm ảnh đại diện của sản phẩm')
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        // Nếu set làm primary, bỏ primary của các ảnh khác
                        if ($state) {
                            $productId = $get('../../product_id');
                            if ($productId) {
                                \App\Models\ProductImage::where('product_id', $productId)
                                    ->where('id', '!=', $get('id'))
                                    ->update(['is_primary' => false]);
                            }
                        }
                    }),
                
                Forms\Components\TextInput::make('sort_order')
                    ->label('Thứ tự hiển thị')
                    ->numeric()
                    ->default(0)
                    ->helperText('Số càng nhỏ, hiển thị càng trước'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('media.path')
            ->columns([
                Tables\Columns\ImageColumn::make('media.path')
                    ->label('Hình ảnh')
                    ->disk('public')
                    ->size(100)
                    ->square(),
                
                Tables\Columns\TextColumn::make('media.name')
                    ->label('Tên file')
                    ->searchable()
                    ->limit(30),
                
                Tables\Columns\IconColumn::make('is_primary')
                    ->label('Ảnh chính')
                    ->boolean()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Thứ tự')
                    ->sortable()
                    ->alignCenter(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_primary')
                    ->label('Ảnh chính')
                    ->placeholder('Tất cả')
                    ->trueLabel('Có')
                    ->falseLabel('Không'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc')
            ->reorderable('sort_order');
    }
}
