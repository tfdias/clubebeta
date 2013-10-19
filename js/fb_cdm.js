  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '678613135484178', // App ID
//      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
      status     : false, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
 
            // Função que será chamada automaticamente quando hover mudança no status da sessão do usuário
            // que irá acontecer quando ele clicar no botão Entrar
            FB.Event.subscribe('auth.authResponseChange', function(response) {
                //Se o usuário estiver logado no facebook e já deu as permissões para seu aplicativo o status será connected
                if (response.status === 'connected') {
                    // Executa a função usuarioConectado().
                    usuarioConectado();
                }  else {
					$('#divLogout').hide();
					$('#divAlterarDados').hide();
				}
            });
 
  };
 
  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
  
          // Função de exemplo que é executada quando o usuário esta logado e já deu as permissões para o aplicativo.
        function usuarioConectado() {
            // Com a função FB.api, é possível fazer chamadas para o Graph API.
            // Usando o parâmetro /me , você pode solicitar informações do usuário conectado.
            FB.api('/me', function(response) {
                // Usando jQuery, será exibido no paragrafo com id info as informações abaixo, capturdas com o FB.api.
				<!--   '<br>Email: '+response.email + -->
                <!--$('#foto').html('<img src="https://graph.facebook.com/'+response.username+'/picture" alt="'+response.name+'" />');-->
                $('#info').html(response.name);
				$('#divLogin').hide();
				$('#divAlterarDados').show();
				$('#divLogout').show();
				
				$("#divLogout").click(function(){
					logoutUsuario();
         		});
            });
        }

		//Realiza o loggout do usuário.
        function logoutUsuario() {

			FB.logout(function(response) {
				$('#info').html('Olá Visitante!');
				$('#divLogin').show();
				$('#divAlterarDados').hide();
				$('#divLogout').hide();
    		});
		}