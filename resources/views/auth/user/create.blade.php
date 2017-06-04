@extends('layouts.app')

<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Blog Post</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    {!! Form::open([
                        'route' => 'store',
                        'method' => 'post'
                      ]) 
                    !!}

                    {!! Form::textarea('post', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write a post', 
                        'required']
                        )
                    !!}

                    {!! Form::submit('Submit', ['class'=>'form-control btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
