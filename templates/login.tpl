{include file='templates/header.tpl'}



<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form method="POST" action="verify">
      <input type="text" id="username" class="fadeIn second mt-4" name="username" placeholder="Nombre de usuario">
      <input type="password" id="password" class="fadeIn third mt-4" name="password" placeholder="*************">
      <input type="submit" class="fadeIn fourth mt-4" value="Ingresar">
    </form>

  </div>
</div>
{include file='templates/footer.tpl'}