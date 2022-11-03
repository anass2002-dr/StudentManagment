<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function homeManagment()
    {
        // if (session()->has('pasport')) {
        //     $email = session()->get('email');
        //     $password = session()->get('password');
        //     $data = DB::select('select * from managment_user where Email = ?', [$email]);
        //     if (count($data) > 0) {
        //         if ($data[0]->Password == $password) {
        //             return view('managment.homeManagment');
        //         } else {
        //             redirect()->route('home.login');
        //         }
        //     } else {
        //         redirect()->route('home.login');
        //     }
        // } else {
        //     redirect()->route('home.login');
        // }
        return view('managment.homeManagment');
    }
    public function homeTeacher()
    {

        return view('teacher.homeTeacher');
    }
    public function homeStudent()
    {
        return view('student.homeStudent');
    }
    public function homeAccountable()
    {
        return view('accountable.homeAccountable');
    }
    public function login()
    {
        return view('login');
    }
    public function login_post(Request $request)
    {
        session()->forget(['email', 'password']);
        session()->forget(['email_login', 'error_password']);
        session()->flush();
        $email = $request->input('email_login');
        $password = $request->input('password_login');
        $data = DB::select('select * from managment_user where email = ?', [$email]);
        if (count($data) == 0) {
            $data = DB::select('select * from Student_user where email = ?', [$email]);
            if (count($data) == 0) {
                $data = DB::select('select * from Teacher_user where email = ?', [$email]);
                if (count($data) == 0) {
                    //error
                    return redirect()->route('home.login')->with(['error_email' => 'email incorrect']);
                } else {
                    //teacher
                    if ($data[0]->Password == $password) {
                        session(['code' => $data[0]->T_code]);
                        session(['user' => 'teacher_user']);
                        if ($request->has('rember_check')) {

                            session(['email' => $data[0]->Email, 'password' => $data[0]->Password, 'passport' => 'ok']);
                        }
                        return redirect()->route('home.homeTeacher');
                    } else {
                        //error password
                        return redirect()->route('home.login')->with(['error_email' => 'Email incorrect']);
                    }
                }
            } else {
                //stuednt
                if ($data[0]->Password == $password) {
                    session(['code' => $data[0]->S_code]);
                    session(['user' => 'student_user']);
                    if ($request->has('rember_check')) {
                        session(['email' => $data[0]->Email, 'password' => $data[0]->Password, 'passport' => 'ok']);
                    }
                    return redirect()->route('home.homeStudent');
                } else {
                    //error password
                    return redirect()->route('home.login')->with(['error_password' => 'password incorrect', 'email_login' => $email]);
                }
            }
        } else {
            //managment
            if ($data[0]->Password == $password) {
                session(['code' => $data[0]->M_code]);
                session(['user' => 'managment_user']);
                if ($request->has('rember_check')) {
                    session(['email' => $data[0]->Email, 'password' => $data[0]->Password, 'passport' => 'ok']);
                }
                return redirect()->route('home.homeManagment');
            } else {
                //error password
                return redirect()->route('home.login')->with(['error_password' => 'password incorrect', 'email_login' => $email]);
            }
        }
    }

    public function registet_post(Request $request)
    {
    }
    public function register()
    {
        return view('register');
    }
    //students

    public function userStudent()
    {
        $data = DB::select('select * from student_user where S_code = ?', [session()->get('code')]);
        return view('student.userStudent', [
            'data' => $data[0],
        ]);
    }
    public function calendarStudent()
    {
        return view('student.calendarStudent');
    }

    public function gradesStudent()
    {
        return view('student.gradesStudent');
    }
    public function coursesStudent()
    {
        return view('student.coursesStudent');
    }
    public function get_courses()
    {
        return view('student.get_courses');
    }
    public function absenceStudent()
    {
        return view('student.absenceStudent');
    }
    public function helpStudent()
    {
        return view('student.helpStudent');
    }
    public function add_student(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $phone_number = $request->input('phone_number');
        $fax_number = $request->input('fax_number');
        $address = $request->input('address');
        $sex = null;
        if ($request->input('sex') == 'female') {
            $sex = 1;
        } else {
            $sex = 0;
        }
        $brith_place = $request->input('brith_place');
        $brith_date = $request->input('brith_date');
        $instutiation = $request->input('instutiation');
        $country_origine = $request->input('country_origine');
        $academy = $request->input('academy');
        $provinial_command = $request->input('provinial_command');
        $id_card = $request->input('id_card');
        $email = $request->input('email');
        $password = $request->input('password');
        $p_code = $request->input('p_code');
        $ldate = date('Y-m-d');
        DB::insert(
            'insert into student_user(First_name, Last_name, Phone_number, Fax_number, address, Sex, Birth_place, Birth_date, Institution, 
            Country_origin, Academy, Provincial_command, ID_card_S, Email, P_code, Password, Last_login) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $first_name, $last_name, $phone_number, $fax_number, $address, $sex, $brith_place, $brith_date, $instutiation,
                $country_origine, $academy, $provinial_command, $id_card, $email, $p_code, $password, $ldate
            ]
        );
        return redirect()->route('home.manageStudent')->with(['messege' => 'ajoute avec succes']);
    }
    public function changePass(Request $request)
    {
        $password = $request->input('old_pass');
        $new_pass = $request->input('new_pass');
        $user = session()->get('user');
        $code = session()->get('code');
        if ($user == "student_user") {
            $data = DB::select('select * from student_user where S_code = ?', [$code]);
            if ($data[0]->Password == $password) {
                DB::update('update student_user set Password = ? where S_code = ?', [$new_pass, $code]);
                return redirect()->route('home.userStudent')->with(['opertion' => 'Password changed successfully']);
            } else {
                return redirect()->route('home.userStudent')->with(['opertion' => 'The Old Password incorrect']);
            }
        } else if ($user === "teacher_user") {
            $data = DB::select('select * from teacher_user where T_code = ?', [$code]);
            if ($data[0]->Password == $password) {
                DB::update('update teacher_user set Password = ? where T_code = ?', [$new_pass, $code]);
                return redirect()->route('home.userTeacher')->with(['opertion' => 'Password changed successfully']);
            } else {
                return redirect()->route('home.userTeacher')->with(['opertion' => 'The Old Password incorrect']);
            }
        } else {
            $data = DB::select('select * from managment_user where M_code = ?', [$code]);
            if ($data[0]->Password == $password) {
                DB::update('update managment_user set Password = ? where M_code = ?', [$new_pass, $code]);
                return redirect()->route('home.userManagment')->with(['opertion' => 'Password changed successfully']);
            } else {
                return redirect()->route('home.userManagment')->with(['opertion' => 'The Old Password incorrect']);
            }
        }
    }
    //Teachers

    public function userTeacher()
    {
        $data = DB::select('select * from teacher_user where T_code = ?', [session()->get('code')]);
        return view('teacher.userTeacher', [
            'data' => $data[0],
        ]);
    }
    public function calendarTeacher()
    {
        return view('teacher.calendarTeacher');
    }

    public function gradesTeacher()
    {
        return view('teacher.gradesTeacher');
    }
    public function coursesTeacher()
    {
        return view('teacher.coursesTeacher');
    }
    public function absenceTeacher()
    {
        return view('teacher.absenceTeacher');
    }
    public function helpTeacher()
    {
        return view('teacher.helpTeacher');
    }
    public function createGrades()
    {
        return view('teacher.createGrades');
    }
    public function manageAbsencesStudent()
    {
        return view('teacher.manageAbsencesStudent');
    }

    public function add_teacher(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $phone_number = $request->input('phone_number');
        $fax_number = $request->input('fax_number');
        $address = $request->input('address');
        $sex = null;
        if ($request->input('sex') == 'female') {
            $sex = 1;
        } else {
            $sex = 0;
        }
        $brith_place = $request->input('brith_place');
        $brith_date = $request->input('brith_date');
        $instutiation = $request->input('instutiation');
        $country_origine = $request->input('country_origine');
        $academy = $request->input('academy');
        $provinial_command = $request->input('provinial_command');
        $id_card = $request->input('id_card');
        $email = $request->input('email');
        $password = $request->input('password');
        $ldate = date('Y-m-d');
        DB::insert(
            'insert into teacher_user(First_name, Last_name, Phone_number, Fax_number, address, Sex, Birth_place, Birth_date, Institution
            , Country_origin, Academy, Provincial_command, ID_card_T, Email, Password, Last_login) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $first_name, $last_name, $phone_number, $fax_number, $address, $sex, $brith_place, $brith_date, $instutiation,
                $country_origine, $academy, $provinial_command, $id_card, $email, $password, $ldate
            ]
        );
        return redirect()->route('home.manageStudent')->with(['messege' => 'ajoute avec succes']);
    }
    //managment
    public function userManagment()
    {
        return view('managment.userManagment');
    }
    public function manageStudent()
    {
        return view('managment.manageStudent');
    }
    public function manageTeacher()
    {
        return view('managment.manageTeacher');
    }
    public function calendarManagment()
    {
        return view('managment.calendarManagment');
    }

    public function gradesManagment()
    {
        return view('managment.gradesManagment');
    }
    public function coursesManagment()
    {
        return view('managment.coursesManagment');
    }
    public function absenceManagment()
    {
        return view('managment.absenceManagment');
    }
    public function helpManagment()
    {
        return view('managment.helpManagment');
    }
    public function manageAbsencesManagment()
    {
        return view('managment.manageAbsencesStudent');
    }
    public function manageClass()
    {
        return view('managment.manageClass');
    }
}
