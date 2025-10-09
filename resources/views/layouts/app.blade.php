@extends('layouts.clean')
{{-- this extends clean layout --}}
    @section('childContent')
        {{-- insert the header component --}}
        @include('layouts.partials.header')
            {{-- main content will be rendered here --}}
            @yield('content')
        {{-- this will check if there is a footerLinks passed --}}
        @hasSection('footerLinks')
            <footer>
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
            </footer>
        @endif
    @endsection
