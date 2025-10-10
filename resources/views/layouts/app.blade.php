{{-- this is the pages that has footer and header --}}

@props([
    'title' => '',
])

<x-base-layout :$title>
    <x-layouts.header />

    {{ $slot }}

</x-base-layout>