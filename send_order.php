<?php
	// Отправка онлайн-заявки
	if ($_POST) {

		if (isset($_POST['submit_order'])) {
			$_SESSION['post'] = 1;
			
			// Собираем полученные данные
			$_SESSION['name'   ] = $_POST['name'   ];
			$_SESSION['phone'  ] = $_POST['phone'  ];
			$_SESSION['company'] = $_POST['company'];
			$_SESSION['text'   ] = $_POST['text'   ];
			
			// Проверяем их на ошибки
			if ( (!strcmp($_SESSION['name'],'')) || (!strcmp($_SESSION['name'],'Ф.И.О.')) ) {
				$_SESSION['error'] = 1;
				$_SESSION['name_error'] = 1;
			}
			
			if ( (!strcmp($_SESSION['phone'],'')) || (!strcmp($_SESSION['phone'],'Телефон')) ) {
				$_SESSION['error'] = 1;
				$_SESSION['phone_error'] = 1;
			}
			
			if (!strcmp($_SESSION['company'],'Организация')) 
				$_SESSION['company'] = 'Не указана';
				
			
			if ( (!strcmp($_SESSION['text'],'')) || (!strcmp($_SESSION['text'],'Примечание')) ) {
				$_SESSION['error'] = 1;
				$_SESSION['text_error'] = 1;
			}
			
			// Отправляем письмо в случае, если ошибок нет
			if (!isset($_SESSION['error'])) {
				
				include 'bin/mail.php';
				
				$message  = '<div style="width:520px;padding:40px 40px 30px;border:1px solid #777;margin:0 auto;background:url(http://cables.heavymetalist.jino.ru/images/page/body_back.png) 0 50%;">';
				$message .= '<div><a href="http://cables.heavymetalist.jino.ru"><img src="http://cables.heavymetalist.jino.ru/images/page/logo_pic.png" alt="БалтЭнергоКомплект"></a></div>';
				$message .= '<div style="margin:20px 0 30px;background:url(http://cables.heavymetalist.jino.ru/images/page/separator.png) 0 0; height:2px;"></div>';
				$message .= '<h2 style="margin-bottom:20px;">Онлайн заявка с сайта '.date("d.m.y").' '.date("H:i").'</h2>';
				$message .= '<table style="border:1px solid #777;margin:0;padding:0;border-collapse:collapse;">';
				$message .= '<tr><td style="padding:5px 0;background:#ccc;width:150px;font-weight:bold;border:1px solid #777;text-align:center;height:30px;">ФИО</td><td style="padding:5px 20px 5px 20px;width:347px;border:1px solid #777;text-align:justify;height:30px;">'.$_SESSION['name'].'</td></tr>';
				$message .= '<tr><td style="padding:5px 0;background:#ccc;width:150px;font-weight:bold;border:1px solid #777;text-align:center;height:30px;">Организация</td><td style="padding:5px 20px 5px 20px;width:347px;border:1px solid #777;text-align:justify;height:30px;">'.$_SESSION['company'].'</td></tr>';
				$message .= '<tr><td style="padding:5px 0;background:#ccc;width:150px;font-weight:bold;border:1px solid #777;text-align:center;height:30px;">Телефон</td><td style="padding:5px 20px 5px 20px;width:347px;border:1px solid #777;text-align:justify;height:30px;">'.$_SESSION['phone'].'</td></tr>';
				$message .= '<tr><td style="padding:5px 0;background:#ccc;width:150px;font-weight:bold;border:1px solid #777;text-align:center;height:30px;">Примечание</td><td style="padding:5px 20px 5px 20px;width:347px;border:1px solid #777;text-align:justify;height:30px;"><textarea style="width:345px;height:200px;border:none;outline:none;resize:vertical;background:transparent;">'.$_SESSION['text'].'</textarea></td></tr>';
				$message .= '</table>';
				$message .= '</div>';
				
				$owner_email = 'baltenergocomplect@gmail.com';
				$from = 'Cables@Form.ru';
				$subject = 'Онлайн-заявка с сайта BaltEnergoComplect.ru';
				
				if(is_uploaded_file($_FILES['file']['tmp_name']))
					send_mail($owner_email, $subject, $message, $from, $_FILES['file']['tmp_name'], $_FILES['file']['name']);
				else
					send_mail($owner_email, $subject, $message, $from);
					
				$_SESSION['order_sended'] = 1;
			}
		} else if (isset($_POST['clear_order'])) {
			$_SESSION = array();
		}
		
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}
?>