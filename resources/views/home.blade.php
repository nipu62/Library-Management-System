
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    <a class="btn btn-success pull-right" href="{!! route('create') !!}">Create</a>
                    <ol>
                    @foreach($posts as $post)
                        <li>
                        <h4>{!! $post->username !!}</h4>
                        <span>{!! $post->created_at !!}</span>
                        @if($post->user_id == Auth::user()->_id)
                            <a class="btn btn-xs btn-warning" href="{!! route('edit', $post->_id) !!}">Edit</a>

                            <a class="btn btn-xs btn-danger" href="{!! route('delete', $post->_id) !!}">Delete</a>

                        @endif
                        <p>{!! $post->post !!}</p>
                        </li>
                    @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
