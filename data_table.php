<h2> List of Animal</h2>


<table class='table' method="post">
    <thead>
      <tr>
        <th scope='col'>ID</th>
        <th scope='col'>Name</th>
        <th scope='col'>Image</th>
        <th scope='col'>Controls</th>
      </tr>
    </thead>
    <tbody>

<?php
    $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
    
    $result = $myPDO->query("SELECT id, name, image FROM animals");
    

    // function DeleteAnimal($id){
    //   $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
    //   $del_SQL = "DELETE FROM animals WHERE id='$id'";
    // }

    if(array_key_exists('button1', $_POST)) {
      echo "This is Button1 that is selected";
  }
  else if(array_key_exists('button2', $_POST)) {
    $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
    $del_SQL = "DELETE FROM animals WHERE id='$id'";
  }


    // echo "<table class='table'>
    // <thead>
    //   <tr>
    //     <th scope='col'>ID</th>
    //     <th scope='col'>Name</th>
    //     <th scope='col'>Image</th>
    //   </tr>
    // </thead>
    // <tbody>";

    foreach($result as $row){
      // print $row["id"] . "\t";
      // print $row['name'] . "\t";
      // print $row['image'] . "\t";
    

   echo " <tr>
   <th scope='row'>{$row["id"]}</th>
   <th scope='row'>{$row["name"]}</th>
   <th scope='row'><img style='width: 10%;' src='img/{$row["image"]}' alt='' /></th>
   <th scope='row'><input type='submit' name='button1' class='btn btn-warning' value='EDIT' /></th>
   <th scope='row'><input type='submit' name='button2' class='btn btn-danger' value='DELETE' data-target='' /></th>";
   
   
  }
  //  <th scope='row'><img style='width: 10%;' src='img/{$row["image"]}' alt='' /></th>
  //  <th scope='row'><button class='btn btn-danger'><a href='del.php?id=<?= $row['id'];'>DELETE</a></button></th>";
  //  <th scope='row'><a class='btn btn-warning' href='edit.php?id=<?=$row['id'];'>EDIT</a></th>

  //   echo " </tr>
  //   </tbody>
  // </table>";
?>

</tr>
    </tbody>
  </table>

