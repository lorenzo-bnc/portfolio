<?php
    $recupJSON = json_decode(file_get_contents("https://newsdata.io/api/1/latest?apikey=pub_36dd2a8701094dd5935f8b8cf48d1b03&qInTitle=suno&country=fr,gb,us"), true);
    $articlesJournalier = $recupJSON["results"];

    $articlesFavoris = json_decode(file_get_contents('DB/fav_news.json'), true);

    if (isset($_POST["article_id"])) {
        $fichierFav = 'DB/fav_news.json';
        $favorisExistants = [];

        if (file_exists($fichierFav)) {
            $contenu = file_get_contents($fichierFav);
            if (!empty($contenu)) {
                $favorisExistants = json_decode($contenu, true);
            }
        }

        $article_id = $_POST["article_id"];
        foreach($articlesJournalier as $unArticle){
            if($unArticle["article_id"] == $article_id){
                $dejaFavori = false;

                foreach($favorisExistants as $unFavori){
                    if($unArticle["article_id"] == $unFavori["article_id"]){
                        $dejaFavori = true;
                    }
                }

                if(!$dejaFavori){
                    $favorisExistants[] = $unArticle;
                    file_put_contents($fichierFav, json_encode($favorisExistants, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
                }
            }
        }
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
        <h3 class="info">L'évolution de l'IA dans la création musicale</h3>

        <h1 class="info">Articles favoris</h1>
        <div class="veille">
            <?php
                foreach($articlesFavoris as $unFavori){
                    $description = "";
                    $titre = ellipserTexte($unFavori['title'], 50);
                    $article_id = $unFavori['article_id'];

                    if(is_string($unFavori['description'])){
                        $description = ellipserTexte($unFavori['description']);
                    }
                    
                    echo <<<HTML
                        <a href="{$unFavori['link']}" target="_blank">
                        <div class="comp-card"">
                            <h3>{$titre}</h3>

                            <img src="{$unFavori['image_url']}" alt="Image KMS" class="veille">
                            <div class="footer-veille"git branch -M main>
                                <p class="veille">{$description}</p>
                                <hr>
                                <p class="company">{$unFavori['source_name']}</p>
                            </div>
                        </div>
                        </a>
                    HTML;
                }
            ?>
        </div>

        <h1 class="info">Articles journaliers</h1>
        <div class="veille">
            <?php
                foreach($articlesJournalier as $unArticle){
                    $description = "";
                    $titre = ellipserTexte($unArticle['title'], 50);
                    $article_id = $unArticle['article_id'];

                    if(is_string($unArticle['description'])){
                        $description = ellipserTexte($unArticle['description']);
                    }
                    
                    echo <<<HTML
                        <div class="comp-card"">
                            <div class="head-veille">
                                <h3>{$titre}</h3>
                                <form method="post">
                                    <input type="hidden" value="{$article_id}" name="article_id"/>
                                    <button type="submit"><i class="fa-regular fa-heart"></i></button>
                                </form>
                            </div>
                            
                            <img src="{$unArticle['image_url']}" alt="Image KMS" class="veille">
                            <div class="footer-veille">
                                <p class="veille">{$description}</p>
                                <hr>
                                <p class="company">{$unArticle['source_name']}</p>
                            </div>
                        </div>
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