@extends('layouts.main')

@section('title', 'Fumetto')

@section('main')
<div class="blue-bar">
    <figure>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </figure>
</div>
<section id="comic-detail">

</section>

@endsection