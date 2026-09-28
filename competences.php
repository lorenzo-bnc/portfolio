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

    <!-- MODAL 2 : C4 -->
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

            <!-- Contexte -->
            <h4>Contexte et objectifs du projet</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/architecture-projet.png"
                    alt="Vue générale de l'architecture du projet Espace Organisateur"
                >

                <img
                    src="IMG/comp/C4/arborescence-projet.png"
                    alt="Arborescence des fichiers du projet"
                >

                <img
                    src="IMG/comp/C4/rapport-avancement.png"
                    alt="Rapport présentant l'avancement du projet de développement"
                >

                <img
                    src="IMG/comp/C4/kanban-projet.png"
                    alt="Tableau de suivi des tâches du projet"
                >
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

            <!-- Analyse -->
            <h4>Analyse de l’existant</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/lecture-code-existant.png"
                    alt="Lecture du code existant avant l'ajout d'une fonctionnalité"
                >

                <img
                    src="IMG/comp/C4/analyse-base-donnees.png"
                    alt="Analyse des tables de la base de données du projet"
                >

                <img
                    src="IMG/comp/C4/schema-base-donnees.png"
                    alt="Schéma représentant les relations entre les tables de la base de données"
                >

                <img
                    src="IMG/comp/C4/recherche-fonction-existante.png"
                    alt="Recherche d'une fonction existante avant de créer une nouvelle fonction"
                >
            </div>

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

            <!-- Découpage -->
            <h4>Découpage du projet en modules</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/libesporgglobal.png"
                    alt="Bibliothèque PHP contenant les fonctions globales du projet"
                >

                <img
                    src="IMG/comp/C4/libesporgstats.png"
                    alt="Bibliothèque PHP contenant les fonctions statistiques"
                >

                <img
                    src="IMG/comp/C4/libesporgactions.png"
                    alt="Bibliothèque PHP contenant les actions de création et de modification"
                >

                <img
                    src="IMG/comp/C4/libesporgcommunication.png"
                    alt="Bibliothèque PHP dédiée à la communication et aux notifications"
                >

                <img
                    src="IMG/comp/C4/fichiers-javascript.png"
                    alt="Organisation des fichiers JavaScript du projet"
                >
            </div>

            <p>
                Afin de conserver une organisation claire, les fonctionnalités ont été
                réparties dans plusieurs bibliothèques et fichiers spécialisés.
            </p>

            <ul>
                <li>
                    <strong>libesporgglobal.php :</strong>
                    fonctions communes et fonctions de lecture.
                </li>
                <li>
                    <strong>libesporgstats.php :</strong>
                    calcul et récupération des statistiques.
                </li>
                <li>
                    <strong>libesporgactions.php :</strong>
                    actions de création et de modification.
                </li>
                <li>
                    <strong>libesporgcommunication.php :</strong>
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

            <!-- Développement -->
            <h4>Développement des fonctionnalités</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/fonction-ajout-course.png"
                    alt="Fonction PHP permettant d'ajouter une course en base de données"
                >

                <img
                    src="IMG/comp/C4/fonction-maj-course.png"
                    alt="Fonction PHP permettant de modifier les informations d'une course"
                >

                <img
                    src="IMG/comp/C4/fonctions-statistiques.png"
                    alt="Fonctions PHP utilisées pour calculer les statistiques"
                >

                <img
                    src="IMG/comp/C4/fonctions-notifications.png"
                    alt="Fonctions PHP permettant de générer les notifications"
                >

                <img
                    src="IMG/comp/C4/code-javascript-dynamique.png"
                    alt="Code JavaScript permettant d'afficher dynamiquement des champs de formulaire"
                >
            </div>

            <p>
                J’ai participé au développement de plusieurs fonctionnalités backend et
                frontend, notamment les statistiques, les notifications, les formulaires
                et la gestion des participants.
            </p>

            <!-- Formulaire multi-étapes -->
            <h4>Développement du formulaire multi-étapes</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/step1-presentation.png"
                    alt="Étape de présentation du formulaire de création d'une course"
                >

                <img
                    src="IMG/comp/C4/step2-inscriptions.png"
                    alt="Étape de configuration des inscriptions d'une course"
                >

                <img
                    src="IMG/comp/C4/step3-equipes.png"
                    alt="Étape de configuration des équipes et des catégories"
                >

                <img
                    src="IMG/comp/C4/step4-options-medicales.png"
                    alt="Étape de configuration des options médicales"
                >

                <img
                    src="IMG/comp/C4/step5-tarifs.png"
                    alt="Étape de configuration des tarifs"
                >

                <img
                    src="IMG/comp/C4/step6-extras.png"
                    alt="Étape de configuration des extras"
                >

                <img
                    src="IMG/comp/C4/step7-codes-promo.png"
                    alt="Étape de configuration des codes promotionnels"
                >
            </div>

            <p>
                Le formulaire de création et de modification d’une course est organisé
                en plusieurs étapes afin de simplifier la saisie des informations.
            </p>

            <p>
                Des fonctions JavaScript ont été ajoutées pour afficher ou masquer
                certaines zones du formulaire, ajouter des champs dynamiquement et
                vérifier la cohérence des données saisies.
            </p>

            <!-- AJAX -->
            <h4>Communication entre le frontend et le backend</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/appel-ajax-fetch.png"
                    alt="Appel AJAX réalisé avec Fetch API depuis le frontend"
                >

                <img
                    src="IMG/comp/C4/endpoint-php-json.png"
                    alt="Endpoint PHP retournant une réponse au format JSON"
                >

                <img
                    src="IMG/comp/C4/reponse-json-devtools.png"
                    alt="Réponse JSON visible dans les outils de développement du navigateur"
                >

                <img
                    src="IMG/comp/C4/onglet-network.png"
                    alt="Requête AJAX visible dans l'onglet Network des outils de développement"
                >
            </div>

            <p>
                Les échanges entre l’interface et le serveur sont réalisés de manière
                asynchrone. Les endpoints PHP retournent des données au format JSON,
                qui sont ensuite utilisées par JavaScript pour mettre à jour la page.
            </p>

            <!-- Tests -->
            <h4>Tests et débogage</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/test-formulaire.png"
                    alt="Test du formulaire de création d'une course"
                >

                <img
                    src="IMG/comp/C4/test-statistiques.png"
                    alt="Test de l'affichage des statistiques d'un événement"
                >

                <img
                    src="IMG/comp/C4/test-notifications.png"
                    alt="Test de la génération et de l'affichage des notifications"
                >

                <img
                    src="IMG/comp/C4erreur-console.png"
                    alt="Erreur JavaScript identifiée dans la console du navigateur"
                >

                <img
                    src="IMG/comp/C4/correction-erreur.png"
                    alt="Correction du code après identification d'une erreur"
                >

                <img
                    src="IMG/comp/C4/test-requete-sql.png"
                    alt="Vérification du résultat d'une requête SQL"
                >
            </div>

            <p>
                Chaque fonctionnalité a été testée afin de vérifier son comportement
                dans différentes situations et d’éviter les régressions sur les pages
                déjà présentes dans l’application.
            </p>

            <ul>
                <li>Tests des formulaires.</li>
                <li>Tests des requêtes SQL.</li>
                <li>Tests des réponses JSON.</li>
                <li>Tests des appels AJAX.</li>
                <li>Tests de l’affichage des données.</li>
                <li>Correction des erreurs dans la console.</li>
                <li>Vérification de la compatibilité avec l’existant.</li>
            </ul>

            <!-- Sécurité -->
            <h4>Respect des règles de sécurité</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/requete-preparee-pdo.png"
                    alt="Requête préparée avec PDO pour protéger la base de données"
                >

                <img
                    src="IMG/comp/C4/verification-session.png"
                    alt="Vérification de la session utilisateur avant l'accès à une fonctionnalité"
                >

                <img
                    src="IMG/comp/C4/controle-role.png"
                    alt="Contrôle du rôle de l'utilisateur avant une action sensible"
                >

                <img
                    src="IMG/comp/C4/validation-upload.png"
                    alt="Validation du type et de la taille d'un fichier envoyé sur le serveur"
                >
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

            <!-- Résultat -->
            <h4>Résultat du travail réalisé</h4>

            <div class="carousel">
                <img
                    src="IMG/comp/C4/resultat-final-dashboard.png"
                    alt="Résultat final du tableau de bord de l'Espace Organisateur"
                >

                <img
                    src="IMG/comp/C4/resultat-final-statistiques.png"
                    alt="Résultat final du module de statistiques"
                >

                <img
                    src="IMG/comp/C4/resultat-final-participants.png"
                    alt="Résultat final de la liste des participants"
                >

                <img
                    src="IMG/comp/C4/resultat-final-notifications.png"
                    alt="Résultat final du système de notifications"
                >
            </div>

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
    </footer>
</body>
</html>