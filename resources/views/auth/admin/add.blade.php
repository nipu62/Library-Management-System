@extends('layouts.app')

<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a New Book</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    {!! Form::open([
                        'route' => 'store',
                        'method' => 'post'
                      ]) 
                    !!}
                    <br>
                    <label>Book Name</label>
                    {!! Form::text('bookname', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write The Name of the book', 
                        'required']
                        )
                    !!}
                    <br>

                    <label>Writers Name</label>
                         {!! Form::text('writer', null, [
                        'class' => 'form-control',  
                        'required']
                        )
                    !!}
                    <br>
                    <label>Number Of Books</label>
                         {!! Form::number('numberofbooks', null, [
                        'class' => 'form-control',  
                        'required']
                        )
                    !!}
                    <br>

                    {!! Form::submit('Submit', ['class'=>'form-control btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</section>