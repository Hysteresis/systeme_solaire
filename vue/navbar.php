<nav class="navbar navbar-expand-lg navbar-dark" id="navBar">
    <div class="container">

        <a class="navbar-brand fs-5 display-4 " href="index.php">
            <h1 class="sytemeSolaire">Systeme Solaire</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a id="item0" class="nav-link" href="index.php?uc=planet">Planètes</a>
                </li>
                <li class="nav-item">
                    <a id="item1" class="nav-link" href="index.php?uc=dwarfPlanet">Planètes naines</a>
                </li>
                <li class="nav-item">
                    <a id="item2" class="nav-link" href="index.php?uc=moon">Lunes</a>
                </li>
                <li class="nav-item">
                    <a id="item3" class="nav-link" href="index.php?uc=asteroid">Asteroïdes</a>
                </li>
                <li class="nav-item">
                    <a id="item4" class="nav-link" href="index.php?uc=comet">Comètes</a>
                </li>
                <li class="nav-item">
                    <a id="item5" class="nav-link" href="index.php?uc=star">Etoile</a>
                </li>
                <form method="get" class="d-flex" action="index.php">
                    <input class="form-control me-2" name="searchName" type="search" placeholder="Planète, comète, lune,..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </ul>
        </div>
    </div>
</nav>