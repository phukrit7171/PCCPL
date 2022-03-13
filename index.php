<?php
    $json = fopen("data.json", "r");
    $json1 = fread($json, filesize("data.json"));
    $data = json_decode($json1, true);
    $s = $data["s"];
    $t = $data["t"];
    $l = $data["l"];
    $p = $data["p"];
    $st = $data["st"];
    $la = $data["la"];
    $pa = $data["pa"];
    fclose($json);
?>
<!DOCTYPE html>
<html lang="th">

<head><hr>
    <title>STEM LAB PCCPL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous"></script>

</head>

<body>
    <div class="h1 text-left">
        
            <img 
            src="https://lh3.googleusercontent.com/pw/AM-JKLXkedTZLIpeeTu7xzKvAmkeqCvOE_j33IJKy3qR2AUuOLmkHmRIDHqUL-MoXbD_gKhblT5J1saMoIjhXPQ8Xv2PDB5K7fMp84FQl8pblETTAmRk2tdkPMUZGzejXgD-5Sz7avRnxByqVj3d4N9W83sOwg=s553-no?authuser=0"
            width="100" height="100" 
            alt="PCCPL Logo" 
            class="rounded-circle">STEM LAB PCCPL      
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">จองที่นี่</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
    </nav>

    <nav>
        <div class="container mt-3">
            <div class="h1 text-left">
                สถานะของห้อง : 
                <?php echo $st; ?>
               
            
                
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="Green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg> -->
            </div>
        </div>
        <hr>
        <div class="container mt-3">
            <h2>จำนวนผู้ใช้งาน</h2>
            <table class="table table-bordered">
                <!--หัวตาราง-->
                <thead>
                    <tr>
                        <th>นักเรียน</th>
                        <th>อาจารย์</th>
                    </tr>
                </thead>
                <!-- ข้อมูลตาราง -->
                <tbody>
                    <td><?php echo $s; ?></td>
                    <td><?php echo $t; ?></td>
                </tbody>
            </table>

            <h2>สถานะการทำงานของเครื่องจักในห้อง STEM Lab</h2>
            <table class="table table-bordered">
                <!--หัวตาราง-->
                <thead>
                    <tr>
                        <th>Laser Cutter ที่กำลังทำงาน</th><th>Laser Cutter ทั้งหมด</th>
                        <th>3D Printer ที่กำลังทำงาน</th><th>3D Printer ทั้งหมด</th>
                        
                    </tr>
                </thead>
                <!-- ข้อมูลตาราง -->
                <tbody>
                    <td><?php echo $l; ?></td> <td><?php echo $la; ?></td><!--Laser Cutter-->
                    <td><?php echo $p; ?></td> <td><?php echo $pa; ?></td><!--3D Printer-->
                </tbody>
            </table>
        </div>        
    </nav>

    <nav>
        <div class="container mt-3">
            <div class="h1 text-left">
                ตารางการจอง : 
                
            </div>
        
    
            <iframe src="https://calendar.google.com/calendar/embed?src=c_mrigjt9k2kkqvcdifeqk7uh0ao%40group.calendar.google.com&ctz=Asia%2FBangkok" style="border: 0" width="1280" height="800" frameborder="0" scrolling="no"></iframe>
            
        </div>
            <hr>
    </nav>
</body>
</html>