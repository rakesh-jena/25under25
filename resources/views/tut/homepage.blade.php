@extends('25under25')
@section('title', '25 UNDER 25')
@section('meta_keywords', 'YIF')
@section('meta_description', 'News on Indian Youth and Politics')

<?php use App\Http\Controllers\TutController;
use App\Models\Profile;
?>
@section('content')
<section class="section tut-banner">
    <div class="main-banner">
        <img src="{{URL::asset('images/25U25 HERO BG - L .png')}}" alt="banner">
        <div class="logo-tut">
            <img src="{{URL::asset('images/25U25-W1.png')}}" alt="logo">
        </div>
        <div class="banner-text">
            <img src="{{URL::asset('images/IMAGE-TEXT.png')}}" alt="text">
        </div>
    </div>
    <div class="mobile-banner">
        <img src="{{URL::asset('images/25U25 HERO BG - P.png')}}" alt="banner">
        <div class="logo-tut">
            <img src="{{URL::asset('images/25U25-W1.png')}}" alt="logo">
        </div>
        <div class="banner-text">
            <img src="{{URL::asset('images/IMAGE-TEXT.png')}}" alt="text">
        </div>
    </div>    
</section>
<section class="section tut-heading">
    <div class="container">
        <div class="af-title">
            <h1>
                {{TutController::get_meta('featured_title')}}
            </h1>
        </div>
        <div class="af-content">
            <div class="row">
                <div class="col-md-2">
                    <img width="150" src="{{URL::asset('images/25under25/30-under-20-img.png')}}" alt="25">
                </div>
                <div class="col-md-10">
                    <p class="desc">{{TutController::get_meta('featured_content')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section One -->
<section class="section tut-art-wrap">
    <div class="container">
        <div class="art-box">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="art-img">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <?php $profile = Profile::where('id', TutController::get_meta('banner_one'))->first();?>
                            <img src="https://news.youngindia.foundation/images/{{$profile->image_banner}}" alt="{{$profile->name}}">
                            <span class="art-ttl">
                                {{$profile->name}}, 
                                <em>{{$profile->organization}}</em>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="art-desc">
                        <div class="f-ttl f-ttl-right">
                            BY THE NUMBERS
                        </div>
                        <div class="ttl-wrap">
                            <div class="y-ttl y-ttl-right">
                                <span>{{TutController::get_meta('title_one')}}</span>
                            </div>
                            <div class="th-ttl th-ttl-right">
                                {{TutController::get_meta('subtitle_one')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="art-list">
            <div class="row">
                <?php $ids = unserialize(TutController::get_meta('list_one'));?>
                @foreach($ids as $id)
                <?php $profile = Profile::where('id', (int)$id)->first();?>
                
                <div class="col-md-3 col-6">
                    <a href="{{url('profile/'.$profile->slug)}}" data-bs-toggle="modal" data-bs-target="#profileModal" data-id="{{$profile->id}}">
                        <img src="" alt="{{$profile->name}}">
                        <span class="ttl-name">
                            {{$profile->name}}, 
                            <em class="comp-name">
                                {{$profile->organization}}
                            </em>
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Section Two -->
<section class="section tut-art-wrap">
    <div class="container">
        <div class="art-box">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="art-desc">
                        <div class="f-ttl f-ttl-left">
                            BY THE NUMBERS
                        </div>
                        <div class="ttl-wrap">
                            <div class="y-ttl y-ttl-left">
                                <span>{{TutController::get_meta('title_two')}}</span>
                            </div>
                            <div class="th-ttl th-ttl-left">
                                {{TutController::get_meta('subtitle_two')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="art-img">
                        <?php $profile = Profile::where('id', TutController::get_meta('banner_two'))->first();?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <img src="https://news.youngindia.foundation/images/{{$profile->image_banner}}" alt="{{$profile->name}}">
                            <span class="art-ttl">
                                {{$profile->name}}, 
                                <em>{{$profile->organization}}</em>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="art-list">
            <div class="row">
                <?php $ids = unserialize(TutController::get_meta('list_two'));?>
                @foreach($ids as $id)
                <?php $profile = Profile::where('id', (int)$id)->first();?>
                
                <div class="col-md-3 col-6">
                    <a href="{{url('profile/'.$profile->slug)}}" data-bs-toggle="modal" data-bs-target="#profileModal" data-id="{{$profile->id}}">
                        <img src="" alt="{{$profile->name}}">
                        <span class="ttl-name">
                            {{$profile->name}}, 
                            <em class="comp-name">
                                {{$profile->organization}}
                            </em>
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Section Three -->
<section class="section tut-art-wrap">
    <div class="container">
        <div class="art-box">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="art-img">
                        <?php $profile = Profile::where('id', TutController::get_meta('banner_three'))->first();?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <img src="https://news.youngindia.foundation/images/{{$profile->image_banner}}" alt="{{$profile->name}}">
                            <span class="art-ttl">
                                {{$profile->name}}, 
                                <em>{{$profile->organization}}</em>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="art-desc">
                        <div class="f-ttl f-ttl-right">
                            BY THE NUMBERS
                        </div>
                        <div class="ttl-wrap">
                            <div class="y-ttl y-ttl-right">
                                <span>{{TutController::get_meta('title_three')}}</span>
                            </div>
                            <div class="th-ttl th-ttl-right">
                                {{TutController::get_meta('subtitle_three')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="art-list">
            <div class="row">
                <?php $ids = unserialize(TutController::get_meta('list_three'));?>
                @foreach($ids as $id)
                <?php $profile = Profile::where('id', (int)$id)->first();?>
                
                <div class="col-md-3 col-6">
                    <a href="{{url('profile/'.$profile->slug)}}" data-bs-toggle="modal" data-bs-target="#profileModal" data-id="{{$profile->id}}">
                        <img src="" alt="{{$profile->name}}">
                        <span class="ttl-name">
                            {{$profile->name}}, 
                            <em class="comp-name">
                                {{$profile->organization}}
                            </em>
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Section Four -->
<section class="section tut-art-wrap">
    <div class="container">
        <div class="art-box">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="art-desc">
                        <div class="f-ttl f-ttl-left">
                            BY THE NUMBERS
                        </div>
                        <div class="ttl-wrap">
                            <div class="y-ttl y-ttl-left">
                                <span>{{TutController::get_meta('title_four')}}</span>
                            </div>
                            <div class="th-ttl th-ttl-left">
                                {{TutController::get_meta('subtitle_four')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="art-img">
                        <?php $profile = Profile::where('id', TutController::get_meta('banner_four'))->first();?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <img src="https://news.youngindia.foundation/images/{{$profile->image_banner}}" alt="{{$profile->name}}">
                            <span class="art-ttl">
                                {{$profile->name}}, 
                                <em>{{$profile->organization}}</em>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="art-list">
            <div class="row">
                <?php $ids = unserialize(TutController::get_meta('list_four'));?>
                @foreach($ids as $id)
                <?php $profile = Profile::where('id', (int)$id)->first();?>
                
                <div class="col-md-3 col-6">
                    <a href="{{url('profile/'.$profile->slug)}}" data-bs-toggle="modal" data-bs-target="#profileModal" data-id="{{$profile->id}}">
                        <img src="" alt="{{$profile->name}}">
                        <span class="ttl-name">
                            {{$profile->name}}, 
                            <em class="comp-name">
                                {{$profile->organization}}
                            </em>
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Section Five -->
<section class="section tut-art-wrap">
    <div class="container">
        <div class="art-box">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="art-img">
                        <?php $profile = Profile::where('id', TutController::get_meta('banner_five'))->first();?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <img src="https://news.youngindia.foundation/images/{{$profile->image_banner}}" alt="{{$profile->name}}">
                            <span class="art-ttl">
                                {{$profile->name}}, 
                                <em>{{$profile->organization}}</em>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="art-desc">
                        <div class="f-ttl f-ttl-right">
                            BY THE NUMBERS
                        </div>
                        <div class="ttl-wrap">
                            <div class="y-ttl y-ttl-right">
                                <span>{{TutController::get_meta('title_five')}}</span>
                            </div>
                            <div class="th-ttl th-ttl-right">
                                {{TutController::get_meta('subtitle_five')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="art-list">
            <div class="row">
                <?php $ids = unserialize(TutController::get_meta('list_five'));?>
                @foreach($ids as $id)
                <?php $profile = Profile::where('id', (int)$id)->first();?>
                
                <div class="col-md-3 col-6">
                    <a href="{{url('profile/'.$profile->slug)}}" data-bs-toggle="modal" data-bs-target="#profileModal" data-id="{{$profile->id}}">
                        <img src="" alt="{{$profile->name}}">
                        <span class="ttl-name">
                            {{$profile->name}}, 
                            <em class="comp-name">
                                {{$profile->organization}}
                            </em>
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@include('modal.profile')
@endsection