<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bills</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        .parent {
            border: 1px solid black;
            margin: 1rem;
            padding: 2rem 2rem;
            text-align: center;
        }
        .child {
            display: inline-block;
            border: 1px solid red;
            padding: 1rem 1rem;
            vertical-align: middle;
        }
        /*  */

    </style>
</head>
<body>
    {{--
        
        --}}

      {{-- <div>
        <div style="float: left; width: 25%; background-color: #cc6633;">
            <p style="text-align:left;border:1px solid red">hello</p>
            <p style="border:1px solid red">hello</p>
            <p style="text-align:left;border:1px solid red">hello</p>
        </div>
        <div style="margin-left: 35%; width: 65%; background-color: #3366cc;">
            <p style="text-align:right;border:1px solid red">Baby-1</p>
            <p style="text-align:right;border:1px solid red">Baby-2</p>
            <p style="text-align:right;border:1px solid red">Baby-3</p>
        </div>
      </div> --}}

    {{--  --}}
        
    {{--  --}}
    <div class="invoice-box">
        <table class="table table-bordered" cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table class="table table-bordered">
                        <tr style="">
                            <td class="title" style="color:red">
                                le logo
                                {{-- <img src="{{ asset('images/logo.png') }}" style="width: 100%; max-width: 88px" /> --}}
                            </td>
                           
                            <td style="">
                                <p style="text-align:right;">Invoice #: {{ $invoiceData['invoice_id'] }}</p>
                                <p style="text-align:right;">Created: {{ $invoiceData['creation_date'] }}</p>
                               
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table class="table table-bordered">>
                        <tr>
                            <td>
                                Godaddy, LLC.<br />
                                12345 Sunny Road<br />
                                Sunnyville, CA 12345
                            </td>
                            <td style="float:right;">
                                Godaddy LLC.<br />
                                John Wick<br />
                                john@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td style="background-color: gray">Eleve</td>
                <td style="background-color: gray">Genre</td>
                <td style="background-color: gray">Classe</td>
                <td style="background-color: gray">Somme Payé</td>
            </tr>
            <tr class="details">
                <td>{{ $invoiceData['payment_method'] }}</td>
                <td>{{ $invoiceData['transaction_id'] }}</td>
                <td>{{ $invoiceData['payment_method'] }}</td>
                <td>{{ $invoiceData['transaction_id'] }}</td>
            </tr>
            <tr class="heading">
                <td style="background-color: gray">Item</td>
                <td style="background-color: gray">Amount</td>
            </tr>
            @foreach($invoiceItems as $invoiceItem)
                <tr class="item @if($loop->last) last @endif">
                    <td>{{ $invoiceItem['item'] }}</td>
                    <td>${{ $invoiceItem['amount'] }}</td>
                </tr>
            @endforeach
            <tr class="total">
                <td></td>
                <td>Total: ${{ $invoiceData['total_amount'] }}</td>
            </tr>
        </table>
    </div>
</body>
</html>