<!DOCTYPE html >
<title>Tricky shubh</title>
<head>
<script src="https://kit.fontawesome.com/acc6278257.js" ></script>
<script>
<?php
$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$msg= $_POST['msg'];
$data=fopen("contact-form-data.txt","a");

if($_POST['name'])
{			fwrite($data,"\n------------------------------------------\n| Index    |  value  \n|----------|------------------------------\n| Name    :|  ".$name."\n| E-mail  :|  ".$email."\n| Number  :|  ".$number."\n| Message :|  ".$msg."\n------------------------------------------\n");
				fclose($data);
}
else
{
				echo"script Error";
				}
?> 
</script>
<link rel="stylesheet" type ="text/css" href="main.css"> 
</head>
<body>
<div class="anim">
  <i class="fas fa-cog spin"></i>
</div>
<a href="contact.html"><button class="pos">Click Me</button></a>
</body>
</html>

