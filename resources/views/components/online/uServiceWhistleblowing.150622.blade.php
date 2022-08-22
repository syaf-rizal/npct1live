@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')


<!--<meta name="csrf-token" content="{{ csrf_token() }}">-->

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Whistleblowing</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> Online Service</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="schedule sha-je" style="margin-top: -10px !important;">
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;">
        <div class="row">
            <div class="col-md-12">
                <nav>

                </nav>
                <div class="tab-content" id="nav-tabContent1">

                    <div class="tab-pane fade show active" id="tarif" role="tabpanel" aria-labelledby="tarif-tab">

                            <h1>Background</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                        As a world class terminal, NPCT1 believes that business must not only be conducted according to the highest standards of economic efficiency but to the highest ethical standards as well.  These standards for business practices reflect the Compnay’s long-term commitment to building our business that is successful, honest, responsible and fully compliant in which all its employees and stakeholders can take pride.
                                    </p>
                                </div>
                            </div>

                            <h1>Definition</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                        A person (employee, contractor, vendor, client or other relevant stakeholder) reporting wrong-doing, illegal, or unethical activity that can harm an organisation.Whistle Blowing is covered in the Company’s Code of Conduct which is embedded in the NPCT1 Company Regulation.
                                    </p>
                                </div>
                            </div>

                            <h1>Purpose</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                        This Whistle Blowing Channel is designed to provide an opportunity for all employees as well as other relevant stakeholders to be able to submit confidential reports on indications of suspected violation of applicable business and moral ethical values, based on reliable and well informed evidence.
                                    </p>
                                    <p>
                                        It is important to note that through this channel, employees or stakeholders will be given protection both in terms of identity, confidentiality or the possibility of any detrimental consequences by the reported party.
                                    </p>
                                    <p>
                                    <b>
                                        Please note that this Whistle Blowing Channel is only to serve non-commercial reports or complaints.
                                        You may report only if your report fit under the following criteria:
                                    </b>
                                    </p>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul>
                                        <li>Violation of company’s policies and regulations</li>
                                        <li>Power and Sexual Harassments</li>
                                        <li>Fraud</li>
                                        <li>Bribe</li>
                                        <li>Profiteering</li>
                                        <li>Misappropriation of Funds</li>
                                        <li>Extortion</li>
                                        <li>Intimidation</li>
                                        <li>Conflict of interest</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <h1>Report Submission</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                    You may submit your report by filling in the report form or via email to:
                                        <u><a href="mailto:whistleblowing@npct1.co.id" stlye="color:#FCB040;">Whistleblowing@npct1.co.id</a></u>
                                    </p>
                                    <p>
                                    Should you choose to submit your reporting via email, please provide the following information:
                                    </p>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul>
                                        <li>Details of the case</li>
                                        <li>When and Where it happened</li>
                                        <li>Evidence such as documents, photo, audio & video recording (In case evidence is not available please describe the case as detailed as possible in chronological order)</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button
                                    data-toggle="modal" data-target="#myModal"
                                    class="btn btn-wide-right btn-middle-mt-30 semi-bold" style="margin-top: 30px !important; float: left !important;"
                                   onclick=""> Submit Report</button>
                                </div>
                            </div>

                        <div style="height: 30px;">&nbsp;</div>
                        <div class="row" id="result-tarrif">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="js-title-step"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
    <div class="row hide" data-step="1" data-title="Reporter Information">
        <div class="jumbotron">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Name / Nama <b>(Optional)</b></label>
                <input  id="tName" type="text" name="paid" class="form-control  form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Email / Alamat Surel *</label>
                <input  id="tEmail" type="email" name="paid" class="form-control form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Phone / Nomor Telephone *</label>
                <input  id="tPhone" type="text" name="paid" class="form-control  form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Company / Perusahaan *</label>
                <input  id="tCompany" type="text" name="paid" class="form-control form-control-wide">
            </div>
        </div>
    </div>
    <!--
validasi form biodata done
file maximum report 5mb & file type, pdf, jpeg, jpg, png, mp4 done
1000 character done
confirmasi apakah yakin mengirimkan ?
baru sukses terkirim
    -->
    <div class="row hide" data-step="2" data-title="I Would Like to Report">
        <div class="jumbotron">
            <div class="form-group">
            <label class="etd-paidthrough color-blue">Please Choose One of this List:
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Violation of company’s policies and regulations"/>
            <span>A</span><span>Violation of company’s policies and regulations</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Power and Sexual Harassments"/>
            <span>B</span><span>Power and Sexual Harassments</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Fraud"/>
            <span>C</span><span>Fraud</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Bribe"/>
            <span>D</span><span>Bribe</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Profiteering"/>
            <span>E</span><span>Profiteering</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Misappropriation of Funds"/>
            <span>F</span><span>Misappropriation of Funds</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Extortion"/>
            <span>G</span><span>Extortion</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Intimidation"/>
            <span>H</span><span>Intimidation</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Conflict of Interest"/>
            <span>I</span><span>Conflict of Interest</span>
            </label>

            </div>
        </div>
    </div>
    <div class="row hide" data-step="3" data-title="Attachment">
        <div class="jumbotron">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Brief Chronology of Event:
                    <br/>
                <i>*When/Where/Party Involved</i>
                            </label>
            </div>

            <textarea class="form-control  type-progress-example" id="tChronology" maxlength="1000" style="min-height: 150px;">
            </textarea>
            <div align="right">
                <i>Max Length 1000 character</i>
            </div>
            <br/>
            <br/>
            <input type="file"  id="fileupload" name="photos[]" data-url="/upload" multiple=""/>
            <a href="# " id="uploaded" style="display:none;">file  uploaded</a>
            <p id="loading"></p>
            <label><i>*if you have evidence please submit upload file with file type (pdf, jpeg, jpg, png, mp4, wav, mp3)</i></label>
            <label><i>*maximum type 5MB</i></label>
    </div>

    </div>
    <div class="row hide" data-step="4" data-title="Summary">
        <div class="jumbotron">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Are you sure the data below is correct ?</label>
            </div>
            <div class="form-group">
                <table>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Name</label>
                        </td>
                        <td>
                            <label id="lName">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Email </label></td>
                        <td>
                            <label id="lEmail">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Phone</label></td>
                        <td>
                            <label id="lPhone">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Company</label></td>
                        <td>
                        <label id="lCompany">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Category</label></td>
                        <td>
                        <label id="lCategory">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Chronology</label></td>
                        <td>
                        <label id="lChronology"></label>
                        </td>
                    </tr>

                    <input type="hidden" id="files" />
                </table>
                <br/>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </div>

        </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default js-btn-step pull-left" data-orientation="cancel" data-dismiss="modal"></button>
    <button type="button" class="btn btn-warning js-btn-step" data-orientation="previous"></button>
    <button type="button" onclick="inputData(event); " id="btnNext"  class="btn btn-success js-btn-step" data-orientation="next"></button>
      </div>
    </div>
  </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$( document ).ready(function() {

});

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
</script>
<style>
.swal2-container {
  z-index: 10000000000;
}
</style>

<script>
function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
    function inputData(event){
        var email = $('#tEmail').val();
        if(!validateEmail(email)){
            alert('Please input Valid Email');
            $('#btnNext').hide();
            return false;
        }

        $('#lName').text($('#tName').val());
        $('#lPhone').text($('#tPhone').val());
        $('#lEmail').text($('#tEmail').val());
        $('#lCompany').text($('#tCompany').val());
        $('#lChronology').text($('#tChronology').val());
        $('#lCategory').text($("input[type='radio'][name='options']:checked").val());



        if($('#tPhone').val().trim() == '' || $('#tCompany').val().trim() == '' ){
            alert('Please Check The Input form');
            $('#btnNext').hide();
            return false;
        }
    }

</script>


<!--
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
<script src="https://www.jqueryscript.net/demo/Wizard-Modal-Bootstrap-jQuery/dist/modal-steps.min.js"></script>


<!-- <script src="/js/fileupload/vendor/jquery.ui.widget.js"></script> !-->
<script src="/js/fileupload/jquery.iframe-transport.js"></script>
<script src="/js/fileupload/jquery.fileupload.js"></script>


<script>
    $(function () {
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
                $('#loading').text('');
                $('#uploaded').show();
            }
        });
    });
</script>

<script>
  $('#myModal').modalSteps({
    callbacks: {

    '1' : function(){
        $('#btnNext').show();
        console.log('1');
    }


    },
    completeCallback:function() {
        var capcha = $('#g-recaptcha-response').val();
		if(capcha == ''){
			onWarning();
			 setTimeout(
				function()
				{
					location.reload();
				},
			3000);
			return false;
		}
        var tName       = $('#tName').val();
        var tEmail      = $('#tEmail').val();
        var tPhone      = $('#tPhone').val();
        var tCompany    = $('#tCompany').val();
        var tCategory   = $("input[type=radio][name=options]:checked").val();
        var tChronology = $('#tChronology').val();
        var tFile = $('#files').val();


        $.ajax({
            url: '/emailWhistle',
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                name: tName,
                email: tEmail,
                phone: tPhone,
                company: tCompany,
                category : tCategory,
                chronology: tChronology,
                filename: tFile,
                'g-recaptcha-response': grecaptcha.getResponse()
            },
            dataType: 'JSON',
            success: function (data) {
                console.log('asd');
            }
        });
        /*alert("Thank you, We will notify you after review your report");*/
        onSuccess();
        setTimeout(
        function()
        {
            location.reload();
        }, 3000);

    }
  });
</script>

<script>
(function ( $ ) {

$.fn.typeProgress = function() {

  var maxLength = this.attr('maxlength');
  if(maxLength == undefined)
  {
    console.log('Error attribute maxlength');
    return;
  }

  var currentNode = this;
  var parentNode = this.parent();

  parentNode.append('<div class="type-progress-container"><div class="type-progress" style="width: 0%"></div></div>');

  var progressContainer = parentNode.find('.type-progress-container');
  var progress = progressContainer.find('.type-progress');

  this.on('keyup focus', function(){
    var currentLength = currentNode.val().length;
    var percent = currentLength * 100 / maxLength;

    progress.css('width', percent+'%');
  });

  this.on('focus', function(){
    progressContainer.addClass('focus');
  });

  this.on('blur', function(){
    progressContainer.removeClass('focus');
  });
};

}( jQuery ));

$('.type-progress-example').each(function() {
  $(this).typeProgress();
});

</script>
<style>
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    color: #ffffff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}

.label-success {
    background-color: #18bc9c;
}

.jumbotron {
    padding-left: 2em;
    padding-right: 4em;
    padding-top: 0em !important;
    padding-bottom: 0em !important;
    width: 100%;
    background-color: white !important;

}

.color-blue {
    color: #154589;
}

.modal-dialog {
    min-width: 800px
}

input[type="radio"] {
  width: 30px;
  height: 30px;
  border-radius: 15px;
  border: 2px solid #1FBED6;
  background-color: white;
  -webkit-appearance: none; /*to disable the default appearance of radio button*/
  -moz-appearance: none;
}

input[type="radio"]:focus { /*no need, if you don't disable default appearance*/
  outline: none; /*to remove the square border on focus*/
}

input[type="radio"]:checked { /*no need, if you don't disable default appearance*/
  background-color: #1FBED6;
}

input[type="radio"]:checked ~ span:first-of-type {
  color: white;
}

label span:first-of-type {
  position: relative;
  left: -21px;
  font-size: 15px;
  color: #1FBED6;
}

label span {
  position: relative;
  top: -12px;
}
</style>


<div class="clearfix">&nbsp;</div>



@endsection
