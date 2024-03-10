@extends('layouts.main')

@section('title', 'Fumetto')

@section('main')
<div class="blue-bar">
    <figure>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </figure>
</div>
<section id="comic-detail">
    <div class="detail-card">
        <div class="info">
            <h2>{{ $comic['title'] }}</h2>
            <div class="comic-info">
                <div>
                    <h4>U.S. Price: $19,99</h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div>
                    <h4>Chack Availability<i class="fas fa-sort-down"></i></h4>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="adv">
            <h5>ADVERTISEMENT</h5>
            <figure>
                <img class="adv-picture" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </figure>
        </div>
        
    </div>
</section>

@endsection