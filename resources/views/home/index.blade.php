<h1>
    index blade
</h1>


@foreach ($hobbies as $hobby )
    @foreach ($hobbies as $hobby )
        {{$loop->depth}}
        {{$loop->parent->depth}}
    @endforeach
@endforeach