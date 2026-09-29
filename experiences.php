<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("./includes/header.php"); ?>
    <title>Expériences</title>
</head>
<body>
    <video class="bg-particles" autoplay muted loop playsinline>
         <source src="./IMG/particules.mp4" type="video/mp4">
    </video>
    <canvas id="canvas"></canvas>
    
    <header>
        <?php require_once("./includes/navbar.php"); ?>
    </header>
    <main id="main" class="experiences">
        <div id="experiences">
            <div class="comp-card">
                <h3>STAGE - KMS</h3>
                <img src="IMG/exp/kms.png" alt="Image KMS" class="experience">
                <div>
                    <p>Entreprise spécialisée dans la gestion, le chronométrage et la communication d'événements sportifs.</p>
                    <hr>
                    <p class="company">18/05/2026 au 19/06/2026</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php require_once("./includes/footer.php"); ?>
    </footer>
</body>
</html>