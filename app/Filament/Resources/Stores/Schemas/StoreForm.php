<?php

namespace App\Filament\Resources\Stores\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StoreForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('slug')->required(),
                TextInput::make('phone')->required(),
                FileUpload::make('logo')
                    ->required()->image()
                    ->disk('public')
                    ->directory('stores')
                    ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('600'),
                RichEditor::make('about')->required(),
            ]);
    }
}
