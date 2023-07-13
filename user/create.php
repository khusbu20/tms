<?php require ("../inc/header.php");?>

<body>

    <header class="container">
    <?php require ("../inc/navbar.php"); ?>

    </header>

    <section>
        <div class="container py-5 shadow  my-5">
            <div class="title pb-4">
                <h2> Add User</h2>
            </div>
            <div class="add-btn pb-4">
                <a name="" id="" class="btn btn-primary btn-sm" href="index.php" role="button">Manage users</a>

            </div>
            <?php

if(isset($_POST['save'])){
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);

    if($name!="" && $phone!="" && $address!="" && $email!="" && $password!=""){
        $submit="INSERT INTO student (name, phone, address, email, password) 
        VALUES ('$name','$phone','$address','$email', '$password')";
        $submit_result=mysqli_query($con,$submit);
        if($submit_result){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Data are submitted</strong>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

           <?php
           header("Refresh:2; url=index.php");
        }
        else{
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Data are not submitted</strong>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

           <?php
           header("Refresh:2; url=create.php");
        }
    }
    else{
        ?>
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>All Fields are required</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

        <?php
        header("Refresh:2; url=create.php");
    }

}

?>

            <form class="row">
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Name" class="form-label">Name</label>
                    <input type="email" class="form-control" id="Name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="email" class="form-control" id="Phone" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Address" class="form-label">Address</label>
                    <input type="email" class="form-control" id="Address" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <?php require ("../inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>