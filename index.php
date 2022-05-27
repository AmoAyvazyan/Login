<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-4">

        <?php
            if ($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1> Login </h1>
                <form action="log/login.php" method="post" style="width: 45%">
                    <input type="text" class="form-control mt-3"
                           name="login" id="login" placeholder="Enter login">
                    <input type="password" class="form-control mt-3"
                           name="pass" id="pass" placeholder="Enter password">
                    <button class="btn btn-outline-success mt-3"
                            type="submit"> Login</button>
                </form>
            </div>
            <div class="col">
                <h1> Registration </h1>
                <form action="log/check.php" method="post" style="width: 45%">
                    <input type="text" class="form-control mt-3"
                           name="login" id="login" placeholder="Enter login">
                    <input type="text" class="form-control mt-3"
                           name="name" id="name" placeholder="Enter name">
                    <input type="text" class="form-control mt-3"
                           name="email" id="email" placeholder="Enter email">
                    <input type="password" class="form-control mt-3"
                           name="pass" id="pass" placeholder="Enter password">
                    <button class="btn btn-outline-success mt-3"
                            type="submit"> Register</button>
                </form>
            </div>
        </div>
        <?php else:?>
            <?php require_once 'post.php' ?>
        <?php endif;?>
    </div>
</body>
</html>