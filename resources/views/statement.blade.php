@extends('layouts.app')

@section('content')
<style>
    
    .container{
        width: 100%;
                height: 100%;
                padding: 20px;
                background: white;
                border-radius: 4px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, .3);
    }
    table, th, td {
    border:1px solid black;
    }
</style>
<div class="container">
    <h1>Statement of account</h1>
    <br><br>
    <table style="width:100%;background:white; height:30%;">
        <tr>
            <th style="padding: 15px;"> # </th>
            <th style="padding: 15px;"> DATETIME </th>
            <th style="padding: 15px;"> AMOUNT </th>
            <th style="padding: 15px;"> TYPE </th>
            <th style="padding: 15px;"> DETAILS </th>
            <th style="padding: 15px;"> BALANCE </th>
        </tr>
        @php $i=1;@endphp
        @foreach($transaction as $trans)
        <tr>
            <td style="padding: 15px;">{{$i}}</td>
            <td style="padding: 15px;">{{ date('d-m-Y h:i A',strtotime($trans->created_at)) }}</td>
            <td style="padding: 15px;">{{$trans->amount}}</td>
            <td style="padding: 15px;">{{$trans->type}}</td>
            <td style="padding: 15px;">{{$trans->details}}</td>
            <td style="padding: 15px;">{{$trans->balance}}</td>
        </tr>
        @php $i=$i+1;@endphp
        @endforeach
        
    </table>
           
</div>

@endsection