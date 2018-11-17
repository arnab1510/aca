<?php
@session_start();
define('DB_SERVER','localhost');
define('DB_USER','harsh');
define('DB_PASS','harsh123');
define('DB_NAME','aca_cms');
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno()){

  echo "Failed to connect to MYSQL: ".mysqli_connect_error();
}

if($_SERVER['REQUEST_METHOD']=='POST')
{ 
  $name=$_FILES['Notices']['name'];
  $name123=$_FILES['Notices']['tmp_name'];
  //echo $name123;
  $filesize= $_FILES['Notices']['size'];
  $EverthingOk=0;
  if ($filesize > 100000000)
    {
      echo "<script> alert(\"FILE SIZE LARGER THAN 100 MB\")</script>";
      $EverthingOk=1;
    } 
    $target_dir="download and upload/docs/";
    $target_file=$target_dir.basename($_FILES["Notices"]["name"]);
    //echo $filesize;
    //echo $target_file;
  if(file_exists($target_file))
    {
      echo "<script> alert(\"FILE AREADY EXISTS\")</script>";
      $EverthingOk=1;
    }

  if($EverthingOk==0)
  {
    if(@move_uploaded_file($name123, $target_file))
    {

      echo "<script> alert(\"FILE UPLOADED\")</script>";

    }
    else {
      echo "<script> alert(\"FILE NOT UPLOADED\")</script>";

        }
  }
  else  {
    echo "<script> alert(\" FILE NOT UPLOADED\")</script>";

      }


  if($EverthingOk==0)
  {
    $Query="INSERT INTO Notices (FileName) VALUES('$name')";
    if(mysqli_query($connection,$Query))
      {echo "<script> alert(\"File Saved\")</script>";
      }

  }
  else {
    echo "<script> alert(\"FILE NOT UPLOADED\")</script>";
  }
  }

  include('sidebarT.php');

  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Notices</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="assets/css/main.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="assets/css/sidebar.css">
</head>
<body>
  <div id="content">
    <div class="container-fluid">
      <div style="text-align: center; margin-top: 150px;">
        <form method="POST" name="FileUpload" enctype="multipart/form-data">
          <p class="font" style="font-size: 1.2em; letter-spacing: 0.09em;">Only PDF, DOC, PPT and ZIP files are allowed</p>
          <div class="custom-file" style="width: 450px;">
            <input type="file" class="custom-file-input" id="NoticesID" name="Notices" multiple>
            <label class="custom-file-label" for="NoticesID" style="overflow: hidden;">Choose File</label>
          </div>
          <br>
          <input type="button" class="login btn btn-outline-primary" onclick="Validation()" value="UPLOAD" style="width: 130px;">
      </form>
      </div> 
    </div>
  </div>
</body>
</html>

  <script type="text/javascript">
    
    function Validation()
    {
      var file=document.getElementById('NoticesID').value;
      var SplitFile=file.split('.');
      if(SplitFile[1]!='pdf' && SplitFile[1]!='doc' && SplitFile[1]!='zip' && SplitFile[1]!='docx')
        {
          alert("Please Upload pdf, doc, ppt or zips only");
          return false;
          }
      else
        {
          document.FileUpload.submit();
          }
    }

    $('#NoticesID').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
    });

  </script>