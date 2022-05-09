<?php
  require("check_form.php");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
  </script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
  </script>
  <script src="check_form.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="page-header">Teste Formulário PHP</h1>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if (!$erro): ?>
        <div class="alert alert-success">
          Dados recebidos com sucesso:
          <ul>
            <li><strong>Nome</strong>: <?php echo $nome ?>;</li>
            <li><strong>Email</strong>: <?php echo $email ?>;</li>
            <li><strong>Data de nascimento</strong>: <?php echo $datanasc ?>;</li>
            <li><strong>Senha</strong>: <?php echo $senha1 ?>;</li>
            <li><strong>Confirmar senha</strong>: <?php echo $senha2 ?>;</li>
            <li><strong>Imagem</strong>:
              <?php echo "<img src=\"" . $file . "\" />" ?>
            </li>
            <?php // limpa o formulário.
                $nome = "";
                $email = "";
                $datanasc = "";
                $senha1 = "";
                $senha2 = "";
                $file = "";
              ?>
          </ul>
        </div>
        <?php else: ?>
        <div class="alert alert-danger">
          Erro(s) no formulário!
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <form enctype="multipart/form-data" id="form-test"
          class="form-horizontal" method="POST"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

          <div
            class="form-group <?php if(!empty($erro_nome)){echo "has-error";}?>">
            <label for="inputNome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" name="nome"
                placeholder="Nome" value="<?php echo $nome; ?>">
              <div id="erro-nome">

              </div>
              <?php if (!empty($erro_nome)): ?>
              <span class="help-block"><?php echo $erro_nome ?></span>
              <?php endIf; ?>
            </div>
          </div>

          <div
            class="form-group <?php if(!empty($erro_email) || !empty($erro_email_invalido)){echo "has-error";}?>">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input required type="email" class="form-control" name="email"
                placeholder="Email" value="<?php echo $email; ?>">
              <div id="erro-email">

              </div>
              <?php if (!empty($erro_email)): ?>
              <span class="help-block"><?php echo $erro_email ?></span>
              <?php endIf; ?>


              <?php if (!empty($erro_email_invalido)): ?>
              <span class="help-block"><?php echo $erro_email_invalido ?></span>
              <?php endIf; ?>
            </div>
          </div>

          <div
            class="form-group <?php if(!empty($erro_data)){echo "has-error";}?>">
            <label for="inputData" class="col-sm-2 control-label">Data de
              nascimento</label>
            <div class="col-sm-10">
              <input required type="date" class="form-control" name="datanasc"
                placeholder="Data de nascimento" value="<?php echo $datanasc; ?>">
              <div id="erro-data">

              </div>
              <?php if (!empty($erro_data)): ?>
              <span class="help-block"><?php echo $erro_data ?></span>
              <?php endIf; ?>
            </div>
          </div>

          <div
            class="form-group <?php if(!empty($erro_senha1) || !empty($erro_senhas)){echo "has-error";}?>">
            <label for="inputSenha1"
              class="col-sm-2 control-label">Senha</label>
            <div class="col-sm-10">
              <input required type="password" class="form-control" name="senha1"
                placeholder="Senha" value="<?php echo $senha1; ?>">
              <div id="erro-senha1">

              </div>
              <?php if (!empty($erro_senha1)): ?>
              <span class="help-block"><?php echo $erro_senha1 ?></span>
              <?php endIf; ?>

              <?php if (!empty($erro_senhas)): ?>
              <span class="help-block"><?php echo $erro_senhas ?></span>
              <?php endIf; ?>
            </div>
          </div>

          <div
            class="form-group
            <?php if(!empty($erro_senha2) || !empty($erro_senhas)){echo "has-error";}?>">
            <label for="inputSenha2" class="col-sm-2 control-label">Confirmar
              senha</label>
            <div class="col-sm-10">
              <input required type="password" class="form-control" name="senha2"
                placeholder="Confirmar senha" value="<?php echo $senha2; ?>">
              <div id="erro-senha2">

              </div>
              <?php if (!empty($erro_senha2)): ?>
              <span class="help-block"><?php echo $erro_senha2 ?></span>
              <?php endIf; ?>

              <?php if (!empty($erro_senhas)): ?>
              <span class="help-block"><?php echo $erro_senhas ?></span>
              <?php endIf; ?>
            </div>
          </div>

          <div class="form-group
            <?php if(!empty($erro_file)){echo "has-error";}?>">
            <label for="inputFile" class="col-sm-2 control-label">Imagem</label>
            <div class="col-sm-10">
              <input required type="file" class="form-control" name="file"
                placeholder="Imagem" value="<?php echo $file; ?>">
              <div id="erro-file">

              </div>
              <?php if (!empty($erro_file)): ?>
              <span class="help-block"><?php echo $erro_file ?></span>
              <?php endIf; ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>