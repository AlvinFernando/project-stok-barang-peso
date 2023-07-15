@extends('layouts.print')
@section('content')
<div class="container">
    <div class="invoice">
        <!-- Table row -->
        <table height="20%" class="tableinv">
            <thead>
                <th width="100px">
                    <img src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso"
                    class="brand-image" style="width: 100px; height: 80px; margin-top: -5px;">
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
            <thead style="border: 1px solid black;">
                <tr cellpadding="1" align="center">
                    <th rowspan="3" width="100px" style="text-align: center; ">{{ $invoices->customer }}</th>
                    <th rowspan="3" colspan="2" width="150px" style="text-align: center; border: 1px solid black;">INVOICE</th>
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
                {{-- @foreach ($invoices_barangs as $v => $ivb)
                    <tr class="trrx">
                        <td style="padding-left: 5px;" colspan="2">{{ $ivb->description }}</td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;">{{ $ivb->qty }}</td>
                        <td style="padding-left: 5px; text-align: center;">{{ $ivb->unit }}</td>
                        <td class="trrx" style="padding-left: 5px; text-align: center;">$ {{ number_format($ivb->harga, 2, '.', ',') }}</td>
                        <td style="padding-left: 5px; text-align: center;">$ {{ number_format($ivb->jumlah, 2, '.', ',') }}</td>
                    </tr>
                @endforeach --}}
                <tr class="trrx">
                    <td style="padding-left: 5px;" colspan="2">
                        <ul type="none" style="margin-top: 3px;">
                            @foreach($invoices_barangs as $item)
                                <li style="margin-top: -7px;">{{ $item->description }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="trrx" style="padding-left: 5px; text-align: center;">
                        <ul type="none" style="margin-top: 3px;">
                            @foreach($invoices_barangs as $item)
                                <li style="margin-top: -7px;">{{ $item->qty }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td style="padding-left: 5px; text-align: center;">
                        <ul type="none" style="margin-top: 3px;">
                            @foreach($invoices_barangs as $item)
                                <li style="margin-top: -7px;">{{ $item->unit }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="trrx" style="padding-right: 5px; text-align: right;">
                        <ul type="none" style="margin-top: 3px;">
                            @foreach($invoices_barangs as $item)
                                <li style="margin-top: -7px;">$ {{ number_format($item->harga, 2, '.', ',') }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td style="padding-right: 5px; text-align: right;">
                        <ul type="none" style="margin-top: 3px;">
                            @foreach($invoices_barangs as $item)
                                <li style="margin-top: -7px;">$ {{ number_format($item->jumlah, 2, '.', ',') }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr class="trrx">
                    <td style="padding-left: 5px; " height="60px" colspan="2"></td>
                    <td class="trrx" style="padding-left: 5px; text-align: center;"></td>
                    <td class="trrx" style="padding-left: 5px; text-align: center;"></td>
                    <td class="trrx" style="padding-left: 5px; text-align: center;"></td>
                    <td style="padding-left: 5px; text-align: center;"></td>
                </tr>
                <tr style="border-top: 1px solid black; text-align: center;">
                    <th colspan="5" style="padding-left: 5px; border: 1px solid black;">TOTAL</th>
                    <td style="border: 1px solid black; padding-right: 5px; text-align: right;">$ {{ number_format($invoices->total, 2, '.', ',') }}</td>
                </tr>
            </tbody>
        </table>

        <br>
        <table width="720px">
            <tr>
                <td rowspan="2" width="500px" style="font-size: 12px; line-height: 15px;">
                    <strong>PAYMENT SHOULD BE&nbsp; :  {{ $invoices->terbilang }}<br></strong>
                    {{-- <strong>IBAN&ensp;&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;
                                &ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;: TL38 0050 6010 0005 4765 620 <br></strong> --}}
                    <strong>BANK MANDIRI&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;: 601-00-0054765-6 <br></strong>
                    <strong>RECEIVED&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&ensp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&nbsp; : <br></strong>
                    <strong>Date&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;
                                &ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;
                                &ensp;&nbsp;&ensp;&nbsp;&ensp;: {{ showDate($invoices->tanggal, 'd F Y') }}<br></strong>
                    <strong>Name&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;
                                &ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;
                                &ensp;&nbsp;&ensp;: {{ $invoices->nama }}<br></strong>
                    <strong>Phone&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;
                                &nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;: {{ $invoices->telp }}<br></strong>
                    <strong>Signature&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&nbsp;&ensp;:  <br></strong>
                </td>
                <td style="text-align: center; padding-bottom: 30px; padding-left: 40px; font-size: 12px;">
                    <b>DILI, {{ showDate($invoices->tanggal, 'd F Y') }}</b>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; padding-top: 30px; padding-left: 40px;">
                    <b>( {{ $invoices->pegawais['nama'] }} )</b>
                </td>
            </tr>
        </table>

        <!-- /.row -->

    </div>


</div>
@endsection
