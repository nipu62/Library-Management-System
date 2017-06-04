@extends('layouts.app')

<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update</div>

                <div class="panel-body">
                   @include('layouts.alert')
                    {!! Form::model($book,[
                        'route' => ['putUserUpdatePlace',$book->_id],
                        'method' => 'put'
                      ]) 
                    !!}
                    <br>
                    {!! Form::text('bookname', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write The Name of the book', 
                        'required']
                        )
                    !!}
                    <br>
                        {!! Form::text('writer', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Writers Name', 
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

