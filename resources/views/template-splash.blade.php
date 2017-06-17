{{--
  Template Name: Splash Page
--}}

@extends('layouts.splash')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.splash-header')
    @include('partials.content-page')
  @endwhile
@endsection