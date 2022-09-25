<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['save'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $year = $_POST['year'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
    
        // Melakukan insert ke databse dengan query dibawah ini
        $insert = mysqli_query($con, "INSERT INTO `movies` (`name`, `genre`, `realese`, `episode`, `season`, `synopsis`) VALUES ('$name', '$genre', '$year', '$episode', '$season', '$synopsis');") or die(mysqli_error($con));
    
        if($insert){
            echo
            '<script>
                alert("Register Success");
                window.location = "../page/listMoviesPage.php"
            </script>';
        
        
        }else{
            echo
                '<script>
                    alert("Add Movie Failed");
                </script>';
        }

        
    }else{
        echo
            '<script>
                window.history.back()
            </script>';
    }
?>