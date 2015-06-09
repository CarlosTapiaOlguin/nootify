<?php
class Usuario_model extends CI_Model{

   function ValidarUsuario($email,$password){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
      $query = $this->db->where('email',$email);   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
      $query = $this->db->where('password',$password);
      $query = $this->db->get('usuario');
      return $query->row();    //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
   }

   function nuevoUsuario($email,$password)
   {
       $data = array(
            'email' => $email,
            'password' => $password
        );
        return $this->db->insert('usuario', $data);  
    }
}
	

/*
CREATE TABLE `Usuarios` ( `Id` INT NOT NULL AUTO_INCREMENT , `Usuario` VARCHAR( 50 ) NOT NULL , `Password` VARCHAR( 50 ) NOT NULL , PRIMARY KEY ( `Id` ) ) ENGINE = MYISAM ; INSERT INTO `Usuarios` ( `Id` , `Usuario` , `Password` ) VALUES ( NULL , 'diego@blogdephp.com', 'blogdephp' );
*/

?>