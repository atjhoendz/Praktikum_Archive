<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <div class="container mt-2">
         <div class="row card text-center p-2">
              <h1 class="text-center">Data myDB</h1>
         </div>
         <div class="row cardd">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                     <?php foreach($response as $data) {?>
                            <tr>
                              <td><?php echo $data['id'];?></td>
                              <td><?php echo $data['name'];?></td>
                              <td><?php echo $data['email'];?></td>
                            </tr>
                    <?php } ?>
                </tbody>
              </table>
         </div>
         <div class="row card text-center p-2">
              <span>&copy Mohamad Achun Armando (140810170020) | Praktikum Pemrograman Web 2018</span>
         </div>
    </div>
  </body>
</html>
