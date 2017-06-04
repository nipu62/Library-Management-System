@extends('layouts.app')
<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Recipes</h2>
                    <h3 class="section-subheading text-muted">Search by category</h3>
                </div>
            </div>
            <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$recipe->title}}</h4>
                        <p class="text-muted">{{$recipe->content}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
