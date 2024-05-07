<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class About extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.about';

    public $data;


    public function mount(): void
    {
        $this->data = User::first();
        $this->form->fill($this->data?->toArray() ?? []);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('welcome_message')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('years_of_experience')
                    ->required()
                    ->columns(1)
                    ->numeric(),
                TextInput::make('plays')
                    ->required()
                    ->columns(1)
                    ->numeric(),
                TextInput::make('snapchat')
                    ->prefixIcon('tabler-brand-snapchat')
                    ->required(),
                TextInput::make('twitter')
                    ->prefixIcon('tabler-brand-twitter')
                    ->required(),
                TextInput::make('instagram')
                    ->prefixIcon('tabler-brand-instagram')
                    ->required(),
                TextInput::make('discord')
                    ->prefixIcon('tabler-brand-discord')
                    ->required(),
                FileUpload::make('profile_picture')
                    ->columnSpanFull()
                    ->image()
                    ->required()


            ])->columns(2)
            ->model(User::first())
            ->statePath('data');

    }


    public function save(): void
    {
        try {
            $data = $this->form->getState();
            \App\Models\User::updateOrCreate(
                ['id' => 1], // Search criteria
                $data // Values to update or create
            );
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
}

