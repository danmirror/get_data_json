<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>get data json from php  javascript and jquery</h1>
     <!-- ==================using php===================== -->
     <h2>use php = 
          <?php
               $url = 'data.json';
               $data = file_get_contents($url);
               $value = json_decode($data);
               var_dump($value->name);
          
          ?> 
     </h2>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>

//     ======================using jquery===================
    $(document).ready(function(){
          $.getJSON('data.json',function(data){
               console.log('used jquery =',data.name)
          })
     })

// =========================using jquery ajax request=========
     $(document).ready(function(){
          var data 
          $.ajax({
               dataType: 'json',
               url: 'data.json',
               data: data ,
               success: function(data){
                    console.log('using ajax =',data.name)
               },
          })
     })

// =======================using xml========================
     var request = new XMLHttpRequest()
     request.open('GET', 'data.json',true)
     request.onload = function(){
          var data = JSON.parse(this.response)
          console.log('used xml =', data.name)
     }
     request.send()


</script>
</body>
</html>