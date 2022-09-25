<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];

        // $check = mysqli_query($con, "SELECT COUNT('phonenum') as count FROM users WHERE phonenum =  '$phonenum'");
        $checkPhone = mysqli_query($con, "SELECT * FROM users WHERE phonenum =  '$phonenum'");
        $checkEmail = mysqli_query($con, "SELECT * FROM users WHERE email =  '$email'");
    
        // Melakukan insert ke databse dengan query dibawah ini
        
        
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        if(mysqli_num_rows($checkPhone)>0){
            echo
                '<script>
                    alert("Phone Number has been used");
                    window.history.back()
                </script>';
                
        }else if(mysqli_num_rows($checkEmail)>0){
            echo
                '<script>
                    alert("Email has been used");
                    window.history.back()
                </script>';
        }else{
            $result = mysqli_query($con, "INSERT INTO users(email, password, name, phonenum, membership) VALUES('$email', '$password', '$name', '$phonenum', '$membership')")
            or die(mysqli_error($con)); 
            if($result){
                echo
                '<script>
                    alert("Register Success");
                    window.location = "../index.php"
                </script>';
            
            
            }else{
                echo
                    '<script>
                        alert("Register Failed");
                    </script>';
            }
        }

        
    }else{
        echo
            '<script>
                window.history.back()
            </script>';
    }
?>