<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\Book;
use App\Suggestion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Redirect, Input, Auth;

class AdminController extends Controller
{
    //

    public function getAdminHome(){

        $books = Book::all();
        //home e jawar kotha, places e dilam, for trial
        return view('auth.admin.books')->with('books',$books) ;
    }

    public function getAdminPlaces($name){
    	
    	$places = Place::where('division_name', $name)->get();
    	return view('auth.admin.places')->with('places', $places);
    }

    public function getRequests(){
        
        $createRequests = Suggestion::where('type', 'create')->get();
        $updateRequests = Suggestion::where('type', 'update')->get();
        
        return view('auth.admin.requests')->with('createRequests',$createRequests)->with('updateRequests',$updateRequests);
    }
    public function getIssueRequest(){
        
        $issueRequests = Suggestion::where('type', 'issue')->get();
        
        return view('auth.admin.issue')->with('issueRequests',$issueRequests);
    }
    public function store(Request $request){
        $rules = [
            'bookname'   => 'required',
            'writer' => 'required',
            'numberofbooks' => 'required'
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $post = new Book();
            $post->username = Auth::user()->name;
            $post->user_id = Auth::user()->_id;
            $post->bookname = $data['bookname'];
            $post->writer = $data['writer'];
            $post->numberofbooks = $data['numberofbooks'];
            if($post->save()){
                return redirect()->route('adminHome')
                    ->with('success', 'posted successfully');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to post!');
            }
        } 
    }

    public function getAddPlace(){
        return view('auth.admin.add');
    }

    public function getUpdatePlace($id){
        $place = Place::findOrFail($id);
        return view('auth.admin.update')
                ->with('place', $place);  

    }

    public function getViewPlace($id){
        $place = Place::findOrFail($id);
        return view('auth.admin.view')
                ->with('place', $place); 

    }
        public function edit($id){
        $book = Book::findOrFail($id);
        return view('auth.admin.edit')
                ->with('book', $book);    
    }

    public function update(Request $request, $id){
        $rules = [
            'bookname'   => 'required',
            'writer' => 'required',
            'numberofbooks' => 'required'
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $post = Book::findOrFail($id);
            $post->bookname = $data['bookname'];
            $post->writer = $data['writer'];
            $post->numberofbooks = $data['numberofbooks'];

            if($post->save()){
                return redirect()->route('adminHome')
                    ->with('success', 'posted updated successfully');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to update post!');
            }
        }
    }

    public function delete($id){
        $post = Book::findOrFail($id);
        
        if($post->delete()){
            return redirect()->route('adminHome')
                ->with('error', 'posted deleted successfully');
        }else{
            return redirect()->back()
                ->withInput()
                ->with('error', 'failed to delete post!');
        }
    }

    public function putIgnore( $id){
        
        $suggestion = Suggestion::findOrFail($id);
        
        if($suggestion->delete()){
            return redirect()->route('requests')
                ->with('error', 'request deleted successfully');
        }else{
            return redirect()->back()
                ->withInput()
                ->with('error', 'failed to delete request!');
        }
    

    }

public function putAdminIssueBook( $id){
        $suggestion = Suggestion::findOrFail($id);
        $book_id=$suggestion->book_id;
        $book=Book::findOrFail($book_id);

        $book->numberofbooks= $book->numberofbooks-1; 

        if($book->save()){
            if($suggestion->delete()){
            return redirect()->route('requests');
        }else{
            return redirect()->back();
        }
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to update place!');
            }
        

    }
    public function putApprove( $id){
        $suggestion = Suggestion::findOrFail($id);
        $book_id=$suggestion->book_id;
        $book=Book::findOrFail($book_id);

        $book->bookname=$suggestion->bookname;
        $book->writer=$suggestion->writer;

        if($book->save()){
            if($suggestion->delete()){
            return redirect()->route('requests');
        }else{
            return redirect()->back();
        }
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to update place!');
            }
        

    }
    public function putSuggestion( $id){
        $suggestion = Suggestion::findOrFail($id);
        
            if($suggestion->delete()){
            return redirect()->route('addPlace');
        }else{
            return redirect()->back();
        }
            
        

    }




    public function putUpdatePlace(Request $request, $id){
        $rules = [
            'title'   => 'required',
            'division_name'   => 'required',
            'time'   => 'required',
            'cost'   => 'required'
        ];

        $data = $request->all();

        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $place = Place::findOrFail($id);
            $place->title = $data['title'];
            $place->division_name = $data['division_name'];
            $place->time = $data['time'];
            $place->cost = $data['cost'];
            $place->description = $data['description'];

            if($place->save()){
                return redirect()->route('viewPlace',$id)
                    ->with('success', 'post updated successfully');
            }else{
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'failed to update post!');
            }
        }
    }
    public function deletePlace($id){
        $place = Place::findOrFail($id);
        
        if($place->delete()){
            return redirect()->route('adminHome')
                ->with('error', 'place deleted successfully');
        }else{
            return redirect()->back()
                ->withInput()
                ->with('error', 'failed to delete place!');
        }
    }



}
