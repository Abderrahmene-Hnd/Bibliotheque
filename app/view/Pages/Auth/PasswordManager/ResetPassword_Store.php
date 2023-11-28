<?php

namespace App\view\Pages\Auth\PasswordManager;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPassword_Store extends Component
{
    public function mount()
    {
        request()->validate([
            'email' => ['required', 'email'], /*,Rule::exists('users','email')*/
            'password' => ['required','string','min:5','confirmed'],
            'password_confirmation' => ['required']
        ]);
        $password_update=DB::table('password_reset_tokens')->where([
            'email'=>request()->email,
            'token'=>request()->token
        ])->first();
        if(!$password_update)
        {
            return redirect('/reset-password');
        }
        User::where('email',request()->email)->update(["password" => Hash::make(request()->password)]);

        DB::table('password_reset_tokens')->where([
            'email'=>request()->email])->delete();
    }
    public function render()
    {
        return view('pages.auth.login');
    }
}
