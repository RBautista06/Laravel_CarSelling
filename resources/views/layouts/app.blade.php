@extends('layouts.clean')
{{-- this extends clean layout --}}
    @section('childContent')
        {{-- insert the header component --}}
        @include('layouts.partials.header')
            {{-- main content will be rendered here --}}
            @yield('content')
        {{-- insert the footer component --}}
        @include('layouts.partials.footer')
    @endsection
