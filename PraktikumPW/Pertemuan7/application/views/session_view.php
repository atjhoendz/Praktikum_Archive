<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CodeIgniter Session Example</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
  </head>
  <body>
       <div class="container mt-4">
            <div class="row card text-center p-2">
                 <h1 class="text-center">CodeIgniter Session Example</h1>
            </div>
            <div class="row card text-center p-2">
                 <h2>Hallo</h2>
                 <span><?php echo $this->session->name; ?> <br> <?php echo $this->session->npm;?> <br> <?php echo $this->session->kelas; ?></span>
            </div>
            <div class="row cardd text-center p-2">
                 <div class="col-md-6">
                   <a href="<?php echo base_url('/session_ex/set_session');?>" class="btn btn-primary">Get Session</a>
                 </div>
                 <div class="col-md-6">
                      <a href="<?php echo base_url('session_ex/destroy_session'); ?>" class="btn btn-danger">Destroy Session</a>
                 </div>
            </div>
            <div class="row cardd text-center p-2">
                 <div class="col-md-4">
                      <a href="<?php echo base_url('session_ex/unset/name'); ?>" class="btn btn-success">Unset Name</a>
                 </div>
                 <div class="col-md-4">
                      <a href="<?php echo base_url('session_ex/unset/npm'); ?>" class="btn btn-success">Unset NPM</a>
                 </div>
                 <div class="col-md-4">
                      <a href="<?php echo base_url('session_ex/unset/kelas'); ?>" class="btn btn-success">Unset Kelas</a>
                 </div>
            </div>
       </div>
  </body>
</html>
