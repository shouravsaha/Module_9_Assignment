@extends('layout.index')
@section('content')
<!-- top-area Start -->
@include('layout.navbar')
<!-- top-area End -->

<!--welcome-hero start -->
@include('layout.hero')
<!--welcome-hero end -->

<!--about start -->
@include('layout.about')
<!--about end -->

<!--education start -->
@include('layout.education')
<!--education end -->

<!--skills start -->
@include('layout.skill')
<!--skills end -->

<!--experience start -->
@include('layout.experience')
<!--experience end -->

<!--profiles start -->
@include('layout.profile')
<!--profiles end -->

<!--portfolio start -->
@include('layout.portfolio')
<!--portfolio end -->

<!--clients start -->
@include('layout.client')
<!--clients end -->

<!--contact start -->
@include('layout.contact')
<!--contact end -->
@endsection
