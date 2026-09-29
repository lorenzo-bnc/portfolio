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
            <div class="title-modal">
                <h3>C3 - Développer la présence en ligne de l’organisation</h3>
                <a href="http://s140190424.onlinehome.fr/home.php" target="_blank" class="sites">Site d'exemple</a>
            </div>
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
            <a href="https://www.chartjs.org/docs/latest/charts/line.html" target="_blank">
                <div class="carousel">
                    <img src="IMG/comp/C3/graph/hf.png" alt="Graphique représentant la répartition des participants par sexe et par catégorie">
                    <img src="IMG/comp/C3/graph/inscrits_sem.png" alt="Graphique représentant l'évolution des inscriptions au fil des semaines">
                    <img src="IMG/comp/C3/graph/inscrits_dep.png" alt="Graphique représentant les inscriptions dans les différentes villes">
                    <img src="IMG/comp/C3/graph/promo.png" alt="Graphique représentant les utilisations des code promos">
                    <img src="IMG/comp/C3/graph/code_ville.png" alt="Code PHP contenant les fonctions de calcul des statistiques">
                </div>
            </a>

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
            <a href="https://maplibre.org/maplibre-gl-js/docs/examples/display-a-map/" target="_blank">
                <img src="IMG/comp/C3/carte/carte.png" alt="Carte interactive affichant la répartition géographique des participants" class="only">
            </a>
            
            <p>
                Une carte interactive permet de visualiser la provenance géographique
                des participants par ville ou par département.
            </p>

            <?php // Participants ?>
            <h4>Gestion et recherche des participants</h4>
            <div class="carousel">
                <img src="IMG/comp/C3/liste-inscrit/liste.png" alt="Liste des participants inscrits à un événement">
                <img src="IMG/comp/C3/liste-inscrit/recherche.png" alt="Recherche en temps réel dans la liste des participants">
                <img src="IMG/comp/C3/liste-inscrit/code-liste.png" alt="Code affichage liste participants">
                <img src="IMG/comp/C3/liste-inscrit/event-ou-crs.png" alt="Code permettant de séparer entre les événements et les courses">
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

            <?php // Notifications ?>
            <h4>Notifications et informations importantes</h4>
            <div class="carousel">
                <img src="IMG/comp/C3/notif/liste.png" alt="Liste des notifications destinées à l'organisateur">
                <img src="IMG/comp/C3/notif/donner-notif.png" alt="Code PHP permettant de récuperer les notifications automatiquement">
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

            <?php // Création ?>
            <h4>Création et modification</h4>
            <div class="carousel">
                <img src="IMG/comp/C3/ajout/step1.png" alt="Première étape du formulaire de création d'une course">
                <img src="IMG/comp/C3/ajout/step2.png" alt="Deuxième étape du formulaire concernant les inscriptions">
                <img src="IMG/comp/C3/ajout/step3.png" alt="Troisième étape du formulaire concernant les équipes et les catégories">
                <img src="IMG/comp/C3/ajout/edit-ou-add.png" alt="Code permettant de savoir si nous voulons ajouter ou editer">
                <img src="IMG/comp/C3/ajout/form-edit.png" alt="Code envoie formulaire d'edit">
            </div>

            <p>
                L’organisateur peut créer ou modifier une course grâce à un formulaire
                organisé en plusieurs étapes.
            </p>

            <?php // Technologies ?>
            <h4>Technologies utilisées</h4>
            <div class="carousel">
                <img src="IMG/comp/php.png" alt="Logo PHP">
                <img src="IMG/comp/mysql.png" alt="Logo MySQL">
                <img src="IMG/comp/web-language.png" alt="Logo Web">
                <img src="IMG/comp/vscode.png" alt="Logo VS Code">
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

    <?php // C4 ?>
    <div class="modal" id="modal-2">
        <div class="head-modal">
            <h3>C4 - Travailler en mode projet</h3>
            <button class="close" onclick="closeModal(2)">
                ×
            </button>
        </div>

        <div class="modal-body">
            <h3>Participation au projet de développement de l’Espace Organisateur</h3>
            <p>
                Durant mon stage chez KMS, j’ai participé à un projet de développement
                visant à améliorer l’Espace Organisateur. Ce projet m’a permis de
                travailler sur une application existante, de comprendre son architecture
                et de développer de nouvelles fonctionnalités en respectant son
                organisation technique.
            </p>

            <?php // Contexte ?>
            <h4>Contexte et objectifs du projet</h4>
            <div class="carousel">
                <img src="IMG/comp/C4/arborescence.png" alt="Vue générale de l'architecture du projet Espace Organisateur">
                <img src="IMG/comp/C4/fonctions.png" alt="Segmentation des fonctions dans des librairies">
            </div>

            <p>
                Les principaux objectifs étaient les suivants :
            </p>

            <ul>
                <li>Améliorer l’espace destiné aux organisateurs.</li>
                <li>Centraliser la gestion des événements.</li>
                <li>Ajouter des statistiques et des indicateurs.</li>
                <li>Faciliter la gestion des participants.</li>
                <li>Améliorer la gestion des notifications.</li>
                <li>Respecter la structure existante du projet.</li>
            </ul>

            <?php // Analyse ?>
            <h4>Analyse de l’existant</h4>
            <p>
                Avant de développer une fonctionnalité, j’ai étudié le fonctionnement
                existant de l’application afin d’identifier les fichiers, les fonctions
                et les tables concernés.
            </p>

            <ul>
                <li>Lecture du code PHP et JavaScript.</li>
                <li>Identification des fonctions réutilisables.</li>
                <li>Analyse des relations entre les tables.</li>
                <li>Compréhension du fonctionnement des pages existantes.</li>
                <li>Repérage des conventions utilisées dans le projet.</li>
            </ul>

            <?php // Découpage ?>
            <h4>Découpage du projet en modules</h4>
            <div class="carousel">
                <img src="IMG/comp/C4/libs.png" alt="Dossier contenant les bibliothèques PHP">
                <img src="IMG/comp/C4/JS.png" alt="Organisation des fichiers JavaScript du projet">
            </div>

            <p>
                Afin de conserver une organisation claire, les fonctionnalités ont été
                réparties dans plusieurs bibliothèques et fichiers spécialisés.
            </p>

            <ul>
                <li>
                    <strong>libEspOrg_global.php :</strong>
                    fonctions communes et fonctions de lecture.
                </li>
                <li>
                    <strong>libEspOrg_stats.php :</strong>
                    calcul et récupération des statistiques.
                </li>
                <li>
                    <strong>libEspOrg_actions.php :</strong>
                    actions de création et de modification.
                </li>
                <li>
                    <strong>libEspOrg_communication.php :</strong>
                    notifications et messagerie.
                </li>
                <li>
                    <strong>stats.js :</strong>
                    graphiques et carte interactive.
                </li>
                <li>
                    <strong>lorenzo.js :</strong>
                    fonctions JavaScript communes.
                </li>
            </ul>

            <?php // Développement ?>
            <h4>Développement des fonctionnalités</h4>
            <div class="carousel">
                <img src="IMG/comp/C4/fonctions/EspOrgActions__Ajout_Course.png" alt="Fonction PHP permettant d'ajouter une course en base de données">
                <img
                    src="IMG/comp/C4/fonctions/EspOrgActions__MaJ_Infos_Course_1.png"
                    alt="Fonction PHP permettant de modifier les informations d'une course"
                >
                <img
                    src="IMG/comp/C4/fonctions/EspOrgActions__MaJ_Infos_Course_2.png"
                    alt="Fonctions PHP utilisées pour calculer les statistiques"
                >
            </div>

            <p>
                J’ai participé au développement de plusieurs fonctionnalités backend et
                frontend, notamment les statistiques, les notifications, les formulaires
                et la gestion des participants.
            </p>

            <?php // AJAX ?>
            <h4>Communication entre le frontend et le backend</h4>
            <div class="carousel">
                <img src="IMG/comp/C4/ajax/fetch.png" alt="Appel AJAX réalisé avec Fetch API depuis le frontend">
                <img src="IMG/comp/C4/ajax/json.png" alt="Endpoint PHP retournant une réponse au format JSON">
            </div>

            <p>
                Les échanges entre l’interface et le serveur sont réalisés de manière
                asynchrone. Les endpoints PHP retournent des données au format JSON,
                qui sont ensuite utilisées par JavaScript pour mettre à jour la page.
            </p>

            <?php // Sécurité ?>
            <h4>Respect des règles de sécurité</h4>
            <div class="carousel">
                <img src="IMG/comp/C4/secure/pdo.png" alt="Requête préparée avec PDO pour protéger la base de données">
                <img src="IMG/comp/C4/secure/verifconnect.png" alt="Vérification de la session utilisateur avant l'accès à une fonctionnalité">
            </div>

            <p>
                Le développement a été réalisé en respectant les mesures de sécurité
                déjà utilisées dans l’application.
            </p>

            <ul>
                <li>Utilisation de requêtes préparées avec PDO.</li>
                <li>Vérification des sessions utilisateur.</li>
                <li>Contrôle des rôles et des droits d’accès.</li>
                <li>Validation des fichiers envoyés.</li>
                <li>Contrôle du type MIME et de la taille des images.</li>
            </ul>

            <p>
                Ce projet m’a permis de travailler dans un environnement professionnel,
                de suivre une démarche structurée et de participer à l’évolution d’une
                application existante.
            </p>

            <p>
                J’ai ainsi mobilisé des compétences d’analyse, de développement, de
                test, de débogage, d’organisation du code et d’intégration.
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
        <button onclick="openModal('e5')">
            GRILLE E5
        </button>
    </footer>
</body>
</html>