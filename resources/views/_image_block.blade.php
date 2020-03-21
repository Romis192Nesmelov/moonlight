<div class="image-container">
    <div class="image-cell">
        <div class="image">
            <a href="{{ asset($image) }}" class="img-preview"><img src="{{ asset($image) }}" /></a>
        </div>
    </div>
    <div class="image-subscribe">
        <p>{!! $subscribe !!}</p>
        <p class="record">Запись на индивидуальную консультацию</p>
        @include('_feedback_block')
    </div>
</div>