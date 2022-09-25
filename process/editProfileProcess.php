<?php
    session_start();
    if(isset($_POST['save'])){
        include ('../db.php');
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];
        $job = $_POST['job'];
        $session_id = session_id();

        $queryUpdate = mysqli_query($con, 
        "UPDATE users 
        SET name='$name', email='$email', phonenum='$phonenum', membership='$membership', job='$job' 
        WHERE id=".$_SESSION['user']['id']) 
        or die(mysqli_error($con));

        if($queryUpdate){
            echo
            '<script>
                alert("Update Profile Successfully"); window.location = "../page/showProfilePage.php"
            </script>';
        }else{
            echo
            '<script>
                alert("Update failed"); window.location = "../page/profilePage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>