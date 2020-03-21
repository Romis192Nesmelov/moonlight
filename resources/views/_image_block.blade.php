<div class="image-container">
    <div class="image-cell">
        <div class="image">
            <a href="{{ asset($image) }}" class="img-preview"><img src="{{ asset($image) }}" /></a>
        </div>
    </div>
    @if (isset($subscribe) && $subscribe)
        <div class="image-subscribe">{!! $subscribe !!}</div>
    @endif
</div>