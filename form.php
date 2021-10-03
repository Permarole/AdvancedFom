<form action="./thanks.php" method="post">

  <div>

    <label for="name">Nom :</label>

    <input type="text" id="name" name="user_name" required>

  </div>

  <br><br>
  <div>

    <label for="firstname">Prénom :</label>

    <input type="text" id="firstname" name="user_firstname" required>

  </div>

  <br><br>

  <div>

    <label for="email">Courriel :</label>

    <input type="email" id="courriel" name="user_email" required>

  </div>

  <br><br>

  <div>

    <label for="phone">Telephone :</label>

    <input type="tel" id="phone" name="user_phone" required>

  </div>

  <br><br>

  <div>

    <label for="subject">Sujet :</label>
    <select name="subject" id="subject" required>
      <option value="" disabled selected>Select one of the following subject</option>
      <option value="service après vente">Service après-vente</option>
      <option value="informations produit">Produit</option>
      <option value="reclamation">Réclamation</option>
    </select>

  </div>

  <br><br>

  <div>

    <label for="message">Message :</label>

    <textarea id="message" name="user_message" required></textarea>

  </div>

  <br><br>

  <div class="button">

    <button type="submit">Envoyer votre message</button>

  </div>

</form>