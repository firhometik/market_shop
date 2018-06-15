<?php 
namespace phpmailer;
use think\Exception;
use phpmailer\Phpmailer;
class Email{
	public static function sendmail($email,$title,$content)
	{
		date_default_timezone_set('PRC');//set time
		if (empty($email)) {
			return false;
		}
		try{
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Debugoutput = 'html';
			$mail->Host = config('email.host');
			$mail->Port = config('email.prot');
			$mail->SMTPAuth = true;
			$mail->Username = config('email.username');
			$mail->Password = config('email.password');
			$mail->setFrom(config('email.username'), 'lvxudong');
			$mail->addAddress($email);
			//Set the subject line
			$mail->Subject = $title;
			$mail->msgHTML($content);;
			if (!$mail->send()) {
				$mail->ErrorInfo;
			    return false;
			} else {
			    return true;
			}
		}catch(phpmailerException $e){
			return false;
		}
	}
}

