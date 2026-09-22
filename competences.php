<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("./includes/header.php"); ?>
    <title>Compétences</title>
</head>
<body>
    <video class="bg-particles" autoplay muted loop playsinline>
         <source src="./IMG/particules.mp4" type="video/mp4">
    </video>
    <canvas id="canvas"></canvas>
    <header>
        <?php require_once("./includes/navbar.php"); ?>
    </header>
    <main>
        <div id="competences">
            <div class="comp-card" onclick="openModal(1)">
                <h3>C1 - Mettre à disposition des utilisateurs un service informatique</h3>
                <img src="IMG/comp/comp_1_0.png" alt="Image KMS" class="competence">
                <div>
                    <p>Développement d’un espace privé regroupant statistiques et outils de gestion</p>
                    <hr>
                    <p class="company">Compétence travaillé chez KMS</p>
                </div>
            </div>
            <div class="comp-card" onclick="openModal(2)">
                <h3>C2 - Développer la présence en ligne de l’organisation</h3>
                <img src="IMG/comp/comp_1_0.png" alt="Template 250" class="competence">
                <div>
                    <p>Développement d’un espace privé regroupant statistiques et outils de gestion</p>
                    <hr>
                    <p class="company">Compétence travaillé chez KMS</p>
                </div>
            </div>
        </div>
    </main>
    <div class="modal" id="modal-1">
        <div class="head-modal">
            <h3>C1 - Mettre à disposition des utilisateurs un service informatique</h3>
            <button class="close" onclick="closeModal(1)">×</button>
        </div>
        <img src="IMG/template/template_250.png" alt="Template 250" width="150">
        <div>
            <p>Développement d’un espace privé regroupant statistiques et outils de gestion</p>
            <hr>
            <p class="company">Compétence travaillé chez KMS</p>
        </div>
    </div>
    <div class="modal" id="modal-2">
        <div class="head-modal">
            <h3>C2 - Développer la présence en ligne de l’organisation</h3>
            <button class="close" onclick="closeModal(2)">×</button>
        </div>
        <img src="IMG/template/template_250.png" alt="Template 250" width="150">
        <div>
            <p>Développement d’un espace privé regroupant statistiques et outils de gestion</p>
            <hr>
            <p class="company">Compétence travaillé chez KMS</p>
        </div>
    </div>

    <footer>
        <?php require_once("./includes/footer.php"); ?>
    </footer>
    <script>
        function openModal(id){
            const modal = document.getElementById('modal-'+id)
            const canvas = document.getElementById('canvas')
            modal.style.display = "flex"
            canvas.style.display = "flex"
        }
        function closeModal(id){
            const modal = document.getElementById('modal-'+id)
            const main = document.getElementById('main')
            modal.style.display = "none"
            canvas.style.display = "none"
        }
    </script>
</body>
</html>