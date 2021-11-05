<nav class="navbar navbar-expand-sm navbar-custom fixed-top py-1">
    <a href="index.php" class="navbar-brand">
        <img src="imagens/logo.svg" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="musicas.php" class="nav-link">Músicas</a>
            </li>
            <li class="nav-item">
                <a href="info.php" class="nav-link">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a href="ajuda.php" class="nav-link">Ajuda</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <?php
            if(empty($_SESSION['user'])){
                echo "<li class='nav-item'>";
                echo "<a href='user_login.php' class='nav-link'>Login</a>";
                echo "</li>";
            }
            else{
                echo "<li class='nav-item'>";
                echo "<a href='#' class='nav-link'>Perfil</a>";
                echo "</li>";
                echo "<li class='nav-item'>";
                echo "<a href='user_logout.php' class='nav-link'>";
                echo "<span class='material-icons d-none d-sm-flex justify-content-center'>logout</span>";
                echo "</a>";
                echo "</li>";
                echo "<li class='nav-item'>";
                echo "<a href='user_logout.php' class='nav-link d-block d-sm-none'>Logout</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</nav>