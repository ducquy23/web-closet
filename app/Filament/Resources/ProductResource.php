<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\Category;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    
    protected static ?string $navigationLabel = 'Sản phẩm';
    
    protected static ?string $modelLabel = 'Sản phẩm';
    
    protected static ?string $pluralModelLabel = 'Sản phẩm';
    
    protected static ?string $navigationGroup = 'Sản phẩm';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin cơ bản')
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->label('Danh mục')
                            ->relationship('category', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(),
                            ]),
                        
                        Forms\Components\TextInput::make('name')
                            ->label('Tên sản phẩm')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' ? $set('slug', Str::slug($state)) : null),
                        
                        Forms\Components\TextInput::make('slug')
                            ->label('URL (slug)')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('URL-friendly version của tên sản phẩm'),
                        
                        Forms\Components\TextInput::make('sku')
                            ->label('Mã SKU')
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Mã sản phẩm duy nhất'),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Mô tả')
                    ->schema([
                        Forms\Components\Textarea::make('short_description')
                            ->label('Mô tả ngắn')
                            ->rows(2)
                            ->maxLength(255)
                            ->helperText('Mô tả ngắn hiển thị trên danh sách sản phẩm'),
                        
                        Forms\Components\RichEditor::make('description')
                            ->label('Mô tả chi tiết')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'bulletList',
                                'orderedList',
                                'link',
                            ])
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('Giá và tồn kho')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->label('Giá bán')
                            ->required()
                            ->numeric()
                            ->prefix('₫')
                            ->step(1000)
                            ->default(0),
                        
                        Forms\Components\TextInput::make('original_price')
                            ->label('Giá gốc')
                            ->numeric()
                            ->prefix('₫')
                            ->step(1000)
                            ->helperText('Giá gốc trước khi giảm giá (để tính phần trăm giảm)'),
                        
                        Forms\Components\TextInput::make('discount_percent')
                            ->label('Phần trăm giảm giá')
                            ->numeric()
                            ->suffix('%')
                            ->minValue(0)
                            ->maxValue(100)
                            ->default(0)
                            ->helperText('Phần trăm giảm giá (tự động tính nếu có giá gốc)'),
                        
                        Forms\Components\TextInput::make('stock_quantity')
                            ->label('Số lượng tồn kho')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                    ])
                    ->columns(4),
                
                Forms\Components\Section::make('Hình ảnh sản phẩm')
                    ->schema([
                        CuratorPicker::make('primary_image_id')
                            ->label('Ảnh chính')
                            ->directory('products')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('Ảnh chính hiển thị trên danh sách và trang chi tiết sản phẩm'),
                        
                        CuratorPicker::make('gallery_images')
                            ->label('Gallery ảnh')
                            ->directory('products')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->multiple()
                            ->helperText('Thêm nhiều ảnh để tạo gallery cho sản phẩm'),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Biến thể sản phẩm (Size & Màu)')
                    ->schema([
                        Forms\Components\Repeater::make('variants')
                            ->label('')
                            ->relationship('variants')
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
                                    ->placeholder('Ví dụ: Đen, Trắng, Xanh dương'),
                                
                                Forms\Components\ColorPicker::make('color_code')
                                    ->label('Mã màu')
                                    ->helperText('Mã màu hex'),
                                
                                Forms\Components\TextInput::make('price')
                                    ->label('Giá riêng (tùy chọn)')
                                    ->numeric()
                                    ->prefix('₫')
                                    ->step(1000)
                                    ->helperText('Để trống nếu dùng giá chung'),
                                
                                Forms\Components\TextInput::make('stock_quantity')
                                    ->label('Tồn kho')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0),
                                
                                Forms\Components\TextInput::make('sku')
                                    ->label('SKU riêng')
                                    ->maxLength(255)
                                    ->helperText('Mã SKU riêng cho biến thể này'),
                                
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Kích hoạt')
                                    ->default(true),
                            ])
                            ->columns(3)
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => 
                                ($state['size'] ?? '') . 
                                ($state['color'] ? ' - ' . $state['color'] : '') 
                                ?: 'Biến thể mới'
                            )
                            ->defaultItems(0)
                            ->addActionLabel('Thêm biến thể')
                            ->helperText('Thêm các biến thể sản phẩm (size, màu sắc) với giá và tồn kho riêng'),
                    ]),
                
                Forms\Components\Section::make('Cài đặt')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Sản phẩm nổi bật')
                            ->default(false)
                            ->helperText('Hiển thị ở trang chủ'),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Kích hoạt')
                            ->default(true)
                            ->helperText('Sản phẩm này có hiển thị trên website không?'),
                        
                        Forms\Components\TextInput::make('sort_order')
                            ->label('Thứ tự sắp xếp')
                            ->numeric()
                            ->default(0)
                            ->helperText('Số càng nhỏ, hiển thị càng trước'),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('primaryImage.media.path')
                    ->label('Hình ảnh')
                    ->disk('public')
                    ->circular()
                    ->size(60)
                    ->defaultImageUrl(url('/images/placeholder.png')),
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên sản phẩm')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),
                
                Tables\Columns\TextColumn::make('price')
                    ->label('Giá bán')
                    ->money('VND', locale: 'vi')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('discount_percent')
                    ->label('Giảm giá')
                    ->suffix('%')
                    ->sortable()
                    ->color(fn ($state) => $state > 0 ? 'success' : null)
                    ->toggleable(),
                
                Tables\Columns\TextColumn::make('stock_quantity')
                    ->label('Tồn kho')
                    ->sortable()
                    ->color(fn ($state) => $state > 0 ? 'success' : 'danger')
                    ->toggleable(),
                
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Nổi bật')
                    ->boolean()
                    ->sortable()
                    ->toggleable(),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Trạng thái')
                    ->boolean()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Danh mục')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload(),
                
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Sản phẩm nổi bật')
                    ->placeholder('Tất cả')
                    ->trueLabel('Có')
                    ->falseLabel('Không'),
                
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Trạng thái')
                    ->placeholder('Tất cả')
                    ->trueLabel('Đang hoạt động')
                    ->falseLabel('Đã tắt'),
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
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ImagesRelationManager::class,
            RelationManagers\VariantsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
