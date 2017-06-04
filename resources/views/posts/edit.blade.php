@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Book Entry</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    {!! Form::model($post,[
                        'route' => ['update',$post->_id],
                        'method' => 'put'
                      ]) 
                    !!}
                    <br>
                    {!! Form::text('post', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write The Name of the book', 
                        'required']
                        )
                    !!}
                    <br>
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
@endsection
