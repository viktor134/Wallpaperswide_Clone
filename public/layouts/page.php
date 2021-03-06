<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wallpaperswide_Clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>
<body>


<div class="wrapper">
    <div class="container">
        <nav class="navbar is-transparent">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.html">
                        Главная
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="category.html">
                            Категории


                        </a>
                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="category.html">

                            </a>
                            <?foreach ($categories as $category):?>
                            <a class="navbar-item" href="category.html">

                                    <?=$category->title?>

                                <?endforeach;?>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="field is-grouped">
                            <p class="control">
                                <a class="button is-link" href="login.html">
                      <span class="icon">
                        <i class="fas fa-user"></i>
                      </span>
                                    <span>Войти</span>
                                </a>
                            </p>
                            <p class="control">
                                <a class="button is-primary" href="/register">
                      <span class="icon">
                        <i class="fas fa-address-book"></i>
                      </span>
                                    <span>Зарегистрироваться</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <section class="hero is-medium is-primary is-bold">
</div>
</section>

<?=$this->section('content')?>


<footer class="section hero is-light">
    <div class="container">
        <div class="content has-text-centered">
            <div class="tabs">
                <ul>
                    <li class="is-active"><a>Главная</a></li>
                    <li><a>Природа</a></li>
                    <li><a>Дизайн и Интерьер</a></li>
                    <li><a>Животные</a></li>
                    <li><a>Природа</a></li>
                    <li><a>Дизайн и Интерьер</a></li>
                    <li><a>Животные</a></li>
                    <li><a>Природа</a></li>
                    <li><a>Дизайн и Интерьер</a></li>
                    <li><a>Животные</a></li>
                </ul>
            </div>
            <p>
                <strong>Vitcor</strong> - Created  My custom MVC framework.
            </p>
            <p class="is-size-7">
                All rights reserved. 2020
            </p>
        </div>
    </div>
</footer>
</div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</html>