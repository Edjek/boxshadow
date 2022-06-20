<?php
$current_title = 'Contact';
$current_css = 'contact';
$current_link = '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
';

include_once '../templates/header.php';
?>

<main>
    <section>
        <form action="../src/contact.php" method="post">
            <h1>contactez-nous</h1>
            <div class="form-contact">
                <div class="form-person">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" autofocus>
                    <i class="material-icons">person</i>
                </div>
                <div class="form-email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <i class="material-icons">mail</i>
                </div>
                <div class="form-message">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="6" required></textarea>
                    <i class="material-icons">edit</i>
                </div>
                <div class="form-send">
                    <input type="submit" value="Envoyer" name="submit">
                    <i class="material-icons">send</i>
                </div>
            </div>
        </form>
    </section>
</main>

<?php
include_once '../templates/footer.php';
?>