<?php
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./styles.css">
    <title>View Blog</title>
</head>
<body>
    <header>
        <nav class="navbar  fixed-top" style="background-color: #DBA281;">
            <div class="container">
                <a class="navbar-brand text-white" href="index.php">
                    Home
                </a>
                <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#myMenu" role="button" aria-controls="myMenu">
                    <i class="bi bi-list"></i>
                </a>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="myMenu" aria-labelledby="myMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="myMenuLabel">My Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <a href="create.php" class="text-decoration-none">
                                Create a new post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5 py-5">
        <?php
            foreach($query as $item) {
                echo "<div class='bg-light border p-2 rounded text-center'>
                    <h1>
                        $item[title]
                    </h1>
                    <p>
                        $item[content]
                    </p>
                    <div class='d-flex mt-2 justify-content-center align-items-center'>
                        <a href='edit.php?id=$item[id]' class='btn btn-primary'>
                            Edit
                        </a>

                        <form method='POST'>
                            <input type='text' hidden name='id' value='$item[id]'>
                            <button class='btn btn-danger ms-2' name='delete'>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>