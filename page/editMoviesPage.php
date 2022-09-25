<?php
    include '../component/sidebar.php'
     
?>
    
<?php
    // session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }

    $session_id = session_id();

    include ('../db.php');
    $querySelect = mysqli_query($con, "SELECT * FROM movies WHERE id=".$id);
    $data = mysqli_fetch_assoc($querySelect);

?>
    <html>
        <body>
            <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="body d-flex justify-content-between">
                <h4>EDIT DATA SERIES</h4>
                <a href="../page/listMoviesPage.php"><i style="color: black" class="fa fa-arrow-left fa-2x"></i></a>
            </div>
            <hr>
                <form action="../process/editMoviesProcess.php" method="post">
                    <input hidden="true" name="id" type="text" class="form-control" id="inputId" value="<?php echo $data['id'] ?>">
                    <div class="col-12 mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="inputName" value="<?php echo $data['name'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputGenre" class="form-label">Genre</label>
                        <select name="genre" class="form-select" id="inputGenre" selected="<?php echo $data['genre'] ?>">
                            <option <?php if($data['genre']=='Action'): ?> selected="selected"<?php endif; ?> value="Action">Action</option>
                            <option <?php if($data['genre']=='Romance'): ?> selected="selected"<?php endif; ?> value="Romance">Romance</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputRelease" class="form-label">Year Release</label>
                        <input name="release" type="text" class="form-control" id="inputRelease" value="<?php echo $data['realese'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputEpisode" class="form-label">Episode</label>
                        <input name="episode" type="text" class="form-control" id="inputEpisode" value="<?php echo $data['episode'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputSeason" class="form-label">Season</label>
                        <input name="season" type="text" class="form-control" id="inputSeason" value="<?php echo $data['season'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputSynopsis" class="form-label">Synopsis</label>
                        <input name="synopsis" type="text" class="form-control" id="inputSynopsis" value="<?php echo $data['synopsis'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary col-12" name="save">Save</button>
                </form> 
            </div>
            </aside>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        </body>
        </html>
        