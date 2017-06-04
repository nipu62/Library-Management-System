@extends('layouts.app')

<section id="portfolio" class="bg-light-gray">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $place->title !!}</div>

                <div class="panel-body">
                    <a class="btn btn-xs btn-warning" href="{{route('userUpdatePlace', $place->id)}}">Edit</a>
                    @include('layouts.alert')

                        <h5>Location: {!! $place->division_name !!}</h5>
                        <h5>Time: {!! $place->time !!}</h5>
                        <h5>Cost: {!! $place->cost !!}</h5>
                        @if(!empty($place->description))
                        <h5>Why should you go?</h5>
                        <p>{!! $place->description !!}</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
</section>