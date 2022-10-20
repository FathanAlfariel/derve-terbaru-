@extends('layouts.main')
@section('content')
    
<div class="my-2">
    @include('homepage.carousel')
</div>

<div class="my-2 mx-12">
    @include('homepage.about_card')
</div>

<div class="mb-3 mx-0 md:mx-12">
    @include('homepage.card_restaurant')
</div>

@endsection
