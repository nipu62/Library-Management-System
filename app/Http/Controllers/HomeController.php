<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Redirect, Input, Auth;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function postRegisterUser(Request $request)
    {
        $input = $request->all();

        $rules = array(
            'username' => 'required|unique:users',
            
            'email'=> 'required',
            'password' => 'required|confirmed'
            );
        
        $v = Validator::make($input, $rules);

        if($v->passes())
        {
            
                $password = $input['password'];
                $password = Hash::make($password);

                $user = new User();
                $user->username = $input['username'];
                $user->email = $input['email'];
                $user->password = $password;
                $user->type=1;
                if($user->save()){

                    return Redirect::to('/');
                }
            

        } else {

                return redirect()->back()->withInput()->withErrors($v);
        }
    }
    public function search(Request $request){
        $rules = [
            'searchWriter' => 'required',
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
                $searchWriter = $data['searchWriter'];
                $books = Book::orwhere('writer', 'Like', '%'.$searchWriter.'%')->orwhere('bookname', 'Like', '%'.$searchWriter.'%')->get();
                return view('searchResult')
            ->with('books', $books);;
        } 
    }

    public function postLoginUser(Request $request)
    {
        $input = $request->all();

        $rules = array('username' => 'required', 'password' => 'required');
        
        $v = Validator::make($input, $rules);

        if($v->fails())
        {

            return Redirect::to('loginUser')->withErrors($v);

        } else {

            $credentials = array('username' => $input['username'], 'password' => $input['password']);
            $user = User::where('username', $input['username'])->first();
            if(!empty($user)){
                
                if($user->type==0){
                    if(Auth::attempt($credentials))
                    {
                        return Redirect::to('adminHome');
                    } else {
                        return redirect()->back()->withInput()->withErrors($v);
                    }
                }

                else if($user->type==1){
                    if(Auth::attempt($credentials))
                    {
                        return Redirect::to('userHome');
                    } else {
                        return redirect()->back()->withInput()->withErrors($v);
                    }
                }
            }

            else
                return redirect()->back()->withInput()->withErrors($v);
        }
    }

    public function getViewPlace($id){
        $place = Place::findOrFail($id);
        return view('view')
                ->with('place', $place); 

    }

    public function getPublicBooks()
    {

        $books = Book::all();

        return view('books')
            ->with('books', $books);
    }

    public function create(){
        return view('recipes.create');
    }

    public function getRegister(){
        return view('register');
    }
    public function getLogin(){
        return view('login');
    }
    public function logoutUser()
    {
        Auth::logout();
        return Redirect::to('/');
    }


    

    
}
