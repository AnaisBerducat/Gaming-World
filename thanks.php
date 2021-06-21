<?php include 'layouts/header.php';?>
<div class="texte_merci">
<?php
 echo "Merci ".$_POST["user_firstName"]." ". $_POST["user_lastName"] ." de nous avoir contacté pour ta demande de ". $_POST["user_suggestion"];?>
 <br>
    <?php echo" Un de nos conseiller vous contactera à l’adresse ". $_POST["user_mail"]. " dans les plus brefs délais pour traiter votre demande : ";?>
    <br>
   <?php echo $_POST["usr_msg"];?>

<div class="games_body"><br>
    <img src="https://www.louvardgame.be/actualites/files/library/200-000-followers-sur-le-twitter-de-gameblog-merci.jpg" alt="Merci">;
</div><br>
</div>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['mail']) && !empty($_POST['message']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['suggestion'])) {
        $data = array_map('trim', $_POST);
        $isOkEmail = filter_var($data['mail'], FILTER_VALIDATE_EMAIL);

        if ($isOkEmail === false) {
            $errors[] = "L'email saisie n'est pas valide";
        }
        if (strlen($data['message']) < 5) {
            $errors[] = "Le message doît être supperieur à 5 caractères !";
        }
    } else {
        $errors[] = "Tous les champs sont requis";
    }
}
?>

<?php include 'layouts/footer.php';?>