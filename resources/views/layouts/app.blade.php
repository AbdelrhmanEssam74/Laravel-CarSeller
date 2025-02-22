@extends('layouts.clean')

@section('childContent')
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
@endsection
