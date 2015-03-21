<html>
    <head>
    <script>
        $("a[data-toggle=modal]").click(function() {   
                var essay_id = $(this).attr('id');

                $.ajax({
                    cache: false,
                    type: 'POST',
                    url: 'hSTST.php',
                    data: 'EID='+essay_id,
                    success: function(data) 
                    {
                        $('#myModal').show();
                        $('#modalContent').show().html(data);
                    }
                });
            });
    </script>
    </head>
<body>
   
    <div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <button class="close" data-dismiss="modal">&times;</button>
      <h3>Title</h3>
    </div>
    <div class="modal-body">            
        <div id="modalContent" style="display:none;">
            
        </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-info" data-dismiss="modal" >Close</a>
    </div>
        
</div>  
</body>
</html>



