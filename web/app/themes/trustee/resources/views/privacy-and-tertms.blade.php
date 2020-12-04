{{--
  Template Name: Privacy and Tertms
--}}

@extends('layouts.privacy-and-terms')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <p>Last updated: <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('d F, Y') }}</time></p>
    @include('partials.content-page')
  @endwhile
@endsection
