<header role="navigation" class="fixed" id="cabecalho">
    <nav class="navbar navbar-light bg-light navbar-expand shadow" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./IMGs/logo.png" alt="logo" id="logo">
            </a>
            <div id="ul-nav">
                <ul class="navbar-nav me-4 mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php" id="color-a">TESTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" id="color-b">CADA BIOTIPO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" id="color-c">DICAS SOBRE EXERCÍCIOS</a>
                    </li>
                    <?php
                    if (!isset($_SESSION['email'])) {
                    ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <form action="./login.php" method="post">
                                    <button type="submit" class="btn btn-outline-primary" style=" color: #06386b; border-color: #06386b; "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg></button>
                                </form>
                            </div>


                        </li>

                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button type="submit" class="btn btn-outline-success rounded-circle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="./perfil_do_usuario.php">PERFIL</a></li>
                                    <li>
                                        <form action="./PHP/deslogar.php" method="post">
                                            <a class="dropdown-item">
                                                <button type="submit" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                                    </svg> Sair</button>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
            <li class="nav-item dropdown" id="drop-down-responsive">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./index.php">TESTE</a></li>
                    <li><a class="dropdown-item" href="#">CADA BIOTIPO</a></li>
                    <li><a class="dropdown-item" href="#">DICAS SOBRE EXERCÍCIO</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <?php
                        if (!isset($_SESSION['email'])) {
                        ?>
                    <li class="nav-item">
                        <div class="dropdown">
                            <form action="./login.php" method="post">
                                <button type="submit" class="btn btn-outline-primary" style=" color: #06386b; border-color: #06386b; "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg></button>
                            </form>
                        </div>


                    </li>

                <?php
                        } else {
                ?>

                    <a href="./perfil_do_usuario.php" class="nav-link">
                        <button type="submit" class="btn btn-outline-success rounded-circle" id="bt-perfil"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg></button>PERFIL
                    </a>
                    <li>
                        <form action="./PHP/deslogar.php" method="post">
                            <a class="dropdown-item">
                                <button type="submit" class="btn btn-outline-danger" style="padding-left: 50px; padding-right:50px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg> Sair</button>
                            </a>
                        </form>
                    </li>
                <?php
                        }
                ?>

            </li>
            </ul>
            </li>
        </div>
    </nav>
</header>