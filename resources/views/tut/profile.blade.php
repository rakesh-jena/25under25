@extends('25under25')
@section('title', '25 UNDER 25')
@section('meta_keywords', 'YIF')
@section('meta_description', 'News on Indian Youth and Politics')

@section('content')
<div class="leadspace"></div>
<div class="profile-page">
    <div class="container">
        <div class="profile-hero-wrapper">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="ph_wrap">
                        <div class="ph_heading">
                            <span class="ph_icon-title">PROFILE</span>
                        </div>
                        <div class="ph_name">
                            <h1>Eitan Bernath</h1>
                        </div>
                        <div class="ph_organisation">
                            Founder, Eitan Productions
                        </div>
                        <div class="ph_address">
                            New York, New York
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <img src="{{URL::asset('images/25under25/ethan.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="profile-info">
            <div class="heading">
                About Ethan Bennet
            </div>
            <div class="about">
                <p>
                    After appearing on the Food Network's "Chopped" at the age of 11 and "Guy's Grocery Games" with restaurateur Guy Fieri a few years later, Eitan Bernath realized his culinary passions extended beyond the kitchen. In 2015, he founded Eitan Productions, his own entertainment studio that develops, produces and distributes food and lifestyle content for more than 5 million social media followers. The 19 year old's content now reaches more than 300 million people in 150-plus countries.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection