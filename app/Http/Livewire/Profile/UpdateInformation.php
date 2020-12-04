<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateInformation extends Component
{
    use WithFileUploads;

    public User $user;

    public $name, $email, $phones, $photo;

    public function mount() {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phones = $this->setFormatPhones($this->user->phones);
    }

    public function saveInformation()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'phones' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:8'],
            'photo' => ['nullable', 'image', 'max:10000'],
        ]);

        // PHOTO
        if($this->photo != null) {
            $this->user->updateProfilePhoto($this->photo);
            $this->photo->delete();
        }

        // OTHER FIELDS
        $this->user->forceFill([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phones' => $this->getFormatPhones($validatedData['phones'])
        ])->save();


        session()->flash('message', 'Informacion actualizada correctamente!');
    }


    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
            'phones' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:8'],
        ]);
    }

    public function deleteProfilePhoto() {
        $this->user->deleteProfilePhoto();
    }

    private function getFormatPhones($phones) {
        if( strlen( $phones ) < 8 ) return array();

        $phonesArray = explode('-', $phones);
        return array_map(function($element) { return trim($element);}, $phonesArray);
    }

    private function setFormatPhones($phones) {
        return implode(' - ', $phones);
    }


    public function render()
    {
        return view('livewire.profile.update-information');
    }
}
