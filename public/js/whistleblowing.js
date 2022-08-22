$(function(){
    $('#em').hide();
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    $('#fileupload').fileupload({
        dataType: 'json',
        formData: [{
            name: 'X-CSRF-TOKEN',
            value: "{{ csrf_token() }}"
        }],
        add: function (e, data) {
            $('#loading').text('Uploading...');
            data.submit();
        },
        done: function (e, data) {
            $('#files').val(data.result.files);
            // $('#files').val(data.result.path);
            $('#loading').text('');
            $('#uploaded').show();
        }
    });
    $('#fileupload2').fileupload({
        dataType: 'json',
        formData: [{
            name: 'X-CSRF-TOKEN',
            value: "{{ csrf_token() }}"
        }],
        add: function (e, data) {
            $('#loading').text('Uploading...');
            data.submit();
        },
        done: function (e, data) {
            $('#files').val(data.result.files);
            // $('#files').val(data.result.path);
            $('#loading2').text('');
            $('#uploaded2').show();
        }
    });
    $('#myModal').modalSteps({
        callbacks: {
            '1' : function(){
                $('#btnNext').show();
                console.log('1');
                
            } 
        },
        completeCallback:function() {
            var tName       = $('#tName').val();
            var tEmail      = $('#tEmail').val();
            var tPhone      = $('#tPhone').val();
            var tCompany    = $('#tCompany').val();
            var tCategory   = $("input[type=radio][name=options]:checked").val();
            var tChronology = $('#tChronology').val();
            var tFile = $('#files').val();
    
            if($("input[type=radio][name=options]:checked").val() == 'Gratification'){
                    var tName       = $('#tName').val();
                    var tPhone      = $('#tPhone').val();
                    var tEmail      = $('#tEmail').val();
                    var tCompany    = $('#tCompany').val();
                    var tChronology = $('#tChronology').val();
                    var tCategory   = $("input[type='radio'][name='options']:checked").val();
                    var gDate       = $('#gDate').val();
                    var gEmployee   = $('#gEmployee').val();
                    var gRecSend    = $('#gRecSend').val();
                    var gRecName    = $('#gRecName').val();
                    var gSendName   = $('#gSendName').val();
                    var gRecComp    = $('#gRecComp').val();
                    var gSendComp   = $('#gSendComp').val();
                    var gRecAddr    = $('#gRecAddr').val();
                    var gSendAddr   = $('#gSendAddr').val();
                    var gRecEmp     = $('#gRecEmp').val();
                    var gSendEmp    = $('#gSendEmp').val();
                    var gRecDep     = $('#gRecDep').val();
                    var gSendDep    = $('#gSendDep').val();
                    var gSendPos    = $('#gSendPos').val();
                    var gRecPos     = $('#gRecPos').val();
                    var gType       = $('#gType').val()    ;
                    var gTime       = $('#gTime').val();
                    var gLoc        = $('#gLoc').val();
                    var gEst        = $('#gEst').val();
                    var gDesc       = $('#gDesc').val();
                    var tFile = $('#files').val();
    
                    $.ajax({
                    url: '/emailWhistle',
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        tName,
                        tPhone,
                        tEmail,
                        tCompany,
                        tChronology,
                        tCategory,
                        gDate,
                        gEmployee,
                        gRecSend,
                        gRecName,
                        gSendName,
                        gRecComp,
                        gSendComp,
                        gRecAddr,
                        gSendAddr,
                        gRecEmp,
                        gSendEmp,
                        gRecDep,
                        gSendDep,
                        gSendPos,
                        gRecPos ,
                        gType,
                        gTime,
                        gLoc,
                        gEst,
                        gDesc,
                        filename : tFile,
                        'g-recaptcha-response': $('#g-recaptcha-response').val()
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        console.log('asd');
                    }
                });                
            }else{
                $.ajax({
                    url: '/emailWhistle',
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: tName,
                        email: tEmail,
                        phone: tPhone,
                        company: tCompany,
                        category : tCategory,
                        chronology: tChronology,
                        filename: tFile,
                        'g-recaptcha-response': $('#g-recaptcha-response').val()
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        console.log('asd');
                    }
                });
            }
            onSuccess();
        }
    });
    $('.type-progress-example').each(function() {
        $(this).typeProgress();
    });
})

function inputData(event){
    var email = $('#tEmail').val();
    if(!validateEmail(email)) {
        alert('Please input Valid Email !');
         $('#btnNext').hide();
        return false;
    } 
    $('.lName').text($('#tName').val());
    $('.lPhone').text($('#tPhone').val());
    $('.lEmail').text($('#tEmail').val());
    $('.lCompany').text($('#tCompany').val());
    $('.lChronology').text($('#tChronology').val());
    $('.lCategory').text($("input[type='radio'][name='options']:checked").val());
    $('#lName').text($('#tName').val());
    $('#lPhone').text($('#tPhone').val());
    $('#lEmail').text($('#tEmail').val());
    $('#lCompany').text($('#tCompany').val());
    $('#lChronology').text($('#tChronology').val());
    $('#lCategory').text($("input[type='radio'][name='options']:checked").val());
    $('.gDate').text($('#gDate').val());
    $('.gEmployee').text($('#gEmployee').val());
    $('.gRecSend').text($('#gRecSend').val());
    $('.gRecName').text($('#gRecName').val());
    $('.gSendName').text($('#gSendName').val());
    $('.gRecComp').text($('#gRecComp').val());
    $('.gSendComp').text($('#gSendComp').val());
    $('.gRecAddr').text($('#gRecAddr').val());
    $('.gSendAddr').text($('#gSendAddr').val());
    $('.gRecEmp').text($('#gRecEmp').val());
    $('.gSendEmp').text($('#gSendEmp').val());
    $('.gRecDep').text($('#gRecDep').val());
    $('.gSendDep').text($('#gSendDep').val());
    $('.gSendPos').text($('#gSendPos').val());
    $('.gRecPos').text($('#gRecPos').val());
    $('.gType').text($('#gType').val());    
    $('.gTime').text($('#gTime').val());
    $('.gLoc').text($('#gLoc').val());
    $('.gEst').text($('#gEst').val());
    $('.gDesc').text($('#gDesc').val());
    
    if($('#tName').val().trim() == '' ||  $('#tPhone').val().trim() == '' || $('#tCompany').val().trim() == '' ){
        alert('Please Check The Input form');
        $('#btnNext').hide();
        event.preventDefault();
        return false;
    }

    console.log($("input[type='radio'][name='options']:checked").val());
    if($("input[type='radio'][name='options']:checked").val() == 'Gratification'){
        $('.not-gratification').hide();
        $('.gratification').show();
        $('#steps').attr('data-title', 'Gratification');
        
    }else{
        $('.not-gratification').show();
        $('.gratification').hide();
        $('#steps').attr('data-title', 'Attachment');
    }
    
    return false;
}

function onSuccess(){
    swal.fire(
        'Thank you!',
        'Thank you, We will notify you after review your report',
        'success'
        ).then((result) => {

        });
};

function onWarning(){
    swal.fire(
        'error!',
        'Please Correct Your Captcha',
        'warning'
        ).then((result) => {

        });
};

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
var callback1 = function (){
    var email = $('#tEmail').val();
    if(!validateEmail(email)){
        alert('Please input Valid Email !'); 
        $('#btnNext').hide();
        return false;
    }
    $('#lName').text($('#tName').val());
    $('#lPhone').text($('#tPhone').val());
    $('#lEmail').text($('#tEmail').val());
    $('#lCompany').text($('#tCompany').val());
    $('#lChronology').text($('#tChronology').val());
    $('#lCategory').text($("input[type='radio'][name='options']:checked").val());
    if($('#tName').val().trim() == '' ||  $('#tPhone').val().trim() == '' || $('#tCompany').val().trim() == '' ){
        /*alert('Please Check The Input form');*/
        
    }else{
        
    }
};
var callback5 = function (){
    console.log(2)
};
var callback2 = function (){
    console.log(2)
};
var callback3 = function (){
    console.log(2)
};
var callback4 = function (){
    console.log(2)
};

function cekN(){
    if($('#tName').val() != '' || $('#tPhone').val() != '' || $('#tEmail').val() != '' || $('#tCompany').val() != ''){
        if($('#tEmail').val() != ''){
            if(validateEmail($('#tEmail').val())){
                $('#em').hide();
                $('#btnNext').removeAttr('disabled');
            }else{
                $('#em').show();
                $('#btnNext').attr('disabled', 'true')
            }
        }
    }
}