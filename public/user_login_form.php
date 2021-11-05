<div class="container-fluid fade-from-bottom" style="height: 100vh">
    <div class="row h-100">
        <div class="col-12 mx-auto my-auto d-flex login-container">
            <div class="align-self-center" style="height: 87.5%; width: 100%">
                <h1 class="text-center" style="font-weight: 600">Login</h1>
                <hr>
                <div class="space"></div>
                <form action="user_login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Insere o teu email" maxlength="45">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control form-input" placeholder="Insere a tua password" maxlength="320">
                    </div>
                    <div class="space"></div>
                    <hr>
                    <div class="row">
                        <div class="col text-center">
                            <div class="form-group" id="form-btn">
                                <button type="submit" class="btn btn-login btn-lg">Iniciar Sessão</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="text-center font-weight-light" style="font-size: .85rem">Não tens conta? <a href="user_signup.php">Cria uma!</a></p>
                <a href="index.php" style="color: #222831"><span class="material-icons">home</span></a>
            </div>
        </div>
    </div>
</div>