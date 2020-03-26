<?php
$successMessage = '';
$user =[];
$errors=[];
require_once("testform.php");
if ($_POST && count($errors) === 0){
     echo $successMessage;
}
else { ?>
<div>
    <form action="index.php" method="post">
        <div class="formElement">
            <label for="name">Nom :</label>
            <?= isset($errors['name1']) ?  $errors['name1'] : '' ?>
            <input class="inputwidth" type="text" name="name" id="name" placeholder="Bennet" value="<?= isset($user['name']) ? $user['name']:''?>" required>
        </div>
        <div class="formElement">
            <label for="firstname">Prénom :</label>
            <?= isset($errors['firstname1']) ?  $errors['firstname1'] : '' ?>
            <input class="inputwidth" type="text" name="firstname" id="firstname" placeholder="Elizabeth" value="<?= isset($user['firstname']) ? $user['firstname']:''?>" required>
        </div>
        <div class="formElement">
            <label for="email">Email :</label>
            <?= isset($errors['email1']) ?  $errors['email1'] : '' ?>
            <input class="inputwidth" name="email" id="email" type="email" placeholder="elizabeth@pemberley.com" value="<?= isset($user['email']) ? $user['email']:''?>" required>
        </div>
        <div class="formElement">
            <label for="phone">Téléphone :</label>
            <?= isset($errors['phone1']) ?  $errors['phone1'] : '' ?>
            <input class="inputwidth" name="phone" id="phone" type="tel" placeholder="0632459493" value="<?= isset($user['phone']) ? $user['phone']:''?>" required>
        </div>
        <div class="formElement">
            <?= isset($errors['subject1']) ?  $errors['subject1'] : '' ?>
            <select class="inputwidth" name="subject" id="subject"required >
                <option value="">Sélectionnez votre motif </option>
                <option value="reservation"<?= isset($user['subject']) && $user['subject'] === 'reservation' ? 'selected' : '' ?>>Réservation</option>
                <option value="question" <?= isset($user['subject']) && $user['subject'] === 'question' ? 'selected' : '' ?>>Question(s)</option>
                <option value="other" <?= isset($user['subject']) && $user['subject'] === 'other' ? 'selected' : '' ?>>Autre</option>
            </select>
        </div>
        <div class="formElement">
            <label for="message">Votre Message :</label>
            <?= isset($errors['message1']) ?  $errors['message1'] : '' ?>
            <textarea required class="inputwidth" name="message" id="message" placeholder="Lorsqu'un livre est bien écrit, il me semble toujours trop court."><?= isset($user['message']) ? $user['message']:''?></textarea>
        </div>
        <button type="submit" class="button">Envoyer !</button>
    </form>
</div>
<?php }?>