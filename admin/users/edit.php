<?php session_start();
include "../../path.php";
include "../../app/controllers/users.php";
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
        <div class="button row">
            <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-2 btn btn-success">Создать</a>
            <span class="col-1"></span>
            <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-3 btn btn-warning">Редактировать</a>
        </div>
        <div class="row title-table">
            <h2>Создать пользователя</h2>
        </div>
        <div class="row add-post">
            <div class="mb-12 col-12 col-md-12 err">
                <!-- Вывод массива с ошибками -->
                <?php include "../../app/helps/errorInfo.php"; ?>
            </div>
            <form action="edit.php" method="post">
                <input name="id" value="<?=$id;?>" type="hidden">
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Логин</label>
                    <input name="login" value="<?=$username;?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="mail" value="<?=$email;?>" type="email" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
                </div>
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label">Сбросить пароль</label>
                    <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
                </div>
                <div class="col">
                    <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                    <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="повторите ваш пароль...">
                </div>
                <input name="admin" class="form-check-input" value="1" type="checkbox" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Admin?
                </label>
                <div class="col">
                    <button name="update-user" class="btn btn-primary" type="submit">Обновить</button>
                </div>
            </form>
        </div>

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

