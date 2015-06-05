<?php
class Usuarios_model extends CI_Model{
   function ValidarUsuario($email,$password){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
      $query = $this->db->where('Usuario',$email);   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
      $query = $this->db->where('Password',$password);
      $query = $this->db->get('Usuarios');
      return $query->row();    //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
   }
}

/*
CREATE TABLE `Usuarios` ( `Id` INT NOT NULL AUTO_INCREMENT , `Usuario` VARCHAR( 50 ) NOT NULL , `Password` VARCHAR( 50 ) NOT NULL , PRIMARY KEY ( `Id` ) ) ENGINE = MYISAM ; INSERT INTO `Usuarios` ( `Id` , `Usuario` , `Password` ) VALUES ( NULL , 'diego@blogdephp.com', 'blogdephp' );
*/

?>