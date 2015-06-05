
<?php echo form_open('login/ingresar'); ?>
<div id="LoginUsuarios">
   <div class="fila">
      <div class="LoginUsuariosCabecera">E-mail:</div>
      <div class="LoginUsuariosDato"><input type="text" name="maillogin" value="<?= set_value('maillogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError">
      <?php
         if(isset($error)){
            echo "<p>".$error."</p>";
         }
         echo form_error('maillogin');
      ?></div>
      
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera">Contraseña:</div>
      <div class="LoginUsuariosDato"><input type="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError"><?php echo form_error('passwordlogin');?></div>
   </div>   
   <div class="fila">
      <div class="LoginUsuariosCabecera"><input type="submit" value="Ingresar"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
</div>
</form>

</body>
</html>