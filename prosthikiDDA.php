<!DOCTYPE html>
<html lang="el">
    
<head>
  <meta charset="utf-8">
  <title>Προφίλ Χρήστη</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  
    <style>
        .btn-file {
          position: relative;
          overflow: hidden;
        }
        .btn-file input[type=file] {
          position: absolute;
          top: 0;
          right: 0;
          min-width: 100%;
          min-height: 100%;
          font-size: 100px;
          text-align: right;
          filter: alpha(opacity=0);
          opacity: 0;
          background: red;
          cursor: inherit;
          display: block;
        }
        input[readonly] {
          background-color: white !important;
          cursor: text !important;
        }
    </style>
    
    
    <script>
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        $(document).ready( function() {
            $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;
        
                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }
        
            });
        });
    </script>
    
</head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Προσθήκη ΔΔΑ</h4>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                                Browse&hellip; <input type="file" multiple>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <span class="help-block">
                        Το αρχείο πρέπει να είναι σε PDF μορφή.
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <h4>Προσθήκη Ετικέτας Προϊόντος</h4>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                                Browse&hellip; <input type="file" multiple>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <span class="help-block">
                        Το αρχείο πρέπει να είναι σε PDF μορφή.
                    </span>
                </div>
            </div>

            <br>
            <br>
            <div class="row">
                <div class="col-sm-4">
                <button type="button" class="btn btn-info">Προσορηνή Αποθήκευση</button>
                <button type="button" class="btn btn-danger">Τελική Αποθήκευση</button>
                </div>
            </div>
        </div>
    </body>
</html>


