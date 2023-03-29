<?php $this->view('inclodes/header')?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h1 class="active"> Account aanmaken </h1>

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="voornaam" class="fadeIn second" name="voornaam" placeholder="Voornaam">
      <input type="text" id="achternaam" class="fadeIn third" name="achternaam" placeholder="Achternaam">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Wachtwoord">
      <input type="text" id="password1" class="fadeIn second" name="password1" placeholder="Wachtwoord bevestiging">
      <input type="text" id="geboortedatum" class="fadeIn third" name="geboortedatum" placeholder="Geboortedatum">
      <input type="text" id="gewicht" class="fadeIn third" name="gewicht" placeholder="Gewicht">
      <?php// if (isset($_POST['submit'])):?>
      <?php foreach($errors as $error):?>
      <div id="errors" style="color:red"><?=$error?><div>
      <?php endforeach;?>
      <?php //endif;?>

      <input type="submit" name="submit" class="fadeIn fourth" value="Aanmaken">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="http://localhost/gezondheidsmeter/public/login">Inloggen</a>
    </div>

  </div>
</div>
        
<?php $this->view('inclodes/footer')?>