﻿<?php
    include "path.php";
    include "app/controllers/topics.php";
    $posts = selectAll('posts', ['id_topic' => $_GET['id']]);
    $topTopic = selectTopTopicFromPostsOnIndex('posts');
    $category = selectOne('topics', ['id' => $_GET['id']]);

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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- блок карусели START-->

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- блок карусели END-->

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2>Статьи с раздела <strong><?=$category['name']; ?></strong></h2>
            <?php foreach ($posts as $post): ?>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 80) . '...'  ?></a>
                        </h3>
                        <i class="far fa-user"> <?=$post['username'];?></i>
                        <i class="far fa-calendar"> <?=$post['created_date'];?></i>
                        <p class="preview-text">

                            <?=mb_substr($post['content'], 0, 55, 'UTF-8'). '...'  ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <!-- sidebar Content -->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск</h3>
                <form action="search.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                </form>
            </div>


            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                    <li>
                        <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- блок main END-->
<!-- footer -->
<?php include("app/include/footer.php"); ?>
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