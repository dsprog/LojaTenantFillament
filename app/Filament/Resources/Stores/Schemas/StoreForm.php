<?php

namespace App\Filament\Resources\Stores\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\{
    TextInput,FileUpload,RichEditor
};

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
