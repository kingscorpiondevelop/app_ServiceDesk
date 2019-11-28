<?php
	session_start();

		$usuario_autenticado = false;
		$usuario_id = null;
		$usuario_perfil_id = null;

	    $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $db = "kingscorpion";
        $conn = mysqli_connect($servidor, $usuario, $senha, $db);
        if (!$conn) {
            die("Falha ao conectar com o servidor: " . mysqli_connect_error());
        }
        else {
           //echo "Conexão efetuada com sucesso!";

           if (isset($_GET['loginC']) && isset($_GET['senhaC'])) {
                  
                $login = $_GET['loginC'];
                $senha = $_GET['senhaC'];

                }else{
                
                $login = $_POST['email'];//"gabriel@teste.com.br";//$_POST['email'];
                $senha = $_POST['senha'];//"1234";//$_POST['senha'];
                                
                }
      			    

              

                $query = "SELECT id,login,senha from usuario where login = '$login' and senha = '$senha'";
                  //var_dump($query);
                  //echo "Vardump query: <br>";
                $result = mysqli_query($conn ,$query);
                  //var_dump($result);
                  //echo "Vardump result: <br>";
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                  //var_dump($row);
                  //echo "Vardump row: <br>";
                  //verifica quantas linhas retornaram // caso não tenha retorno falha a entrada
            	
                if ($login == $row[1] && $senha == $row[2]) {
                	if (($row[1] == '' || $row[2] == '')) {
                		$_SESSION['autenticado'] = 'NAO';
						        header('Location: index.php?login=erro');

                	}else{
                	  $usuario_id = $row[0];
                		$usuario_perfil_id = $row[0];
                		echo 'Usuário autenticado';
						        $_SESSION['autenticado'] = 'SIM';
						        $_SESSION['id'] = $usuario_id;
						        $_SESSION['perfil_id'] = $usuario_perfil_id;
						        header('Location: home.php');
					        }	
                }else{
                	$_SESSION['autenticado'] = 'NAO';
					        header('Location: index.php?login=erro');
                }

                


            /*if () {
            	$_SESSION['autenticado'] = 'NAO';
				header('Location: index.php?login=erro');
            }else{

            	echo 'Usuário autenticado';
				$_SESSION['autenticado'] = 'SIM';
				$_SESSION['id'] = $usuario_id;
				$_SESSION['perfil_id'] = $usuario_perfil_id;
				header('Location: home.php');
            }*/

            //teste de select
            //SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'
            /*$query = "SELECT * from usuario";
            $result = mysqli_query($conn,$query);
            $fetch = mysqli_fetch_row($result);
            //$final = $fetch[0];
            foreach ($fetch as $key => $value) {
                  echo $key . $value;
                  echo "<br>";
            }
            */
     	}
	
		//variavel que verifica se a autenticacao foi realizada
	
	

		//$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

		//usuarios do sistema
		/*$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		);


		foreach($usuarios_app as $user) {

			if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
				$usuario_autenticado = true;
				$usuario_id = $user['id'];
				$usuario_perfil_id = $user['perfil_id'];
			}

	}

	if($usuario_autenticado) {
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}*/

?>