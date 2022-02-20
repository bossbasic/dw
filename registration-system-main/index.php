<?php 

    session_start();
    require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h3 class="mt-4">ลงทะเบียน</h3>
        <hr>
        <form action="signup_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="num_id" class="form-label">เลขประจำตัวนักเรียน</label>
                <input type="text" class="form-control" name="num_id" aria-describedby="num_id">
            </div>
            <div class="mb-3">
                <label for="ct_id" class="form-label">เลขประจำประชน</label>
                <input type="text" class="form-control" name="ct_id" aria-describedby="ct_id">
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
            </div>
            <div class="mb-3">
                <label for="room_id" class="form-label">ห้อง</label>
                <input type="text" class="form-control" name="room_id" aria-describedby="room_id">
            </div>
            <div class="mb-3">
                <label for="depart_id" class="form-label">แผนก</label>
                <input type="text" class="form-control" name="depart_id" aria-describedby="depart_id">
            </div>
            <div class="mb-3">
                <label for="place_db" class="form-label">ข้อมูลที่อยู่สถานประกอบการ</label>
                <input type="text" class="form-control" name="place_db" aria-describedby="place_db">
            </div>
            <div class="mb-3">
                <label for="name_place" class="form-label">ชื่อที่สถานประกอบการ</label>
                <input type="text" class="form-control" name="name_place" aria-describedby="name_place">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">วันฝึกจบ</label>
                <input type="text" class="form-control" name="dob" aria-describedby="dob">
            </div>

            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
    </div>
    
</body>
</html>