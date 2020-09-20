<!DOCTYPE html >
<title></title>
<head>
<!-- jQuery library -->
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/acc6278257.js" crossorigin="anonymous"></script>
<script src="jquery-3.5.1.js"></script>
<script src="convid19.js"></script>
<!-- css file -->
<link rel="stylesheet" type ="text/css" href="main.css">
</head>
<body>
			<heading id="navmenu">
						<div id="openbox">
								<span class="iconbar"></span>
								<span class="iconbar"></span>
								<span class="iconbar"></span>
						</div>		
						<h3>Tricky Shubh</h3>
						<searchicon id="search-icon" class="fa ">&#xf002;</searchicon>				
			</heading>
			<navmenu id="menu-block">
			<navlink id="navbar">
						<ul>
										<li><a href="index.html">Home</a><span class="fa fa-chevron-up"></span>
														<ul>
																		<li><a href="Convid19.html">Corono Update</a></li>
																		<li><a href="#">Cricket Update</a></li>
																		<li><a href="#">News Update</a></li>
														</ul>
										</li>
										<li><a href="About.html">About</a><span class="fa fa-chevron-up"></span>
										<ul>
																		<li><a href="Convid19.html">Corono Update</a></li>
																		<li><a href="#">Cricket Update</a></li>
																		<li><a href="#">News Update</a></li>
														</ul></li>
										<li><a href="Contact.html">Contact</a><span class="fa fa-chevron-up"></span>
										<ul>
																		<li><a href="Convid19.html">Corono Update</a></li>
																		<li><a href="#">Cricket Update</a></li>
																		<li><a href="#">News Update</a></li>
														</ul></li>
						</ul>
			</navlink>
			</navmenu>
			<search id="search-box">
									<form autocomplete="off">
													<input type="search" class="fa" placeholder="&#xf002;search" list="list" required>
													<datalist id="list">
																	<option value="INDIA">
																	<option value="AMERICA">
																	<option value="LONDON">
													</datalist>
													<input type="submit" class="fa" value="&#xf002;">
									</form>
			</search>
			<togglebutton id="button">
									<input type="checkbox" id="togglebutton">
									<label for="togglebutton" class="label">
									<i class="fas fa-moon"></i>
									<i class="fas fa-sun"></i>
									<span class="ball"></span>
									</label>
			</togglebutton>
			<contactbox id="contact-box">
								<contact id="contact-detail">
													<img src="img2.jpg">
													<h1>Name</h1>
													<p>This paragraph is in the intro section of the sales force is the first time in the intro section of the sales </p>
													<div>
																	<span class="fa fa-facebook"></span>
																	<span class="fa fa-google-plus"></span>
																	<span class="fa fa-instagram"></span>
																	<span class="fa fa-twitter"></span>
																	<span class="fa fa-whatsapp"></span>
													</div>
								</contact>
								<contact id="feedback">
											<h1>Feedback</h1>
												<form method="POST" autocomplete="off">
																	<input type="text" name="name" id="name" placeholder="Type Your Name" required>
																	<input type="email" name="email" id="email" placeholder="Type Your Mail" required>
																	<input type="number" name="number" id="number" placeholder="Number...." required>
																	<textarea type="text" name="msg" id="msg" placeholder="Message... (Optional)"></textarea>
																	<input type="submit" value="Send" id="submit">
												</form>
								</contact>
			</contactbox>
<script>
<?php
$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$msg= $_POST['msg'];
$data=fopen("contact-form-data.txt","a");

if($_POST['name'])
{	fwrite($data,"\n------------------------------------------\n| Index    |  value  \n|----------|------------------------------\n| Name    :|  ".$name."\n| E-mail  :|  ".$email."\n| Number  :|  ".$number."\n| Message :|  ".$msg."\n------------------------------------------\n");
				fclose($data);
}
else
{
				echo"script Error";
				}
?>  
</script>
</body>
</html>
