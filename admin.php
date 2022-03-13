<script>
    var passwd = prompt("Enter Password : ");
    if (passwd != "stem1234") {
      window.location = "http://localhost:81/STEM-LAB-PCCPL/index.php";
    }
  </script>
<?php
// define variables and set to empty values
$sErr = $tErr = $lErr = $pErr = $stErr = $laErr = $paErr = "";
$s = $t = $l = $p = $st = $la = $pa = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["s"])) {
    $sErr = "กรุณาใส่จำนวนนักเรียน";
  } else {
    $s = test_input($_POST["s"]);
  }

  if (empty($_POST["t"])) {
    $tErr = "กรุณาใส่จำนวนอาจารย์ภายในห้อง STEM Lab";
  } else {
    $t = test_input($_POST["t"]);
  }

  if (empty($_POST["l"])) {
    $lErr = "กรุณาใส่จำนวนเครื่อตัดเลเซอร์ที่กำลังใช้งานอยู่";
  } else {
    $l = test_input($_POST["l"]);
  }

  if (empty($_POST["p"])) {
    $pErr = "กรุณาใส่จำนวนเครื่อ 3D Printer ที่กำลังใช้งานอยู่";
  } else {
    $p = test_input($_POST["p"]);
  }

  if (empty($_POST["st"])) {
    $stErr = "กรุณาเลือกสถานะของห้อง";
  } else {
    $st = test_input($_POST["st"]);
  }
  if (empty($_POST["la"])) {
    $laErr = "กรุณาใส่ค่าจำนวนเครื่องตัดเลเซอร์ในห้องทั้งหมด";
  } else {
    $la = test_input($_POST["la"]);
  }
  if (empty($_POST["pa"])) {
    $paErr = "กรุณาใส่ค่าจำนวนเครื่อง 3D Printer ในห้องทั้งหมด";
  } else {
    $pa = test_input($_POST["pa"]);
  }
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<!DOCTYPE HTML>
<html>

<!-- Content here -->

<head>

  <hr>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
  <title>Admin STEM LAB PCCPL</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous"></scrip>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="h1 text-left">

    <img src="https://lh3.googleusercontent.com/pw/AM-JKLXkedTZLIpeeTu7xzKvAmkeqCvOE_j33IJKy3qR2AUuOLmkHmRIDHqUL-MoXbD_gKhblT5J1saMoIjhXPQ8Xv2PDB5K7fMp84FQl8pblETTAmRk2tdkPMUZGzejXgD-5Sz7avRnxByqVj3d4N9W83sOwg=s553-no?authuser=0" width="100" height="100" alt="PCCPL Logo" class="rounded-circle">STEM LAB PCCPL
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">จองที่นี่</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="admin.php">Admin</a>
        </li>

  </nav>
  <div class="container mt-3">

    <br>
    <h2>Admin Page</h2>

    <p><span class="error">*กรุณาใส่ข้อมูลให้ครบถ้วน</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      จำนวนนักเรียนภายในห้อง : <input type="text" name="s">
      <span class="error">* <?php echo $sErr; ?></span>
      <br><br>
      จำนวนอาจารย์ภายในห้อง : <input type="text" name="t">
      <span class="error">* <?php echo $tErr; ?></span>
      <br><br>
      จำนวนเครื่องตัดเลเซอร์ที่กำลังใช้งานอยู่ : <input type="text" name="l"><span class="error">*<?php echo $lErr; ?></span>
      จำนวนเครื่อง ตัดเลเซอร์ทั้งหมด : <input type="text" name="la"><span class="error">*<?php echo $laErr; ?></span>

      <br><br>
      จำนวนเครื่อง 3D Printer ที่กำลังใช้งานอยู่ : <input type="text" name="p"><span class="error">*<?php echo $stErr; ?></span>
      จำนวนเครื่อง 3D Printer ทั้งหมด : <input type="text" name="pa"><span class="error">*<?php echo $paErr; ?></span>

      <br><br>
      สถานะความพร้อมใช้งานของห้อง STEM Lab :
      <input type="radio" name="st" value="open">เปิดทำการ
      <input type="radio" name="st" value="busy">ค่อนข้างยุ่งถึงยุ่งที่สุด
      <input type="radio" name="st" value="close">ปิดทำการ
      <span class="error">* <?php echo $stErr; ?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "<h2>Your Input:</h2>";
      echo "จำนวนนักเรียนภายในห้อง : " . $s . "<br>" . " คน" .
        "จำนวนอาจารย์ภายในห้อง : " . $t . "<br>" . " คน" .
        "จำนวนเครื่อตัดเลเซอร์ที่กำลังใช้งานอยู่ : " . $l . "<br>" . " เครื่อง" .
        "จำนวนเครื่องตัดเลเซอร์ทั้งหมด : " . $la . "<br>" . " เครื่อง" .
        "จำนวนเครื่อ 3D Printer ที่กำลังใช้งานอยู่ : " . $p . "<br>" . " เครื่อง" .
        "จำนวนเครื่อง 3D Printer ทั้งหมด : " . $pa . "<br>" . " เครื่อง" .
        "สถานะความพร้อมใช้งานของห้อง STEM Lab : " . $st . "<br>";

      $allstatus = json_encode(array("s" => "$s", "t" => "$t", "l" => "$l", "p" => "$p", "st" => "$st", "la" => "$la", "pa" => "$pa"));
      $myfile = fopen("data.json", "w") or die("Unable to open file!");
      fwrite($myfile, $allstatus);
      fclose($myfile);
      echo "<br><br>";
      echo "<p style='color:green'>Successfully saved!</p>";
    }
    ?>


  </div>

</body>


</html>