<?php

session_start();
require_once 'config/db.php';

if (isset($_POST['signin'])) {
    $num_id = $_POST['num_id'];
    $ct_id = $_POST['ct_id'];


    if (empty($num_id)) {
        $_SESSION['error'] = 'กรุณากรอกอีเมล';
        header("location: signin.php");
    } else if (empty($ct_id)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
        header("location: signin.php");
    } else {
        try {

            $check_data = $conn->prepare("SELECT * FROM `person_user` WHERE `num_id`=:num_id AND `ct_id`=:ct_id");
            $check_data->execute([
                'num_id' => $num_id,
                'ct_id' => $ct_id
            ]);
            $row = $check_data->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        // var_dump($row);
        // exit();
        if ($row) {
            if ($row['user_level'] == 'admin') {
                $_SESSION['admin_login'] = $row['id'];
                header("location: admin.php");
            } else {
                $_SESSION['user_login'] = $row['id'];
                header("location: user.php");
            }
        } else {
            $_SESSION['error'] = 'เลขประจำตัวนักเรียน หรือเลขประจำประชนไม่ถูกต้อง';
            header("location: signin.php");
        }
    }
}
