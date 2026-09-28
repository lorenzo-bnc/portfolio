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
    <main id="main">
        <div id="competences">
            <div class="comp-card" onclick="openModal(1)">
                <h3>C3 - Développer la présence en ligne de l’organisation</h3>
                <img src="IMG/comp/comp_1_0.png" alt="Image KMS" class="competence">
                <div>
                    <p>Développement d’un espace privé regroupant statistiques et outils de gestion</p>
                    <hr>
                    <p class="company">Compétence travaillé chez KMS</p>
                </div>
            </div>

            <div class="comp-card" onclick="openModal(2)">
                <h3>C4 - Travailler en mode projet</h3>
                <img src="IMG/comp/comp_1_0.png" alt="Template 250" class="competence">
                <div>
                    <p>Développement d’un espace privé regroupant statistiques et outils de gestion</p>
                    <hr>
                    <p class="company">Compétence travaillé chez KMS</p>
                </div>
            </div>
        </div>
    </main>
    
    <?php // C3 ?>
    <div class="modal" id="modal-1">
        <div class="head-modal">
            <h3>C3 - Développer la présence en ligne de l’organisation</h3>
            <button class="close" onclick="closeModal(1)">×</button>
        </div>

        <div class="modal-body">
            <h3>Développement de l’Espace Organisateur KMS</h3>

            <p>
                Dans le cadre de mon stage chez KMS, j’ai participé au développement
                de l’Espace Organisateur V3. Cette interface permet aux organisateurs
                de créer, configurer, administrer et suivre leurs événements en ligne.
            </p>

            <?php // Présentation générale ?>
            <h4>Présentation générale de l’application</h4>
            <div class="carousel">
                <img src="IMG/comp/C3/general/accueil.png" alt="Page d'accueil de l'Espace Organisateur KMS">
                <img src="IMG/comp/C3/general/event.png" alt="Vue générale d'un événement dans l'Espace Organisateur">
                <img src="IMG/comp/C3/general/notif.png" alt="Page de notifications d'un organisateur">
            </div>

            <p>
                L’application regroupe différentes fonctionnalités dans un espace
                centralisé afin de faciliter la gestion des événements sportifs.
            </p>

            <ul>
                <li>Gestion des événements et des courses.</li>
                <li>Suivi des inscriptions.</li>
                <li>Consultation des statistiques.</li>
                <li>Gestion des notifications.</li>
                <li>Gestion des participants.</li>
                <li>Consultation des documents et informations importantes.</li>
            </ul>

            <?php // Navigation ?>
            <h4>Barre de navigation</h4>
            <div class="carousel">
                <img src="IMG/comp/C3/navbar/1.png" alt="Barre de navigation de l'Espace Organisateur">
                <img src="IMG/comp/C3/navbar/code.png" alt="Code PHP et HTML de la barre de navigation">
                <img src="IMG/comp/C3/navbar/2.png" alt="Menu de navigation avec le compteur de notifications">
                <img src="IMG/comp/C3/navbar/3.png" alt="Menu de navigation donnant accès à la messagerie">
            </div>

            <p>
                La barre de navigation permet d’accéder rapidement aux différentes
                parties de l’application.
            </p>

            <ul>
                <li>Accueil.</li>
                <li>Événements.</li>
                <li>Courses.</li>
                <li>Participants.</li>
                <li>Statistiques.</li>
                <li>Notifications.</li>
                <li>Messagerie.</li>
            </ul>

            <?php // KPIs ?>
            <h4>Tableau de bord et indicateurs clés</h4>
            <div class="carousel">
                <img src="IMG/comp/C3/tab-bord/principales.png" alt="Tableau de bord affichant les principaux indicateurs de l'organisateur">
                <img src="IMG/comp/C3/tab-bord/max_gain_nb_event.png" alt="Code permettant de calculer le nombre d'événements et le gain maximum">
                <img src="IMG/comp/C3/tab-bord/nb_epreuves.png" alt="Code permettant de calculer le nombre d'épreuves">
                <img src="IMG/comp/C3/tab-bord/taux_inscrits.png" alt="Code permettant de calculer le taux d'inscription">
            </div>

            <p>
                Le tableau de bord présente les informations essentielles sous forme
                d’indicateurs visuels afin que l’organisateur puisse suivre rapidement
                l’activité de ses événements.
            </p>

            <ul>
                <li>Nombre de participants inscrits.</li>
                <li>Nombre d’épreuves.</li>
                <li>Gains générés.</li>
                <li>Taux de remplissage.</li>
                <li>Comparaison avec les éditions précédentes.</li>
            </ul>

            <?php // Détail événement ?>
            <h4>Page de détail d’un événement</h4>
            <img src="IMG/comp/C3/event/kpi.png" alt="Indicateurs détaillés d'un événement" class="only">

            <p>
                La page de détail permet d’accéder à une vue complète d’un événement,
                avec ses statistiques, ses inscriptions, ses informations et ses
                éventuels documents à vérifier.
            </p>

            <?php // Graphiques ?>
            <h4>Statistiques et graphiques</h4>
            <div class="carousel">
                <img src="IMG/comp/C3/graph/hf.png" alt="Graphique représentant la répartition des participants par sexe et par catégorie">
                <img src="IMG/comp/C3/graph/inscrits_sem.png" alt="Graphique représentant l'évolution des inscriptions au fil des semaines">
                <img src="IMG/comp/C3/graph/inscrits_dep.png" alt="Graphique représentant les inscriptions dans les différentes villes">
                <img src="IMG/comp/C3/graph/promo.png" alt="Graphique représentant les utilisations des code promos">
                <img src="IMG/comp/C3/graph/code_ville.png" alt="Code PHP contenant les fonctions de calcul des statistiques">
            </div>

            <p>
                Les statistiques sont récupérées depuis la base de données puis
                transmises à l’interface grâce à des appels AJAX retournant des
                données au format JSON.
            </p>

            <ul>
                <li>Répartition des participants par sexe.</li>
                <li>Répartition par catégorie.</li>
                <li>Évolution des inscriptions.</li>
                <li>Comparaison entre plusieurs éditions.</li>
                <li>Nombre de nouvelles inscriptions.</li>
                <li>Utilisation des codes promotionnels.</li>
            </ul>

            <?php // Carte ?>
            <h4>Carte interactive des participants</h4>
            <img src="IMG/comp/C3/carte/carte.png" alt="Carte interactive affichant la répartition géographique des participants" class="only">

            <p>
                Une carte interactive permet de visualiser la provenance géographique
                des participants par ville ou par département.
            </p>

            <!-- Participants -->
            <h4>Gestion et recherche des participants</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C3/liste-participants.png"
                    alt="Liste des participants inscrits à un événement"
                >

                <img
                    src="IMG/comp/C3/recherche-participant.png"
                    alt="Recherche en temps réel dans la liste des participants"
                >

                <img
                    src="IMG/comp/C3/filtres-participants.png"
                    alt="Filtres permettant de trier les participants par événement, édition ou course"
                >

                <img
                    src="IMG/comp/C3/badges-paiement-licence.png"
                    alt="Badges indiquant le statut du paiement et de la licence d'un participant"
                >

                <img
                    src="IMG/comp/C3/export-csv-pdf.png"
                    alt="Boutons permettant d'exporter la liste des participants en CSV ou en PDF"
                >
            </div>

            <p>
                La liste des participants peut être recherchée, filtrée et exportée.
                Cela facilite la consultation et l’exploitation des données par
                l’organisateur.
            </p>

            <ul>
                <li>Recherche en temps réel.</li>
                <li>Tri des colonnes.</li>
                <li>Filtrage par événement ou par course.</li>
                <li>Affichage de l’état du paiement.</li>
                <li>Affichage de l’état de la licence.</li>
                <li>Export CSV et PDF.</li>
            </ul>

            <!-- Notifications -->
            <h4>Notifications et informations importantes</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C3/liste-notifications.png"
                    alt="Liste des notifications destinées à l'organisateur"
                >

                <img
                    src="IMG/comp/C3/notification-document.png"
                    alt="Notification signalant des documents à vérifier"
                >

                <img
                    src="IMG/comp/C3/notification-remboursement.png"
                    alt="Notification signalant une demande de remboursement en attente"
                >

                <img
                    src="IMG/comp/C3/notification-course-complete.png"
                    alt="Notification indiquant qu'une course est complète"
                >

                <img
                    src="IMG/comp/C3/communication.php.png"
                    alt="Code PHP permettant de générer les notifications automatiquement"
                >
            </div>

            <p>
                Le système de notifications informe automatiquement l’organisateur
                lorsqu’une action doit être réalisée ou lorsqu’un événement important
                est détecté.
            </p>

            <ul>
                <li>Documents à vérifier.</li>
                <li>Demandes de remboursement.</li>
                <li>Profil incomplet.</li>
                <li>Course complète.</li>
                <li>Notifications lues ou non lues.</li>
            </ul>

            <!-- Création course -->
            <h4>Création et modification d’une course</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C3/course-step1.png"
                    alt="Première étape du formulaire de création d'une course"
                >

                <img
                    src="IMG/comp/C3/course-step2.png"
                    alt="Deuxième étape du formulaire concernant les inscriptions"
                >

                <img
                    src="IMG/comp/C3/course-step3.png"
                    alt="Troisième étape du formulaire concernant les équipes et les catégories"
                >

                <img
                    src="IMG/comp/C3/course-step4.png"
                    alt="Quatrième étape du formulaire concernant les options médicales"
                >

                <img
                    src="IMG/comp/C3/course-step5.png"
                    alt="Cinquième étape du formulaire concernant les tarifs"
                >

                <img
                    src="IMG/comp/C3/course-step6.png"
                    alt="Sixième étape du formulaire concernant les extras"
                >

                <img
                    src="IMG/comp/C3/course-step7.png"
                    alt="Septième étape du formulaire concernant les codes promotionnels"
                >
            </div>

            <p>
                L’organisateur peut créer ou modifier une course grâce à un formulaire
                organisé en plusieurs étapes.
            </p>

            <!-- Technologies -->
            <h4>Technologies utilisées</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C3/code-php-pdo.png"
                    alt="Code PHP utilisant PDO et une requête préparée"
                >

                <img
                    src="IMG/comp/C3/reponse-json.png"
                    alt="Réponse JSON retournée par un endpoint AJAX"
                >

                <img
                    src="IMG/comp/C3/appel-fetch.png"
                    alt="Code JavaScript utilisant Fetch API pour appeler un endpoint PHP"
                >

                <img
                    src="IMG/comp/C3/requete-mysql.png"
                    alt="Requête SQL utilisée pour récupérer les données d'un événement"
                >
            </div>

            <ul>
                <li>PHP pour le backend.</li>
                <li>MySQL pour la base de données.</li>
                <li>HTML pour l’interface.</li>
                <li>JavaScript et Fetch API pour les appels AJAX.</li>
                <li>ApexCharts pour les graphiques.</li>
                <li>MapLibre GL JS pour la carte interactive.</li>
                <li>Quill.js pour l’éditeur de contenu.</li>
            </ul>

            <p>
                Ce développement contribue à renforcer la présence en ligne de KMS en
                proposant une interface complète permettant aux organisateurs de
                valoriser, gérer et suivre leurs événements.
            </p>
        </div>

        <hr>
        <div class="footer-modal">
            <p class="company">Compétence travaillée chez KMS</p>

            <a href="./DOC/FDS_C3_C4.pdf" class="fds-button" target="_blank">
                Fiche de situation
            </a>
        </div>
    </div>

    <div class="modal" id="modal-2">
        <div class="head-modal">
            <h3>C4 - Travailler en mode projet</h3>
            <button class="close" onclick="closeModal(2)">×</button>
        </div>
        
        <div class="carousel">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
            <img src="IMG/template/template_250.png" alt="Template 250" width="100%">
        </div>
        
        <div>
            <p>Développement d’un espace privé regroupant statistiques et outils de gestion</p>
            <hr>
            <div class="footer-modal">
                <p class="company">Compétence travaillé chez KMS</p>
                <a href="./DOC/FDS_C3_C4.pdf" class="fds-button" target="_blank">Fiche de situation</a>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-e5">
        <div class="head-modal">
            <h3>Grille E5</h3>
            <button class="close" onclick="closeModal('e5')">×</button>
        </div>
        
        <embed src="./DOC/E5_FICHE_SAISIE.pdf" type="application/pdf" width="100%" height="600px">  
        
        <div>
            <p>BTS SIO Option.SLAM</p>
            <hr>
            <div class="footer-modal">
                <p class="company">Lycée Charles Péguy</p>
            </div>
        </div>
    </div>

    <footer>
        <?php require_once("./includes/footer.php"); ?>
    </footer>
</body>
</html>