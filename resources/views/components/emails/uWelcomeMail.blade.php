@extends('beautymail::templates.ark')


@section('content')
    @include('beautymail::templates.ark.contentStart')
    <style>
        table {
            border-collapse: collapse;
            display: table;
        }
        td {
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
        }
        .b-b-grey {
            border-bottom: 1px solid #eaecee;
        }
        .m-5 {
            margin: 5px !important;
        }
        .m-b-5 {
            margin-bottom: 5px !important;
        }
        .m-10 {
            margin: 10px !important;
        }
        .f-b {
            font-weight: bold;
        }
        .f-grey-b {
            color: #C9CEC3;
        }
        .f-13 {
            font-size: 13px;
        }
        .f-18 {
            font-size: 18px;
        }
        .h-bold {
            color: #4E7697;
        }
        .pull-right {
            float: right;
        }
        .d-b-grey {
            background: #C9CEC3;
        }
        .p-t-10 {
            padding-top: 10px !important;
        }
        .p-b-10 {
            padding-bottom: 10px !important;
        }
        .text-line-through {
            text-decoration: line-through;
            font-size: 12px;
        }
        .w-300 {
            width: 300px !important;
            text-align: justify;
            word-wrap: break-word;
        }
        .w-250 {
            width: 250px !important;
        }
        .w-20 {
            width: 20px !important;
        }
        .w-70 {
            width: 70px !important;
        }
    </style>
    <h1 class="m-b-5 h-bold">Welcome on Board</h1>
    <h4 class="secondary">Hi <strong> {{ $objUsers->name }}</strong></h4>
    <div class="p-t-10 p-b-10">
        <p>Thank you for registration on NPCT1 Website</p>
        <p>Your credential access to NPCT1 Website</p>
    </div>
    <table>
        <tr>
            <td class="b-b-grey m-5"><span class="f-grey-b f-b f-13">Email</span>
                <div class="m-b-5 f-b f-18">{{ $objUsers->email }}</div>
            </td>
        </tr>
        <tr>
            <td class="b-b-grey m-5"><span class="f-grey-b f-b f-13">Credential Password</span>
                <div class="m-b-5 f-b f-18">{{ $planTextCredential }}</div>
            </td>
        </tr>
    </table>
    <div class="m-5"></div>
    <div class="m-5"></div>
    <div class="p-t-10 p-b-10">
        <p>If you have any questions you can simply reply to this email or contact us at it@npct1.co.id</p>
    </div>
    @include('beautymail::templates.ark.contentEnd')
@stop
