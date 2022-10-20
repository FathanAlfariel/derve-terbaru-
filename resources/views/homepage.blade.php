@extends('layouts.main')
@section('content')
    
<div class="my-2">
    @include('homepage.carousel')
</div>

<div class="mb-3 mx-0 md:mx-9">
    @include('homepage.card_restaurant')
</div>

@endsection
