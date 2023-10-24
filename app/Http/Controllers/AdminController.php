<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use App\Models\Semester;
use App\Models\CourseSession;
use App\Models\ManageCourse;
use App\Models\EnrolledCourse;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function course(){
    	$courses = Course::all();
    	return view('admin.course', compact('courses'));
    }

    public function insert_course(Request $request){
        $obj = new Course();
        $obj->course_name = $request->course_name;
        $obj->course_code = $request->course_code;
        if($obj->save()){
            echo 'Successfully Inserted';
            return redirect('course');
       }
    } 

    public function edit_course($id){
        $course=Course::findorfail($id);
        return view('admin.edit_course', compact('course'));
    } 

    public function update_course(Request $request,$id){
        $course=Course::findorfail($id);
        $course->course_name=$request->course_name;
        $course->course_code=$request->course_code;
        $course->save();
        if($course){
            return redirect('course');
        }else{
            echo 'Data not updated';
        }
    }

    public function delete_course($id){
        $delete=DB::table('courses')->where('id',$id)->delete();
        if($delete) {
            echo 'Successfully Deleted';
            return redirect('course');
        }else{
           echo 'Something went wrong !';
        }
    }

    public function insert_department(Request $request){
        $obj = new Department();
        $obj->department = $request->department;
        $obj->short_name = $request->short_name;
        $obj->code = $request->code;

        if($obj->save()){
            echo 'Successfully Inserted';
            return redirect('add_department');
       }
    }

    public function semester(){
    	$semester = Semester::all();
    	return view('admin.semester', compact('semester'));
    }

    public function insert_semester(Request $request){
        $semester = new Semester();
        $semester->semester = $request->semester;

        if($semester->save()){
            echo 'Successfully Inserted';
            return redirect('semester');
       }
    }

    public function edit_semester($id){
        $semester=Semester::findorfail($id);
        return view('admin.edit_semester', compact('semester'));
    } 

    public function update_semester(Request $request,$id){
        $semester=Semester::findorfail($id);
        $semester->semester = $request->semester;
        $semester->save();
        if($semester){
            return redirect('semester');
        }else{
            echo 'Data not updated';
        }
    }

    public function delete_semester($id){
        $delete=DB::table('semesters')->where('id',$id)->delete();
        if($delete) {
            echo 'Successfully Deleted';
            return redirect('semester');
        }else{
           echo 'Something went wrong !';
        }
    }

    public function session(){
    	$course_session = CourseSession::all();
    	return view('admin.session', compact('course_session'));
    }

    public function create_session(Request $request){
        $obj = new CourseSession();
        $obj->session = $request->session;

        if($obj->save()){
            echo 'Successfully Inserted';
            return redirect('session');
       }
    }

    public function edit_session($id){
        $course_session=CourseSession::findorfail($id);
        return view('admin.edit_session', compact('course_session'));
    } 

    public function update_session(Request $request,$id){
        $course_session=CourseSession::findorfail($id);
        $course_session->session = $request->session;
        $course_session->save();
        if($course_session){
            return redirect('session');
        }else{
            echo 'Data not updated';
        }
    }

    public function delete_session($id){
        $delete=DB::table('course_sessions')->where('id',$id)->delete();
        if($delete) {
            echo 'Successfully Deleted';
            return redirect('session');
        }else{
           echo 'Something went wrong !';
        }
    }

    public function manage_course(){
        $course_session = CourseSession::all();
        $courses = Course::all();
        $user = DB::table('users')->where('user_type','teacher')->get();
        return view('admin.manage_course', compact('course_session','courses','user'));
    }

    public function assign_course(Request $request){
        $manage_course = new ManageCourse();
        $manage_course->session_id = $request->session_id;
        $manage_course->course_id = $request->course_id;
        $manage_course->teacher_id = $request->teacher_id;

        if($manage_course->save()){
            echo 'Successfully Inserted';
            return redirect('dashboard');
       }
    }

    public function manage_users(){
    	$manage_users = User::all();
    	return view('admin.manage_users', compact('manage_users'));
    }

    public function edit_user($id){
        $user=User::findorfail($id);
        return view('admin.edit_user', compact('user'));
    } 

    public function update_user(Request $request,$id){
        $user=User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->save();
        if($user){
            return redirect('manage_users');
        }else{
            echo 'Data not updated';
        }
    }

    public function delete_user($id){
        $delete=DB::table('users')->where('id',$id)->delete();
        if($delete) {
            echo 'Successfully Deleted';
            return redirect('manage_users');
        }else{
           echo 'Something went wrong !';
        }
    }

    function changeStatus($id){
        $user = DB::table('users')
                    ->select('status')
                    ->where('id','=',$id)
                    ->first();

        //Check user status
        if($user->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update status
        $values = array('status' => $status );
        DB::table('users')->where('id',$id)->update($values);
        // session()->flash('msg','User status has been updated successfully.');
        return redirect('manage_users');
    }

    public function enrollment(){
        // $user = DB::table('users')->where('user_type','student')->where('id','$id')->get();
        $user = DB::table('users')->where('user_type','student')->first();
        $session = CourseSession::all();
        $department = Department::all();
        $semester = Semester::all();
        $courses = Course::all();
    
        return view('student.enrollment', compact('user','session','department','semester','courses'));
    }

    public function course_enrollment(Request $request,$id){
        $engrollment=EnrolledCourse::findorfail($id);
        $engrollment->student_name = $request->student_name;
        $engrollment->student_id = $request->student_id;
        $engrollment->session = $request->session;
        $engrollment->department = $request->department;
        $engrollment->semester = $request->semester;
        $engrollment->course = $request->course;
        $engrollment->save();
        if($engrollment){
            return redirect('view_enrolled_course');
        }else{
            echo 'Data not updated';
        }
    }
    

    // public function add_assignment(Request $request){
    //     $assignment = new Group();
    //     for($i=0; $i<count($assignment->question); $i++){
    //         $assignment->group_name = $request->group_name;
    //         $assignment->question = $request->question[$i];
        
    //         if ($assignment->group_name && $assignment->question[$i] != '') {
    //             if($assignment->save()){
    //                 echo 'Successfully Inserted';
    //                 return redirect('assignment');
    //             }
    //         }
    //     }
    // }

     public function add_assignment(Request $request){
        $group_name =  $request->input('group_name');
        $question =  $request->input('question', []);

        $questions = [];
        foreach($question as $key => $val){
            $questions[] = [
                "group_name" => $group_name[$key],
                "question" => $question[$key],
            ];
        }

        $created = Group::insert($questions);

        if($created){
            return redirect("assignment")->withSuccess('Created successfully!');
        }else{
           return "Group not Created";
        }
        
        // if($assignment){
        //     echo 'Successfully Inserted';
        //     return redirect('assignment');
        // }
    }

    // public function home(Request $request){
    //     $email = $request->email;
    //     $password =$request->password;
    //     $users=DB::table('users')
    //         ->where('email', $email)
    //         ->where('password', $password)
    //         ->first();
        
    //     if ($users){
    //         $email = $users->email;
    //         $user_type = $users->user_type;
    //         Session::put('email',$email);
    //         Session::put('user_type',$user_type);
    //         return redirect("home");
    //     } else{
    //         return redirect('/');
    //     }
    // }

}