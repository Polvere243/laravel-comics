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
                <div class="flex padding">
                    <h4 class="light-green" >U.S. Price: <span class="white">$19.99</span></h4>
                    <h4 class="light-green" >AVAILABLE</h4>
                </div>
                <div class="border white padding">
                    <h4>Check Availability<i class="fas fa-sort-down"></i></h4>
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
    <div class="tables">
        <h3></h3>
        <table>
            <tr>
                <td>Art by:</td>
                <td>
                    @foreach($comic['artists'] as $artist)
                    <span>{{$artist}},</span>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Written by:</td>
                <td>
                @foreach($comic['writers'] as $writer)
                    <span>{{$writer}},</span>
                    @endforeach
                </td>
            </tr>
        </table>

        <h3></h3>
        <table>
            <tr>
                <td>Series</td>
                <td>{{$comic['series']}}</td>
            </tr>
            <tr>
                <td>U.S. Price:</td>
                <td>{{$comic['price']}}</td>
            </tr>
            <tr>
                <td>On Sale Date:</td>
                <td>{{$comic['sale_date']}}</td>
            </tr>
        </table>

    </div>
</section>

@endsection