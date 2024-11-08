<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class Users extends Component
{
    public Collection|null $users;

    public function mount()
    {
        $this->loadUsers();
    }

    protected function loadUsers()
    {
        $this->users = User::orderBy('employee_id')->get();
    }
    public function render()
    {
        return view('livewire.users');
    }
}
