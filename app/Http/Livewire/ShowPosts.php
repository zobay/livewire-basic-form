<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowPosts extends Component
{
   public $name;
   public $email;
   public $password;
   public $successMessage;

    protected $rules = [
        'name' => 'string|min:3',
        'email' => 'email',
        'password' => 'string|min:4'
    ];

    public function submitForm()
    {
        $validatedData = $this->validate();

        sleep(2);
        User::create($validatedData);

        $this->successMessage = 'Form submitted successfully';

        $this->resetForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->user = new User();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
