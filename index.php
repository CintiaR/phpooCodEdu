<?php
include_once 'app/Cliente.php';

$clientes = array();

for ($i = 1; $i<=10; $i++){
    $clientes[$i] = new Cliente();
    $clientes[$i]->nome = "Cliente$i";
    $clientes[$i]->cpf = "CFP$i";
    $clientes[$i]->endereco = "endereco$i";
    $clientes[$i]->telefone = "telefone$i";
    $clientes[$i]->email = "email$i";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/js.js"></script>
</head>
<body>
    <div class="container-fluid">

        <!-- menu -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SON - PHPOO</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Clientes<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Cadastrar Cliente</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- /menu -->

        <!-- Dados do clinte -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Dados dos Clientes</h1>
                </div>
                <div class="col-md-12">

                    <?php
                        foreach ($clientes as $cliente){
                    ?>
                        <div class="panel panel-success">
                            <div class="panel-heading"><?php echo $cliente->nome; ?></div>
                            <div class="panel-body">
                                <p><em>CPF:</em><?php echo $cliente->cpf; ?></p>
                                <p><em>Endereço:</em><?php echo $cliente->endereco; ?></p>
                                <p><em>Telefone:</em><?php echo $cliente->telefone; ?></p>
                                <p><em>Email:</em><?php echo $cliente->email; ?></p>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>

    </div>
</body>
</html>