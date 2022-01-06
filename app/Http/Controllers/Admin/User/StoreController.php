<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); 
        $password = $data['password'];
        $data['password'] = Hash::make($data['password']);
        $data['email_verified_at'] =  date("Y-m-d H:i:s");  //  TODO: а надо ли?
        User::firstOrCreate(['email' => $data['email']], $data);
        Mail::to($data['email'])->send(new PasswordMail($password, $data['email'] ));
        //TODO: неплохо бы сделать отправку опциональной
        return redirect()->route('admin.user.index');
    }
}
