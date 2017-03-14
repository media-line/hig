<?php
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
  
// No direct access.

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfvJg8TAAAAALgvbnPVXx_gPOid0TfSPaoKVa6y&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
	
if ($response.success) { 	

		define('_JEXEC', 1);

		define('JPATH_BASE', dirname(__FILE__) . '/../..' );

		define('DS', DIRECTORY_SEPARATOR);
		require_once(JPATH_BASE.DS.'includes'.DS.'defines.php');
		require_once(JPATH_BASE.DS.'includes'.DS.'framework.php');

		JFactory::getApplication('site')->initialise();

        $recipient = str_replace(',', '@', $_POST['recipient']);
		if (strpos($recipient, ';')) {
			$recipients = explode(';', $recipient);
			for ($i = 0; $i < count($recipients); $i++ ) {
				$mailer = JFactory::getMailer();
				
				$config = JFactory::getConfig();
				$sender = '';
				$mailer->setSender($sender);
				$mailer->addRecipient(trim($recipients[$i]));
			
				$body  .=  "Имя: ";	
				$body  .=  $_POST['name'];	
				$body  .=   "\r\n";
				$body  .=  "Email: ";	
				$body  .=  $_POST['email'];	
				$body  .=   "\r\n";
				$body  .=  "Телефон: ";	
				$body  .=  $_POST['phone'];	
				$body  .=   "\r\n";
				$body  .=  "Сообщение: ";	
				$body  .=  $_POST['message'];	
				$body  .=   "\r\n";
				
				$mailer->setSubject('Форма hig');
				$mailer->setBody($body);
					
				$send = $mailer->Send();				
			}
		} else {
		
			$mailer = JFactory::getMailer();
		
			$config = JFactory::getConfig();
			$sender = '';
			$mailer->setSender($sender);
			$mailer->addRecipient($recipient);
		
			$body  .=  "Имя: ";	
			$body  .=  $_POST['name'];	
			$body  .=   "\r\n";
			$body  .=  "Email: ";	
			$body  .=  $_POST['email'];	
			$body  .=   "\r\n";
			$body  .=  "Телефон: ";	
			$body  .=  $_POST['phone'];	
			$body  .=   "\r\n";
			$body  .=  "Сообщение: ";	
			$body  .=  $_POST['message'];	
			$body  .=   "\r\n";
			
			$mailer->setSubject('Форма hig');
			$mailer->setBody($body);
				
			$send = $mailer->Send();		
		
		}

}
