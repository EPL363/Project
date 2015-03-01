<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
     
    </head>
    
    <body>
    			
            <div class="col-md-12">
                
                <div class="col-md-5">
  			       <div class="container"> 
                           
                        <div class="panel-heading ">
                            <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Υπεύθυνου Επικοινωνίας</strong></h2>
                        </div>
                       
                        <br>
                       
                        <form class="form-horizontal" role="form" name="user-data-form" id="user-data-form">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-name">Όνομα:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-name" id="user-name" value=<?php echo $user_name?> />
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-surname">Επώνυμο:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-surname" id="user-surname" value=<?php echo $user_surname?>/>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-username">Username:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-username" id="user-username" value=<?php echo $user?> />
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-password">Κωδικός:</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" name="user-password" id="user-password" value=<?php echo $user_pass?>/>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-email">Email:</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" name="user-email" id="user-email" <?php echo $user_email?>/>
                                </div> 
                            </div> 
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-address">Διεύθυνση:</label>                  
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-address" id="user-address" />
                                </div>
                            </div>  
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-city">Πόλη:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-city" id="user-city" />
                                </div>
                            </div>  
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-pc">Τ.Κ:</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="user-pc" id="user-pc" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-phone">Τηλέφωνο:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="user-phone" id="user-phone" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-fax">Φάξ:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="user-fax" id="user-fax" />
                                </div>
                            </div> 
                            
                        </form>
                       
                    </div> 
                    
                    
                    
                </div>
  
  
                <div class="col-md-5">
                    
  					 <div class="container"> 
                         
                            <div class="panel-heading ">
                                <h2 class="panel-title col-sm-offset-2"><strong>Στοιχεία Προμηθεύτριας Εταιρίας</strong></h2>
                            </div>
                         
                            <br>
                         
                            <form class="form-horizontal" role="company-data-form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-name">Επων. Εταιρίας:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="company-name" id="company-name" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-legal-form">Νομική Μορφή:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="company-legal-form" id="company-legal-form"/>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-email">Email</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" name="company-email" id="company-email" />
                                    </div> 
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-address">Διεύθυνση</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="company-address" id="company-address" />
                                    </div>
                                </div>  
                                
                                <div class="form-group">
                                      <label class="control-label col-sm-2" for="company-city">Πόλη</label>
                                      <div class="col-sm-4">
                                            <input type="text" class="form-control" name="company-city" id="company-city" />
                                      </div>
                                </div>   
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-pc">Τ.Κ.</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="company-pc" id="company-pc" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-phone">Τηλέφωνο</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="company-phone" id="company-phone" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-fax">Φάξ</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="company-fax" id="company-fax" />
                                    </div>
                                </div>
                                   
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-info">Άλλες Πληροφορίες:</label>
                                    <div class="col-sm-4">
                                        <textarea type="fax" class="form-control" rows="5" name="company-info" id="company-info" /></textarea>
                                    </div>
                                </div>

                            </form>
                    
                    </div> 
  
                </div>
            
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-offset-1">
                        <button type="submit" name="submit" class="btn btn-primary" >Τροποποίηση</button>  
                    </div>   
                </div>
            </div>
                           
        
    
    
    </body>
    
    
</html>
        