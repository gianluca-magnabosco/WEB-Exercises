<?php
function verifica_campo($texto){
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  return $texto;
}

$nome = "";
$email = "";
$datanasc = "";
$erro = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["nome"])){
    $erro_nome = "Nome é obrigatório.";
    $erro = true;
  } else {
    $nome = verifica_campo($_POST["nome"]);
  }

  if(empty($_POST["email"])){
    $erro_email = "Email é obrigatório.";
    $erro = true;
  } else {
    $email = verifica_campo($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erro_email_invalido = "Email inválido.";
      $erro = true;
    }
  }

  if(empty($_POST["datanasc"])){
    $erro_data = "Data de nascimento é obrigatória.";
    $erro = true;
  } else {
    $datanasc = verifica_campo($_POST["datanasc"]);
  }

  if(empty($_POST["senha1"])){
    $erro_senha1 = "Senha é obrigatória.";
    $erro = true;
  } else {
    $senha1 = verifica_campo($_POST["senha1"]);

    if(empty($_POST["senha2"])){
      $erro_senha2 = "A confirmação de senha é obrigatória.";
      $erro = true;
    } else {
      $senha2 = verifica_campo($_POST["senha2"]);

      if ($senha1 != $senha2) {
        $erro_senhas = "As senhas devem ser iguais!";
        $erro = true;
      }
    }
  }

  if(empty($_FILES["file"])){
    $erro_file = "Imagem é obrigatória.";
    $erro = true;
  } else {
    $target_dir = "./imagens/";
    $file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $img_size = getimagesize($_FILES["file"]["tmp_name"]);
    if($img_size !== false) {
      if($imageFileType != "jpg" && $imageFileType != "png") {
        $erro_file = "Imagem deve ser do tipo jpg ou png.";
        $erro = true;
      } else {
        if ($_FILES["file"]["size"] > 1024*1024) {
          $erro_file = "Imagem muito grande.";
          $erro = true;
        } else {
          if (!move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
            $erro_file = "Não foi possível salvar a imagem.";
            $erro = true;
          }
        }
      }
    } else {
      $erro_file = "Imagem inválida.";
      $erro = true;
    }
  }
}
?>