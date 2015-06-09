<?php
class Login extends CI_Controller {

   function ingresar($idioma=null)
   {
      if(!isset($_POST['maillogin'])){   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
         $this->load->view('loginTemplate');      //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
      }
      else{                        //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
         $this->form_validation->set_rules('maillogin','e-mail','required|valid_email|trim|xss_clean');      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
         $this->form_validation->set_rules('passwordlogin','password','required|trim|xss_clean|sha1');
         if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
            $this->load->view('loginTemplate');                     //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
            $this->load->model('usuario_model');
            $ExisteUsuarioyPassoword=$this->usuario_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
               echo "Validacion Ok<br><br><a href=''>Volver</a>";   //   Si el usuario ingresó datos de acceso válido, imprimos un mensaje de validación exitosa en pantalla
            }
            else{   //   Si no logró validar
               $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
               $this->load->view('loginTemplate',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
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
      $this->load->view('loginTemplate'); 
   }
}
?>