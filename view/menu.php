<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle">Menu</button>
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <div class="menu-menu-1-container">
        <ul id="menu-menu-1" class="menu">
            <li><a href="http://localhost/simplon/Simplon-Projet5-Blog/index.php">Acceuil</a></li>
            <li><a href="http://localhost/simplon/Simplon-Projet5-Blog/view/contactForm.php">Contact</a></li>
            <li>
                <form action="http://localhost/simplon/Simplon-Projet5-Blog/view/search.php">
                    <label for="search" hidden>Rechercher</label>
                    <input type="text" name="s" id="search" placeholder="Rechercher"
                        value="<?php isset($_GET['s']) ? $_GET['s'] : 'TEST' ?>">
                    <input type="submit" value="Rechercher">
                </form>
            </li>
        </ul>

    </div>
</nav>