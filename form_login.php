<div id="formLogin" style="display:none">
	<form id="login_form" action="javascript:return false;" method="post">
	    <div style="display:none" id="login_error">Por favor, preencha o nome de usuária e senha</div>
		<p>
			<label for="login_name">Nome de usuária: </label>
			<input type="text" id="login_name" name="login_name" size="30" />
		</p>
		<p>
			<label for="login_pass">Senha: </label>
			<input type="password" id="login_pass" name="login_pass" size="30" />
		</p>
		<p>
			<input type="submit" value="Entrar" />
		</p>
		<p>
			ou
		</p>
		<p>
			<fb:login-button scope="email">Entrar com o Facebook</fb:login-button>
		</p>
	</form>
</div>
