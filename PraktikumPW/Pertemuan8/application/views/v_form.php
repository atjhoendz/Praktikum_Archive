<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
  </head>
  <body>
       <div class="container mt-3 mb-3">
         <div class="column text-center p-3 cardd">
              <h1>Form Validation and Authentication</h1>
         </div>
         <div class="column p-3 cardd">
               </form action="/login" method="post">
                     <?php echo validation_errors(); ?>
                     <?php echo form_open('form'); ?>
                     <fieldset class="form-group">
                       <label for="inputEmail1">Email address</label>
                       <input type="email" class="form-control" name="inputEmail" placeholder="Enter email">
                     </fieldset>
                     <fieldset class="form-group">
                       <label for="inputPassword">Password</label>
                       <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                     </fieldset>
                     <div class="text-center">
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
              </form>
         </div>
       </div>
  </body>
</html>
