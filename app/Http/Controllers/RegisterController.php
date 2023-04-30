<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller {
    public function index(RegisterRequest $request) {
        // dd(request()->all());

        // You can store the user in your DataBase or send an email or register the user with MailChimp
        // We'll include a MailChimp service very soon so you can register the user with it
        /* User::create([
            'email' => request('email')
        ]); */

        $data = [
            'result' => true,
            'message' => 'We sent you an email with a link to get started. You’ll be in your account in no time'
        ];

        return response()->json($data);
    }
}
