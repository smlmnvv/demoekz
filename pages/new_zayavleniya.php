<?php require_once 'modules/header.php' ?>

<main class="main">
    <section class="hero">
    <div class="container">
        <div class="row">
            <h1 class="fw-bold mb-5">Оформить заявление</h1>
            <div class="col-md-8">
                <form action="../vendor/new_statement.php" method="post">
                    <div class="mb-3">
                        <label for="number">Номер машины:</label>
                        <input type="hidden" name="id" value=<?= $_SESSION['user']['id'] ?>>
                        <input type="text" id="number" name="number" class="form-control my-2">
                    </div>
                    <div class="mb-3">
                        <label for="description">Описание нарушения:</label>
                        <textarea id="description" name="description" class="form-control my-2"></textarea>
                    </div>
                    <div class="box d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Оформить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
</main>

<?php require_once 'modules/footer.php' ?>