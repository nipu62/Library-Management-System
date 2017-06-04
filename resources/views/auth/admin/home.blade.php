@extends('layouts.app')
<section id="portfolio" class="bg-light-gray">
	<div class="container">
	    <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Places</h2>
                
            </div>
	    </div>
        <div class="row">
        @include('layouts.alert')
        @foreach($divisions as $division)
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="{{route('places', $division->name)}}" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>{{$division->name}}</h4>
                    <p class="text-muted">{{$division->description}}</p>
                   
                </div>
            </div>
        @endforeach
           </div>
	</div>
</section>