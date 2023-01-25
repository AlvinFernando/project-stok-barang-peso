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
        <hr style="border: 1px solid black; ">
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
                    {{ $job_orders->created_at->toFormattedDateString() }}
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
