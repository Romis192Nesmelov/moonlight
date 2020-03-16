<form class="form-horizontal" enctype="multipart/form-data" action="{{ url('/feedback') }}" method="post">
    {{ csrf_field() }}
    @include('_input_block',[
        'min' => 3,
        'placeholder' => trans('content.your_name'),
        'type' => 'text',
        'name' => 'name'
    ])

    @include('_input_block',[
        'placeholder' => trans('content.your_email'),
        'type' => 'email',
        'name' => 'email'
    ])

    @include('_input_block',[
        'min' => 3,
        'placeholder' => '+7(___)___-__-__',
        'type' => 'text',
        'name' => 'phone'
    ])

    @include('_agree_block')
    @include('_button_block', ['disabled' => true, 'type' => 'submit', 'icon' => 'icon-megaphone', 'text' => trans('content.send')])
</form>