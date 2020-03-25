<?php
$successMessage = '';
$user =[];
function cleanInput (string $data):string
{
    return htmlentities(ucfirst(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"]=== 'POST') {
    $errors = [];
    if (empty($_POST['name'])) {
        $errors['name1'] = 'Veuillez remplir votre nom !';
    }else{
        $user['name'] = $_POST['name'];
    }
    if (empty($_POST['firstname'])) {
        $errors['firstname1'] = 'Veuillez remplir votre prénom !';
    }else{
        $user['firstname'] = $_POST['firstname'];
    }
    if (empty($_POST['email'])) {
        $errors['email1'] = 'Veuillez remplir votre adresse email !';
    }else{
        $user['email'] = $_POST['email'];
    }
    if (empty($_POST['phone'])) {
        $errors['phone1'] = 'Veuillez remplir votre numéro de téléphone !';
    }else{
        $user['phone'] = $_POST['phone'];
    }
    if (empty($_POST['subject'])) {
        $errors['subject1'] = 'Veuillez choisir un motif !';
    }else{
        $user['subject'] = $_POST['subject'];
    }
    if (empty($_POST['message'])) {
        $errors['message1'] = 'Veuillez remplir votre message !';
    }else{
        $user['message'] = $_POST['message'];
    }

    if(count($errors)===0){
        $successMessage = 'Merci ' . cleanInput($user['firstname']) . ' ' . cleanInput($user ['name']) . ' pour votre message.' . '<br>' . 'Nous vous contacterons à l\'adresse ' . htmlentities($user['email']) . ' ou au '. $user['phone'] . ' dans les plus brefs délais.';
    }
}


?>
<div>
    <form action="index.php" method="post">
        <div class="formElement">
            <label for="name">Nom :</label>
            <?= isset($errors['name1']) ?  $errors['name1'] : '' ?>
            <input class="inputwidth" type="text" name="name" id="name" placeholder="Bennet" value="<?= isset($user['name']) ? $user['name']:''?>">
        </div>
        <div class="formElement">
            <label for="firstname">Prénom :</label>
            <?= isset($errors['firstname1']) ?  $errors['firstname1'] : '' ?>
            <input class="inputwidth" type="text" name="firstname" id="firstname" placeholder="Elizabeth" value="<?= isset($user['firstname']) ? $user['firstname']:''?>">
        </div>
        <div class="formElement">
            <label for="email">Email :</label>
            <?= isset($errors['email1']) ?  $errors['email1'] : '' ?>
            <input class="inputwidth" name="email" id="email" type="email" placeholder="elizabeth@pemberley.com" value="<?= isset($user['email']) ? $user['email']:''?>">
        </div>
        <div class="formElement">
            <label for="phone">Téléphone :</label>
            <?= isset($errors['phone1']) ?  $errors['phone1'] : '' ?>
            <input class="inputwidth" name="phone" id="phone" type="tel" placeholder="0632459493" value="<?= isset($user['phone']) ? $user['phone']:''?>">
        </div>
        <div class="formElement">
            <?= isset($errors['subject1']) ?  $errors['subject1'] : '' ?>
            <select class="inputwidth" name="subject" id="subject" >
                <option value="">Sélectionnez votre motif </option>
                <option value="reservation"<?= isset($user['subject']) && $user['subject'] === 'reservation' ? 'selected' : '' ?>>Réservation</option>
                <option value="question" <?= isset($user['subject']) && $user['subject'] === 'question' ? 'selected' : '' ?>>Question(s)</option>
                <option value="other" <?= isset($user['subject']) && $user['subject'] === 'other' ? 'selected' : '' ?>>Autre</option>
            </select>
        </div>
        <div class="formElement">
            <label for="message">Votre Message :</label>
            <?= isset($errors['message1']) ?  $errors['message1'] : '' ?>
            <textarea class="inputwidth" name="message" id="message" placeholder="Lorsqu'un livre est bien écrit, il me semble toujours trop court."><?= isset($user['message']) ? $user['message']:''?></textarea>
        </div>
        <button type="submit" class="button">Envoyer !</button>
    </form>
    <?= $successMessage;  ?>
</div>