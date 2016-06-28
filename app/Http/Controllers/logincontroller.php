<?php

namespace App\Http\Controllers;

use Hash;
use DB;
use input;
use App\User;
use Validator;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class logincontroller extends Controller
{
    
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    

  public function login(){
        // return 'Auth Login Panel';
        return view('project.login');
                   // ->with('title', 'Login');
    }

/**********************  Login System *********************/    
    
    public function doLogin(Request $request)
    {
        $rules = array
        (
                    'email'    => 'required',
                    'password' => 'required'
        );

        $allInput = $request->all();
        $validation = Validator::make($allInput, $rules);

        // dd($allInput);


        if ($validation->fails())
        {

            return redirect()->route('login')
                        ->withInput()
                        ->withErrors($validation);
        } else
        {

            $credentials = array
            (
                        'email'    => $allInput['email'],
                        'password' => $allInput['password']
            );
            // return $credentials;
            if (Auth::attempt($credentials))
            {
                // return User::all();
                // return Auth::check();
                return redirect()->route('loggedhome');
            } else
            {
                return redirect()->route('login')
                            ->withInput()
                            ->withErrors('Error in Email Address or Password.');
            }
        }
        return 'Do Login Executes';
    }
    
    
    

    public function logout(){
        Auth::logout();
        return redirect()->route('login')
                    ->with('success',"You are successfully logged out.");
        // return 'Logout Panel';
    }


 /************************** Register System ***************************/

  
   public function getRegister(){

         return view('project.register');
   }


   public function postRegister(Request $request){

  

  // if($request->hasFile('image')){
    
// $image = $request->file('image');
  // $imagename = "ssssss".'.'.$image->getClientOriginalExtension();

  // Image::make($image)->resize(1200, 600)
   //->save(public_path($imagename));

   //$image->move(base_path().'/public/users_image/', 
     //   $imagename );


   // $image = $request->file('image');
//    $fullImage = '/users_image/image-' . rand(229,18166) . strtotime(date('Y-m-d H:i:s')) . '.' . $image->getClientOriginalExtension();
 //  $imagename = "users_image/ssssss".'.'.$image->getClientOriginalExtension();

  //  Image::make($image)->resize(1200, 600)->save(public_path($imagename));

   
  // }
  // else{

  //   return "fgfg";
  // }

     DB::table('users')->insert([

    
     'name'            => $request['firstname'] ,
     'email'           => $request['email'] ,
     'password'        => Hash::make($request['password']) ,
     'school_name'     =>  $request['lastname'] ,
     //'img_link'        => $request[''] ,
     'img_link'        => "-------"  ,
     'birth_of_date'   => "-------"  ,
     'current_status'  => "-------"  ,
     'contact_no'      => "-------"  ,
     'fb_link'         => "-------"  ,
     'joining_date'    => "-------"  ,

        ]);


     
       return view('project.home');
   }

}
