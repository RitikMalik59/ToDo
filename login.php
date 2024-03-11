<!-- todo:
check if user is registered in user table;
check credentails
if correct then redirect to index;
else try again ; -->

<?php include('includes/header.php'); ?>

<div class="container py-5 my-5 col-lg-4 ">
    <main class="form-signin w-100 m-auto">
        <form method="post" action="includes/user_login.php" class="py-3 my-3">
            <!-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="h3 mb-3 fw-normal">Please Login if you have Registered !</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="showPassword">
                <label class="form-check-label" for="flexCheckDefault">
                    Show Password
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" name="submit" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">© 2017 - 2024</p>
        </form>
    </main>
</div>


<!-- < ----- Footer ----- > -->


<?php include('includes/footer.php'); ?>