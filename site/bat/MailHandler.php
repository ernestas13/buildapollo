<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$owner_email=getenv('SES_OWNER_EMAIL');
	$host = getenv('SES_HOST');
    $port = getenv('SES_PORT');
    $username = getenv('SES_USERNAME');
    $password = getenv('SES_PASSWORD');

    $subject='A message from your site visitor ';
    $user_email='';    
	$message_body='';
	$message_type='html';

	$max_file_size=50;
	$file_types='/(doc|docx|txt|pdf|zip|rar)$/';
	$error_text='something goes wrong';
	$error_text_filesize='File size must be less than';
	$error_text_filetype='Failed to upload file. This file type is not allowed. Accepted files types: doc, docx, txt, pdf, zip, rar.';

	$use_smtp=($host=='' or $username=='' or $password=='');
	$max_file_size*=1048576;

	if($owner_email==''){
		die('Attention, recipient e-mail is not set! Please define "owner_email" variable in the MailHanlder.php file.');
	}

	if(preg_match('/^(127\.|192\.168\.)/',$_SERVER['REMOTE_ADDR'])){
		die('Attention, contact form will not work locally! Please upload your template to a live hosting server.');
	}


	if(isset($_POST['name']) and $_POST['name'] != ''){$message_body .= 'Visitor: ' . $_POST['name'] . '' . "\n" . '' . "\n"; $subject.=$_POST['name'];}
	if(isset($_POST['email']) and $_POST['email'] != ''){$message_body .= 'Email Address: ' . $_POST['email'] . '' . "\n" . '' . "\n"; $user_email=$_POST['email'];}
	if(isset($_POST['state']) and $_POST['state'] != ''){$message_body .= 'State: ' . $_POST['state'] . '' . "\n" . '' . "\n";}
	if(isset($_POST['phone']) and $_POST['phone'] != ''){$message_body .= 'Phone Number: ' . $_POST['phone'] . '' . "\n" . '' . "\n";}	
	if(isset($_POST['fax']) and $_POST['fax'] != ''){$message_body .= 'Fax Number: ' . $_POST['fax'] . '' . "\n" . '' . "\n";}
	if(isset($_POST['message']) and $_POST['message'] != ''){$message_body .= 'Message: ' . $_POST['message'] . '' . "\n";}	
	if(isset($_POST['stripHTML']) and $_POST['stripHTML']=='true'){$message_body = strip_tags($message_body);$message_type='text';}


