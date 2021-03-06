<!DOCTYPE  html>
<!-- Nama		: Ryan Yonata
	 NIM		: 13513074
	 Nama file 	: askform.php
	 Keterangan	: Berisi kode php dan html untuk menampilkan halaman
	 			  pengisian pertanyaan -->

<html>
<head>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="validateinput.js"></script>
	<title>Ask Question</title>
</head>

<body>
	<div class="pageheader">
		<h1><a class="pageheader" href="home.php">Simple StackExchange</a></h1>
		<br>
	</div>

	<h2>What's your question?</h2>
	<div class="linehome">
		<hr>
	</div>
	<br>
	<div id="form">
		<div class="content">
			<?php include('getQID.php') ?>
			<form name="ask" class="ask" onsubmit="return validateAskinput()" action="submitQuestions.php?id=<?php echo $id ?>" method="post">
				<input type="text" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($Name); ?>">
				<br>
				<input type="text" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($Email); ?>">
				<br>
				<input type="text" id="topic" name="topic" placeholder="Topic" value="<?php echo htmlspecialchars($Topic); ?>">
				<br>
				<textarea id="content" name="content" placeholder="Content" rows="5" cols="40"><?php echo htmlspecialchars($Content)?></textarea>
				<br>
				<button id="postbutton" type="submit">Post</button>
			</form>
		</div>
	</div>

</body>
</html>