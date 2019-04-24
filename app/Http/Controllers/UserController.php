<?php
/**
 * Created by PhpStorm.
 * User: WON
 * Date: 4/16/2019
 * Time: 9:39 PM
 */
namespace App\Http\Controllers;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use DateTime;

class UserController extends Controller{

    public function landing_page(){
        return view('landing');
    }
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $pass=md5($password);
        try{
            $users=DB::table('user')->where('email',$email)->where('password',$pass)->get();
            if(count($users)){
                Session::put('useremail', $users[0]->email);
                Session::put('username', $users[0]->username);
                Session::save();
                echo "success"; exit;
            }else{
                echo 'failed'; exit;
            }
        }catch (\Exception $exception){
            echo 'error'; exit;
        }
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:user|max:255',
            'email' => 'required|unique:user|max:255',
            'password'=>'required|max:255',
        ]);
        if($validator->fails()){
            echo 'failed';
            exit;
        }
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $pass = md5($password);
        $data['username'] = $username;
        $data['email'] = $email;
        $data['password'] = $pass;
        $data['join_date'] = date('Y-m-d H:i:s');
        try{
            DB::table('user')->insert($data);
            echo 'success';
            exit;
        }catch (\Exception $exception){
            echo 'error';
            exit;
        }

    }
}