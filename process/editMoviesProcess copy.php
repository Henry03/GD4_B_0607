<?php
        if(isset($_POST['save'])){
            include ('../db.php');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $genre = $_POST['genre'];
            $release = $_POST['release'];
            $season = $_POST['season'];
            $synopsis = $_POST['synopsis'];

            $queryUpdate = mysqli_query($con, "UPDATE `movies` SET `name`='$name',`genre`='$genre',`realese`='$release',`season`='$season', `synopsis` = '$synopsis' WHERE id='$id'") or die(mysqli_error($con)); 


            if($queryUpdate){
                echo
                '<script>
                    alert("Update Movie Successfully"); 
                    window.location = "../page/listMoviesPage.php"
                </script>';
            }else{
                echo
                '<script>
                    alert("Update failed"); 
                    // window.location = "../page/editMoviesPage.php"
                </script>';
            }
        }else {
            echo
            '<script>
            window.history.back()
            </script>';
        }
?>