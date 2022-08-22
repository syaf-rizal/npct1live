<div class="col-lg-12 col-sm-12 col-md-12">
    <h1>Estimation Charges</h1>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th width="45%">Description</th>
                        <th width="5%">Qty</th>
                        <th width="5%">UOM</th>
                        <th width="20%" class="table-componentn-right">Tariff Rate</th>
                        <th width="20%" class="table-componentn-right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($collections) > 0)
                        @php $no = 1 @endphp
                        @php $subtotal = 0 @endphp
                        @php $dpp = 0 @endphp
                        @php $ppn = 0 @endphp
                        @php $materai = 0 @endphp
                        @php $afterppn = 0 @endphp
                        @php $total = 0 @endphp
                        @for($i = 0; $i < count($collections); $i++)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $collections[$i]['type_desc'] }}</td>
                                <td>{{ $collections[$i]['qty'] }}</td>
                                <td>{{ $collections[$i]['uom'] }}</td>
                                <td>Rp. <span class="table-componentn-right span-fl-right">{{ number_format($collections[$i]['tarrif'], 0, ".", ".") }}</span></td>
                                <td>Rp. <span class="table-componentn-right span-fl-right">{{ number_format($collections[$i]['total'], 0, ".", ".")  }}</span></td>
                            </tr>
                            @php $no++ @endphp
                            @php $subtotal = $subtotal + $collections[$i]['total'] @endphp
                        @endfor
                        @php $dpp = $subtotal + 20000 @endphp
                        @php $ppn = $dpp * (10 / 100) @endphp
                        @php $afterppn = $dpp + $ppn @endphp
                        @if($afterppn >= 5000000)
                            @php $materai = 10000 @endphp
                            @php $total = $afterppn + 10000 @endphp
                        @else 
                            @php $materai = 0 @endphp
                            @php $total = $afterppn + 0 @endphp
                        @endif
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 pl-lg-5 pr-lg-5">
            <div class="no-space-60">&nbsp;</div>
            <div class="form-group">
                <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Admin Charges</p>
                <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row-bold">Rp. <span class="span-fl-right">20.000</span></h5>
            </div>
            <div class="form-group">
                <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Tax Basis</p>
                <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row-bold">Rp. <span class="span-fl-right">{{ number_format($dpp, 0, ".", ".") }}</span></h5>
            </div>
            <div class="form-group">
                <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Tax 10%</p>
                <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row-bold">Rp. <span class="span-fl-right">{{ number_format($ppn, 0, ".", ".") }}</span></h5>
            </div>
            <div class="form-group">
                <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Stamp</p>
                <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row-bold">Rp. <span class="span-fl-right">{{ number_format($materai, 0, ".", ".") }}</span></h5>
            </div>
            <div class="form-group">
                <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis">Estimate Total Payment</p>
                <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row-bold">Rp. <span class="span-fl-right">{{ number_format($total, 0, ".", ".") }}</span></h5>
            </div>
        </div>
    </div>
</div>