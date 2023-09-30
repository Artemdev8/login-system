<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper mxw-100 mx-auto mt-3" style="width: 400px;">
        <h3>Log in</h3>
        <form action="includes/login.inc.php" method="post">
        <div class="mb-3">
            <label for="uid" class="form-label">User name</label>
            <input type="text" class="form-control" id="uid" name="uid">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Log in</button>
        <span class="mx-2">or</span>
        <a href="signup.php" class="login">Sign up</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>