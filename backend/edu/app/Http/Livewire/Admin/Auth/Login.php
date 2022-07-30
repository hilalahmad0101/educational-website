<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username, $password;
    public function render()
    {
        return view('livewire.admin.auth.login')->layout('layout.admin-login');
    }

    protected function resetField()
    {
        $this->username = "";
        $this->password = "";
    }

    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $admins = Auth::guard('admin')->attempt(['username' => $this->username, 'password' => $this->password]);
        if ($admins) {
            session()->flash('success', 'Login Successfully');
            return redirect(route('admin.dashboard'));
        } else {
            session()->flash('error', 'Invalid Username and Password');
        }
    }
}
