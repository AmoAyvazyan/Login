<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container mt-4">
        <h4><?=$_COOKIE['user'] ?></h4>
        <form class="form-floating " style="width: 60%"  method="post" action="crud/create.php">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                      name="description" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Write your post</label>
            <button type="submit" class="btn btn-outline-secondary mt-4">Add</button>
        </form>
        <a href="post.php" class="btn btn-outline-dark mt-4" >Back</a>
        <div class="d-grid  col-1 mx-auto">
            <a href="log/exit.php" class="btn btn-dark mt-4" >Log out</a>
        </div>
    </div>
</body>
</html>