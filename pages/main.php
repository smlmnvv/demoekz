    <?php require_once 'modules/header.php' ?>

    <main class="main">
        <section class="hero">
            <div class="container">
                <div class="row">
                    <h1 class="fw-bold mb-5">Главная</h1>
                    <h2>Приветствую, <?= $_SESSION['user']['fio'] ?> !</h2>
                    <div class="col-md-8">
                        <p>На этом портале ты можешь оформить заявление, либо же посмотреть свои старые.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'modules/footer.php'?>