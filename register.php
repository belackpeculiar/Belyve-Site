<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="mb-3 mt-3">
    <form action="" method="post">
        <h1>Register now</h1>
        <input type="text" name="name" class="form-control" placeholder="Input your name">
        <input type="email" name="email" class="form-control" placeholder="Input your email">
        <input type="password" name="password" class="form-control" placeholder="Input your password">
        <input type="password" name="password" class="form-control" placeholder="Input your password">
        <input type="repeat_password" name="repeat_password"  class="form-control" placeholder="Repeat your password">
        <select name="user_type" class="form-select">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-control " onclick="document.write(error)">
        <p>Already have an account? <a href="login_form.php" class="btn btn-primary"> Login Now</a></p>
    </form>
   </div> 
</body>
</html>