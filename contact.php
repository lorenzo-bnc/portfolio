<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("./includes/header.php"); ?>
    <title>Contact</title>
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
            <form method="post" id="contact">
                <label>Objet</label>
                <input type="text" id="subject" required>
                <label>Message</label>
                <textarea id="body" required></textarea>
                <button type="submit"><i class="fa-solid fa-paper-plane"></i> Envoyer !</button>
            </form>
        </div>
    </main>
    <footer>
        <?php require_once("./includes/footer.php"); ?>
    </footer>

    <script>
        const form = document.getElementById('contact')
        form.addEventListener('submit', function(event){
            event.preventDefault()
            const subject = document.getElementById('subject').value
            const body = document.getElementById('body').value
            
            window.open('mailto:lorenzo.buonocoree@gmail.com?subject='+subject+'&body='+body)
        })
    </script>
</body>
</html>