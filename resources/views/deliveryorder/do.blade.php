@extends('layouts.print')
@section('content')
<div class="container">
    <div class="invoice">
        <!-- Table row -->
        <table height="20%">
            <thead>
                <th width="100px">
                    <img src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso"
                    class="brand-image" style="width: 100px; height: 80px; margin-top: -20px;">
                </th>
                <th width="600px" style="margin-top: -10px;">
                    <img src="{{ asset('foto/alamatpeso.png') }}" style="width: 15.75cm; height: 2.5cm;" alt="">
                    {{-- <ul type="none" style="margin-top: -2px; margin-left: 10px; ">
                        <li><b style="font-size: 14px;">PESO, UNIPESSOAL. LDA</b></li>
                        <li><b style="font-size: 14px; margin-top: -120px;">RUA DE NU'U LARAN, NO. 17, BAIRRO DOS GRILLOS, DILI, TIMOR-LESTE</b></li>
                        <li><b style="font-size: 14px; margin-top: -120px;">MOBILE : (+670) 7758 4549 / 7372 7373</b></li>
                        <li><b style="font-size: 14px; margin-top: -120px;">EMAIL : sales.artesgrafica@gmail.com</b></li>
                    </ul> --}}
                </th>
            </thead>
        </table>
        <table>
           <strong>To : {{ $delivery_orders->customer }}</strong><br>
        </table>
        <table>
            <thead style="border: 1px solid black;">
                <tr cellpadding="1" align="center">
                    <th rowspan="3"></th>
                    <th rowspan="3" width="500px" style="text-align: center; border: 1px solid black; border-left: none !important; font-size: 18px;">DELIVERY ORDER </th>
                    <th width="300px" style="margin-left: 20px; padding-left: 5px; border: 1px solid black;" colspan="2"><b>No DO : {{ $delivery_orders->no_do }}</b></th>
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
                    <th colspan="2" style="padding-left: 5px; text-align: center;">Description</th>
                    <th style="padding-left: 5px; text-align: center; border: 1px solid black;">Qty</th>
                    <th style="padding-left: 5px; text-align: center; border: 1px solid black;">Unit</th>
                </tr>
                {{-- @foreach ($delivery_order_barangs as $v => $dob)
                    <tr class="trrx" style="font-size: 12px;" height="2px" border="1">
                        <td style="padding-left: 5px;" colspan="2">{{ $dob->description }}</td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;">{{ $dob->qty }}</td>
                        <td style="padding-left: 5px; text-align: center;">{{ $dob->unit }}</td>
                    </tr>
                @endforeach --}}
                    <tr class="trrx" style="font-size: 12px;" height="2px" border="1">
                        <td style="padding-left: 5px;" colspan="2">
                            <ul type="none" style="margin-top: 3px;">
                                @foreach ($delivery_order_barangs as $v => $dob)
                                    <li style="margin-top: -7px;">{{ $dob->description }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;">
                            <ul type="none" style="margin-top: 3px;">
                                @foreach ($delivery_order_barangs as $v => $dob)
                                    <li style="margin-top: -7px;">{{ $dob->qty }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td style="padding-left: 5px; text-align: center;">
                            <ul type="none" style="margin-top: 3px;">
                                @foreach ($delivery_order_barangs as $v => $dob)
                                    <li style="margin-top: -7px;">{{ $dob->unit }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr class="trrx">
                        <td style="padding-left: 5px; " height="80px" colspan="2"></td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;"></td>
                        <td style="padding-left: 5px; text-align: center;"></td>
                    </tr>
                    <tr style="border-top: 1px solid black;">
                        <td></td><td></td><td></td><td></td>
                    </tr>
            </tbody>
        </table>
        <br>
        <table width="680px">
            <tr>
                <td rowspan="2" width="550px">
                    {{-- <strong>Date</strong> : {{ $delivery_orders->created_at->toFormattedDateString() }} <br> --}}
                    <strong>Date</strong> : {{ showDate($delivery_orders->tanggal, 'd F Y') }} <br>
                    <strong>Name</strong> : {{ $delivery_orders->nama }} <br>
                    <strong>Phone</strong> : {{ $delivery_orders->phone }} <br>
                    <strong>Signature</strong> :  <br>
                </td>
                <td style="margin-top: -10px; padding-bottom: 20px; text-align: center; margin-right: 25px;">
                    <b>DILI, {{ showDate($delivery_orders->tanggal, 'd F Y') }}</b>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; margin-right: 25px; padding-top: 20px;">
                    <b>{{ $delivery_orders->pegawais['nama'] }}</b>
                </td>
            </tr>
        </table>

        <!-- /.row -->

    </div>


</div>
@endsection
