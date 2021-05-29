<?php 

function arrayToBinaryString(Array $arr) {
  $str = "";
  foreach($arr as $elm) {
      $str .= chr((int) $elm);
  }
  return $str;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(name != "" && image!="")
    {
    echo "<h3>Save to DB</h3>";

    $name = $_POST['name'];
    $image = $_POST['image'];
    // $url_image = $_POST['url_image'];

    $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
    $sql = "INSERT INTO animals (name, image) VALUES (?,?)";
    $myPDO->prepare($sql)->execute([$name, $image]);


    // $image_to_write ="";

//     if($url_image != "" && $url_image != null){
//       $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
//     $sql = "INSERT INTO animals (name, image) VALUES (?,?)";
//     $myPDO->prepare($sql)->execute([$name, $url_image]);
//     }
//     else{
//      // $image_to_write = $file_image;
    
//     //Remote image URL
// $url = $file_image;//'http://www.example.com/remote-image.png';

// // Image path
// $img = "";//'images/codexworld.png';

// // Save image 
// file_put_contents($img, file_get_contents($url));

//     $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
//     $sql = "INSERT INTO animals (name, image) VALUES (?,?)";
//     $myPDO->prepare($sql)->execute([$name, $image]);
//     }
// Remote image URL
// $url = 'http://www.example.com/remote-image.png';

// // Image path
// $img = 'images/codexworld.png';

// // Save image 
// file_put_contents($img, file_get_contents($url));

    //echo $name.'    '.$image;

    header('Location: /');
    exit;
}
else{
    echo "<h1>Not good</h1>";
}

}

?>

<?php include "head.php"; ?>

    <h1>ADD Animal</h1>
<form class="row g-3 needs-validation" validate method="post">
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationCustom01" name="name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="form-check col-md-6">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked value="option1" onClick="ImageLogic('validationURLImage', 'validationFileImage')">
  <label class="form-check-label" for="exampleRadios1">
    Image URL
  </label>

  <!-- <button type="button" onclick="SetImage()" class="btn btn-warning fl-right">Show Image</button> -->
</div>
<div class="form-check col-md-6">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" onClick="ImageLogic('validationFileImage', 'validationURLImage')">
  <label class="form-check-label" for="exampleRadios2">
    Image File
  </label>

  <!-- <button type="button" onclick="SetImage()" class="btn btn-warning fl-right">Show Image</button> -->
</div>
  <div class="col-md-6">
    <!-- <label for="validationCustom02" class="form-label">Image URL</label> -->
    <input type="text" class="form-control" id="validationURLImage" name="url_image" required  value="https://lh3.googleusercontent.com/proxy/RvwT6EyQT8IljEpz9v2o0UUL0olcfR2CEcLICZ9xClROw_oFY0ZbkB0aQ12plUJBt2YvVVf0mfSVGInrNvktjoN8PJNKztvr1Lzv1jyU8LkMyhZgFszP8RFYcM5EiAp2">
    
    <div class="valid-feedback">
      Looks good!
    </div>
    
  </div>
  <div class="col-md-6">
    <!-- <label for="validationCustom02" class="form-label">Image File</label> -->
    <input type="file" class="form-control" id="validationFileImage" name="file_image" disabled onchange="previewFile()">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12 d-flex flex-column">
  <h4 class="">
    Click Previw and see this your Image
    <button type="button" onclick="SetImage()" class="btn btn-warning fl-right">Show Image</button>
  </h4>
  <p class="t-center">
    <img id="imagePreview" src="https://lh3.googleusercontent.com/proxy/RvwT6EyQT8IljEpz9v2o0UUL0olcfR2CEcLICZ9xClROw_oFY0ZbkB0aQ12plUJBt2YvVVf0mfSVGInrNvktjoN8PJNKztvr1Lzv1jyU8LkMyhZgFszP8RFYcM5EiAp2" alt="NOT FOUND" />
    <input type="text" class="form-control no-visibile" id="ImageToWriting" name="image">
    </p>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" style="width: 100%" >Submit form</button>
  </div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="/js/app.js" ></script> 
<script src="js/app.js" ></script> 