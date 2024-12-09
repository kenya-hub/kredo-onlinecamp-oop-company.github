<?php

session_start();

include '../classes/User.php';

$id = $_SESSION['id'];
$user_obj = new User;
$user = $user_obj->getUsers($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>

    
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
        </div>

        <div class="navbar-nav">
            <span class="navbar-text"><?= $_SESSION['full_name']?></span>
            <form action="../action/logout.php" method="post" class="d-flex ms-2">
                <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
            </form>
        </div>
    </nav>  

    <main class="row justify-content-center">
        <div class="col-4 ">
            <h2 class="text-center">Edit User</h2>

            <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center mb-3">
                    <div class="col-6">
                        <?php
                        if($user['photo']){
                        ?>
                        <img src="../assets/images/<?=$user['photo']?>" alt="<?=$user['photo']?>" class="d-block mx-auto edit-photo">

                        <?php
                        }else{
                        ?>
                            <i class="fas fa-user text-secondary d-block text-center edit-icon"></i>
                        
                        <?php
                        }
                        ?>

                        <input type="file" name="photo" id="photo" class="form-control mt-2" accept="image/*">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first-name" value="<?=$user['first_name']?>"
                    class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last-name" value="<?=$user['last_name']?>"
                    class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="username" class="form-label" fw-bold>UserName</label>
                    <input type="text" name="username" id="username" maxlength="15" value="<?=$user['username']?>"
                    class="form-control fw-bold" required>
                </div>

                <div class="mb-3">
                    <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>