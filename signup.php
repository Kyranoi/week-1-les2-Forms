<?php
?>

<html>
  <form action="signup.php" method="post">
    <input type="firstname" name="fname" placeholder="Voornaam" required />
    <input type="secondname" name="sname" placeholder="Tussenvoegsel" />
    <input type="lastname" name="lname" placeholder="Achternaam" required/>
    <input type="email" name="mail" placeholder="Email" required />
    <input type="username" name="uname" placeholder="Gebruikersnaam" required />
    <input type="password" name="pwd" placeholder="Wachtwoord" required />
    <input type="repeatpassword" name="rpwd" placeholder="Herhaal wachtwoord" required />
    <button type="submit">Account aanmaken</button>
    <a href="lostpwd.php">Wachtwoord vergeten</a>
    <a href="index.php">Inloggen</a>


  </form>
</html>
