<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bills</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    {{-- <div style="border:1px solid red;width:100%;">
        <div style="background-color:bisque;display: inline-block;width:50%">left</div>
        <div style="background-color:gray;display: inline-block;width:50%;vertical-align: end;">right</div>
    </div> --}}
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
                                Invoice #: {{ $invoiceData['invoice_id'] }}<br />
                                Created: {{ $invoiceData['creation_date'] }}
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
                <td style="background-color: gray">Payment Method</td>
                <td style="background-color: gray"># Transaction Id</td>
            </tr>
            <tr class="details">
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