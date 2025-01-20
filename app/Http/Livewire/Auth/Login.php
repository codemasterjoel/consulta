<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email:rfc,dns',
        'password' => 'required',
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
        $this->fill(['email' => 'admin@softui.com', 'password' => 'secret']);
    }

    public function login() {
        $user = User::where('email', '=', $this->email)->first();
        
        if($user->count() > 0){
            if($user->email == $this->email and password_verify($this->password, $user->password)) 
            {
                auth()->login($user, $this->remember_me);
                return redirect()->intended('/dashboard'); 

            }else
            {
                return $this->addError('email', trans('auth.failed')); 
            }
        }
        else {
            
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
