
<?php include 'layouts/header.php';?>

<div class="game_section" id ="xbox_x">
    <div class="sous_section_imgright" id="contact">
        <h2 class="titles">CONTACTEZ NOUS</h2>
        <form action="thanks.php" method="POST">
            <div>
                <label for="lastName">Quel est votre nom:</label> 
                <input name="user_lastName" type="text" required id="lastName" >
            </div>
            <div>
                <label for="firstName">Quel est votre prénom:</label>
                <input name="user_firstName" type="text" required id="firstName">
            </div>
            <div>
                <label for="mail">Quelle est votre adresse E-Mail:</label>
                <input name="user_mail" type="text" required id="mail">
            </div>
            <div>
                <label for="suggestion">Sujet du message</label>
                <select id="suggestion"  name ="user_suggestion">
                    <option value ="forums">Forums </option>
                    <option value ="pseudo">Pseudo</option>
                    <option value ="compte">Compte</option>
                </select>
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_msg"></textarea>
            </div>
            <div>
                <button class="button" type="submit">Envoyer le formulaire"</button>
            </div>
        </form>
    </div>
    <img class="game_picture_right" src="http://i.kinja-img.com/gawker-media/image/upload/s--jSH4E0DV--/sgnigi4ry4rw7vltnpcr.gif" width="900">
</div>
<?php include 'layouts/chat.php';?>
<?php include 'layouts/footer.php';?>


