<?php
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bulma/css/bulma.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="icone.png">
    <title>Abertura de Chamados Beta</title>
    <style>
        .box{
            margin-left: 35%;
            margin-top: 4%;
            width: 400px;
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar is-light">
            <h1 style="text-align: center; color: black; text-transform: capitalize; font-family: Arial; font-size: 30px; margin-left: 35%;">abertura de Chamados beta</h1>
            <h1 style="margin-left: 500px; padding-top: 10px">
              <a style="text-align: center;" href="login.php">Logar</a>
            </h1>
          </nav>
    </header>
    <div class="box">
        <form enctype="multipart/form-data" action="funcoes.php" method="post">
            <div class="field">
                <label class="label">Nome </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="text" name="nome" id="nome" required="Preencha este campo" placeholder="Nome Completo" >
                  <span class="icon is-small is-left">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
              <div class="field">
                  <div class="select is-normal" style="margin-left: 0%; margin-bottom:2%">
                    <select name="local" id="local">
                      <option id="def">Localização</option>
                      <option value="Recovery">Recovery</option>
                      <option value="Sicoob">Sicoob</option>
                      <option value="CrediAtivos">CrediAtivos</option>
                      <option value="Poupex">Poupex</option>
                      <option value="Administrativo">Administrativo</option>
                      <option value="Back-Office">Back-Office</option>
                    </select>
                  </div>
                  <div class="select is-normal" style="margin-left: 0%">
                  
                    <select name="categ" id="categ">
                      <option id="def2">Categoria</option>
                      <option value="Discador">Discador/ Vonix / Ligações</option>
                      <option value="SIC - Usuário Bloqueado">SIC -  Usuário Bloqueado</option>
                      <option value="Headset">Problemas com Headset</option>
                      <option value="Senhas">Resetar Senhas</option>
                      <option value="Computador Não liga">Computador Não liga</option>
                      <option value="Solicitação de Acesso">Solicitação de Acesso</option>
                      <option value="Outros">Outros</option>
                    </select>
                  </div>
              </div>
              <div class="field">
                <label class="label">Descrição</label>
                <div class="control">
                  <textarea class="textarea" required="Preencha este campo" name="desc" id="desc" placeholder="Descreva aqui a sua solicitação o mais detalhado possível."></textarea>
                </div>
              </div>
              <div class="field">
                <div class="file has-name">
                    <label class="file-label">
                     <input  type="file" name="userfile">
                    </label>
                  </div>
              </div>
              <div class="notification">
                <label for="ip" class="form-label">Meu IP: </label>
                
                <?php
                    function get_client_ip() {
                        $ipaddress = '';
                        if (isset($_SERVER['HTTP_CLIENT_IP']))
                            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                        else if(isset($_SERVER['HTTP_X_FORWARDED']))
                            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                        else if(isset($_SERVER['HTTP_FORWARDED']))
                            $ipaddress = $_SERVER['HTTP_FORWARDED'];
                        else if(isset($_SERVER['REMOTE_ADDR']))
                            $ipaddress = $_SERVER['REMOTE_ADDR'];
                        else
                            $ipaddress = 'UNKNOWN';
                        return $ipaddress;
                    }
                    echo get_client_ip();
                      
                      $ipFinal = get_client_ip();
                      
                ?> 
            </div>
              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" name="enviar" value="enviar" class="button is-link">Enviar</button>
                  
                </div>
              </div>
        </form>
    </div>
        <script src="js/jquery.js"></script>
        <script>
           $(document).ready(function () {
            $('#local').click(function () {
                $('#def').remove()
            })
        })
        $(document).ready(function () {
            $('#categ').click(function () {
                $('#def2').remove()
            })
        })
        </script>
</body>
</html>