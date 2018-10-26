<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="teste.html">
	<script type="text/javascript" href="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/agua4.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Inscreva-se
					</span>
					<form action="" id="enviamsg" method="POST">
					<div class="wrap-input100 validate-input" data-validate="Digite seu nome">
						<span class="label-input100">Nome Completo</span>
						<input class="input100" type="text" name="Nome" placeholder="Nome...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite seu email: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email válido...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite seu nome">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="Nome" placeholder="Nome...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "É necessario uma senha">
						<span class="label-input100">Senha</span>
						<input  class="input100" type="password" id="senha" name="Senha" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "É necessario repetir a senha">
						<span class="label-input100">Repetir senha</span>
						<input class="input100" type="password" id="senha2" 2name="Repetir-senha" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="lembrar">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Eu concordo com os
									<a href="#" class="txt2 hov1">
										Termos do usuário
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button onclick="minhafuncion()" class="login100-form-btn">
								Inscrever-se
							</button>
							<p id="result"></p>

						
							
							
						</div>
					</form>

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Já sou cadastrado
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script>
 function funcao(){
            var user = document.getElementById("senha").value;
            var pass = document.getElementById("senha2").value;

                 if ((user == 'admin') && (pass == 'admin123')){
                     window.location.assign("temp.html");
                 } else {
                     return alert("email ou senha incorretos");
                 }
         }

	$(function(){

$('#envia_msg').submit(function(event){
	event.preventDefault();
	var formDados = new FormData($(this)[0]);

	$.ajax({
		url:'envia_msg.php',
		type:'POST',
		data:formDados,
		cache:false,
		contentType:false,
		processData:false,
		success:function (data)
 {document.getElementById('resultado').innerHTML = 'Enviado! Em breve Entraremos em contato.';
		  $('#envia_msg').each (function(){
		this.reset();
	   });
  },
		dataType:'html'
	});
	return false;
});
});

<?php 
$host  = "time7.database.windows.net";
$user  = "bandtec";
$senha = "Timesete123";
$db    = "Time7";

$conn  =  mysqli_connect($host, $user, $senha, $db);

$nome  = $_POST['nome'];
$email = $_POST['email'];
$msg   = $_POST['senha'];

$sql = "INSERT INTO `Usuario` (`nome`,`email`,`senha`) VALUES ('{$nome}','{$email}','{$senha}')";

$conn->query($sql);
?>
	</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>