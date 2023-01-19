<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

//     protected function getActions(): array
//     {
//         return [
//             // Actions\DeleteAction::make(),
//             Action::make("changePassword")
//             ->form([
//                 TextInput::make("new_password")
//                 ->password()
//                 ->label("New Password")
//                 ->required()
//                 ->rule(Password::default()),

//                 TextInput::make("new_password_comfirmation")
//                 ->password()
//                 ->label("Confirm New Password")
//                 ->required()
//                 ->same("new_password")
//                 ->rule(Password::default())
//             ])->action(function (array $data) {
//                 $this->record->update([
//                     "password"=>Hash::make($data["new_password"])
//                 ]);

//                 $this->notify("success", "Password Updated Successfully");
//             })
//         ];
//     }
}
