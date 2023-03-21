@extends('layouts.print')
@section('content')
<div class="container">
    <div class="invoice">
        <!-- Table row -->
        <table>
            <thead>
                <th width="170px">
                    <img src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso"
                    class="brand-image" style="width: 85px; height: 70px; margin-left: 100px;">
                </th>
                <th width="500px" style="margin-top: -10px;">
                    <ul type="none" style="margin-top: 15px; margin-left: 10px; font-style:unset;">
                        <li><b style="font-size: 12px;">PESO, UNIPESSOAL. LDA</b></li>
                        <li><b style="font-size: 12px; margin-top: -50px;">RUA DE NU'U LARAN, NO. 17, BAIRRO DOS GRILLOS, DILI, TIMOR-LESTE</b></li>
                        <li><b style="font-size: 12px; margin-top: -50px;">MOBILE : (+670) 7758 4549 / 7372 7373</b></li>
                        <li><b style="font-size: 12px; margin-top: -50px;">EMAIL : sales.artesgrafica@gmail.com</b></li>
                    </ul>
                </th>
            </thead>
        </table>
        <hr style="border: 1px solid black; margin-top: -2px;">
        <table>
            <thead style="border: 1px solid black;">
                <tr cellpadding="1" align="center">
                    <th rowspan="3" width="100px" style="text-align: center; ">{{ $invoices->customer }}</th>
                    <th rowspan="3" colspan="2" width="150px" style="text-align: center; border: 1px solid black;">INVOICES </th>
                    <th width="50px" style="margin-left: 20px; padding-left: 5px;"><b>No</b></th>
                    <th colspan="2" width="300px" style="margin-left: 20px; padding-left: 5px; border: 1px solid black;"><b>{{ $invoices->no_inv }}</b></th>
                </tr>
                <tr>
                    <th style="padding-left: 5px; border: 1px solid black;"><b>No PO </b></th>
                    <th colspan="2" style="margin-left: 20px; padding-left: 5px; border: 1px solid black;"><b>:.....</b></th>
                </tr>
                <tr>
                    <th style="padding-left: 5px; border: 1px solid black;"><b>No J.O : </b></th>
                    <th colspan="2" style="margin-left: 20px; padding-left: 5px; border: 1px solid black;"><b>:</b></th>
                </tr>
            </thead>
            <tbody>
                <tr style="border: 1px solid black; text-align: center;">
                    <th colspan="2" width="2000px" style="padding-left: 5px;">Description</th>
                    <th style="padding-left: 5px; border: 1px solid black;">Qty</th>
                    <th style="padding-left: 5px; border: 1px solid black;">Unit</th>
                    <th style="padding-left: 5px; border: 1px solid black;">Unit Price</th>
                    <th style="padding-left: 5px; border: 1px solid black;">Price USD</th>
                </tr>
                @foreach ($invoices_barangs as $v => $ivb)
                    <tr class="trrx">
                        <td style="padding-left: 5px;" colspan="2">{{ $ivb->description }}</td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;">{{ $ivb->qty }}</td>
                        <td style="padding-left: 5px; text-align: center;">{{ $ivb->unit }}</td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;">$ {{ number_format($ivb->harga, 2, '.', '') }}</td>
                        <td style="padding-left: 5px; text-align: center;">$ {{ number_format($ivb->jumlah, 2, '.', '') }}</td>
                    </tr>
                @endforeach
                <tr class="trrx">
                    <td style="padding-left: 5px; " height="100px" colspan="2"></td>
                    <td class="trrx" style="padding-left: 5px; text-align: center;"></td>
                    <td class="trrx" style="padding-left: 5px; text-align: center;"></td>
                    <td class="trrx" style="padding-left: 5px; text-align: center;"></td>
                    <td style="padding-left: 5px; text-align: center;"></td>
                </tr>
                <tr style="border-top: 1px solid black; text-align: center;">
                    <th colspan="5" style="padding-left: 5px; border: 1px solid black;">TOTAL</th>
                    <td style="border: 1px solid black;">$ {{ number_format($invoices->total, 2, '.', '') }}</td>
                </tr>
            </tbody>
        </table>

        <br>
        <table width="680px">
            <tr>
                <td rowspan="2" width="500px" style="font-size: 12px; line-height: 15px;">
                    <strong>PAYMENT SHOULD BE :  {{ $invoices->terbilang }}<br></strong>
                    <strong>IBAN : TL38 0050 6010 0005 4765 620 <br></strong>
                    <strong>BANK MANDIRI : 601-00-0054765-6 <br></strong>
                    <strong>RECEIVED :
                    <strong>Date : {{ $invoices->tanggal }}<br></strong>
                    <strong>Name : {{ $invoices->nama }}<br></strong>
                    <strong>Phone : {{ $invoices->telp }}<br></strong>
                    <strong>Signature :  <br></strong>
                </td>
                <td style="text-align: center;">
                    <b>DILI, Jan, 12 2023</b>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; padding-top: 10px;">
                    <b>( {{ $invoices->pegawais['nama'] }} )</b>
                </td>
            </tr>
        </table>

        <!-- /.row -->

    </div>


</div>
@endsection
