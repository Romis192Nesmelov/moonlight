<div id="{{ $id }}" class="modal fade {{ isset($addClass) && $addClass ? $addClass : '' }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                @if (isset($title) && $title)
                    <h1>{!! $title !!}</h1>
                @endif
            </div>
            <!-- Основное содержимое модального окна -->
            @if (isset($message))
                <div class="modal-body">
                    <h2>{{ $message }}</h2>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        @include('_button_block', ['type' => 'button', 'text' => trans('content.close'), 'addAttr' => ['data-dismiss' => 'modal']])
                    </div>
                </div>
            @else
                {!! $content !!}
            @endif
        </div>
    </div>
</div>