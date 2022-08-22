@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Meeting Appointment</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> Online Service</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="schedule sha-je" style="margin-top: 10px !important;">
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;">
        <div class="row">
            <div class="col-md-12 tab-pane">
                <h1>Detail Appointment</h1>
                <div class="card-head">
                    <h4 class="card-title">{{ strtoupper($booking['data']['reg_company_name']) }}</h4>
                    <p class="large">Wanna make appointment with <a href="#"> {{ $booking['data']['tm_client']['client_name'] }} ({{ $booking['data']['tm_client']['tm_division']['division_desc'] }})</a></p>
                 </div>
            </div>
        </div>
        <div class="row margin-reduce">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex align-items-center guttar-20px" style="justify-content: flex-end;margin-bottom:30px;">
                    <div class="flex-col d-sm-block ">
                        <a href="#" data-reg = "{{ $booking['data']['reg_code'] }}" data-dismiss="modal" data-toggle="modal" data-target="#pay-online" class="btn btn-wide-right btn-middle-mt-30 semi-bold"><em class="fas fa-times mr-3"></em>Reject</a></div> &nbsp; &nbsp;
                    <div class="flex-col d-sm-block "><a href="javascript:void(0)" id="approved" data-reg = "{{ $booking['data']['reg_code'] }}" class="btn btn-wide-right btn-middle-mt-30 semi-bold"><em class="fas fa-check mr-3"></em>Approve</a></div>
                </div>
            </div>
        </div>
		<style>
		.container-checkbox .checkmark:after{
			left: 10px !important;
			top: 5px !important;
		}
		</style>
        <div class="row margin-reduce">
            <div class="col-md-4 text-center text-md-center">
                <div id="qrCodeBooking"></div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Appointment ID</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $booking['data']['reg_code'] }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Intended Person</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $booking['data']['tm_client']['client_name'] }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Company Name</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ strtoupper($booking['data']['reg_company_name']) }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">PIC Name</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $booking['pic'] }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Telephone</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $booking['phone'] }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Date Appointment</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $booking['data']['reg_datetime_appointment'] }}  - {{ $booking['data']['reg_datetime_end'] }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Agenda</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $booking['data']['reg_reason'] }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Type</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ (count($booking['data']['goods']) > 0 ? 'Delivery' : 'Meeting')  }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                        <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Total Person</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ count($booking['data']['detail']) }}</h5>
                    </div>
                </div>
                <div class="row form-group" style="margin-top:3px;">
                    <div class="col-md-3">&nbsp;</div>
                    <div class="col-md-3">
                        <div class="form-group" style="margin-top:20px;">
                            <label><strong>PTE Needed</strong></label>
                            <label class="container-checkbox">
                                <input type="checkbox" id="cm-apd" class="mycheckbox">
                                <span class="checkmark" style="margin-bottom:15px; width:30px !important;height:30px !important;"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" style="margin-top:20px;">
                            <label><strong>Safety Induction</strong></label>
                            <label class="container-checkbox">
                                <input type="checkbox" id="cm-safety" class="mycheckbox">
                                <span class="checkmark" style="margin-bottom:15;width:30px !important;height:30px !important;"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" style="margin-top:20px;">
                            <label><strong>Port Tour</strong></label>
                            <label class="container-checkbox">
                                <input type="checkbox" id="cm-port" class="mycheckbox">
                                <span class="checkmark marks" style="margin-bottom:15px; width:30px !important;height:30px !important;"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(count($booking['data']['goods']) > 0)
        <div class="clearfix">&nbsp;</div>
        <div class="row margin-reduce">
            <div class="col-md-12 tab-pane">
                <h1>List Of Goods</h1>
                <table class="table tnx-table" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th style="width:300px">Goods Name</th>
                            <th>Qty</th>
                            <th>Weight (Kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 0; @endphp
                        @for($i = 0; $i < count($booking['data']['goods']); $i++)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">{{ $no }}</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">{{ $booking['data']['goods'][$i]['goods_name'] }}</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">{{ $booking['data']['goods'][$i]['goods_qty'] }}</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">{{ $booking['data']['goods'][$i]['goods_weight'] }}</div>
                                </td>
                            </tr>
                            @php $no++ @endphp
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <div class="clearfix">&nbsp;</div>
        <div class="row margin-reduce">
            <div class="col-md-12 tab-pane">
                <h1>List Visitor</h1>
                <a href="javascript:void(0);" id="add_new" data-reg = "{{ $booking['data']['reg_code'] }}" class="btn btn-wide-right btn-middle semi-bold" style="float: left !important;"><em class="fas fa-plus mr-3"></em>Add New Visitor</a>
                <div style="padding: 30px;">&nbsp;</div>
                <table class="table tnx-table" id="adding">
                    <thead>
                    <tr>
                        <th>Name Visitor</th>
                        <th>Identity Number</th>
                        <th>Phone Number</th>
                        <th class="tnx-type">
                            <div class="tnx-type-text"></div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($z = 0; $z < count($booking['data']['detail']); $z++)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if($booking['data']['detail'][$z]['reg_date_gatein'] == 'Invalid date')
                                            <a href="/web/v1/user/{{ $booking['data']['detail'][$z]['reg_person_qrcode'] }}">{{ $booking['data']['detail'][$z]['reg_person_name'] }}</a>
                                    @else
                                        {{ $booking['data']['detail'][$z]['reg_person_name'] }}
                                    @endif         
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    {{ $booking['data']['detail'][$z]['reg_person_identity_number'] }}
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center">
                                    {{ $booking['data']['detail'][$z]['reg_detail_phone'] }}
                                </div>
                            </td>
                            <td class="tnx-type">
                            @if($booking['data']['detail'][$z]['reg_date_gatein'] == 'Invalid date')
                            @endif
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
</section>
<div class="modal fade" id="pay-online" tabindex="-1">
    <div class="modal-dialog modal-dialog-md modal-dialog-centered">
        <div class="modal-content pb-0">
            <div class="popup-body" style="padding: 36px !important;">
                <h4 class="popup-title text-center">Reason To Reject</h4>
                <p style="font-size: 15px !important;">Please write the reason for <strong style="color: black">{{ strtoupper($booking['data']['reg_company_name']) }} </strong> why you <strong style="color: red">Reject</strong>.</p>
                <textarea style="height: 140px !important;" id="reason" class="form-control input-textarea" ></textarea>
                <span class="font-italic mgb-2x"><small style="color: red">* This reason will send to visitor mail.</small></span>
                <div class="clearfix">&nbsp;</div>
                <ul class="d-flex flex-wrap align-items-center guttar-30px">
                <li><a href="#" id="reject"  class="btn btn-primary">Send the reason <em class="ti ti-arrow-right mgl-2x"></em></a></li>
                </ul>
                <div class="gaps-2x"></div>
                <div class="gaps-1x d-none d-sm-block"></div>
                <div class="note note-plane note-light mgb-1x">
                
                <p  style="font-size: 15px !important;"><em style="color: green" class="fas fa-info-circle"></em>&nbsp;The appointment will automaticly canceled.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
<script src="{{ URL::asset('js/jquery.qrcode.js') }} "></script>
<script src="{{ URL::asset('js/qrcode.js') }} "></script>
<script>
    $(document).ready(function(){
        $('#qrCodeBooking').qrcode({
            width: 228,
            height: 228,
            text: "{{ $source }}"
        });	
        $('#add_new').click(function(){
            var id = 1 + Math.floor(100000 + Math.random() * 900000);
            var qrCode = $(this).attr("data-reg");
            $('#adding ').append('\
            <tr id="'+ id +'">\
               <td  colspan="3">\
                  <form id="form_'+ id +'">\
                     <div class="d-flex align-items-center">\
                        <div class="data-state data-state-pending"></div>\
                        <input type="hidden" name="qrcode" value="' + qrCode + '" />\
                        <input name="visitor" class="form-control" placeholder="Visitor Name" /> &nbsp;  \
                        <input name="identity" class="form-control" placeholder="Identity Number"  /> &nbsp; \
                        <input name="phone" class="form-control" placeholder="Phone Number"  /> &nbsp; \
                     </div>\
                  </form>\
               </td>\
               <td class="tnx-type">\
                  <a href="javascript:void(0)" onClick="addd('+ id +');" class="btn btn-middle semi-bold" style="float: left !important; margin-right:5px; margin-top: auto !important; color:#fff !important;"><i class="fa fa-check"></i></a>\
                  <a href="javascript:void(0)" onClick="removes('+ id +');" class="btn btn-middle semi-bold" style="float: left !important; margin-top: auto !important; color:#fff !important;"><i class="fa fa-trash"></i></a>\
               </td>\
            </tr>\
            ');
            return false;
         });

         $('#reject').click( function() {
            $.ajax({
               url: 'https://api.npct1.co.id:82/web/v1/reject_user',
               type: 'post',
               dataType: 'json',
               data: {
                  code: '{{ $booking['data']['reg_code'] }}',
                  reason: $('#reason').val()
               },
               success: function(data) {
                  if(data.error == true){
                     swal("Please Check Your Input!", '', 'error');
                  }else{
                     swal("Appointment Rejected, The Visitor Will got Notice", '', 'success');
                     setTimeout(
                     function()
                     {
                         location.href = 'https://www.npct1.co.id'
                     }, 1000);
                  }
                  return false;
               }
            })
         });
    });

    function addd(id){	
        $.ajax({
            url: 'https://api.npct1.co.id:82/web/v1/addvisitor',
            type: 'post',
            dataType: 'json',
            data: $('#form_'+id).serialize(),
            success: function(data) {
				console.log(data);
                if(data.error == false){
					$('#'+id).html('\
						<td><div class="d-flex align-items-center">'+data.data.name+'</div></td>\
						<td><div class="d-flex align-items-center">'+data.data.identity+'</div></td>\
						<td><div class="d-flex align-items-center">'+data.data.phone+'</div></td>\
						<td class="tnx-type"></td>');
                }else{
                    swal("Please Check Your Input", "", "error");
                }
                return false;
            }
        })
    }
    function removes(id){
        $('#'+id).remove()
    }
</script>
@endsection
