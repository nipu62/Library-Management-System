<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\Book;
use App\Suggestion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Redirect, Input, Auth;

class UserController extends Controller
{
    //
    public function getUserHome(){
    	$books=Book::all();
        return view('auth.user.home')->with('books', $books);
    }

    public function getViewPlace($id){
        $place = Place::findOrFail($id);
        return view('auth.user.view')
                ->with('place', $place); 

    }

    public function getUpdatePlace($id){
        $book = Book::findOrFail($id);
        return view('auth.user.update')
                ->with('book', $book);  

    }

    public function createSuggestion(){

    	return view('auth.user.suggest');
    }

    public function postSuggest(Request $request){
        $rules = [
            'bookname'   => 'required'
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $suggestion = new Suggestion();
            $suggestion->bookname = $data['bookname'];
            $suggestion->writer = $data['writer'];
            $suggestion->type='create';

            
            

            if($suggestion->save()){
                return redirect()->route('createSuggestion')
                    ->with('success', 'Your suggestion is recorded successfully');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to make suggestion!');
            }
        } 
    }

    public function putUserRequestBook(Request $request, $id){

        
            $suggestion = new Suggestion();
            $suggestion->book_id=$id;
            $book = Book::findOrFail($id);
            $suggestion->user_id=Auth::user()->_id;
            $suggestion->username=Auth::user()->username;
            $suggestion->bookname=$book->bookname;
            $suggestion->writer=$book->writer;
            
            $suggestion->type='issue';


            if($suggestion->save()){
                return redirect()->route('userHome')
                    ->with('success', 'Your suggestion is recorded successfully');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to make suggestion!');
            }
         
    }


    public function putUpdatePlace(Request $request, $id){


        $rules = [
            'bookname'  => 'required'
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $suggestion = new Suggestion();
            $suggestion->book_id=$id;
            $suggestion->bookname = $data['bookname'];
            $suggestion->writer = $data['writer'];
            $suggestion->type='update';

            if($suggestion->save()){
                return redirect()->route('userHome',$id)
                    ->with('success', 'Your request is sent');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to make request');
            }
        }
    }
}
