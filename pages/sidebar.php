<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo (isset($_GET['p']) && !strcmp($_GET['p'],"home")) ? "active" : ""?>"
                   href="index.php?p=home">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (isset($_GET['p']) && !strcmp($_GET['p'],"single")) ? "active" : ""?>"
                   href="index.php?p=article"></a>
            </li>
        </ul>
    </div>
</nav>
