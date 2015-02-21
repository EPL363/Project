<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Προφίλ Χρήστη</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author" content="">

            <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
            <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
            <!--script src="js/less-1.3.3.min.js"></script-->
            <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet" media="screen">
            <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
          <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
          <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
          <![endif]-->
        
            <script type="text/javascript" src="js/jquery.min.js"></script>
	       <script type="text/javascript" src="js/bootstrap.min.js"></script>
	       <script type="text/javascript" src="js/scripts.js"></script>
        
            
    </head>
    
    <body>
    
        <div class="container">
            
            <table  class="table table-hover">
                <thead>
            <tr>
                            <th>#</th>
                            <th>Χειμική Ουσία</th>
                            <th>Αριθμός Cas </th>
            </tr>
                </thead>
                <tbody>
                <tr data-toggle="modal" data-target="#chemicalModal">
                    <td>1</td>
                    <td>Chemical Substance A</td>
                    <td>xxxxxxx-xx-x</td>
                </tr>
                <tr data-toggle="modal" data-target="#chemicalModal">
                    <td>2</td>
                    <td>Chemical Substance B</td>
                    <td>xxxxxxx-xx-x</td>
                </tr>
                <tr data-toggle="modal" data-target="#chemicalModal">
                    <td>3</td>
                    <td>Chemical Substance C</td>
                    <td>xxxxxxx-xx-x</td>
                </tr>
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade bs-example-modal-lg" id="chemicalModal" tabindex="-1" role="dialog" aria-labelledby="chemicalModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="chemicalModalLabel">Χημική Σύνθεση Μείγματος</h4>
                  </div>
                  <div class="modal-body">
                    <!-------------------------------------------------------------------------------------------------------------------->
                        <div class="container">
                            <div class="col-md-9 column"> 
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-Name">Χημική ουσία</label>
                                        <div class="col-sm-4">
                                            <label  id="chemical-Name" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-CAS">Αριθμός CAS</label>
                                        <div class="col-sm-4">
                                            <label  id="chemical-CAS" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-EINECS">Αριθμός EC/EINECS</label>
                                        <div class="col-sm-4">
                                            <label  id="chemical-EINECS" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-IUPAC">Ονοματολογία κατά IUPAC</label>
                                        <div class="col-sm-4">
                                            <label  id="chemical-IUPAC" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-otherName">Άλλη Ονοματολογία</label>
                                        <div class="col-sm-4">
                                            <label  id="chemical-otherName" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-weight">Ακριβής συγκέντρωση χημικής ουσίας στο μείγμα                                                                  (βάρος κατά βάρος)</label>
                                        <div class="col-sm-4">
                                            <label id="chemical-weight" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-CLP">Ταξινόμηση και Επισήμανση σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)</label>
                                        <div class="col-sm-4">
                                            <label  id="chemical-CLP" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-enarmonismeni">Εναρμονισμένη ταξινόμηση</label>
                                        <div class="col-sm-4">
                                            <label  id="chemical-enarmonismeni"></label>
                                                
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                        </div>
                      <!-------------------------------------------------------------------------------------------------------------------->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
        
            

        
      </div>
    
    </body>

</html>