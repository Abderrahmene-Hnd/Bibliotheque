<?php

namespace App\view\Pages\Auth\PasswordManager;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ForgetPassword_Store extends Component
{
    public function mount(Request $request)
    {
        $request->validate([
            'email'=>['required','email']
        ]);
        $token=str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email'=> $request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);
        Mail::send('emails.reset-password',['token' => $token], function($message) use($request) {
            $message->to($request->email);
            $message->subject("reset password");
        });
        //PasswordResetTokensTable::create([$attributes]);
    }
    public function render()
    {
        return view('pages.auth.PasswordManager.forget-password')->with('success','We have sent a email to reset the password');
    }
}
