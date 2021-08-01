@extends('layouts.home')

@section('content')

    {{-- about --}}
    @include('includes.about')

    {{-- skill --}}
    @include('includes.skill')

    @include('includes.portfolio')

    @include('includes.certificate')

    @include('includes.education')

    @include('includes.interest')



@endsection