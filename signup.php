<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper mxw-100 mx-auto mt-3" style="width: 400px;">
        <h3>Sign up</h3>
        <form action="includes/signup.inc.php" method="post">
        <div class="mb-3">
            <label for="uid" class="form-label">User name</label>
            <input type="text" class="form-control" id="uid" name="uid">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd">
        </div>
        <div class="mb-3">
            <label for="pwd_repeat" class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="pwd_repeat" name="pwd_repeat">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
        <span class="mx-2">or</span>
        <a href="index.php" class="login">Log in</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>