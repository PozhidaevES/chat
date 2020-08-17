<html>
    <head>
        <style>

            body{
				margin: 0;
				padding:0;
				font-family: 'Arial'; 
			}
			
			.container{
				width: 100%;
				max-width: 800px;
				margin: 0 auto;	
			}
		
            .list{
				
				background-image: url('https://funart.pro/uploads/posts/2020-04/1586158974_59-p-foni-dlya-perepisok-105.jpg');
				background-size: cover;
				background-position: center center;
				padding: 10px 0;
				box-sizing: border-box;  
			}
			
			.message{
				margin: 5px;
				background: #654161;
				width: auto;
				border-radius: 5px;
				padding: 5px;		
			}
			
			.username{
				font-weight: bold;
			}
			
			.date{
				opacity: 0.3;
				margin: 0 0 0 auto;  
				font-size: 12px;
			}
            			
			.username{
				font-weight: bold;
			}
			
			.date{
				opacity: 0.3;
				margin: 0 0 0 auto;  
				font-size: 12px;
			}
			
			.flex-box{
				display: flex;
			}
			
			.vertical-bottom{
				align-items: flex-end;
			}
			
			.to-right{
				
			}
			
			.my-message{
				background: #128267;
				margin: 5px 5px 5px auto;  
			}

			form{
				margin: 0;
			}	
			
			form .text-box{  
				width: 100%;  
			}			
			
			form textarea{
				font-size: 20px;
				width: 100%;
			}
			
			form button{
				font-size: 20px;
				width: 50px;
			}

        </style>
    </head>
    <body>
    <div class="container">
			<div class="list">
			<?php  
				include('File.php');
				$file = new File('/var/www/www-root/data/www/ironlinks.ru/nordic/sofia/nordic5/timon/chat/data.txt');   
			?>
			
			<?foreach($file->dataRead() as $message){?>   
				<div class="flex-box">   
					<div class="message <?if($message['id'] == 4){?>my-message<?}?>  "> 
						<?if($message['id'] != 4){?>
							<div class="username">
								<?= $message['first_name'] ?>
							</div>
						<?}?>
						<div class="flex-box vertical-bottom">
							<div class="text"> 
								<?= $message['text'] ?>
							</div>	
							<div class="date">
								<?= date('H:i',$message['publ_time']) ?>
							</div>
						</div>
					</div>
				</div>
			<?}?>
		
			</div>
			<a name="form"></a>  
			<form method="post" action="work.php"  >        
				<input type="hidden" name="first_name" value="Evgen" />   
				<input type="hidden" name="id" value="4" />
				<div class="flex-box">
					<div class="text-box">
						<textarea name="text"  required  ></textarea>
					</div>
					<button>&#10148;</button>	
				</div>
			</form>
		</div>
    </body>
</html> 