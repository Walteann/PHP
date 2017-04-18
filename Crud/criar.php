<?php
require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $nomeError = null;
        $emailError = null;
        $celularError = null;
         
        // keep track post values
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
         
        // Validar a Entrada
        $valid = true;
        if (empty($nome)) {
            $nomeError = 'por favor digite seu nome';
            $valid = false;
        }
         
        if (empty($email)) {
            $emailError = 'Por favor digite seu Email';
            $valid = false;
        } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $emailError = 'Por favor digite um Email válido';
            $valid = false;
        }
         
        if (empty($celular)) {
            $celularError = 'Por favor digite seu numero de celular';
            $valid = false;
        }
         
        // Inserido dados
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO usuario (nome,email,celular) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$email,$celular));
            Database::disconnect();
            header("Location: index.php");
        }
    }
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Criar Novo usuario</h3>
                    </div>
             
                    <form class="form-horizontal" action="criar.php" method="post">
                      <div class="control-group <?php echo !empty($nomeError)?'error':'';?>">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <input name="nome" type="text"  placeholder="Name" value="<?php echo !empty($nome)?$nome:'';?>">
                            <?php if (!empty($nomeError)): ?>
                                <span class="help-inline"><?php echo $nomeError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($celularError)?'error':'';?>">
                        <label class="control-label">Celular</label>
                        <div class="controls">
                            <input name="celular" type="text"  placeholder="Celular" value="<?php echo !empty($celular)?$celular:'';?>">
                            <?php if (!empty($celularError)): ?>
                                <span class="help-inline"><?php echo $celularError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Criar</button>
                          <a class="btn" href="index.php">Voltar</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>

<?php
     
