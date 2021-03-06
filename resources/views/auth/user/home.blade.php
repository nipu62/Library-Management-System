@extends('layouts.app')

<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book List</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    {!! Form::open([
                        'route' => 'search',
                        'method' => 'post'
                      ]) 
                    !!}
                    <br>
                    <label>Search For a Writer and Book</label>
                    {!! Form::text('searchWriter', null, [
                        'class' => 'form-control',                           
                        'required']
                        )
                    !!}
                    
                    {!! Form::submit('Search', ['width' => '20%','class'=>'form-control btn-success pull-center']) !!}

                    {!! Form::close() !!}
                </div>
                <div class="panel-body">
                    <table>
                      <tr>
                        <th>Book Name</th>
                        <th>Writer</th>
                        <th>Number of Books</th>
                      </tr>

                    <ol>
                    @foreach($books as $book)
                    <tr>
                        <td max-width="1px"> {!! $book->bookname !!}</td>
                        <td> {!! $book->writer!!}</td>
                        <td>{!! $book->numberofbooks !!}</td>
                                                    <td>
                            <a class="btn btn-xs btn-warning" href="{!! route('userUpdatePlace', $book->_id) !!}">Update</a>
                            <td>
                            <a class="btn btn-xs btn-warning" href="{!! route('putUserRequestBook', $book->_id) !!}">Issue</a> </td>

                        </td>

                    </tr>

                  
                    @endforeach
                    </ol>
 
            </table>

                </div>
            </div>
        </div>
    </div>
</div>
</section>