<?php

  date_default_timezone_set('Europe/Lisbon');
  session_start();

  function user_login ($login, $pw) {
    $user = selectSQLUnique("SELECT * FROM backoffice WHERE login='$login' AND senha='$pw'");
    if(!empty($user)) { 
      $_SESSION["user"] = $user;      
      iduSQL("UPDATE backoffice SET data_ultimo_acesso = CURRENT_TIMESTAMP WHERE id=$user[id]");
      header("Location: home.php");
    }
    else {return false;}
  }

  function checkLogin() {
    if(empty($_SESSION["user"])) {
      header("Location: index.php");
      exit();
    }
    else {return $_SESSION["user"];}    
  }

  function logout() {
    session_destroy();
    header("Location: index.php");
    exit();
  }

?>