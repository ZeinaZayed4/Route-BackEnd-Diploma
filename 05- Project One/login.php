<?php include "partials/header.php"; ?>

<div class="card-body px-5 py-5" style="background-color:darkgray;">
    <h3 class="card-title text-left mb-3">Login</h3>
	<?php include 'partials/error_success.php'; ?>
    <form action="handle/handle-login.php" method="post">
        <div class="form-group">
            <label for="email">email *</label>
            <input type="email" name="email" id="email" class="form-control p_input"
                   value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email']; unset($_SESSION['email']);} ?>">
        </div>
        <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" name="password" id="password" class="form-control p_input">
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
            </div>
            <a href="forgetPassword.php" class="forgot-pass">Forgot password</a>
        </div>
        <div class="text-center">
            <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Login</button>
        </div>
        <div class="d-flex">
            <button class="btn btn-facebook me-2 col">
                <i class="mdi mdi-facebook"></i> Facebook
            </button>
            <button class="btn btn-google col">
                <i class="mdi mdi-google-plus"></i> Google plus
            </button>
        </div>
        <p class="sign-up">Don't have an Account?<a href="signup.php"> Sign Up</a></p>
    </form>
</div>

<?php include "partials/footer.php"; ?>
