<div class="container-fluid fade-from-bottom" style="height: 100vh">
    <div class="row h-100">
        <div class="col-12 mx-auto my-auto d-flex signup-container">
            <div class="align-self-center" style="height: 95%; width: 100%">
                <h1 class="text-center" style="font-weight: 600">Criar conta</h1>
                <hr>
                <div class="space"></div>
                <form action="user_signup.php" method="post">
                    <div class="form-group">
                        <label for="user">Username:</label>
                        <input type="user" name="user" id="user" class="form-control" placeholder="ex: bob_97" maxlength="45">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="ex: exemplo@mail.com" maxlength="45">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control form-input" placeholder="Algo seguro de que não te esqueças" maxlength="320">
                    </div>
                    <div class="form-group">
                        <label for="confpass">Confirmar password:</label>
                        <input type="password" name="confpass" id="confpass" class="form-control form-input" placeholder="Confirmar password" maxlength="320">
                    </div>
                    <div class="space"></div>
                    <hr>
                    <div class="row">
                        <div class="col text-center">
                            <div class="form-group" id="form-btn">
                                <button type="submit" class="btn btn-login btn-lg">Criar Conta</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="text-center font-weight-light" style="font-size: .85rem">Já tens conta? <a href="user_login.php">Faz login!</a></p>
                <a href="index.php" style="color: #222831"><span class="material-icons">home</span></a>
            </div>
        </div>
    </div>
</div>