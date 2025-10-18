{{-- this is the pages that has footer and header --}}

@props([
    'title' => '',
    'bodyClass' => null,
])

<x-base-layout :$title :$bodyClass>
    <x-layouts.header />

    {{ $slot }}

</x-base-layout>