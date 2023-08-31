<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Admin kte
    </title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  </head>
  <body>
    <div class="invoice p-3 mb-3">
      <h5 class="text-center">Hello</h5>
      <div class="row">
        <div class="col-12">
          <h5>
            <i class="fas fa-globe"></i> Corp, Inc.
            <small class="float-right">Date: 2/10/2014</small>
          </h5>
        </div>
      </div>

      {{-- <div class="row" style="border:1px solid red;">
        <div class="col-12" style="height:100px">
        
            <small style="float: left; width: 25%; background-color: #cc6633;">
              795 Folsom Ave, Suite 600 <br>
              San Francisco, CA 94107 <br>
              Phone: (804) 123-5432 <br>
              Email: info@almasaeedstudio.com
            </small>
            <small class="" style="margin-left: 35%; width: 65%; background-color: #3366cc;">
              <p style="text-align: right"> Date: 2/10/2014</p>
              <p  style="text-align: right"> Date: 2/10/2014</p>
            </small>
         
        </div>
      </div> --}}


    
      
      {{-- table --}}
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
              <th>Eleve</th>
              <th>Genre</th>
              <th>Classe</th>
              <th>Montant Payé</th>
              </tr>
            </thead>
            <tbody>
                    <tr>
                      <td>Agbo Komlan</td>
                      <td>Feminin</td>
                      <td>CP2</td>
                      <td>$64.50</td>
                    </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="row">
      
        <div class="col-6" style="float: left; width: 25%;">
            <p class="lead">Payment Methods:</p>
            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                Etsy doostang zoodles
            </p>
            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                ifttt zimbra.
            </p>
        </div>
        
        <div class="col-6" style="margin-left: 50%; width: 75%;">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>$250.30</td>
                  </tr>
                  <tr>
                    <th>Tax (9.3%)</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      
      </div>
      
      
     

      </div>
  </body>
</html>