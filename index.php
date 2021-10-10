<?php
$file = "bilby.txt";
$password = "password";
$theme = "dark";
?>

<html lang="en" data-theme="<?php echo $theme ?>">
<!-- Author: Dmitri Popov, dmpop@linux.com
         License: GPLv3 https://www.gnu.org/licenses/gpl-3.0.txt -->

<!--javascript:var%20text=window.getSelection();location.href='https://tokyoma.de/bilby/index.php?url='+encodeURIComponent(location.href)-->

<head>
	<title>Bilby</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/classless.css">
	<link rel="stylesheet" href="css/themes.css">
</head>

<body>
	<div class="card text-center">
		<h1 style="margin-left: 0.19em; margin-bottom: 0.5em; vertical-align: middle; letter-spacing: 3px; margin-top: 0.5em; color: #e9afafff; text-transform: uppercase;">Bilby</h1>
		<hr>
		<div class="text-left">
			<?php
			if (!is_file($file)) {
				file_put_contents($file, '');
			}
			if (isset($_GET["url"])) {
				echo $_GET['url'];
				$f = fopen($file, "a");
				fwrite($f, '<p><a href="' . $_GET['url'] . '">' . $_GET['url'] . '</a></p>' . PHP_EOL);
				fclose($f);
				header("location:" . $_GET['url'] . "");
			} else {
				echo file_get_contents($file, true);
			}
			?>
		</div>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<input style="margin-top: 2em;" type="password" name="pwd">
			<button type="submit" name="clear">Clear</button>
		</form>
		<?php
		if (isset($_POST["clear"])) {
			if ($_POST['pwd'] == $password) {
				unlink($file);
				header("Refresh:0");
			} else {
				echo '<p>Wrong password</p>';
			}
		}
		?>
	</div>
</body>

</html>