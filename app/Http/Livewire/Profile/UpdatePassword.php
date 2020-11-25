<?php

namespace App\Http\Livewire\Profile;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class UpdatePassword extends Component
{
    use PasswordValidationRules;

    public $current, $password, $password_confirmation;

    /**
     * Validate and update the user's password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function updatePassword()
    {
        $validatedData = $this->validate([
            'current' => 'required|min:8',
            'password' => $this->passwordRules(),
        ]);

        if( !Hash::check( $validatedData['current'], Auth::user()->password )) {
            $this->addError( 'current', __('The provided password does not match your current password.') );
            return;
        }

        Auth::user()->forceFill([
            'password' => Hash::make( $validatedData['password'] ),
        ])->save();

        session()->flash('message', 'Contraseña actualizada correctamente!');



//        Validator::make([
//            'current' => $this->current,
//            'password' => $this->password,
//            'password_confirmation' => $this->password_confirmation,
//        ],[
//            'current' => 'required|string|min:8',
//            'password' => $this->passwordRules(),
//        ])->after( function ($validator) {
//            if( !Hash::check( $this->current, Auth::user()->password ) ) {
//                $validator->errors()->add('current', __('The provided password does not match your current password.'));
//            }
//        });
//
//        Auth::user()->forceFill([
//            'password' => Hash::make( $this->password ),
//        ])->save();

//        Validator::make($input, [
//            'current_password' => ['required', 'string'],
//            'password' => $this->passwordRules(),
//        ])->after(function ($validator) use ($user, $input) {
//            if (! Hash::check($input['current_password'], $user->password)) {
//                $validator->errors()->add('current_password', __('The provided password does not match your current password.'));
//            }
//        })->validateWithBag('updatePassword');
//
//        $user->forceFill([
//            'password' => Hash::make($input['password']),
//        ])->save();
    }

    public function render()
    {
        return view('livewire.profile.update-password');
    }
}
