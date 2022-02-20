<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['signup'])) {
        $num_id = $_POST['num_id'];
        $ct_id = $_POST['ct_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $room_id = $_POST['room_id'];
        $depart_id = $_POST['depart_id'];
        $place_db = $_POST['place_db'];
        $name_place = $_POST['name_place'];
        $dob = $_POST['dob'];
        $user_level = 'user';

        if (empty($firstname)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: index.php");
        } else if (empty($lastname)) {
            $_SESSION['error'] = 'กรุณากรอกนามสกุล';
            header("location: index.php");
        }   else {
            try {

                {
                    $stmt = $conn->prepare("INSERT INTO person_user(num_id, ct_id, firstname, lastname, room_id, depart_id, place_db, name_place, dob, user_level) 
                                            VALUES(:num_id, :ct_id, :firstname, :lastname, :room_id, :depart_id, :place_db, :name_place, :dob, :user_level)");
                    $stmt->bindParam(":num_id", $num_id);
                    $stmt->bindParam(":ct_id", $ct_id);                        
                    $stmt->bindParam(":firstname", $firstname);
                    $stmt->bindParam(":lastname", $lastname);
                    $stmt->bindParam(":room_id", $room_id);
                    $stmt->bindParam(":depart_id", $depart_id);
                    $stmt->bindParam(":place_db", $place_db);
                    $stmt->bindParam(":name_place", $name_place);   
                    $stmt->bindParam(":dob", $dob);                                        
                    $stmt->bindParam(":user_level", $user_level);
                    $stmt->execute();
                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว! <a href='signin.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: index.php");
                } 

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>