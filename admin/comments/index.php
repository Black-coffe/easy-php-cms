<?php
        include "../../path.php";
        include "../../app/controllers/commentaries.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<?php include("../../app/include/header-admin.php"); ?>

<div class="container">
<?php include "../../app/include/sidebar-admin.php"; ?>

        <div class="posts col-9">
            <div class="row title-table">
                <h2>Управление комментариями</h2>
                <div class="mb-12 col-12 col-md-12 err">
                    <p><?=$_SESSION['error'];?></p>
                </div>
                <div class="col-1">ID</div>
                <div class="col-5">Текст</div>
                <div class="col-2">Автор</div>
                <div class="col-4">Управление</div>
            </div>
            <?php foreach ($commentsForAdm as $key => $comment): ?>
                <div class="row post">
                    <div class="id col-1"><?=$comment['id']; ?></div>
                    <div class="title col-5"><?=mb_substr($comment['comment'], 0, 50, 'UTF-8'). '...'  ?></div>
                    <?php
                        $user = $comment['email'];
                        $user = explode('@', $user);
                        $user = $user[0];
                    ?>
                    <div class="author col-3"><?=$user . "@"; ?></div>
                    <div class="red col-1"><a href="edit.php?id=<?=$comment['id'];?>">edit</a></div>
                    <div class="del col-1"><a href="edit.php?delete_id=<?=$comment['id'];?>">delete</a></div>
                    <?php if ($comment['status']): ?>
                        <div class="status col-1"><a href="edit.php?publish=0&pub_id=<?=$comment['id'];?>">unpublish</a></div>
                    <?php else: ?>
                        <div class="status col-1"><a href="edit.php?publish=1&pub_id=<?=$comment['id'];?>">publish</a></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- footer -->
<?php include("../../app/include/footer.php"); ?>
<!-- // footer -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>
