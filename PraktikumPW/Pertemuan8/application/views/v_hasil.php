<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hasil</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
  </head>
  <body>
       <div class="container mt-3 mb-3">
         <div class="column cardd p-3">
              <p>Your form was succesfully submitted</p>
              <p><?php echo anchor('form', 'Try it again!') ?></p>
         </div>
       </div>
  </body>
</html>
