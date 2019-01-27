<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
		
	<div class="container">    
	  <table class="table">
	    <thead>
	      <tr>
	        <th>Passwords</th>
	      </tr>
	    </thead>
	    <tbody>
		  <?php 
		  	$length = $_POST["number"];
			$quantity = $_POST["pwd"];
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			for($i = 0; $i < $quantity; $i++){
				/*$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    			$charactersLength = strlen($characters);*/
    			$randomString = '';
    			for ($j = 0; $j < $length; $j++) {
        			$randomString .= $characters[rand(0, $charactersLength - 1)];
    			}
    			if(strpbrk($randomString, '1234567890') === FALSE) {
    				if ($length > 1) {
    					$digit = rand(0,9);
    					$randomString = substr_replace($randomString ,"", -1);
    					$randomString .= $digit; 
    				}
    			}
				echo "<tr>
                    	<td>$randomString</td>
                	 </tr>"; 
               
			}
		  ?>
	    </tbody>
	  </table>
	</div>


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>