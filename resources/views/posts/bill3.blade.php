<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      A Simple Invoice Template Responsive and clean with HTML CSS SCSS
    </title>
    
   <style>
               
            * {
            margin: 0 auto;
            padding: 0 auto;
            user-select: none;
            }

            body {
            padding: 20px;
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            -webkit-font-smoothing: antialiased;
            background-color: #dcdcdc;
            }

            .wrapper-invoice {
            display: flex;
            justify-content: center;
            }
            .wrapper-invoice .invoice {
            height: auto;
            background: #fff;
            padding: 5vh;
            margin-top: 5vh;
            max-width: 110vh;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #dcdcdc;
            }
            .wrapper-invoice .invoice .invoice-information {
            float: right;
            text-align: right;
            }
            .wrapper-invoice .invoice .invoice-information b {
            color: "#0F172A";
            }
            .wrapper-invoice .invoice .invoice-information p {
            font-size: 2vh;
            color: gray;
            }
            .wrapper-invoice .invoice .invoice-logo-brand h2 {
            text-transform: uppercase;
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-size: 2.9vh;
            color: "#0F172A";
            }
            .wrapper-invoice .invoice .invoice-logo-brand img {
            max-width: 100px;
            width: 100%;
            object-fit: fill;
            }
            .wrapper-invoice .invoice .invoice-head {
            display: flex;
            margin-top: 8vh;
            }
            .wrapper-invoice .invoice .invoice-head .head {
            width: 100%;
            box-sizing: border-box;
            }
            .wrapper-invoice .invoice .invoice-head .client-info {
            text-align: left;
            }
            .wrapper-invoice .invoice .invoice-head .client-info h2 {
            font-weight: 500;
            letter-spacing: 0.3px;
            font-size: 2vh;
            color: "#0F172A";
            }
            .wrapper-invoice .invoice .invoice-head .client-info p {
            font-size: 2vh;
            color: gray;
            }
            .wrapper-invoice .invoice .invoice-head .client-data {
            text-align: right;
            }
            .wrapper-invoice .invoice .invoice-head .client-data h2 {
            font-weight: 500;
            letter-spacing: 0.3px;
            font-size: 2vh;
            color: "#0F172A";
            }
            .wrapper-invoice .invoice .invoice-head .client-data p {
            font-size: 2vh;
            color: gray;
            }
            .wrapper-invoice .invoice .invoice-body {
            margin-top: 8vh;
            }
            .wrapper-invoice .invoice .invoice-body .table {
            border-collapse: collapse;
            width: 100%;
            }
            .wrapper-invoice .invoice .invoice-body .table thead tr th {
            font-size: 2vh;
            border: 1px solid #dcdcdc;
            text-align: left;
            padding: 1vh;
            background-color: #eeeeee;
            }
            .wrapper-invoice .invoice .invoice-body .table tbody tr td {
            font-size: 2vh;
            border: 1px solid #dcdcdc;
            text-align: left;
            padding: 1vh;
            background-color: #fff;
            }
            .wrapper-invoice .invoice .invoice-body .table tbody tr td:nth-child(2) {
            text-align: right;
            }
            .wrapper-invoice .invoice .invoice-body .flex-table {
            display: flex;
            }
            .wrapper-invoice .invoice .invoice-body .flex-table .flex-column {
            width: 100%;
            box-sizing: border-box;
            }
            .wrapper-invoice .invoice .invoice-body .flex-table .flex-column .table-subtotal {
            border-collapse: collapse;
            box-sizing: border-box;
            width: 100%;
            margin-top: 2vh;
            }
            .wrapper-invoice .invoice .invoice-body .flex-table .flex-column .table-subtotal tbody tr td {
            font-size: 2vh;
            border-bottom: 1px solid #dcdcdc;
            text-align: left;
            padding: 1vh;
            background-color: #fff;
            }
            .wrapper-invoice .invoice .invoice-body .flex-table .flex-column .table-subtotal tbody tr td:nth-child(2) {
            text-align: right;
            }
            .wrapper-invoice .invoice .invoice-body .invoice-total-amount {
            margin-top: 1rem;
            }
            .wrapper-invoice .invoice .invoice-body .invoice-total-amount p {
            font-weight: bold;
            color: "#0F172A";
            text-align: right;
            font-size: 2vh;
            }
            .wrapper-invoice .invoice .invoice-footer {
            margin-top: 4vh;
            }
            .wrapper-invoice .invoice .invoice-footer p {
            font-size: 1.7vh;
            color: gray;
            }

            .copyright {
            margin-top: 2rem;
            text-align: center;
            }
            .copyright p {
            color: gray;
            font-size: 1.8vh;
            }

            @media print {
            .table thead tr th {
                -webkit-print-color-adjust: exact;
                background-color: #eeeeee !important;
            }

            .copyright {
                display: none;
            }
            }
            .rtl {
            direction: rtl;
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            }
            .rtl .invoice-information {
            float: left !important;
            text-align: left !important;
            }
            .rtl .invoice-head .client-info {
            text-align: right !important;
            }
            .rtl .invoice-head .client-data {
            text-align: left !important;
            }
            .rtl .invoice-body .table thead tr th {
            text-align: right !important;
            }
            .rtl .invoice-body .table tbody tr td {
            text-align: right !important;
            }
            .rtl .invoice-body .table tbody tr td:nth-child(2) {
            text-align: left !important;
            }
            .rtl .invoice-body .flex-table .flex-column .table-subtotal tbody tr td {
            text-align: right !important;
            }
            .rtl .invoice-body .flex-table .flex-column .table-subtotal tbody tr td:nth-child(2) {
            text-align: left !important;
            }
            .rtl .invoice-body .invoice-total-amount p {
            text-align: left !important;
            }
   </style>

  </head>
  <body>
    <section class="wrapper-invoice">
      <!-- switch mode rtl by adding class rtl on invoice class -->
      <div class="invoice">
        <div class="invoice-information" style="margin-left: 35%; width: 65%; background-color: #3366cc;">
          <p><b>Invoice #</b> : 12345</p>
          <p><b>Created Date </b>: May, 07 2022</p>
          <p><b>Due Date</b> : May, 09 2022</p>
        </div>
        <!-- logo brand invoice -->
        <div class="invoice-logo-brand" style="float: left; width: 25%; background-color: #cc6633;">
         <h2>Tampsh.</h2> 
       {{--    <img src="./assets/image/tampsh.png" alt="" /> --}}
        </div>
        <!-- invoice head -->
        <div class="invoice-head">
          <div class="head client-info" style="float: left; width: 25%; background-color: #cc6633;">
            <p>Tampsh, Inc.</p>
            <p>NPWP: 12.345.678.910.111213.1415</p>
            <p>Bondowoso, Jawa timur</p>
            <p>Jln. Rengganis 05, Bondowoso</p>
          </div>
          <div class="head client-data" style="margin-left: 35%; width: 65%; background-color: #3366cc;">
            <p>-</p>
            <p>Mohammad Sahrullah</p>
            <p>Bondowoso, Jawa timur</p>
            <p>Jln. Duko Kembang, Bondowoso</p>
          </div>
        </div>
        <!-- invoice body-->
        <div class="invoice-body">
          <table class="table">
            <thead>
              <tr>
                <th>Item Description</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Template Invoice</td>
                <td>Rp.75.000</td>
              </tr>
              <tr>
                <td>tax</td>
                <td>Rp.5.000</td>
              </tr>
            </tbody>
          </table>
          <div class="flex-table">
            <div class="flex-column"></div>
            <div class="flex-column">
              <table class="table-subtotal">
                <tbody>
                  <tr>
                    <td>Subtotal</td>
                    <td>Rp.80.000</td>
                  </tr>
                  <tr>
                    <td>PPN 10%</td>
                    <td>Rp.5.000</td>
                  </tr>
                  <tr>
                    <td>Credit</td>
                    <td>Rp.0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- invoice total  -->
          <div class="invoice-total-amount">
            <p>Total : Rp.80.000</p>
          </div>
        </div>
        <!-- invoice footer -->
        <div class="invoice-footer">
          <p>Thankyou, happy shopping again</p>
        </div>
      </div>
    </section>
    <div class="copyright">
      <p>Created by ❤ Mohammad Sahrullah</p>
    </div>
  </body>
</html>