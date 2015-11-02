<?php

function mime_header_encode($str, $data_charset, $send_charset) 
{
     if($data_charset != $send_charset) 
     {
          $str = iconv($data_charset, $send_charset, $str);
     }
     return '=?' . $send_charset . '?B?' . base64_encode($str) . '?=';
}



function send_mail($to, $thm, $html, $from = MAIL_FROM, $file_path = false, $send_name = 'default.txt')
{
    $headers = "";
    $multipart = "";
    if ($file_path)
    {
	    $fp = fopen($file_path,"r");
	    if (!$fp)
	    {
	        preprint("Файл ".$file_path." не может быть прочитан"); 
	        return false;
	    }
	    $file = fread($fp, filesize($file_path));
	    fclose($fp);
    }    
      
    $boundary = "--".md5(uniqid(time())); // генерируем разделитель 
    $headers .= "From: ".$from."\n";
    $headers .= "Reply-To: ".$from."\n";
    $headers .= "MIME-Version: 1.0\n"; 
    $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\n"; 
    $multipart .= "--".$boundary."\n"; 
    $kod = 'utf-8';
    $multipart .= "Content-Type: text/html; charset=".$kod."\n"; 
    $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n"; 
    $multipart .= $html."\n\n"; 
    if ($file_path)
    {
        $message_part = "--".$boundary."\n"; 
        $message_part .= "Content-Type: application/octet-stream\n"; 
        $message_part .= "Content-Transfer-Encoding: base64\n"; 
        $message_part .= "Content-Disposition: attachment; filename = \"".$send_name."\"\n\n"; 
        $message_part .= chunk_split(base64_encode($file))."\n"; 
        $multipart .= $message_part;
    }
    $multipart .= "--".$boundary."--\n"; 
    if(!mail($to, mime_header_encode($thm, "utf-8", "utf-8"), $multipart, $headers)) 
    {
        preprint("Письмо не отправлено."); 
        return false;
    } 
    else 
    {
        return true;
    }   
}



function checkEmail($email)
{
	if (!eregi("^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+\.[a-zA-Z]{2,4}$",$email))
	{
	   return false;
	}
	else
	{
	   return true;
	}
}