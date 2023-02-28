<?php
require_once('registro.php');

if(isset($_POST["enviar"])) {

  echo "El Formulario se ha enviado con éxito";

} else {
  echo "No se ha enviado el formulario";
}
