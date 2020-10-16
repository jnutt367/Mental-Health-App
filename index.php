<!Doctype html>
<html>
<head>
<style>
	body {
		background-color: transparent;
		text-align: center;
	}
	header {
		background-image: url('sad-young-man.webp'); 
		background-repeat: no-repeat;
		background-size: 100%;
		height: 30vh;
		background-color: black;
		padding: 15px;
	}
	label  {
		padding: 50px;
	}
	footer{
		background-color: black;
		color: blue;
		height: 20vh; 
	}
</style>
</head>
<body>
	<header>
		
	</header>
	<article>
		<h1>Post-traumatic Stress Disorder</h1>
		<p>Post-traumatic stress disorder (PTSD) is a real illness. You can get PTSD after living through or seeing a traumatic event, such as war, a hurricane, rape, physical abuse or a bad accident. PTSD makes you feel stressed and afraid after the danger is over. It affects your life and the people around you.

PTSD can cause problems like:

Flashbacks, or feeling like the event is happening again
Trouble sleeping or nightmares
Feeling alone
Angry outbursts
Feeling worried, guilty or sad
PTSD starts at different times for different people. Signs of PTSD may start soon after a frightening event and then continue. Other people develop new or more severe signs months or even years later. PTSD can happen to anyone, even children.

Medicines can help you feel less afraid and tense. It might take a few weeks for them to work. Talking to a specially trained doctor or counselor also helps many people with PTSD. This is called talk therapy.</p>
	</article>
	<h1>Please check all of the symptoms that you are experiencing:</h1>
	<form action="index.php" method="post">
	PTSD:
	<input type="checkbox" name="symtpoms[]">
	Depression:
	<input type="checkbox" name="symtpoms[]">
	Bi-Polar:
	<input type="checkbox" name="symtpoms[]">
	<input type="submit">
		</form>

<?php 
	
	echo "<h1>We know it's hard....</h1>";
	echo "<h1>But we are stronger together.</h1>";
?>
<footer>
	<address>Random S. Veteran</address>
	<address>100 Shadow Lurking Head Space Place.</address>
	<address>Misery, Fl.</address>
</footer>
</body>
</html>