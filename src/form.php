<form>
    <form class="contact">
        <div class="contactus">
            <label for="name">Prénom Nom :</label>
            <input class="item2 contact margintopform form-border" type="text" name="name" id="name"  placeholder="Elizabeth Bennet">
            <label for="email">Email :</label>
            <input class="item2 contact margintopform form-border" name="email" id="email" type="email" placeholder="elizabeth@pemberley.com">
            <select name="subject" id="subject" class="item2 select margintopform form-border">
                <option value="">Sélectionnez votre motif </option>
                <option value="reservation">Réservation</option>
                <option value="question">Question(s)</option>
                <option value="autre">Autre</option>
            </select>
            <label for="message">Votre Message :</label>
            <textarea name="message" id="message" class="item2 message margintopform form-border" placeholder="Lorsqu'un livre est bien écrit, il me semble toujours trop court."></textarea>
            <div class="item2 buttoncontainer">
                <button class="button margintopform" type="submit">Envoyer !</button>
            </div>
        </div>
    </form>
</form>