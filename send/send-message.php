 
<?php
$to      = "uncle-4040@yandex.ru";
$from    = "uncle-4040@yandex.ru";
$subject = "Letter";
$subject="=?utf-8?B?".base64_encode($subject)."?=";
$message = 

'Адрес:'.PHP_EOL.$_POST['emailsend'].PHP_EOL.
'Имя:'.PHP_EOL.$_POST['name'].PHP_EOL.
'Текст сообщения:'.PHP_EOL.$_POST['textarea'];


$headers = "From: $from\r\n" . "\r\n" .
  "Reply-To: $from\r\nContent-type: text/plain; charset=utf-8" . "\r\n" .
  "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

if(mail($to, $subject, $message, $headers)){
    
	
 echo " <!DOCTYPE html> 
		<html>
		  <head>
		  <meta charset='utf-8'>
		  </head>
		  <body>
		     <div class='window'>
				   
			    <h1>Ваше сообщение отправлено!</h1>
				<p>для возврата на сайт, нажмите кнопку НАЗАД</p>
			    <a href='/index.html'>
				<div class='btn'>НАЗАД</div>
				</a>
			 </div> 
			  
			  <style>
			  
			  body{
				  background:rgba(0,0,0, .8);
				  font-family:monospace;  
			  }
                .btn{
			   position:absolute;
			   left:160px;
				 width:80px;
                 height:30px; 
                 border-radius: 5px;				 
				 background:#000;
                 color:#fff;
                 text-align:center;
                 padding:10px 0px 0px 0px;				 
			  }
			  
			  h1{
			  display:block;
			  padding:150px 10px 0px 12px;
			  }
			  
			  p{
			  text-align:center;
			  }
			  
			  .window{
				  position:relative;
				  width:400px;
				  height:400px;
				  top:200px;
				  margin:0 auto;
				  background:#fff;
				  color:#000;
				  border-radius:50%;
			  }
			  
			  
			 </style>
		  </body>
		</html>"
     ;}
else{
   
    echo "<!DOCTYPE html> 
		<html>
		  <head>
		  <meta charset='utf-8'>
		  </head>
		  <body>
		     <div class='window'>
				   
			    <h1>Ошибка отправки!</h1>
				<p>для возврата на сайт, нажмите кнопку НАЗАД</p>
			    <a href='/index.html'>
				<div class='btn'>НАЗАД</div>
				</a>
			 </div> 
			  
			  <style>
			  
			  body{
				  background:rgba(0,0,0, .8);
				  font-family:monospace; 
			  }
              
                .btn{
			   position:absolute;
			   left:160px;
				 width:80px;
                 height:30px; 
                 border-radius: 5px;				 
				 background:#000;
                 color:#fff;
                 text-align:center;
                 padding:10px 0px 0px 0px;				 
			  }
			  
			  h1{
			  display:block;
			  padding:150px 10px 0px 12px;
			  }
			  
			  p{
			  text-align:center;
			  }
			  
			  .window{
				  position:relative;
				  width:400px;
				  height:400px;
				  top:200px;
				  margin:0 auto;
				  background:#fff;
				  color:#000;
				  border-radius:50%;
			  }
			  
			  
           </style>
		  </body>
		</html>"
        
        ;}



?> 