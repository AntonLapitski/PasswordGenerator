<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<div id="form-container">
		<form action="generator.php" method="post">
		  <div class="form-group">
		    <label for="number">Length of password:</label>
		    <input type="text" class="form-control" id="number" name="number">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Number of passwords:</label>
		    <input type="text" class="form-control" id="pwd" name="pwd">
		  </div>
		  <button type="submit" class="btn btn-default">Generate</button>
		</form>
	</div>	


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>