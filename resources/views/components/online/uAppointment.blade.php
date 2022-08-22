@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<section class="page-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Meeting Appointment</h1>
                  <h6><a href="index.html">Home</a><i class="fas fa-angle-right"></i> Our Services </h6>
               </div>
            </div>
         </div>
      </section>
      <div class="clearfix">&nbsp;</div>
      <section class="service-details">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                   <div class="row">
                       <div class="col-lg-10 ">
                            <h1 id="title_create">Create Meeting Appointment</h1>
                        </div>
                    <button class="btn btn-danger" id="sr" style="height: 40px; justify-self: flex-end;" onclick="searchAppointment($('#reg_code')); return false">Search Appointment</button>
                    <button class="btn btn-danger" id="cr" style="height: 40px; justify-self: flex-end; display: none;" onclick="$('#sr').show();$('#cr').hide();$('#tracking_content').show(); $('.after_check').show(); $('#cont').hide(); $('#reject_tr').hide(); $('#title_create').text('Create Appointment'); return false">Create Appointment</button>
                   </div>
<!--                  <p class="page_speed_1594397887">Please input your data on form bellow to request permit</p>-->

                <!-- S: CONTENT -->



                    <div class="tab-content" id="nav-tabContent1">
                        <div class="tab-pane fade" id="tracking" role="tabpanel" aria-labelledby="tracking-tab"></div>
                        <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab"></div>
                        <div class="tab-pane fade" id="vgm" role="tabpanel" aria-labelledby="vgm-tab"></div>
                        <div class="tab-pane fade show active" id="eir" role="tabpanel" aria-labelledby="eir-tab">

                            <div >
                                <br/>
                                <div class="container" id="cont" style="display: none; margin-top:-10;">
                                    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <!--<h3>Meeting Appointment <span id="company"></span></h3>-->
                                        <table>
                                            <tr>
                                                <td>
                                                    <img id="qrcode" src="" width="254px">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tr >
                                                            <td style="padding: 3px 0;">AppointmentID</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="code"></span></td>
                                                        </tr>
                                                        <tr >
                                                            <td style="padding: 3px 0;">Status</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="status"></span></td>
                                                        </tr>
                                                        <tr id="reject_tr" style="display: none;">
                                                            <td style="padding: 3px 0;">Remark</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="reject"></span></td>
                                                        </tr>
                                                        <tr >
                                                            <td style="padding: 3px 0;">Company Name</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="company"></span></td>
                                                        </tr>
                                                        <tr >
                                                            <td style="padding: 3px 0;">PIC Name</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="pic"></span></td>
                                                        </tr>
                                                        <tr >
                                                            <td style="padding: 3px 0;">Telephone</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="phone"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 3px 0;">Date</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="date"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 3px 0;">Agenda</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="agenda"></span></td>
                                                        </tr>
                                                        <tr  >
                                                            <td style="padding: 3px 0;">Type</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="types"></span></td>
                                                        </tr>
                                                        <tr  >
                                                            <td style="padding: 3px 0;">Total Person</td>
                                                            <td> &nbsp; : &nbsp; </td>
                                                            <td> &nbsp; <span id="person"></span></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <br/>

                                        List Person
                                        <div class="table-responsive sm-m-b-15 sm-m-l-10 vessel-schedule">
                                            <table class="table table-striped dataTable table-responsive-block" id="idTableAppointment">
                                            <thead>
                                                <tr>
                                                    <th class="page_speed_213269816">Name</th>
                                                    <th class="page_speed_213269816">Personal ID Number</th>
                                                    <th class="page_speed_213269816">Phone Number</th>
                                                    <th class="page_speed_213269816">Vehicle Plate Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                            </tbody>
                                            </table>
                                        </div>
                                        <br/>
                                        <div id="preview_goods" class="after_check">
                                        List Goods
                                        <div class="table-responsive sm-m-b-15 sm-m-l-10 vessel-schedule">
                                            <table class="table table-striped dataTable table-responsive-block" id="idTableGoods">
                                            <thead>
                                                <tr>
                                                    <th class="page_speed_213269816">Name</th>
                                                    <th class="page_speed_213269816">Qty</th>
                                                    <th class="page_speed_213269816">Weight (Kg)</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                            </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>


                            <!-- S: form create -->
                            <div class="tab-pane fade show active" id="tracking_content" role="tabpanel" aria-labelledby="tracking-tab">

                                <div class="row page_speed_169359063 create">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" id="company_name" value="" autocomplete="off" name="vesselContainer" class="form-control cont-split text-uppercase" maxlength="35">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label>Your Email</label>
                                            <input type="text" id="company_mail" autocomplete="off"  name="vesselVoyage" class="form-control" ></div>
                                    </div>
                                    <div class="col-md-6 another_2">
                                        <div class="form-group"><label>NPCT1 Person Email</label>
                                        <input type="text" id="person_mail" autocomplete="off" value=""  name="vesselContainer" class="form-control cont-split" ></div>
                                        <!--<button class="btn btn-danger" style="margin-top: 11px;" id="btncheck" onclick="check(); return false">Process </button>-->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <input  autocomplete="off" data-field="datetime" type="text" id="schedule_date" name="vesselContainer" class="form-control cont-split text-uppercase">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <input  autocomplete="off" data-field="datetime" type="text" id="schedule_end" name="vesselContainer" class="form-control cont-split text-uppercase">
                                        </div>
                                    </div>
                                    <!--
                                    <div class="col-md-4 another_1" style="display: block;">
                                        <div class="form-group"><label>Intended Person</label>
                                            <input type="text" id="person_name" value="" name="vesselContainer" class="form-control cont-split text-uppercase" >
                                        </div>
                                    </div>
                                    -->
                                    <div class="col-md-6" >
                                        <div class="form-group"><label>Appointment Type</label>
                                            <select id="change_type" onChange="change_type($(this).val())" class="form-control cont-split text-uppercase">
                                                <option value="meeting">Meeting</option>
                                                <option  value="delivery">Delivery</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 another_1" style="display: none;">
                                        <div class="form-group"><label>Intended Division</label>
                                        <input type="text" id="person_division" name="vesselContainer" class="form-control cont-split text-uppercase" >

                                    </div>
                                    </div>
                                    <!--
                                    <div class="col-md-1 others">
                                        <div class="form-group"><label>Change**</label>
                                        <input type="checkbox"  id="other" onclick="other()" name="vesselContainer" class="form-control cont-split text-uppercase">
                                    </div>
                                    </div>
                                    -->
                                    <!--
                                    <div class="col-md-12 check_note">
                                        <span class="hintvoyage">** Use change for get another option intended check method</span>
                                    </div>
                                    -->
									<link rel="stylesheet" href="{{ asset('css/DateTimePicker.css') }}" type="text/css">
									<script src="{{ URL::asset('js/jquery-1.11.0.min.js') }}"></script>
									<script src="{{ URL::asset('js/DateTimePicker.js') }}"></script>



                                </div>
                                <div id="dtBox"></div>
                                    <input type="text" style="display: none;" id="clientid" />
                                    <div class=" after_check" >
                                        <div class="form-group"><label>Agenda</label>
                                            <textarea style="min-height: 150px;"  id="agendas" name="vesselContainer" class="form-control cont-split" ></textarea>
                                    </div>
                                    </div>

                                    </div>
                                </div>

                                <div class="after_check">
                                <div class=""><label>List Person</label></div>
                                <div class="table-responsive sm-m-b-15 sm-m-l-10 vessel-schedule">
                                    <table class="table table-striped dataTable table-responsive-block" id="c">
                                    <thead>
                                        <tr>
                                            <th class="page_speed_213269816">Name *</th>
                                            <th class="page_speed_213269816">Personal ID Number *</th>
                                            <th class="page_speed_213269816">Phone Number *</th>
                                            <th class="page_speed_213269816">Plate Number (Vehicle)</th>
                                            <th class="page_speed_213269816"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <input type="text" style="display: none;" id="counting" value="1" />
                                        <tr class="1">
                                            <td><input type="text" arr="1" class="form-control cont-split input" n="names" placeholder="Name" /></td>
                                            <td><input type="text" arr="1" class="form-control cont-split input" n="identity" placeholder="Personal ID Number" /></td>
                                            <td><input type="text" arr="1" class="form-control cont-split input" n="phone" placeholder="Phone" /></td>
                                            <td><input type="text" arr="1" class="form-control cont-split input" n="plate" placeholder="Plate Number (Vehicle)" />
                                              <input type="hidden" arr="1" class="input" n="pic" value="1" /></td>
                                            <td><button onclick="add()" class=" btn-primary"> &nbsp; + &nbsp; </button></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                <span style="padding-bottom: 0px !important; margin-top:-10px;" >
                                    <strong style="color: #6c757d"><i>The First Person is PIC and Your appointment will send to User and need their confirmation</i></strong>
                                </span>
                            </div>

                            <div id="list_delivery" style="margin-top: 15px;">
                                <div class=""><label>List Delivery</label></div>
                                <div class="table-responsive sm-m-b-15 sm-m-l-10 vessel-schedule">
                                    <table class="table table-striped dataTable table-responsive-block" id="g">
                                    <thead>
                                        <tr>
                                            <th class="page_speed_213269816">Goods Name *</th>
                                            <th class="page_speed_213269816">Qty *</th>
                                            <th class="page_speed_213269816">Weight (Kg) *</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <input type="text" style="display: none;" id="counting" value="1" />
                                        <tr class="1">
                                            <td><input type="text" class="form-control cont-split goods"  arr_g = "1" n="name" placeholder="Goods Name" /></td>
                                            <td><input type="number" class="form-control cont-split goods" arr_g = "1" n="qty" placeholder="Qty" /></td>
                                            <td><input type="number" class="form-control cont-split goods" arr_g = "1" n="weight" placeholder="Weight (Kg)" /></td>
                                            <td><button onclick="add_g()" class=" btn-primary"> &nbsp; + &nbsp; </button></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
</div>

                                </div>

                                <div class="row  after_check" style="margin-top:20px">
                                    <div class="col-md-12 row">
                                        <div class="col-md-9" >
                                            <div id="captcha" align="right" class="after_check" style="margin-bottom: 10px; margin-right: -100px;" ></div>
                                            <div align="right" class="after_check" style="margin-right: -100px;">
                                                <input  style="width: 210px;" class="form-control cont-split" type="text" id="recaptcha" >
                                            </div>
                                        </div>

                                        <div class="col-md-3" align="right" style="margin-top: 45px;">
                                            <button class="btn btn-primary" style="margin-right: -28px;" onclick="submit(); return false">Submit Appointment</button>
                                        </div>
                                    </div>
                                </div>
<!--
                                <div class="row page_speed_65590564 after_check">
                                    <div class="" style="">
                                            <div id="captcha" class="after_check " style="margin-bottom: 10px; " align="right"></div>
                                            <input style=""  class="form-control" type="text" id="recaptcha" >
                                            <button class="btn btn-primary" style="margin-right: -28px;" onclick="submit(); return false">Submit Appointment</button>

                                    </div>
                                </div>
                                -->
                            </div>
                            <style>
                                .captcha
                                    { font: italic bold 16px "Comic Sans MS", cursive, sans-serif;
                                    color:#a0a0a0;background-color:#c0c0c0;
                                    width:100px;border-radius: 5px;
                                    text-align:center;
                                    font-weight: bolder;
                                    font-size: 25px;

                                    text-decoration:line-through;
                                    }
                            </style>
                            <!-- E: form create -->
                            
                        </div>
                        <div class="tab-pane fade" id="tarif" role="tabpanel" aria-labelledby="tarif-tab">
                            <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p>Tariff simulation tab</p>
                            </div>
                            </div>
                        </div>

                    </div>
                <!-- E: CONTENT -->
               </div>
            </div>
         </div>
      </section>
	  

	  @endsection
	  
	  
		
		
	