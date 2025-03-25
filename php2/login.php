<?php include './layout/head.php'; ?>
<h1>Login</h1>
<form action="login_process.php" method="POST" class="w-50">
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="forgot_password.php" class="btn btn-link">Forgot Password?</a>
</form>
<?php include './layout/foot.php'; ?>