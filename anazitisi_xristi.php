<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Προφίλ Χρήστη</title>
        
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

        <link id="style" href="profile_leitourgou/css/clean.css" rel="stylesheet" media="screen">
        
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    </head>
    
    <body>
        <div class="container">
        
            <section>
               <h2>Αναζήτηση</h2>
                <div id="example1"></div>
            </section>

            <script src="profile_leitourgou/js/jquery.min.js"></script>
            <script src="profile_leitourgou/plugins/gotopage.js"></script>
            <script src="profile_leitourgou/plugins/ajaxpaging.js"></script>
            <script src="profile_leitourgou/js/jquery.columns.min.js"></script>
            <script>
                //example 1 
                var columns1 = $('#example1').columns({
                    data: [
                        {'Αριθμός Αναφοράς ': 00001, 'Ονομασία Προϊόντος':'<a href="#">John</a>', 'Παρασκευαστική Εταιρία ':'Smith' },
                        {'Αριθμός Αναφοράς ': 00002, 'Ονομασία Προϊόντος':'<a href="#">Jane</a>', 'Παρασκευαστική Εταιρία ':'Doe' },
                        {'Αριθμός Αναφοράς ': 00003, 'Ονομασία Προϊόντος':'<a href="#">Ted</a>', 'Παρασκευαστική Εταιρία ':'Johnson' },
                        {'Αριθμός Αναφοράς ': 00004, 'Ονομασία Προϊόντος':'<a href="#">Betty</a>', 'Παρασκευαστική Εταιρία ':'Smith' },
                        {'Αριθμός Αναφοράς ': 00005, 'Ονομασία Προϊόντος':'<a href="#">Susan</a>', 'Παρασκευαστική Εταιρία ':'Wilson' },
                        {'Αριθμός Αναφοράς ': 00006, 'Ονομασία Προϊόντος':'<a href="#">John</a>', 'Παρασκευαστική Εταιρία ':'Doe' },
                        {'Αριθμός Αναφοράς ': 00007, 'Ονομασία Προϊόντος':'<a href="#">Bill</a>', 'Παρασκευαστική Εταιρία ':'Watson' },
                        {'Αριθμός Αναφοράς ': 00008, 'Ονομασία Προϊόντος':'<a href="#">Walter</a>', 'Παρασκευαστική Εταιρία ':'Wright' }
                    ]
                });


            </script>
        </div>
        
    </body>
</html>
