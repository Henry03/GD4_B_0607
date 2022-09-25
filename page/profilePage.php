<?php
    include '../component/sidebar.php'
     
?>
    
<?php
    // session_start();

    $session_id = session_id();

    include ('../db.php');
    $querySelect = mysqli_query($con, "SELECT * FROM users WHERE id=".$_SESSION['user']['id']);
    $data = mysqli_fetch_assoc($querySelect);

?>
    <html>
        <body>
            <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="body d-flex justify-content-between">
                <h4>EDIT PROFILE</h4>
                <a href="../page/showProfilePage.php"><i style="color: black" class="fa fa-arrow-left fa-2x"></i></a>
            </div>
            <hr>
                <form action="../process/editProfileProcess.php" method="post">
                    
                    <div class="col-12 mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="inputName" value="<?php echo $data['name'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputPhonenum" class="form-label">Phone Number</label>
                        <input name="phonenum" type="text" class="form-control" id="inputPhonenum" value="<?php echo $data['phonenum'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" id="inputEmail" value="<?php echo $data['email'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputJob" class="form-label">Job</label>
                        <select name="job" class="form-select" id="inputJob" selected="<?php echo $data['job'] ?>">
                            <option <?php if($data['job']=='College Student'): ?> selected="selected"<?php endif; ?> value="College Student">College Student</option>
                            <option <?php if($data['job']=='Programmer'): ?> selected="selected"<?php endif; ?> value="Programmer">Programmer</option>
                            <option <?php if($data['job']=='Doctor'): ?> selected="selected"<?php endif; ?> value="Doctor">Programmer</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputMembership" class="form-label">Membership</label>
                        <input name="membership" type="text" class="form-control" id="inputMembership" value="<?php echo $data['membership'] ?>">
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
        