<?php require_once 'modules/header.php' ?>

<main class="main">
    <section class="hero">
    <div class="container">
        <div class="row">
            <h1 class="fw-bold mb-5">Заявления</h1>
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Заявление №</th>
                            <th scope="col">Номер машины</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $result = $db -> findStatements($_SESSION['user']['id']); foreach($result as $data) : ?>
                        <tr>
                        <td><?= $data['id']?></td>
                        <td><?= $data['carNumber'] ?></td>
                        <td><?= $data['description'] ?></td>
                        <td><?= $data['status'] ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
</main>

<?php require_once 'modules/footer.php' ?>