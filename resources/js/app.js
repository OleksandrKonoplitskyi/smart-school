$(document).ready(function () {
    init();

});

function init() {

    var $body = $('body');

    $body.on('click', '.show_pass_block', function () {
        var $this = $(this),
            inputPass = $this.closest('.password_block').find('.validate_pass');
        $this.toggleClass('showing');
        if ($this.hasClass('showing')) {
            inputPass.attr('type', 'text');
        } else {
            inputPass.attr('type', 'password');
        }
    });


    $body.on('click', '.card_item', function () {
        var $this = $(this);

        if($this.hasClass('active')) {
            $this.removeClass('active');
        } else {
            $('.card_item').removeClass('active');
            $this.addClass('active');
        }
    });

    // $body.on('click', '.schedule_task_icon', function () {
    //     $(this).toggleClass('completed');
    // });



    $body.on('click', '.timeline_desc li', function () {
        $(this).toggleClass('task_completed');
    });

    function validate_form(){
        var validate_form = $('body').find('.validate_form');
        validate_form.each(function () {
            var $this = $(this),
                $validate = $this.find('.validate'),
                $validateEmail = $this.find('.validate_email'),
                $validateTel = $this.find('.validate_tel'),
                $validatePass = $this.find('.validate_pass'),
                $validatePassConfirm = $this.find('.validate_pass_confirm'),
                $validateCaptcha = $this.find('.validate_captcha'),
                $validateCap = $this.find('.validate_cap'),
                $validateSelect = $this.find('.validate_select'),
                checkEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/,
                checkTel = /[0-9 -()+]+$/;


            $this.on('submit', function () {

                $this.find('button').attr('disabled',true);
                setTimeout(function(){
                    $this.find('button').attr('disabled',false);
                },1000);

                var error = '',
                    passValue = $validatePass.val(),
                    passConfirmValue = $validatePassConfirm.val();
                $validate.each(function () {
                    var value = $(this).val();
                    checking(value.length === 0, $(this));
                });
                $validateEmail.each(function () {
                    var value = $(this).val();
                    checking(checkEmail.test(value) === false, $(this));
                });
                $validateTel.each(function () {
                    var value = $(this).val();
                    checking(value.length < 7 || (!checkTel.test(value)), $(this));
                });
                $validatePass.each(function () {
                    checking(passValue === '' || passValue.length <= 6, $(this));
                });
                $validatePassConfirm.each(function () {
                    checking(passValue != passConfirmValue || passValue === '', $(this));
                });
                $validateCaptcha.each(function () {
                    var value = $(this).val();
                    checking(value != arrayCaptcha[randCaptcha], $(this));
                });
                var $FCN = $('header').data('id');
                $validateCap.each(function () {
                    var value = $(this).val();
                    checking(value != $FCN, $(this));
                });
                $validateSelect.each(function () {
                    var value = $(this).find('option:selected').val();
                    checking(value == '', $(this));
                });

                function checking(check, $this) {

                    if (check) {
                        error++;
                        $this.addClass('validate_error');
                    } else {
                        $this.removeClass('validate_error');
                    }
                }
                if (error) {
                    toast('error', 'Incorrect values');
                    return false;
                }
            });
        });
    }
    validate_form();

}

function toast(cssClass, toastText) {
    var $this = $('#toast'),
        tl = new TimelineMax();
    $this.attr('class', false);
    $this.addClass(cssClass);
    $this.find('#toast_text').html(toastText);
    if (!$this.hasClass('active')) {
        tl.fromTo($this, 0.3, {display: 'none', y: '100%', autoAlpha: 0}, {
            display: 'block',
            y: '0%',
            autoAlpha: 1,
            ease: Back.easeOut
        }).to($this, 0.3, {
            display: 'none',
            y: '100%',
            autoAlpha: 0,
            ease: Back.easeIn,
            delay: 3,
            onComplete: function () {
                $this.removeClass('active');
            }
        });
    }
    $this.addClass('active');
}
