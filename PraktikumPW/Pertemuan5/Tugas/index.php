<?php
     echo '<!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Tugas PW | 140810170020</title>
         <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="css/style.css">
       </head>
       <body>
         <div class="container mt-3">
              <div class="row card">
                  <h2 class="text-center">Data myDB</h2>
              </div>';

     $serverName = "localhost";
     $uname = "apache";
     $pass = "";
     $conn = new mysqli($serverName, $uname, $pass);
     if($conn->connect_error){
          die("connection Error");
     }else{
          $dbName = "myDB";
          $createDB = "CREATE DATABASE IF NOT EXISTS ".$dbName;
          $createTable = "CREATE TABLE IF NOT EXISTS User(id int(5) auto_increment, name varchar(30) not null, email varchar(40) not null, PRIMARY KEY(id))";
          if($conn->query($createDB) == TRUE){
               mysqli_select_db($conn, $dbName);
               if($conn->query($createTable) == TRUE){
                    $select = "SELECT * FROM User";
                    $result = $conn->query($select);
                    if ($result->num_rows>0) {
                         echo '<div class="row card">
                             <table class="text-center table table-hover">
                               <thead>
                                 <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                 </tr>
                               </thead>
                               <tbody>';
                         while ($row = $result->fetch_assoc()) {
                              echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td></tr>';
                         }
                         echo '</tbody>
                             </table>
                         </div>';
                    }else{
                         echo '<div class="row">
                              <div class="col-sm-12">
                                <h4 class="text-center">Data Kosong</h4>
                              </div>
                         </div>';
                    }
               }else{
                    echo $conn->error;
               }
          }else{
               echo $conn->error;
          }
          $conn->close();
     }
     echo '<div class="row card p-2">
         <div class="col-sm-12 text-center">
            <span>&copy Mohamad Achun Armando (140810170020) | Praktikum Pemrograman Web 2018</span>
         </div>
         </div>
         </div>
     </body>
     </html>';
?>
