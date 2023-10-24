<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller{
    public function index(){
        return view('pages.auth.login');
    }
    
    public function register(){
        return view('pages.register');
    }
    
    public function user_registration(){
        return view('pages.user_registration');
    }

    public function registration(){
        return view('pages.registration');
    }

    // public function logout(){
    //     return view('pages.logout');
    // }
    
    public function add_semester(){
        return view('admin.add_semester');
    } 
    
    
    public function add_session(){
        return view('admin.add_session');
    }
    public function course(){
        return view('admin.course');
    } 

    public function add_course(){
        return view('admin.add_course');
    }

    public function add_department(){
        return view('admin.add_department');
    }
    
    public function active_status(){
        return view('admin.active_status');
    }
    
    public function deactive_status(){
        return view('admin.deactive_status');
    }
    
    public function delete_course(){
        return view('admin.delete_course');
    }
    
    public function delete_semester(){
        return view('admin.delete_semester');
    } 
    
    public function delete_session(){
        return view('admin.delete_session');
    }
    
    public function delete_student(){
        return view('admin.delete_student');
    } 
    
    public function delete_users(){
        return view('admin.delete_users');
    }  
    public function edit_course(){
        return view('admin.edit_course');
    } 
    
    public function edit_semester(){
        return view('admin.edit_semester');
    }  
    
    public function edit_session(){
        return view('admin.edit_session');
    } 

    public function manage_course(){
        return view('admin.manage_course');
    } 
    public function manage_users(){
        return view('admin.manage_users');
    } 
    public function semester(){
        return view('admin.semester');
    } 
    public function session(){
        return view('admin.session');
    } 




    public function all_question(){
        return view('teacher.all_question');
    } 
    public function assignment(){
        return view('teacher.assignment');
    } 
    public function delete_question(){
        return view('teacher.delete_question');
    } 
    public function edit_question(){
        return view('teacher.edit_question');
    } 



    public function enrollment(){
        return view('student.enrollment');
    } 
    public function question(){
        return view('student.question');
    } 
    public function view_course(){
        return view('student.view_course');
    } 
    public function view_enrolled_course(){
        return view('student.view_enrolled_course');
    } 



}