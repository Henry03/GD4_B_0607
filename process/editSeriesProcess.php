<?php
        if(isset($_POST['save'])){
            include ('../db.php');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $genre = $_POST['genre'];
            $release = $_POST['release'];
            $episode = $_POST['episode'];
            $season = $_POST['season'];
            $synopsis = $_POST['synopsis'];

            $str_genre = "";
            foreach($genre as $gen){
                $str_genre .= $gen . ", ";
            }

            $queryUpdate = mysqli_query($con, "UPDATE `series` SET `name`='$name',`genre`='$str_genre',`realease`='$release',`episode`='$episode',`season`='$season', `synopsis` = '$synopsis' WHERE id='$id'") or die(mysqli_error($con)); 


            if($queryUpdate){
                echo
                '<script>
                    alert("Update Series Successfully"); 
                    window.location = "../page/listSeriesPage.php"
                </script>';
            }else{
                echo
                '<script>
                    alert("Update failed"); 
                    window.history.back()
                </script>';
            }
        }else {
            echo
            '<script>
            window.history.back()
            </script>';
        }
?>