<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("./includes/header.php"); ?>
    <title>Accueil</title>
</head>
<body>
    <video class="bg-particles" autoplay muted loop playsinline>
         <source src="./IMG/particules.mp4" type="video/mp4">
    </video>
    <header>
        <?php require_once("./includes/navbar.php"); ?>
    </header>
    <main>
        <div id="section">
            <div id="card">
                <div class="info" id="me">
                    <img src="./IMG/photo.jpg" id="me"/>
                    <div>
                        <div class="info-group">
                            <h3 class="info">Lorenzo BUONOCORE</h3>
                            <p class="info">Étudiant</p>
                        </div>
                        <div class="info-group">
                            <h3 class="info">Email</h3>
                            <p class="info">lorenzo.buonocoree@gmail.com</p>
                        </div>
                        <div class="info-group">
                            <h3 class="info">Tél</h3>
                            <p class="info">00.00.00.00.00</p>
                        </div>
                        <div class="info-group">
                            <h3 class="info"></h3>
                            <p class="info"></p>
                        </div>
                    </div>
                </div>
                <div class="link">
                    <a class="link" href="DOC/CV.pdf" target="_blank">
                        <i class="link fa-solid">CV</i>
                    </a>
                    <a class="link" href="https://www.linkedin.com/in/lorenzo-buonocore-9243a22bb/" target="_blank">
                        <i class="link fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="info" id="school">
                <h1 id="school">Formation en cours</h1>
                <div class="school-group">
                    <div style="display: flex;margin: 15px;">
                        <img src="./IMG/cp.png" style="width:180px"/>
                        <div>
                            <h3 class="school">Lycée Charles Péguy</h3>
                            <p class="school">BTS SIO</p>
                            <br/>
                            <p style="padding-right: 15px;">Le BTS SIO <small>(<strong class="school">S</strong>ervices <strong class="school">I</strong>nformatiques aux <strong class="school">O</strong>rganisations)</small></p>
                            <ul style="margin-left: 50px;"> 
                                <li class="school">
                                    <p><strong class="school">Objectif:</strong> Former des techniciens supérieurs en informatique</p>
                                </li>
                                <li class="school">
                                    <p><strong class="school">Niveau:</strong> Bac+2</p>
                                </li>
                                <li class="school">
                                    <p><strong class="school">Reconnaissance:</strong> Diplôme national, niveau 5 au RNCP</p>
                                </li>
                            </ul>
                            <br/>
                            <h3 class="school">Mon option</h3>
                            <p class="school">Option SLAM</p>
                        </div>
                    </div>
                    <div style="margin: 15px; margin-top: 0;">
                        <p>L'option SLAM <small>(<strong class="school">S</strong>olutions <strong class="school">L</strong>ogicielles et <strong class="school">A</strong>pplications <strong class="school">M</strong>étiers)</small></p>
                        <p>est orientée vers le développement d'applications, les bases de données et les solutions web.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once("./includes/footer.php"); ?>
    </footer>
</body>
</html>