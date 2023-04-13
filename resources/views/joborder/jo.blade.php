@extends('layouts.print')
@section('content')
<div class="container">
    <div class="invoice">
        <!-- Table row -->
        <table height="35%">
            <thead>
                <th width="120px">
                    <img src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso"
                    class="brand-image" style="width: 100px; height: 75px; margin-top:-20px; margin-left: 45px;">
                </th>
                <th width="545px" style="margin-top: -10px;">
                    <ul type="none" style="margin-top: -2px; margin-left: 10px; font-family: Lucida Console, Courier, monospace;">
                        <li><b style="font-size: 14px;">PESO, UNIPESSOAL. LDA</b></li>
                        <li><b style="font-size: 14px; margin-top: -120px;">RUA DE NU'U LARAN, NO. 17, BAIRRO DOS GRILLOS, DILI, TIMOR-LESTE</b></li>
                        <li><b style="font-size: 14px; margin-top: -120px;">MOBILE : (+670) 7758 4549 / 7372 7373</b></li>
                        <li><b style="font-size: 14px; margin-top: -120px;">EMAIL : sales.artesgrafica@gmail.com</b></li>
                    </ul>
                </th>
            </thead>
        </table>
        <hr style="border: 2px; border-color:black;">
        <table>
            <tr>
                <td  width="500px"><b style="font-size: 24px; margin-left: 37px;">JOB ORDER (Production)</b><br></td>
                <td  width="175px" style="border: 1px solid black; text-align: center;"><b style="font-size: 20px;">No. JO : {{ $job_orders->no_jo }}</b></td>
                {{-- <td><b style="font-size: 16px;">Tanggal : {{ $job_orders->created_at->toFormattedDateString() }}</b></td> --}}
            </tr>
        </table>
        <table width="90%" style="margin-left: 35px; font-size: 14px;" height="250px;">
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Customer </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="10" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->customer }}
                </td>
            </tr>
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Order Type </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="10" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->jenis_order }}
                </td>
            </tr>
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Size </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="4" width="200px" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->size }}
                </td>
                <td width="2px" style="padding: 2px;">
                    <b style="font-size: 14px;">Pages </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="4" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->pages }}
                </td>
            </tr>
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Materials </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="10" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->materials }}
                </td>
            </tr>
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;"> </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="10" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->materials_2 }}
                </td>
            </tr>
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;"> </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="10" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->materials_3 }}
                </td>
            </tr>
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Color </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="10" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->color }}
                </td>
            </tr>
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Finishing </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="10" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->finishing }}
                </td>
            </tr>
            {{-- QTY n DEADLINE --}}
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Quantity</b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="4" width="200px" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->qty }}
                </td>
                <td width="2px" style="padding: 2px;">
                    <b style="font-size: 14px;">Deadline </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td colspan="4" style="padding: 2px; border-bottom: 1px solid black; font-size: 16px;">
                    {{ $job_orders->deadline }}
                </td>
            </tr>
            {{-- /QTY n DEADLINE --}}
            <tr>
                <td width="55px" style="padding: 2px;">
                    <b style="font-size: 14px;">Attented By</b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td width="65px" style="padding: 2px; border-bottom: 1px solid black; font-size: 14px;">
                    {{ $job_orders->pegawais['nama'] }}
                </td>
                <td width="2px" style="padding: 2px;">
                    <b style="font-size: 14px;">Date </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td width="80px" style="padding: 2px; border-bottom: 1px solid black; font-size: 14px;">
                    {{ showDate($job_orders->tanggal, 'd F Y') }}
                </td>
                <td width="2px" style="padding: 2px;">
                    <b style="font-size: 14px;">Times</b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td width="20px" style="padding: 2px; border-bottom: 1px solid black; font-size: 14px;">
                    {{ $job_orders->jam }}
                </td>
                <td width="30px" style="padding: 2px;">
                    <b style="font-size: 14px;">Sign </b>
                </td>
                <td width="10px">
                    <b style="font-size: 14px;">:</b>
                </td>
                <td width="20px" style="padding: 2px; border-bottom: 1px solid black; font-size: 14px;">

                </td>
            </tr>
            {{--
            <tr>
                <td style="padding: 3px;">
                    <b style="font-size: 14px;">Attented By : </b> {{ $job_orders->pegawais['nama'] }}
                </td>
                <td style="padding: 3px;">
                    <b style="font-size: 14px; margin-left: 30px;">Date : </b> {{ $job_orders->created_at->toFormattedDateString() }}
                </td>
                <td style="padding: 3px;">
                    <b style="font-size: 14px; margin-left: 30px;">Times : {{ $job_orders->jam }}</b>
                </td>
                <td style="padding: 3px;">
                    <b style="font-size: 14px; margin-left: 13px;">Sign : </b>
                </td>
            </tr> --}}
        </table>
    </div>


</div>
@endsection
