@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
@csrf <!-- {{ csrf_field() }} -->

<meta name="csrf-token" content="{{ csrf_token() }}">

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
                                        <li>Gratifikasi</li>
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
                                    <p>Or</p>
                                    <p>
                                    Anda dapat mengirimkan laporan Anda tentang  <b>Kasus Gratifikasi</b> dengan mengisi formulir melalui email ke:
                                        <u><a href="mailto:gratification@npct1.co.id" stlye="color:#FCB040;">Gratification@npct1.co.id</a></u>
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
                <input onkeydown="cekN();"   id="tName" type="text" name="paid" class="form-control  form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Email / Alamat Surel *</label> <label style="color:red;" id="em" align="right"> &nbsp; Please Type Your Correct Email</label>
                <input onkeydown="cekN();"   id="tEmail" type="email" name="paid" class="form-control form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Phone / Nomor Telephone *</label>
                <input onkeydown="cekN();"   id="tPhone" type="text" name="paid" class="form-control  form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Company / Perusahaan *</label>
                <input onkeydown="cekN();"   id="tCompany" type="text" name="paid" class="form-control form-control-wide">
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
            <br/>
            <label>
            <input type="radio" name="options" value="Gratification"/>
            <span>J</span><span>Gratifikasi</span>
            </label>
            </div>
        </div>
    </div>
    <!--<div class="row hide" data-step="3" data-title="Attachment">
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
    </div>-->
    <div class="row hide" id="steps" data-step="3" data-title="Attachment">
        <div class="jumbotron not-gratification">
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
            <div>
                <input type="hidden" id="files" />
            </div>
            <label><i>*jika anda memiliki alat bukti mohon dilampirkan dengan format (pdf, jpeg, jpg, png, mp4, wav, mp3)</i></label>
            <label><i>*maximal ukuran 5MB</i></label>
        </div>

        <div class="jumbotron gratification" style="display: none;">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Apakah Kamu Pekerja NPCT1 ?
                    <select id="gEmployee" class="form-control">
                        <option value='Yes'>Ya</option>
                        <option value='No'>Tidak</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Apakah Kamu Penerima/Pemberi ?
                    <select id="gRecSend" class="form-control">
                        <option>Penerima</option>
                        <option>Pemberi</option>
                    </select>
                </label>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <h3>Penerima</h3>
                </div>
                <div class="col-md-6">
                    <h3>Pemberi</h3>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input id="gRecName" class="form-control" type="text" placeholder="Fullname" />
                </div>
                <div class="col-md-6">
                    <input id="gSendName" class="form-control" type="text" placeholder="Fullname" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input id="gRecComp" class="form-control" type="text" placeholder="Company" />
                </div>
                <div class="col-md-6">
                    <input id="gSendComp" class="form-control" type="text" placeholder="Company" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input id="gRecAddr" class="form-control" type="text" placeholder="Address" />
                </div>
                <div class="col-md-6">
                    <input id="gSendAddr" class="form-control" type="text" placeholder="Address" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input id="gRecEmp" class="form-control" type="text" placeholder="Employee ID" />
                </div>
                <div class="col-md-6">
                    <input id="gSendEmp" class="form-control" type="text" placeholder="Employee ID" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input id="gRecDep" class="form-control" type="text" placeholder="Departement" />
                </div>
                <div class="col-md-6">
                    <input id="gSendDep" class="form-control" type="text" placeholder="Departement" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input id="gRecPos" class="form-control" type="text" placeholder="Position" />
                </div>
                <div class="col-md-6">
                    <input id="gSendPos" class="form-control" type="text" placeholder="Position" />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <h3>Detail Gratifikasi</h3>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="etd-paidthrough color-blue">Tipe Dari Gratifikasi
                        <select id="gType" class="form-control">
                            <option>Gift/Bonus</option>
                            <option>Commission/Discount</option>
                            <option>Fasilitas</option>
                            <option>Uang</option>
                            <option>Tanah</option>
                            <option>Sekuritas</option>
                            <option>Kendaraan</option>
                            <option>Tiket</option>
                            <option>Travel/Akomodasi</option>
                            <option>Tur</option>
                            <option>Perlakuan</option>
                            <option>Pinjaman Biaya Bunga</option>
                            <option>Souvenir/Antik/Barang Berharga</option>
                        </select>
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="etd-paidthrough color-blue">Tanggal dan Waktu
                        <br/>
                        <input id="gDate" type="date" />
                         &nbsp; 
                        <input id="gTime" type="time" />
                    </label>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <input id="gLoc"  class="form-control" type="text" placeholder="Location" />
                </div>
                <div class="col-md-6">
                    <input id="gEst" class="form-control" type="text" placeholder="Est. Value" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                <label class="etd-paidthrough color-blue">Kronologi
                    <textarea id="gDesc" class="form-control"></textarea>
                </label>
                    
                </div>
                <div class="col-md-6">
                    <label class="etd-paidthrough color-blue">Upload File
                        <input type="file"  id="fileupload2" name="photos[]" data-url="/upload" multiple=""/>
                        <a href="# " id="uploaded2" style="display:none;">file  uploaded</a>
                        <p id="loading2"></p>
                    </label>
                    
                </div>
            </div>
        </div>

    </div>

    <!--</div>-->
    <!--
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
            </div>

        </div>
    </div>
-->

<div class="row hide" data-step="4" data-title="Summary">
        <div class="jumbotron not-gratification">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Apakah Kamu Yakin Data Di Bawah Ini Benar ?</label>
            </div>
            <div class="form-group">
                <table>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Nama</label>
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
                        <td><label class="etd-paidthrough color-blue">Telephone</label></td>
                        <td>
                            <label id="lPhone">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Perusahaan</label></td>
                        <td>
                        <label id="lCompany">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Kategori</label></td>
                        <td>
                        <label id="lCategory">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Kronologi</label></td>
                        <td>
                        <label class="lChronology"></label>
                        </td>
                    </tr>

                </table>
                <br/>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </div>

        </div>

        <div class="jumbotron  gratification">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Apakah Kamu Yakin Data Di Bawah Ini Benar ?</label>
            </div>
            <div class="form-group">
                <table>
                    <tr>
                        <td style="width:100px" colspan="2">
                            <h4 class="etd-paidthrough color-blue">Informasi Kontak</h4>
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Nama</label>
                        </td>
                        <td>
                            <label class="lName">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Email </label></td>
                        <td>
                            <label class="lEmail">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Telepon</label></td>
                        <td>
                            <label class="lPhone">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Perusahaan</label></td>
                        <td>
                        <label class="lCompany">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Kategori</label></td>
                        <td>
                        <label class="lCategory">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Role</label></td>
                        <td>
                        <label class="gRecSend"></label>
                        </td>
                    </tr>

                </table>

                <table>
                    <tr>
                        <td style="width:100px" colspan="2">
                            <h4 class="etd-paidthrough color-blue">Pengirim</h4>
                        </td>
                        <td style="width:100px" colspan="2">
                            <h4 class="etd-paidthrough color-blue">Penerima</h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Nama Lengkap</label>
                        </td>
                        <td style="width:100px">
                            <label class="gSendName"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Nama Lengkap</label>
                        </td>
                        <td style="width:100px">
                            <label class="gRecName"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Perusahaan</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendComp"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Perusahaan</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecComp"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Alamat</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendAddr"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Alamat</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecAddr"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">NIK Pekerja</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendEmp"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">NIK Pekerja</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecEmp"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Divisi</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendDep"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Divisi</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecDep"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Posisi</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendPos"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Posisi</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecPos"></label>
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style="width:144px" colspan="2">
                            <h4 class="etd-paidthrough color-blue">Detail dari Gratifikasi</h4>
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Detail dari Gratifikasi</label>
                        </td>
                        <td>
                            <label class="gType">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Tanggal dan Waktu</label>
                        </td>
                        <td>
                            <label class="gDate">Please Check The Input</label>
                            <label class="gTime">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Lokasi</label>
                        </td>
                        <td>
                            <label class="gLoc">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Est. Nilai (Rp.)</label>
                        </td>
                        <td>
                            <label class="gEst">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Kronologi</label>
                        </td>
                        <td>
                            <label class="gDesc">Please Check The Input</label>
                        </td>
                    </tr>
                    

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
<style>
.swal2-container {
  z-index: 10000000000;
}
</style>
<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="https://www.jqueryscript.net/demo/Wizard-Modal-Bootstrap-jQuery/dist/modal-steps.min.js"></script>


<script src="/js/fileupload/vendor/jquery.ui.widget.js"></script>
<script src="/js/fileupload/jquery.iframe-transport.js"></script>
<script src="/js/fileupload/jquery.fileupload.js"></script>
<script src="{{ URL::asset('js/typeProgress.js') }}"></script>
<script src="{{ URL::asset('js/whistleblowing.js') }}"></script>
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
