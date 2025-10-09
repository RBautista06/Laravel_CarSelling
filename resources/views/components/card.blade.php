<div class="card">
    <div class="card-header">
        {{ $title }}
    </div>

    @if($slot->isEmpty())
        <p>Please Provide some Content</p>
    @else
        {{ $slot }}
    @endif

    <div class="card-footer">
        {{ $footer }}
    </div>
</div>