<?php $this->view('inclodes/header')?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h1 class="active"> Inloggen </h1>

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Inloggen">
      <?php foreach($errors as $error):?>
      <div id="errors" style="color:red"><?=$error?><div>
      <?php endforeach;?>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="http://localhost/gezondheidsmeter/public/accountAanmaken">Account aanmaken</a>
    </div>

  </div>
</div>
        
<?php $this->view('inclodes/footer')?>