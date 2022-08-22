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

                            <h1>Latar Belakang</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                    Sebagai terminal kelas dunia, NPCT1 meyakini bahwa bisnis tidak hanya dijalankan berdasarkan pada standar efisiensi ekonomi, tetapi juga memperhatikan standar etika yang berlaku di masyarakat. Standar praktik bisnis perusahaan melampaui persyaratan hukum minimum dan mencerminkan komitmen jangka panjang Grup Perusahaan untuk membangun bisnis global yang sukses, bertanggung jawab, jujur, dan sepenuhnya patuh pada aturan yang berlaku. Hal ini menjadi kebaganggan bagi semua karyawan dan para pemangku kepentingan lainnya.
                                    </p>
                                </div>
                            </div>

                            <h1>Definisi</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                    Seseorang (karyawan, kontraktor, vendor, klien, atau pemangku kepentingan lain yang relevan) melaporkan suatu perbuatan yang salah, ilegal, atau aktivitas tidak etis yang dapat merugikan sebuah organisasi.
                                    </p>
                                </div>
                            </div>

                            <h1>Tujuan</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                        Whistle Blowing Channel ini dirancang untuk memberikan kesempatan kepada seluruh karyawan serta pemangku kepentingan terkait lainnya untuk dapat menyampaikan laporan yang bersifat rahasia atas indikasi dugaan pelanggaran nilai etika bisnis dan moral yang berlaku, berdasarkan bukti dan informasi yang terpercaya.
                                    </p>
                                    <p>
                                        Perlu diketahui bahwa melalui saluran ini, karyawan atau stakeholders akan diberikan perlindungan baik dari segi kerahasiaan identitas maupun dari kemungkinan adanya akibat yang merugikan lainnya.
                                    </p>
                                    <p>
                                    <b>
                                        Perlu diketahui bahwa Whistle Blowing Channel ini hanya untuk melayani laporan atau keluhan yang bersifat nonkomersial.  Anda hanya dapat melaporkan jika laporan Anda sesuai dengan kriteria berikut:
                                    </b>
                                    </p>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul>
                                        <li>Pelanggaran kebijakan dan peraturan perusahaan</li>
                                        <li>Penyalah Gunaan Kekuasaan dan Pelecehan Seksual</li>
                                        <li>Penipuan</li>
                                        <li>Penyuapan</li>
                                        <li>Pencatutan</li>
                                        <li>Penyalah gunaan dana</li>
                                        <li>Pemerasan</li>
                                        <li>Intimidasi</li>
                                        <li>Konflik Kepentingan</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <h1>Pengajuan Laporan</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                        Anda dapat mengirimkan laporan Anda dengan mengisi formulir laporan atau melalui email ke:
                                        <u><a href="mailto:whistleblowing@npct1.co.id" stlye="color:#FCB040;">Whistleblowing@npct1.co.id</a></u>
                                    </p>
                                    <p>
                                    Jika Anda memilih untuk mengirimkan laporan Anda melalui email, harap berikan informasi berikut:
                                    </p>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul>
                                        <li>Detail dari kasus ini</li>
                                        <li>Kapan dan dimana terjadinya</li>
                                        <li>Bukti seperti dokumen, foto, rekaman audio & video (Jika bukti tidak tersedia, jelaskan kasusnya sedetail mungkin dalam urutan kronologis)</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button
                                    data-toggle="modal" data-target="#myModal"
                                    class="btn btn-wide-right btn-middle-mt-30 semi-bold" style="margin-top: 30px !important; float: left !important;"
                                   onclick=""> Ajukan Laporan </button>
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
            <label class="etd-paidthrough color-blue">Silahkan Pilih salah satu kategori dibawah:
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Violation of company’s policies and regulations"/>
            <span>A</span><span>Pelanggaran kebijakan dan peraturan perusahaan</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Power and Sexual Harassments"/>
            <span>B</span><span>Penyalah Gunaan Kekuasaan dan Pelecehan Seksual</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Fraud"/>
            <span>C</span><span>Penipuan</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Bribe"/>
            <span>D</span><span>Penyuapan</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Profiteering"/>
            <span>E</span><span>Pencatutan</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Misappropriation of Funds"/>
            <span>F</span><span>Penyalah gunaan dana</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Extortion"/>
            <span>G</span><span>Pemerasan</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Intimidation"/>
            <span>H</span><span>Intimidasi</span>
            </label>
            <br/>
            <label>
            <input type="radio" name="options" value="Conflict of Interest"/>
            <span>I</span><span>Konflik Kepentingan</span>
            </label>

            </div>
        </div>
    </div>
    <div class="row hide" data-step="3" data-title="Attachment">
        <div class="jumbotron">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Kronologi dari kejadian:
                    <br/>
                <i>*Waktu/Tempat/Pihak yang Terlibat</i>
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
            <label><i>*jika anda memiliki alat bukti mohon dilampirkan dengan format (pdf, jpeg, jpg, png, mp4, wav, mp3)</i></label>
            <label><i>*maximal ukuran 5MB</i></label>
    </div>

    </div>
    <div class="row hide" data-step="4" data-title="Summary">
        <div class="jumbotron">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Apakah anda yakin data diinputkan benar ?</label>
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


<script src="/js/fileupload/vendor/jquery.ui.widget.js"></script>
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
                filename: tFile
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
