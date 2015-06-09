<?php
class Login extends CI_Controller {

   function ingresar($idioma=null)
   {

      if(!isset($_POST['email'])){
         $this->load->view('headerTemplate');
         $this->load->view('loginTemplate');
         $this->load->view('footerTemplate');  
      }else{                    
         $this->form_validation->set_rules('email','e-mail','required|valid_email|trim|xss_clean');      
         $this->form_validation->set_rules('password','password','required|trim|xss_clean|sha1');
         if(($this->form_validation->run()==FALSE)){ 
            $this->load->view('headerTemplate');
            $this->load->view('loginTemplate');
            $this->load->view('footerTemplate');                   
         }
         else{                                      
            $this->load->model('usuario_model');
            $ExisteUsuarioyPassoword=$this->usuario_model->ValidarUsuario($_POST['email'],$_POST['password']);  
            if($ExisteUsuarioyPassoword){  
               echo "Validacion Ok";   
            }else{ 
               $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
               $this->load->view('headerTemplate');
               $this->load->view('loginTemplate', $data);
               $this->load->view('footerTemplate');
            }
         }
      }
   }
   

   function registro()
   {
      if(isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
         $this->form_validation->set_rules('email','Correo','required|valid_email|trim|xss_clean');
         $this->form_validation->set_rules('pass','Password','required|trim|xss_clean|sha1');
         
         $this->form_validation->set_message('required', 'El %s es requerido');
         $this->form_validation->set_message('valid_email', 'El %s no es válido');
         
         //SI ALGO NO HA IDO BIEN NOS DEVOLVERÁ AL INDEX MOSTRANDO LOS ERRORES
         if($this->form_validation->run()==FALSE)
         {
            $this->load->view('registroTemplate');
         }else{
         //EN CASO CONTRARIO PROCESAMOS LOS DATOS
            $email = $this->input->post('email');
            $password = $this->input->post('pass');
                        //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
            $this->load->model('usuario_model');
            $insert = $this->usuario_model->nuevoUsuario($email,$password);
            //si el modelo nos responde afirmando que todo ha ido bien, envíamos un email
            //al usuario y lo redirigimos al index, en verdad deberíamos redirigirlo al home de
            //nuestra web para que puediera iniciar sesión
            //$this->email->from('aqui el email que quieres que envíe los datos', 'uno-de-piera.com');
            //$this->email->to($email);
            //super importante, para poder envíar html en nuestros correos debemos ir a la carpeta 
            //system/libraries/Email.php y en la línea 42 modificar el valor, en vez de text debemos poner html
            //$this->email->subject('Bienvenido/a a uno-de-piera.com');
            //$this->email->message('<h2>' . $nombre . ' gracias por registrarte en uno-de-piera.com</h2><hr><br><br>
            //Tu nombre de usuario es: ' . $nick . '.<br>Tu password es: ' . $password);
            //$this->email->send();
            echo "registrado";
         }
      }else{
         $this->load->view('registroTemplate');
      }
   }


   function index(){
      $this->load->view('headerTemplate');
      $this->load->view('loginTemplate');
      $this->load->view('footerTemplate'); 
   }
}
?>