<?php 
	
	require "./bibliotecas/PHPMailer/Exception.php";
	require "./bibliotecas/PHPMailer/OAuth.php";
	require "./bibliotecas/PHPMailer/PHPMailer.php";
	require "./bibliotecas/PHPMailer/POP3.php";
	require "./bibliotecas/PHPMailer/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	//print_r($_POST);
	class mensagem {
		private $para = null;
		private $assunto = null;
		private $mensagem = null;

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function mensagemValida() {
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
				return false;
			}

			return true;
		}
	}
	$mensagem = new Mensagem();

	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	print_r($mensagem);

	if(!$mensagem->mensagemValida()) {
		echo 'Mensagem não é valida';
		die();
	}


	$mail = new  PHPMailer ( true );
	try {
     //Configurações do servidor 
    $mail -> SMTPDebug = 2 ;               //Ativar saída de depuração detalhada 
    $mail -> isSMTP ();                                       //Enviar usando SMTP 
    $mail -> Host = 'smtp-relay.gmail.com' ;                     //Configura o servidor SMTP para enviar através de 
    $mail -> SMTPAuth = true ;                               //Ativar autenticação SMTP 
    $mail -> Username = 'italoteste2022@gmail.com' ;                  //Nome de usuário SMTP 
    $mail -> Senha = 'secreta' ;                             //Senha SMTP 
    $mail -> SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS ; //Ativar criptografia TLS; `PHPMailer::ENCRYPTION_SMTPS`
    $mail -> Port = 587 ;                                    //Porta TCP para conectar, use 465 para `PHPMailer::ENCRYPTION_SMTPS` acima

    //Destinatários 
    $mail -> setFrom ( 'italoteste2022@gmail.com' , 'Web completo remetente' );
    $mail -> addAddress ($mensagem->__get('para'));     //Adiciona um destinatário  
    //$mail -> addReplyTo ( 'info@example.com' , 'Information' );
    //$mail -> addCC ( );
    //$mail -> addBCC ( 'bcc@example.com' );

    //Anexos 
    //$mail -> addAttachment ( '/var/tmp/file.tar.gz' );         //Adicionar anexos 
    //$mail -> addAttachment ( '/tmp/image.jpg' , 'new.jpg' );   //Nome opcional

    //Conteúdo 
    $mail -> isHTML ( true );                                  //Defina o formato do email para HTML 
    $mail -> Subject = $mensagem->__get('assunto') ;
    $mail -> Body    = 'Oi. eu sou o conteudo do <strong>e-mail</strong>' ;
    $mail -> AltBody = 'Oi. eu sou o conteudo do e-mail' ;

    $mail -> enviar();
    echo  'Mensagem enviada' ;

} catch ( Exception  $e ) {
    echo  "A mensagem não pôde ser enviada. Erro do Mailer: {$mail->ErrorInfo}" ;
}


//echo 'Não foi possivel enviar esse e-mail! Por favor tente novamente mais tarde';
//echo 'Detalhes do erro: ' . $mail->errorInfo;
