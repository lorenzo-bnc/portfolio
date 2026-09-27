<?php
    $recupJSON = json_decode(file_get_contents("https://newsdata.io/api/1/latest?apikey=pub_36dd2a8701094dd5935f8b8cf48d1b03&qInTitle=suno&country=fr,gb,us"), true);
    $articlesJournalier = $recupJSON["results"];

    $articlesFavoris = json_decode(file_get_contents('DB/fav_news.json'), true);

    usort($articlesFavoris, function ($actuel, $precedent) {
        return strtotime($precedent['pubDate']) - strtotime($actuel['pubDate']);
    });

    if (isset($_POST["type"])) {
        $fichierFav = 'DB/fav_news.json';
        $type = $_POST["type"];
        $favorisExistants = [];

        if (file_exists($fichierFav)) {
            $contenu = file_get_contents($fichierFav);

            if (!empty($contenu)) {
                $favorisExistants = json_decode($contenu, true);
            }
        }

        $article_id = $_POST["article_id"];

        if ($type === "ajouterFav") {
            foreach ($articlesJournalier as $unArticle) {
                if ($unArticle["article_id"] === $article_id) {
                    $dejaFavori = false;

                    foreach ($favorisExistants as $unFavori) {
                        if ($unFavori["article_id"] === $article_id) {
                            $dejaFavori = true;
                            break;
                        }
                    }

                    if (!$dejaFavori) {
                        $favorisExistants[] = $unArticle;
                        file_put_contents($fichierFav, json_encode($favorisExistants, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
                    }
                    break;
                }
            }
        } 
        else if ($type === "supprimerFav") {
            foreach ($favorisExistants as $index => $unFavori) {
                if ($unFavori["article_id"] === $article_id) {
                    unset($favorisExistants[$index]);

                    $favorisExistants = array_values($favorisExistants);
                    file_put_contents($fichierFav, json_encode($favorisExistants, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
                    break;
                }
            }
        }
        header("Location: veille.php");
    }

    function ellipserTexte(string $saisie, int $nb=100){
        return substr($saisie, 0, $nb).'…';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("./includes/header.php"); ?>
    <title>Veille</title>
</head>
<body>
    <video class="bg-particles" autoplay muted loop playsinline>
         <source src="./IMG/particules.mp4" type="video/mp4">
    </video>
    <header>
        <?php require_once("./includes/navbar.php"); ?>
    </header>
    <main id="veille">
        <h1 class="info">Mon sujet de veille</h1>
        <h3 class="info">L'évolution de l'IA dans la création musicale</h3>

        <div class="section-veille">
            <h1 class="titre">
                <i class="fa-solid fa-compact-disc"></i>
                Pourquoi ce sujet ?
            </h1>
            <div>
                <p>
                    L’intelligence artificielle prend une place de plus en plus importante dans le domaine de la musique. Elle permet aujourd’hui de générer des mélodies, des paroles, des voix ou encore des morceaux complets à partir de simples instructions.
                    </br></br>
                    J’ai choisi ce sujet car l’IA transforme progressivement la manière dont la musique peut être créée et utilisée. Cette évolution soulève également plusieurs questions concernant la créativité, les droits d’auteur et la place de l’artiste, tous impactés par la technologie.
                </p>
            </div>
        </div>

        <div class="section-veille">
            <h1 class="titre">
                <i class="fa-solid fa-robot"></i>
                Qu’est-ce que l’IA musicale ?
            </h1>
            <div>
                <p>
                    L’IA musicale désigne l’utilisation de technologies d’intelligence artificielle pour assister ou automatiser certaines étapes de la création musicale. Elle peut notamment analyser des morceaux existants, générer du contenu musical ou modifier une voix et un instrument.
                </p>
            </div>
        </div>
         
        <h1 class="info">Mon outil de curation</h1>
        <h3 class="info">Articles favoris</h1>
        <div class="veille">
            <?php
                foreach($articlesFavoris as $unFavori){
                    $description = "";
                    $titre = ellipserTexte($unFavori['title'], 50);
                    $article_id = $unFavori['article_id'];
                    $pubier_le = date("d M Y à h\hi", strtotime($unFavori['pubDate']));

                    if(is_string($unFavori['description'])){
                        $description = ellipserTexte($unFavori['description']);
                    }
                    
                    echo <<<HTML
                        <a href="{$unFavori['link']}" target="_blank" class="comp-card">
                        <div>
                            <div class="head-veille">
                                <h3>{$titre}</h3>
                                <form method="post">
                                    <input type="hidden" value="supprimerFav" name="type"/>
                                    <input type="hidden" value="{$article_id}" name="article_id"/>
                                    <button type="submit" class="fav"><i class="fa-regular fa-trash-can"></i></button>
                                </form>
                            </div>

                            <img src="{$unFavori['image_url']}" alt="Image KMS" class="veille">
                            <div class="footer-veille"git branch -M main>
                                <p class="veille">{$description}</p>
                                <hr>
                                <p class="company">{$unFavori['source_name']}</p>
                                <small>{$pubier_le}</small>
                            </div>
                        </div>
                        </a>
                    HTML;
                }
            ?>
        </div>

        <h3 class="info">Articles journaliers</h1>
        <div class="veille">
            <?php
                foreach($articlesJournalier as $unArticle){
                    $description = "";
                    $titre = ellipserTexte($unArticle['title'], 50);
                    $article_id = $unArticle['article_id'];
                    $pubier_le = date("d M Y à h\hi", strtotime($unArticle['pubDate']));

                    if(is_string($unArticle['description'])){
                        $description = ellipserTexte($unArticle['description']);
                    }
                    
                    echo <<<HTML
                        <a href="{$unArticle['link']}" target="_blank" class="comp-card">
                            <div>
                                <div class="head-veille">
                                    <h3>{$titre}</h3>
                                    <form method="post">
                                        <input type="hidden" value="ajouterFav" name="type"/>
                                        <input type="hidden" value="{$article_id}" name="article_id"/>
                                        <button type="submit" class="fav"><i class="fa-regular fa-heart"></i></button>
                                    </form>
                                </div>

                                <img src="{$unArticle['image_url']}" alt="Image KMS" class="veille">
                                <div class="footer-veille">
                                    <p class="veille">{$description}</p>
                                    <hr>
                                    <p class="company">{$unArticle['source_name']}</p>
                                    <small>{$pubier_le}</small>
                                </div>
                            </div>
                        </a>
                    HTML;
                }
            ?>
        </div>
    </main>
    <footer>
        <?php require_once("./includes/footer.php"); ?>
    </footer>
</body>
</html>