
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="steampowered.css">
    <meta charset="UTF-8">
    <title>SteamPowered</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
	
</head>
<body>
<div class="top-border">
    <h1>SteamPowered</h1> <!-- TITLE TEXT -->
    <div class="tab-bar"> <!-- NAVIGATION BAR -->
        <div class="tab"><a href="profile.html">PROFILE</a></div>
        <div class="tab"><a href="multiplayer.html">MULTIPLAYER</a></div>
		<?php 
		if (!isset($_SESSION['steamid'])) {
			echo "<div class = 'w3-right' style = 'right:0;'>";
			loginbutton();
			echo "</div>";
		} else {
			include ('steamauth/userInfo.php');
	?>
	<?=$steamprofile['personaname']?>
	<img src='<?=$steamprofile['avatarmedium']?>'>
	<span style='float:right;'><?php logoutbutton(); ?></span>
	<?php 
		}
	?>
	</div>
</div>

<div class="content"></div>
<div class="bottom-border"></div>
</body>
</html>
