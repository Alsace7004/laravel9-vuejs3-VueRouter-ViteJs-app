<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Bulletin
    </title>
    <style>
          .container_1{
            font-size: 0;
            text-align: justify;
            }
            .container_1::after{
                content: "";
                display: inline-block;
                width: 100%;
                height: 0;
                visibility: hidden;
            }
            .class-1, .class-2{
                display: inline-block;
                font-size: 14px;
                text-align: left;
            }

            

            
            /*  */
            .container_2{
              display: table;
              width: 100%;
            }
            .table_row{
              display: table-row;
              height: 20px;
            }
            .table_cell{
              border: 1px solid #000;
              /* background-color: lightsalmon; */
              display: table-cell;
              padding: 2px;
            
              width: 50%;
            }

          
    </style>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  </head>
  <body class="" style="border:1px solid red;width:100vw;font-size:10px">
    
    <div class="invoice p-5 mb-3" style="">
      <div class="row mb-5 mt-5">
        <div class="col-12">
            <div class="container_1">
                <div class="class-1">
                    <i class="fas fa-globe"></i><small style="display: block;"><strong>Ecole :</strong>  Mariama</small> 
                    <i class="fas fa-globe"></i><small style="display: block;"><strong>Année Scolaire :</strong>  2022-2023</small>
                </div>
                <div class="class-1">
                    <i class="fas fa-globe"></i><small style="display: block;text-align:center"><strong style="text-transform: uppercase;">Bulletin d'evaluation</strong></small> 
                    <i class="fas fa-globe"></i><small style="display: block;text-align:center"><strong style="text-transform: uppercase">du Trimestre 1</strong></small>
                </div>
                <div class="class-2">
                    <small style="display: block;" ><strong>Classe</strong>  CP1</small> 
                    <small style="display: block;" ><strong>Effectif :</strong>  5</small>
                </div>
            </div>
            {{--  --}}
            <div class="container_1" style="margin-top:2rem">
                <div class="class-1">
                    <i class="fas fa-globe"></i><small style="display: block;"><strong>Nom :</strong>  Afi</small> 
                    <i class="fas fa-globe"></i><small style="display: block;"><strong>Prenom :</strong>  Enyonam</small>
                </div>
                <div class="class-2">
                    <small style="display: block;" ><strong>Sexe</strong>  Masculin</small> 
                    <small style="display: block;" ><strong>Status :</strong>  Nouveau</small>
                </div>
            </div>
        </div>
      </div>
      
      {{-- table --}}
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th style="width:5%;">Matieres</th>
                <th colspan="2" style="width:10px;text-align:center;">Notes</th>
                <th style="width:5%;">Exa</th>
                <th style="width:5%;">Moy</th>
                <th style="width:5%;">Coeff</th>
                <th style="width:5%;">Total Coeff</th>
                <th style="width:5%;">Appreciation</th>
                <th style="width:5%;">Professeur</th>
                <th style="width:5%;">Signature</th>
              </tr>
            </thead>
            <tbody>
                    <tr>
                      <td style="width:2px">Fr</td>
                      <td style="width:2px">18</td>
                      <td style="width:2px">18</td>
                      <td style="width:2px">20</td>
                      <td style="width:2px">19.25</td>
                      <td style="width:2px">1</td>
                      <td style="width:2px">4</td>
                      <td style="width:100px">TRES INSUFFISANT</td>
                      <td style="width:2px">Kodjo AFI</td>
                      <td style="width:2px">signature</td>
                    </tr>
                    <tr>
                      <td>Ang</td>
                      <td>18</td>
                      <td>18</td>
                      <td>20</td>
                      <td>19.25</td>
                      <td>1</td>
                      <td>4</td>
                      <td>INSUFFISANT</td>
                      <td>Kodjo AFI</td>
                      <td>signature</td>
                    </tr>
                    <tr>
                      <td>Math</td>
                      <td>18</td>
                      <td>18</td>
                      <td>20</td>
                      <td>19.25</td>
                      <td>1</td>
                      <td>4</td>
                      <td>PASSABLE</td>
                      <td>Kodjo AFI</td>
                      <td>signature</td>
                    </tr>
                    <tr>
                      <td>PCT</td>
                      <td>18</td>
                      <td>18</td>
                      <td>20</td>
                      <td>19.25</td>
                      <td>1</td>
                      <td>4</td>
                      <td>ASSEZ BIEN</td>
                      <td>Kodjo AFI</td>
                      <td>signature</td>
                    </tr>
                    <tr>
                      <td>SVT</td>
                      <td>18</td>
                      <td>18</td>
                      <td>20</td>
                      <td>19.25</td>
                      <td>1</td>
                      <td>4</td>
                      <td>BIEN</td>
                      <td>Kodjo AFI</td>
                      <td>signature</td>
                    </tr>
                    <tr>
                      <td>ECM</td>
                      <td>18</td>
                      <td>18</td>
                      <td>20</td>
                      <td>19.25</td>
                      <td>1</td>
                      <td>4</td>
                      <td>TRES BIEN</td>
                      <td>Kodjo AFI</td>
                      <td>signature</td>
                    </tr>
                    <tr>
                      <td>HG</td>
                      <td>18</td>
                      <td>18</td>
                      <td>20</td>
                      <td>19.25</td>
                      <td>1</td>
                      <td>4</td>
                      <td>EXCELLENT</td>
                      <td>Kodjo AFI</td>
                      <td>signature</td>
                    </tr>
                    <tr>
                      <td>EPS</td>
                      <td>18</td>
                      <td>18</td>
                      <td>20</td>
                      <td>19.25</td>
                      <td>1</td>
                      <td>4</td>
                      <td>EXCELLENT</td>
                      <td>Kodjo AFI</td>
                      <td>signature</td>
                    </tr>
            </tbody>
            <tfoot>
                <tr >
                    <th style="" colspan= "5">TOTAUX</th>
                    <th style="" colspan= "" >
                        <span>
                            <span>8</span>
                        </span>
                    </th>
                    <th style="" colspan= "" >
                            <span>
                                  145.08
                            </span>
                    </th>
                    <th style="" colspan= ""></th>
                    <th style="" colspan= ""></th>
                    <th style="" colspan= ""></th>
                </tr>
            </tfoot>
          </table>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">

              {{-- new --}}
              
              <div class="container_2">
                <div class="table_row">
                  <div class="table_cell">
                    <div class="container_2">
                      <div class="table_row">
                        <div class="table_cell">
                          <small style="text-transform:uppercase;display:block;text-align:center;background-color:gray;font-size:10px"><strong>Moyennes </strong></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;position: relative">Moy. du Trimestre 1 :<span style="position:absolute;right:0;font-weight:bold">18.47</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;position: relative">Moy. du Trimestre 2  :<span style="position:absolute;right:0;font-weight:bold">18.47</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;position: relative">Moy. du Trimestre 3 :<span style="position:absolute;right:0;font-weight:bold">18.47</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;position: relative">Moy.        General :<span style="position:absolute;right:0;font-weight:bold">18.47</span></small> 
                        </div>
                        <div class="table_cell">
                          <small style="text-transform:uppercase;display:block;text-align:center;background-color:gray;font-size:10px"><strong>Classements </strong></small> 

                          <small style="text-transform:uppercase;font-size:9px;display:inline-block;width:100%;">CLASSEMENT :                                    <span style="text-transform:none;float:right;font-weight:bold">1 er</span></small> 
                          <small style="text-transform:uppercase;font-size:9px;display:inline-block;width:100%;position: relative;">CLASSEMENT  :                <span style="text-transform:none;position:absolute;right:0;font-weight:bold">2 eme</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;display:inline-block;width:100%;">CLASSEMENT :                      <span style="text-transform:none;float:right;font-weight:bold">3 eme</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;display:inline-block;width:100%;position: relative;">CLASSEMENT :   <span style="text-transform:none;position:absolute;right:0;font-weight:bold">4 eme</span></small> 
                        </div>
                      </div>
                    </div> 
                  </div>
                  <div class="table_cell">
                    <small style="text-transform:uppercase;display:block;text-align:center;background-color:gray;font-size:10px" ><strong>Observation du Chef d'Etablissement </strong></small> 
                    <small style="margin:1rem 0px 1rem 0px;text-transform:uppercase;display:block;font-size:9px">Travail  :<span style="font-weight:bold;">........................</span></small> 
                    <small style="text-transform:uppercase;display:block;font-size:9px">Conduite :<span style="font-weight:bold">........................</span></small> 
                  </div>
                </div>
              </div>
              {{--  --}}
              <div class="container_2">
                <div class="table_row">
                  <div class="table_cell">
                    <div class="container_2">
                      <div class="table_row">
                        <div class="table_cell">
                          <small style="text-transform:uppercase;display:block;text-align:center;background-color:gray;font-size:10px"><strong>Bilan de la classe </strong></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;position: relative">MOYENNE LA PLUS FORTE :<span style="position:absolute;right:0;font-weight:bold">18.47</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;position: relative">MOYENNE LA PLUS FAIBLE  :<span style="position:absolute;right:0;font-weight:bold">18.47</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;position: relative">MOYENNE DE LA CLASSE :<span style="position:absolute;right:0;font-weight:bold">18.47</span></small> 
                          <small style="text-transform:uppercase;display:block;text-align:center;background-color:gray;font-size:10px"><strong>Décision du Conseil </strong></small> 
                          <div style="height: 2rem;"></div>
                        </div>
                        <div class="table_cell">
                          <small style="text-transform:uppercase;display:block;text-align:center;background-color:gray;font-size:10px"><strong>Distinction </strong></small> 

                          <small style="text-transform:uppercase;font-size:9px;display:inline-block;width:100%;">Félicitation : <span style="font-weight:bold;">........................</span>                </small> 
                          <small style="text-transform:uppercase;font-size:9px;display:inline-block;width:100%;position: relative;">Encouragement  :                  <span style="font-weight:bold;">..................</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;display:inline-block;width:100%;">Tableau d'honneur :  <span style="font-weight:bold;">..............</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;display:inline-block;width:100%;position: relative;">Avertissement :      <span style="font-weight:bold;">........................</span></small> 
                          <small style="text-transform:uppercase;display:block;font-size:9px;display:inline-block;width:100%;">Blame :              <span style="font-weight:bold;">........................</span></small> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table_cell">
                    
                    <small style="text-transform:uppercase;display:block;text-align:center;font-size:10px"><strong>Le directeur</strong></small> 
                    <div style="height:5rem"></div>
                    <small style="text-transform:uppercase;display:block;text-align:right"><strong>Lomé le, 04/09/2023</strong></small> 
                  </div>
                </div>
              </div>
              
        </div>
      </div>
      
      
     

      </div>
  </body>
</html>