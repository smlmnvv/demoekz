<div class="row d-flex justify-content-center">
                    <div class="reg">
                    <div class="col-md-8">
                            <form action="vendor/registration.php" method="post">
                                <p class="fw-bold">Регистрация</p>
                                <div class="mb-2">
                                    <label for="fio">Фио:</label>
                                    <input type="text" id="fio" name="fio" class="form-control my-2" required>
                                </div>
                                <div class="mb-2">
                                    <label for="phone">Телефон:</label>
                                    <input type="text" inputmode="numeric" pattern="[0-9]{11}" id="phone" name="phone" class="form-control my-2" required>
                                </div>
                                <div class="mb-2">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control my-2" required>
                                </div>
                                <div class="mb-2">
                                    <label for="login">Логин:</label>
                                    <input type="text" id="login" name="login" class="form-control my-2" required>
                                </div>
                                <div class="mb-2">
                                    <label for="password">Пароль:</label>
                                    <input type="password" id="password" name="password" class="form-control my-2" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password_repeat">Повторите пароль:</label>
                                    <input type="password" id="password_repeat" name="password_repeat" class="form-control my-2" required>
                                </div>
                                <div class="box d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Регистрация</button>
                                    <a href="#" class="btn-login btn btn-primary">Уже есть аккаунт</a>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>