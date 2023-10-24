<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Course;
use App\Models\Department;
use App\Models\Semester;
use App\Models\CourseSession;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    public function login(){
       return redirect('/');
    }

    public function register(){
        return view('pages.auth.register');
     }

    public function user_registration(){
        return view('pages.auth.user_registration');
    }

    public function registration(){
        return view('pages.auth.registration');
    }
    
    public function add_student(Request $request){
        // return $request->input();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:15',
            'confirm_password' => 'required|same:password|min:5',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ]);

        $user_type = 'student';
        $status = 0;

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->user_type = $user_type;
        $user->status = $status;
        $query = $user->save();
        if($query){
            return back()->with('success','You have been Successfully Registered');
        }
        else{
            return back()->with('fail','Something went wrong!');
        }
    }

    public function user_login(Request $request){
        //  return $request->input();
        $request->validate([
           'email' => 'required|email',
           'password' => 'required|max:15',
        ]);
        
        $user = User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loggedUser', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','Invalid Password');
            }
        }
        else{
            return back()->with('fail','No account available for this email');
        }
    }

    public function home(){
    	return view('pages.dashboard');
    }


    // add teacher
    public function add_teacher(Request $request){
        // return $request->input();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:15',
            'confirm_password' => 'required|same:password|min:5',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ]);

        $user_type = 'teacher';
        $status = 0;

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->user_type = $user_type;
        $user->status = $status;
        $query = $user->save();
        if($query){
            return back()->with('success','You have been Successfully Registered');
        }
        else{
            return back()->with('fail','Something went wrong!');
        }
    }

    public function logout(Request $request){
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/');
        }
    }

    public function dashboard(){
        $data = ['loggedUserInfo'=>User::where('id', '=', session('loggedUser'))->first()];
        return view('pages.dashboard', $data);
    }
}