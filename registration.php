<!-- ToDo
(UI)
create registor form page ;
User input field : Username ,email , Password;
store in table users
successful registration should redirect user to login page; -->
<?php include('includes/header.php'); ?>

<body>
    <div class="container py-5 my-5 col-lg-4 ">
        <h1 class="display-6 p-3">Registration</h1>

        <form action="includes/user_registration.php" method="post">
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group" id="pwd">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                <input type="checkbox" class="form-check-input" id="showPassword">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>



            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="showPassword">
                An element to toggle between password visibility
                <input type="checkbox" onclick="myFunction()">Show Password
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div> -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<!-- < ----- Footer ----- > -->


<?php include('includes/footer.php'); ?>