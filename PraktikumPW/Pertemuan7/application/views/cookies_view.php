<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CodeIgniter Cookies Example</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>" type="text/css">
  </head>
  <body>
       <div class="container card mt-4">
            <div class="row card p-2">
                 <h1 class="text-center">CodeIgniter Cookies Example</h1>
            </div>
            <div class="row card text-center p-2">
                 <p>Cookie</p>
                 <span><?php echo get_cookie('cookie_name'); ?></span>
            </div>
            <div class="row cardd text-center p-2">
                 <div class="col-md-6">
                      <a id="display_cookie" href="<?php echo base_url('cookie_ex/display_cookie'); ?>" class="btn btn-primary">Display Cookie</a>
                 </div>
                 <div class="col-md-6">
                      <a id="delete_cookie" href="<?php echo base_url('cookie_ex/delete_cookie'); ?>" class="btn btn-danger">Delete Cookie</a>
                 </div>
            </div>
       </div>
  </body>
</html>
