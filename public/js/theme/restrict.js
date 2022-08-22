var loadingCustom = {
    content: '<div class="header">Please wait <span class="loader" style="float: right; margin-right: 10px !important; padding-top: 7px;"><div class="one"></div><div class="two"></div></span></div><div class="content-msg"> We are processing your request. This can take a few moments.</div>',
    title: 'Meal Application - NPCT1'
}

function authVerify(a, b) {
    let $this = $(a),
        $container = $(b),
        $verifyPointer = 0,
        $formSerialize = $this.serializeArray();
    $(':input[wajib=yes]:not(:image, submit, button)', $this).each(function() {
        if ($(this).val() == "" || $(this).val() == null || $(this).val() == null) {
            $verifyPointer++;
        }
    });
    if ($verifyPointer > 0) {
        bootbox.alert('Please fill in completely in the <b> Email and Password </b> column');
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: $this.attr('action'),
            data: $formSerialize,
            headers: {
                dataType: "json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                $container.attr('disabled', 'disabled');
                $container.html('Logging in ...');
            },
            complete: function() {
                $container.html('Authenticating ...');
            },
            success: function(data) {
                $container.html('Validating ...');
                if (data.status == 200) {
                    setTimeout(function() {
                        $container.html('Authenticated...');
                        location.href = data.redirect;
                    }, 2000);
                    return false;
                } else if (data.status == 404) {
                    let msgsNotice = '';
                    if (Array.isArray(data.error)) {
                        for (let msgsResponse in data.error) {
                            msgsNotice += '&bull; ' + data.error[msgsResponse][0] + ' <br>';
                        }
                    } else {
                        msgsNotice = data.error;
                    }
                    bootbox.alert(msgsNotice);
                    $container.html('Login');
                    $container.removeAttr('disabled');
                    setTimeout(function() {
                        location.reload(true);
                    }, 2000);
                    return false;
                }
            },
            error: function(data, status, e) {
                bootbox.alert(data);
                $container.html('Login')
                $container.removeAttr('disabled');
            }
        });
        return false;
    }
}