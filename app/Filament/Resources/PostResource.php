<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $label = 'Blog Post';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('content')
                    ->required(),
                TextInput::make('slug')
                    ->required()
                    ->unique(Post::class, 'slug', fn ($record) => $record),
                Toggle::make('is_published')
                    ->label('Published'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->searchable(),
                BooleanColumn::make('is_published'),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime(),
            ])
            ->filters([
                Filter::make('Published')
                    ->query(fn (Builder $query) => $query->where('is_published', true)),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
