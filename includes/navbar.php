<?php
    $page_courante = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <h3 style="margin-left: 8px;">BUONOCORE Lorenzo</h3>

    <ul id="desktop">
        <li class="<?= $page_courante === 'index.php' ? 'active' : '' ?>">
            <a href="index.php">Accueil</a>
        </li>

        <!--
        <li class="<?= $page_courante === 'projets.php' ? 'active' : '' ?>">
            <a href="projets.php">Projets</a>
        </li>
        -->
        <li class="<?= $page_courante === 'experiences.php' ? 'active' : '' ?>">
            <a href="experiences.php">Expériences</a>
        </li>

        <li class="<?= $page_courante === 'competences.php' ? 'active' : '' ?>">
            <a href="competences.php">Compétences</a>
        </li>

        <li class="<?= $page_courante === 'veille.php' ? 'active' : '' ?>">
            <a href="veille.php">Veille technologique</a>
        </li>

        <li class="<?= $page_courante === 'contact.php' ? 'active' : '' ?>">
            <a href="contact.php">Contact</a>
        </li>
    </ul>

    <button id="mobile">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div style="display:none;" id="mobile">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
    </div>
</nav>