<div class="container">
      <div class="row">
<section id="post" class="span12">


   <div class="post page page-contact">
    
      <div class="post-header">
         <h2 class="title"><span>Ingresar</span></h2>
      </div>
        
        <!-- .post-content -->
        <div class="post-content">
            <ul class="social">
               <li class="tab-facebook">
                        <a href="http://facebook.com" title="Facebook"><i class="icon-facebook"></i></a>
               </li>
                      <li class="tab-twitter">
                        <a href="http://twitter.com" title="Twitter"><i class="icon-twitter"></i></a>
               </li>
                      <li class="tab-google-plus">
                        <a href="http://plus.google.com" title="Google Plus"><i class="icon-google-plus"></i></a>
               </li>
                      <li class="tab-linkedin">
                        <a href="http://linkedin.com" title="LinkedIn"><i class="icon-linkedin"></i></a>
               </li>
                      <li class="tab-pinterest">
                        <a href="http://pinterest.com" title="Pinterest"><i class="icon-pinterest"></i></a>
               </li>
            </ul>
            <div class="post-content-text">
                
                <div class="margin-top40">
                  
                     <?php echo form_open("login/ingresar"); ?>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" maxlength="50" value="<?= set_value('email'); ?>">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" maxlength="50">
                        <input type="submit" name="submit" value="Ingresar">
                        <label><?php echo form_error('email'); ?></label>
                    <?php echo form_close(); ?>
         </div>
      </div>
            
        </div>
        <!-- .post-content end -->
        
    </div>
    <!-- .post end -->
    
</section>

</div>
</div>

<!--<div id="LoginUsuarios">
   <div class="fila">
      <div class="LoginUsuariosCabecera">E-mail:</div>
      <div class="LoginUsuariosDato"><input type="text" name="maillogin" value="<?= set_value('email'); ?>" size="25" /></div>
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
      <div class="LoginUsuariosDato"><input type="password" name="passwordlogin" value="" size="25" /></div>
      <div class="LoginUsuariosError"><?php echo form_error('passwordlogin');?></div>
   </div>   
   <div class="fila">
      <div class="LoginUsuariosCabecera"><input type="submit" value="Ingresar"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
</div>
</form>-->

