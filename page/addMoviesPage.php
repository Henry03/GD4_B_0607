<?php
    include '../component/sidebar.php'
    
?>
    
<?php
    include ('../db.php');
    $querySelect = mysqli_query($con, "SELECT * FROM users WHERE id=".$_SESSION['user']['id']);
    $data = mysqli_fetch_assoc($querySelect);

?>
    <html>
        <body>
            <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="body d-flex justify-content-between">
                <h4>ADD NEW DATA SERIES</h4>
                <a href="../page/listMoviesPage.php"><i style="color: black" class="fa fa-arrow-left fa-2x"></i></a>
                
            </div>
            <hr>
                <form action="../process/addMoviesProcess.php" method="post">
                    
                    <div class="col-12 mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="inputName">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputGenre" class="form-label">Genre</label>
                        <select name="genre" class="form-select" id="inputGenre">
                            <option value="Action">Action</option>
                            <option value="Romance">Romance</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputYear" class="form-label">Year Release</label>
                        <input name="year" type="text" class="form-control" id="inputYear">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputEpisode" class="form-label">Episode</label>
                        <input name="episode" type="text" class="form-control" id="inputEpisode">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputSeason" class="form-label">Season</label>
                        <input name="season" type="text" class="form-control" id="inputSeason">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputSynopsis" class="form-label">Synopsis</label>
                        <input name="synopsis" type="text" class="form-control" id="inputSynopsis">
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
        