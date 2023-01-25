@extends('layouts.print')
@section('content')
<div class="container">
    <div class="invoice">
        <!-- Table row -->
        <table>
            <thead>
                <th>
                    <img src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso"
                    class="brand-image" style="width: 125px; height: 105px; margin-left: 80px;">
                </th>
                <th style="margin-top: -10px;">
                    <b style="font-size: 12px; margin-left: 75px;">PESO, UNIPESSOAL. LDA</b><br>
                    <b style="font-size: 12px; margin-left: 75px;">AVE JACINTO CANDIDO, BIDAU ACADIRUHUN, DILI - TIMOR LESTE</b><br>
                    <b style="font-size: 12px; margin-left: 75px;">MOBILE : (+670) 77584549</b><br>
                    <b style="font-size: 12px; margin-left: 75px;">EMAIL : sales.artesgrafica@gmail.com</b><br>
                </th>
            </thead>
        </table>
        <br>
        <hr style="border: 1px solid black; ">
        <table>
           <strong>To : {{ $delivery_orders->customer }}</strong><br>
        </table>
        <table>
            <thead style="border: 1px solid black;">
                <tr cellpadding="1" align="center">
                    <th rowspan="3" width="100px" style="border: 1px solid black;"></th>
                    <th rowspan="3" width="350px" style="text-align: center; border: 1px solid black;">DELIVERY ORDER </th>
                    <th width="300px" style="margin-left: 20px; padding-left: 5px; border: 1px solid black;" colspan="2"><b>No Delivery Order : {{ $delivery_orders->no_do }}</b></th>
                </tr>
                <tr>
                    <th colspan="2"  style="padding-left: 5px; border: 1px solid black;"><b>No PO : </b></th>
                </tr>
                <tr>
                    <th colspan="2" style="padding-left: 5px; border: 1px solid black;"><b>JO : </b></th>
                </tr>
            </thead>
            <tbody>
                <tr style="border: 1px solid black;">
                    <th colspan="2" style="padding-left: 5px;">Description</th>
                    <th style="padding-left: 5px; text-align: center; border: 1px solid black;">Qty</th>
                    <th style="padding-left: 5px; text-align: center; border: 1px solid black;">Unit</th>
                </tr>
                @foreach ($delivery_order_barangs as $v => $dob)
                    <tr class="trrx">
                        <td style="padding-left: 5px;" colspan="2">{{ $dob->description }}</td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;">{{ $dob->qty }}</td>
                        <td style="padding-left: 5px; text-align: center;">{{ $dob->unit }}</td>
                    </tr>
                    @endforeach
                    <tr style="border-top: 1px solid black;">
                        <td></td><td></td><td></td><td></td>
                    </tr>
            </tbody>
        </table>
        <br>
        <table width="680px">
            <tr>
                <td rowspan="2">
                    <strong>Date</strong> : {{ $delivery_orders->created_at->toFormattedDateString() }} <br>
                    <strong>Name</strong> : {{ $delivery_orders->nama }} <br>
                    <strong>Phone</strong> : {{ $delivery_orders->phone }} <br>
                    <strong>Signature</strong> :  <br>
                </td>
                <td style="margin-top: -10px; padding-bottom: 20px; text-align: right; margin-right: 25px;">
                    <b>DILI, {{ $delivery_orders->created_at->toFormattedDateString() }}</b>
                </td>
            </tr>
            <tr>
                <td style="text-align: right; margin-right: 25px; padding-top: 20px;">
                    <b>{{ $delivery_orders->pegawais['nama'] }}</b>
                </td>
            </tr>
        </table>

        <!-- /.row -->

    </div>


</div>
@endsection
