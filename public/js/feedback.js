$(document).ready(function ($) {
    window.phoneRegExp = /^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/gi;

    $('input[name=phone]').keyup(function () {
        unlockSendButton($(this));
    }).mask("+7(999)999-99-99",{completed:function(){
        unlockSendButton($(this));
    }});

    $('input[name=i_agree]').change(function () {
        unlockSendButton($(this));
    });

    $('form button[type=submit]').click(function(e) {
        e.preventDefault();

        var self = $(this),
            form = self.parents('form'),
            textarea = form.find('textarea'),
            select = form.find('select'),
            radio = form.find('input[type=radio]'),
            agree = form.find('input[type=checkbox]').is(':checked'),
            fields = {};

        if (!agree) return false;

        fields = processingFields(fields,form.find('input'));
        fields = processingFields(fields,select);
        fields = processingFields(fields,textarea);

        if (radio.length) {
            radio.each(function(){
                if($(this).is(':checked')) {
                    fields[$(this).attr('name')] = $(this).val();
                }
            });
        }

        fields['_token'] = form.find('input[name=_token]').val();
        fields['i_agree'] = agree;

        $('.error').html('');
        addLoaderScreen();

        $.post(form.attr('action'), fields)
            .done(function(data) {
                var messageModal = $('#message');
                messageModal.find('h3').html(data.message);
                messageModal.modal('show');
                form.trigger('reset');
                form.find('.btn-primary').attr('disabled','disabled');
                $('span.checked').removeClass('checked');
                removeLoaderScreen();
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                var responseMsg = jQuery.parseJSON(jqXHR.responseText);
                var replaceErr = {
                        'phone':'«Телефон»',
                        'email':'«E-mail»',
                        'name':'«Имя»',
                        'message':'«Сообщение»'
                    };
                $.each(responseMsg.errors, function (field, error) {
                    var errorMsg = error[0];
                    $.each(replaceErr, function (src,replace) {
                        errorMsg = errorMsg.replace(src,replace);
                    });
                    form.find('.error.'+field).html(errorMsg);
                });
                removeLoaderScreen();
            });
    });
});

function processingFields(fields, inputObj) {
    if (inputObj.length) {
        $.each(inputObj, function (key, obj) {
            fields[obj.name] = obj.value;
        });
    }
    return fields;
}


function unlockSendButton(obj) {
    var form = obj.parents('form'),
        button = form.find('button[type=submit]'),
        checkBox = form.find('input[name=i_agree]'),
        phoneInput = form.find('input[name=phone]');

    if (checkBox.is(':checked') && phoneInput.val().match(window.phoneRegExp)) button.removeAttr('disabled');
    else button.attr('disabled','disabled');
}