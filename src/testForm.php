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
