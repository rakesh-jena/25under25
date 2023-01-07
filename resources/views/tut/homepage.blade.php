@extends('25under25')
@section('title', '25 UNDER 25')
@section('meta_keywords', 'YIF')
@section('meta_description', 'News on Indian Youth and Politics')

@section('content')
<section class="section tut-banner">
    <div class="">
        <img src="{{URL::asset('images/25under25/poster_2.jpg')}}" alt="banner">
    </div>
</section>
<section class="section tut-heading">
    <div class="container">
        <div class="af-title">
            <h1>
                FORBES INDIA 30 UNDER 30 2022: MEET INDIA'S YOUNG DISRUPTORS AND GAMECHANGERS
            </h1>
        </div>
        <div class="af-content">
            <div class="row">
                <div class="col-md-2">
                    <img width="150" src="{{URL::asset('images/25under25/30-under-20-img.png')}}" alt="25">
                </div>
                <div class="col-md-10">
                    <p class="desc">Disrupting an industry is not easy. Neither is making a name for yourself in a dynamic economy like India's. But achieving all that at a young age<span style="font-family:Arial !important;">—</span>under 30<span style="font-family:Arial !important;">—</span>is no mean feat. Our Class of 2022's entrepreneurs, professionals, designers, influencers, and sportspersons, represent the many Indias we live in, and epitomise that success can come from anyone<span style="font-family:Arial !important;">—</span>and anywhere<span style="font-family:Arial !important;">—</span>as long as they are empowered to shine</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section tut-art-wrap">
    <div class="container">
        <div class="art-box">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="art-img">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <img src="{{URL::asset('images/25under25/Neetu-Kirti.jpg')}}" alt="Neetu Kirti">
                            <span class="art-ttl">
                                Neetu Yadav, Kirti Jangra, 
                                <em>Animall</em>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="art-desc">
                        <div class="f-ttl">
                            BY THE NUMBERS
                        </div>
                        <div class="ttl-wrap">
                            <div class="y-ttl">
                                <span>₹2,800 crore+</span>
                            </div>
                            <div class="th-ttl">
                                FUNDS RAISED BY THE CLASS OF 2022
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="art-list">
            <div class="row">
                <div class="col-md-3 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                        <img src="{{URL::asset('images/25under25/V-Gokul.jpg')}}" alt="Rahul Jain">
                        <span class="ttl-name">
                            Rahul Jain, 
                            <em class="comp-name">
                                Sideways Consulting
                            </em>
                        </span>
                    </a>
                </div>
                <div class="col-md-3 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                        <img src="{{URL::asset('images/25under25/V-RahulJain.jpg')}}" alt="Rahul Jain">
                        <span class="ttl-name">
                            Rahul Jain, 
                            <em class="comp-name">
                                Sideways Consulting
                            </em>
                        </span>
                    </a>
                </div>
                <div class="col-md-3 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                        <img src="{{URL::asset('images/25under25/V-Rajan.jpg')}}" alt="Rahul Jain">
                        <span class="ttl-name">
                            Rahul Jain, 
                            <em class="comp-name">
                                Sideways Consulting
                            </em>
                        </span>
                    </a>
                </div>
                <div class="col-md-3 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                        <img src="{{URL::asset('images/25under25/V-Viraj.jpg')}}" alt="Rahul Jain">
                        <span class="ttl-name">
                            Rahul Jain, 
                            <em class="comp-name">
                                Sideways Consulting
                            </em>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section tut-art-wrap">
    <div class="container">

    </div>
</section>
@include('modal.profile')
@endsection