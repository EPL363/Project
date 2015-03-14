<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Apotelesmata-Tropopiisi</title>
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
    
   
    <body style="overflow:visible;height:100%;">
    
        <div class="container">

           <div class="row clearfix">
               <div class="col-md-12 column">
                   <img src="banner_gr_Laa.png" width="100%" height="98">
               </div>
            </div>
            <div class="col-md-12 column">
                <div class="col-md-12 column">
                    <div role="tabpanel"><!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation">
                              <a href="#prosthiki" aria-controls="prosthiki" role="tab" data-toggle="tab">
                                  <h4 style="text-align:center; color: #2CA4B0; font-family: 'Helvetica Neue', sans-serif;  font-weight: 100; letter-spacing: 1px; padding: 0 0 5px;" >Αναζήτηση</h4>
                              </a>
                          </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content" style="height:100%">
                            <div role="tabpanel" class="tab-pane active" id="profile">
                                <?php include 'Profile_Leitourgou2/new/Profile_Leitourgou.php';?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-12 column" style="text-align: right">
                    <button type="button" class="btn btn-link" onclick="location.href='logIn.html'">
                        Log Out
                    </button>
                </div>
            </div>  
         </div>
    </body>
</html>