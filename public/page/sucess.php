<?php $this->layout('layouts/page')?>
<?=$this->section('content')?>
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Добро пожаловать в наше сообщество!
            </h1>
            <h2 class="subtitle">
                <br>
                <div class="alert alert-success" role="alert">
                    Спасибо за регистрацию! Проверьте почту! <?=$_POST['name']?>
                </div>

            </h2>
        </div>
    </div>
</section>





