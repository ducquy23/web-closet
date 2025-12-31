<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class VariantsRelationManager extends RelationManager
{
    protected static string $relationship = 'variants';
    
    protected static ?string $title = 'Biến thể sản phẩm';
    
    protected static ?string $modelLabel = 'Biến thể';
    
    protected static ?string $pluralModelLabel = 'Biến thể';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin biến thể')
                    ->schema([
                        Forms\Components\Select::make('size')
                            ->label('Kích thước')
                            ->options([
                                'XS' => 'XS - Extra Small',
                                'S' => 'S - Small',
                                'M' => 'M - Medium',
                                'L' => 'L - Large',
                                'XL' => 'XL - Extra Large',
                                'XXL' => 'XXL - Extra Extra Large',
                            ])
                            ->searchable()
                            ->placeholder('Chọn kích thước'),
                        
                        Forms\Components\TextInput::make('color')
                            ->label('Tên màu sắc')
                            ->maxLength(255)
                            ->placeholder('Ví dụ: Đen, Trắng, Xanh dương')
                            ->helperText('Tên màu sắc hiển thị cho khách hàng'),
                        
                        Forms\Components\ColorPicker::make('color_code')
                            ->label('Mã màu')
                            ->helperText('Mã màu hex để hiển thị trên website'),
                    ])
                    ->columns(3),
                
                Forms\Components\Section::make('Giá và tồn kho')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->label('Giá riêng (tùy chọn)')
                            ->numeric()
                            ->prefix('₫')
                            ->step(1000)
                            ->helperText('Để trống nếu dùng giá chung của sản phẩm'),
                        
                        Forms\Components\TextInput::make('stock_quantity')
                            ->label('Số lượng tồn kho')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                        
                        Forms\Components\TextInput::make('sku')
                            ->label('Mã SKU riêng')
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Mã SKU riêng cho biến thể này (tùy chọn)'),
                    ])
                    ->columns(3),
                
                Forms\Components\Toggle::make('is_active')
                    ->label('Kích hoạt')
                    ->default(true)
                    ->helperText('Biến thể này có bán không?'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('size')
            ->columns([
                Tables\Columns\TextColumn::make('size')
                    ->label('Kích thước')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),
                
                Tables\Columns\TextColumn::make('color')
                    ->label('Màu sắc')
                    ->searchable()
                    ->formatStateUsing(fn ($state, $record) => $state ? 
                        ($record->color_code ? 
                            view('filament.tables.columns.color-badge', [
                                'color' => $state,
                                'code' => $record->color_code
                            ]) : 
                            $state
                        ) : 
                        '-'
                    )
                    ->html(),
                
                Tables\Columns\TextColumn::make('price')
                    ->label('Giá riêng')
                    ->money('VND', locale: 'vi')
                    ->sortable()
                    ->placeholder('-')
                    ->default('Dùng giá chung'),
                
                Tables\Columns\TextColumn::make('stock_quantity')
                    ->label('Tồn kho')
                    ->sortable()
                    ->color(fn ($state) => $state > 0 ? 'success' : 'danger')
                    ->alignCenter(),
                
                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Trạng thái')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('size')
                    ->label('Kích thước')
                    ->options([
                        'XS' => 'XS',
                        'S' => 'S',
                        'M' => 'M',
                        'L' => 'L',
                        'XL' => 'XL',
                        'XXL' => 'XXL',
                    ]),
                
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Trạng thái')
                    ->placeholder('Tất cả')
                    ->trueLabel('Đang hoạt động')
                    ->falseLabel('Đã tắt'),
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
            ->defaultSort('size', 'asc');
    }
}
