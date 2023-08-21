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
    <div class="invoice-box">
        <table class="table table-bordered" cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr style="width:100%">
                            <td class="title" style="width:100px;color:red">
                                le logo
                                {{-- <img src="{{ asset('images/logo.png') }}" style="width: 100%; max-width: 88px" /> --}}
                            </td>
                            <td style="width:330px"></td>
                            <td style="text-align:start">
                                Invoice #: {{ $invoiceData['invoice_id'] }}<br />
                                Created: {{ $invoiceData['creation_date'] }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
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
                <td>Payment Method</td>
                <td># Transaction Id</td>
            </tr>
            <tr class="details">
                <td>{{ $invoiceData['payment_method'] }}</td>
                <td>{{ $invoiceData['transaction_id'] }}</td>
            </tr>
            <tr class="heading">
                <td>Item</td>
                <td>Amount</td>
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