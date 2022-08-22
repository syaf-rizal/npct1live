@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Vessel Schedule</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> Online Service</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section>
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;">
        <form action="{{ $changeSearchVessel }}" name="fChangeSearchVesselSchedule" id="fChangeSearchVesselSchedule" method="post" autocomplete="off">
            <div class="row w-border-b pb-10">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Vessel</label>
                        <input type="text" name="scheduleVessel" class="form-control capitalizing" value="{{ $vesselAttribute['vessel'] }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Line</label>
                        <input type="text" name="scheduleLine" class="form-control capitalizing" value="{{ $vesselAttribute['line'] }}">
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                    <button class="btn btn-wide-right btn-middle-mt-30 semi-bold" onclick="onlineSearch($('#fChangeSearchVesselSchedule')); return false">Search Schedule</button>
                </div>
            </div>
        </form>
        {{--  <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="header-w-underscore-left">Vessel Schedule</h1>
            </div>
        </div>  --}}
        <div class="clearfix">&nbsp;</div>
        @if($vesselSchedule['isFound'])
        <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
        <div><p class="small"><i>Open and Closing Time shown in this page are based on proforma long term schedule of the service(s) in NPCT1. For actual open and closing stacking time, please contact respective shipping line. Thank you for your attention and cooperation.</i></p></div>
        <div class="table-responsive sm-m-b-15 sm-m-l-10 vessel-schedule">
            <table class="table table-striped dataTable table-responsive-block" id="idTableVesselSchedule">
            	<thead>
            		<tr>
                        <th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">VESSEL</th>
            			<th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">LINE</th>
            			<th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">VOY_IN</th>
            			<th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">VOY_OUT</th>
            			<th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">SERVICE</th>
            			<th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">STATUS</th>
            			<th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">ETA</th>
                        <th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">ATA</th>
                        <th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">ETD</th>
                        <th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">ATD</th>
                        <th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">OPEN STACKING</th>
                        <th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">CLOSING DOCUMENT</th>
                        <th style="font-weight: bold; color: #373e43; font-size: 12px; text-align: center !important;">CLOSING PHYSIC</th>
            		</tr>
            	</thead>
            	<tbody>
                    @for($i=0; $i < count($vesselSchedule['collections']['data']); $i++)
                        <tr style="font-size: 10px !important;">
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['vessel_name'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['line'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['voyage_in'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['voyage_out'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['service'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['status'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['eta'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['ata'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['etd'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['atd'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['open_stacking'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['closing_document'] }}</td>
                            <td style="font-size: 11.5px; color: #000 !important; text-align: center !important;  padding-left: 0px !important; padding-right: 0px !important;">{{ $vesselSchedule['collections']['data'][$i]['closing_physic'] }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ URL::asset('js/datatables.responsive.js') }}"></script>
        <script>
            $(document).ready(function(){
                $div = $('.exportOptions').next().next();
                $div.addClass('overide-row-class');
            })
        </script>
        @else
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis semi-bold fetch-row text-center"> Records not found</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection