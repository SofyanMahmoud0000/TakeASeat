<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'username' => ['required','string','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', 'string',],
            'city' => ['required', 'string'],
            'address' => ['string','nullable'],
            'role' => ['required','string',Rule::in(['fan', 'manager'])],
        ]);
    }

    protected function create(array $data){
        return User::create($data);
    }

    public function register(Request $request)
    {
        if($validator = $this->validator($request()->all())->fails()){
            return $this->notRegistered($validator);
        }
        $user = $this->create($request->all());
        return $this->registered($request, $user);

    }

    protected function registered(Request $request, $user)
    {
        return response()->json([
            'message' => 'You must wait till the adminstator verify you'
        ],200);
    }

    protected function notRegistered($validator)
    {
        return response()->json([
            'message' => 'success'
        ],200);
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
