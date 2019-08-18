<?php

namespace App\Http\Controllers\Auth;

use App\Participant;
use App\Supporter;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/';

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
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8','max:30'],
            'phone' => ['required', 'numeric', 'digits_between:10,20','unique:users'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function validate_participant($data)
    {

        $val=Validator::make($data, [
            'type'=>['required','boolean'],
            'arabic_first_name'=>['required','max:20','string'],
            'arabic_second_name'=>['required','max:20','string'],
            'arabic_last_name'=>['required','max:20','string'],
            'english_first_name'=>['required','max:20','string'],
            'english_second_name'=>['required','max:20','string'],
            'english_last_name'=>['required','max:20','string'],
            'birth_day'=>['required','integer','lte:31','gte:1'],
            'birth_month'=>['required','integer','lte:12','gte:1'],
            'birth_year'=>['required','integer','lte:2003','gte:1949'],
            'gender'=>['required','boolean'],
            'status'=>['required','boolean'],
            'state'=>['required','integer','lte:27','gte:1'],
            'city'=>['required','max:50','string'],
            'degree'=>['required','integer','lte:5','gte:1'],
            'job'=>['required','max:100','string'],
        ]);
        return $val;
    }
    protected function validate_supporter($data)
    {

        $val=Validator::make($data, [
            'type'=>['required','integer','lte:10','gte:1'],
            'name'=>['required','max:100','string','unique:supporters'],
            'state'=>['required','integer','lte:27','gte:1'],
            'city'=>['required','max:50','string'],
        ]);
        return $val;
    }

    protected function store_participant($id,$data){


        $participant=new Participant;
        $participant->user_id=$id;
        $participant->type=$data['type'];
        $participant->arabic_first_name=$data['arabic_first_name'];
        $participant->arabic_second_name=$data['arabic_second_name'];
        $participant->arabic_last_name=$data['arabic_last_name'];

        $participant->english_first_name=$data['english_first_name'];
        $participant->english_second_name=$data['english_second_name'];
        $participant->english_last_name=$data['english_last_name'];

        $participant->birth_day=$data['birth_day'];
        $participant->birth_month=$data['birth_month'];
        $participant->birth_year=$data['birth_year'];

        $participant->gender=$data['gender'];
        $participant->status=$data['status'];
        $participant->state=$data['state'];

        $participant->city=$data['city'];
        $participant->degree=$data['degree'];
        $participant->job=$data['job'];
        $participant->save();
        return $participant;
    }
    protected function store_supporter($id,$data){


        $supporter=new Supporter();
        $supporter->user_id=$id;
        $supporter->type=$data['type'];
        $supporter->name=$data['name'];


        $supporter->state=$data['state'];

        $supporter->city=$data['city'];

        $supporter->save();
        return $supporter;
    }
    protected function create(array $data)
    {
        $user=User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
        ]);
        $user->participant=$this->store_participant($user->id,$data);
        return $user;
    }
    protected function creat_join(array $data)
    {
        $user= User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],

        ]);

        $user->supporter=$this->store_supporter($user->id,$data);
        return $user;
    }

}
