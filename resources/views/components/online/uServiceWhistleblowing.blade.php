@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
@csrf <!-- {{ csrf_field() }} -->

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
                                        <li>Gratification</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <h1>Report Submission</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                    May You submit your report by filling in the report form or via email to:
                                        <u><a href="mailto:whistleblowing@npct1.co.id" stlye="color:#FCB040;">Whistleblowing@npct1.co.id</a></u>
                                    </p>
                                    <p>Or</p>
                                    <p>
                                    May You submit your report for finding of <b>Gratification Case</b> via email to:
                                        <u><a href="mailto:gratification@npct1.co.id" stlye="color:#FCB040;">Gratification@npct1.co.id</a></u>
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
                <input onkeydown="cekN();"  id="tName" type="text" name="paid" class="form-control  form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Email / Alamat Surel *</label> <label style="color:red;" id="em" align="right"> &nbsp; Please Type Your Correct Email</label>
                <input onkeydown="cekN();" id="tEmail" type="email" name="paid" class="form-control form-control-wide">

            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Phone / Nomor Telephone *</label>
                <input onkeydown="cekN();" id="tPhone" type="text" name="paid" class="form-control  form-control-wide">
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Company / Perusahaan *</label>
                <input onkeydown="cekN();" id="tCompany" type="text" name="paid" class="form-control form-control-wide">
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
            <br/>
            <label>
            <input type="radio" name="options" value="Gratification"/>
            <span>J</span><span>Gratification</span>
            </label>

            </div>
        </div>
    </div>
    <div class="row hide" id="steps" data-step="3" data-title="Attachment">
        <div class="jumbotron not-gratification">
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
            <div>
                <input type="hidden" id="files" />
            </div>
            <label><i>*if you have evidence please submit upload file with file type (pdf, jpeg, jpg, png, mp4, wav, mp3)</i></label>
            <label><i>*maximum type 5MB</i></label>
        </div>

        <div class="jumbotron gratification" style="display: none;">
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Are you Employee of NPCT1 ?
                    <select id="gEmployee" class="form-control">
                        <option value='Yes'>Yes</option>
                        <option value='No'>No</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label class="etd-paidthrough color-blue">Are you Receiver/Sender ?
                    <select id="gRecSend" class="form-control">
                        <option>Receiver</option>
                        <option>Sender</option>
                    </select>
                </label>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <h3>Receiver</h3>
                </div>
                <div class="col-md-6">
                    <h3>Sender</h3>
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
                    <h3>Detail Gratification</h3>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="etd-paidthrough color-blue">Type Of Gratification
                        <select id="gType" class="form-control">
                            <option>Gift/Bonus</option>
                            <option>Commission/Discount</option>
                            <option>Facility</option>
                            <option>Money</option>
                            <option>Soil</option>
                            <option>Securities</option>
                            <option>Vehicle</option>
                            <option>Ticket</option>
                            <option>Travel/Accommodation</option>
                            <option>Tour</option>
                            <option>Treatment</option>
                            <option>Interest Fee Loans</option>
                            <option>Souvenirs/Antiques/Valuables</option>
                        </select>
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="etd-paidthrough color-blue">Date and Time
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
                <label class="etd-paidthrough color-blue">Chronology
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
    <div class="row hide" data-step="4" data-title="Summary">
        <div class="jumbotron not-gratification">
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
                <label class="etd-paidthrough color-blue">Are you sure the data below is correct ?</label>
            </div>
            <div class="form-group">
                <table>
                    <tr>
                        <td style="width:100px" colspan="2">
                            <h4 class="etd-paidthrough color-blue">Contact Info</h4>
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Name</label>
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
                        <td><label class="etd-paidthrough color-blue">Phone</label></td>
                        <td>
                            <label class="lPhone">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Company</label></td>
                        <td>
                        <label class="lCompany">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="etd-paidthrough color-blue">Category</label></td>
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
                            <h4 class="etd-paidthrough color-blue">Sender</h4>
                        </td>
                        <td style="width:100px" colspan="2">
                            <h4 class="etd-paidthrough color-blue">Receiver</h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Fullname</label>
                        </td>
                        <td style="width:100px">
                            <label class="gSendName"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Fullname</label>
                        </td>
                        <td style="width:100px">
                            <label class="gRecName"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Company</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendComp"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Company</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecComp"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Address</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendAddr"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Address</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecAddr"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Employee ID</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendEmp"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Employee ID</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecEmp"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Departement</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendDep"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Departement</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecDep"></label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Position</label>
                        </td>
                        <td style="width:100px">
                        <label class="gSendPos"></label>
                        </td>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Position</label>
                        </td>
                        <td style="width:100px">
                        <label class="gRecPos"></label>
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style="width:144px" colspan="2">
                            <h4 class="etd-paidthrough color-blue">Detail Of Gratification</h4>
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Type of Gratification</label>
                        </td>
                        <td>
                            <label class="gType">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Date and Time</label>
                        </td>
                        <td>
                            <label class="gDate">Please Check The Input</label>
                            <label class="gTime">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Location</label>
                        </td>
                        <td>
                            <label class="gLoc">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Est. Value (Rp.)</label>
                        </td>
                        <td>
                            <label class="gEst">Please Check The Input</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px">
                            <label class="etd-paidthrough color-blue">Chronology</label>
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
		<button type="button" onclick="inputData(event); " disabled id="btnNext"  class="btn btn-success js-btn-step" data-orientation="next"></button>
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
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> -->
<!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
