<?php $this->view('inclodes/header')?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h1 class="active"> Inloggen </h1>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Inloggen">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="http://localhost/gezondheidsmeter/public/accountAanmaken">Account aanmaken</a>
    </div>

  </div>
</div>
        
<?php $this->view('inclodes/footer')?>