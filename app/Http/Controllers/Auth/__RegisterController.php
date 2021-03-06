<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Post;
use App\Phone;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $phones = Phone::where('sval1', $data['code'])->first();
      // dd($phones);

      if ($phones != null) {

        $user = User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => $data['password'],
        ])->assignRole([0 => "Writer"]);

        $phones = Phone::where('sval1', $data['code'])->first();
        Post::where('phone', $phones->phone)->update(['user_id' => $user->id]);
      } else {
        exit('Не верно введен код регистрации!!!');
      }

      return $user;
    }
}
// public function myregistr(Request $request, $id)
// {$flight = App\Flight::where('active', 1)->first();
//     if (! Gate::allows('phone_edit')) {
//         return abort(401);
//     }
//
//     $phone = Phone::findOrFail($id);
//
//     if ($request->input('smscode') == $phone->code) {
//
//         $phone->status = true;
//         $phone->update();
//
//         Vacancy::where('phone_temp', $phone->phone)
//                 ->update(['created_by_id' => $phone->created_by_id]);
//     }
//
//     return redirect()->route('admin.phones.index');
// }
