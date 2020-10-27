<?php 
$dbhost='localhost';
$dbname='mailchimp';
$dbuser='root';
$dbpwd='';
$db=new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpwd,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
	@$po=$_POST['check'];
   	if(isset($po)){
   		 @$p=$_POST['check'];
   		 }
   @$valider=$_POST['envoie'];
   if(isset($valider)){
   	@$po=$_POST['check'];
   	if(isset($po)){
   		 @$p=$_POST['check'];
   	// echo implode(" , ", $p);
   		 header("location:email.php");

 }  }
// email
if (isset($_POST['ok'])){
	require_once 'vendor/autoload.php';
    require_once 'credential.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com',587,'tls'))
  ->setUsername(EMAIL)
  ->setPassword(PASS)
;

// Create the Mailer using your created Transport
// $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($_POST['objet']))
  ->setFrom([EMAIL => 'message test'])
  ->setTo(["ousmanetra1995@gmail.com"])
  ->setBody($_POST['email'])
  ;

// Send the message
//$transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
  if(isset($_FILES['file'])){
    $message->attach(Swift_Attachment::fromPath($_FILES['file']['tmp_name'])
     ->setFilename('ous.jpg')
     );
  }
if($mailer->send($message)){
    echo "send";
}   
else{
    echo "echec";
}
	}
    


    ?>
