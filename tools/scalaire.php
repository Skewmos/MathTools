<?php 
require '../config/function.php';
require '../partials/_header.php';

if (isset($_POST['submit'])) {
	if (!empty($_POST['x']) and !empty($_POST['y'])) {
		if (!is_nan($_POST['x']) and !is_nan($_POST['y'])) {

			$x = $_POST['x'];
			$y = $_POST['y'];
			
			$standard = sqrt(square($x) + square($y));

			
		}else{
			$error['flash'] = "The entered value is not a number!";
		}
	}else{
		$error['flash'] = "Please complete the fields!";
	}
}

$vector_coordinate = 0 ;
 ?>

 <div class="container jumbotron">
 	<h1 class="text-center"><u>Scalar Product</u></h1>
 </div>

<div class="container">
	<div class="row">
	<div class="col-sm">
		<div class="container jumbotron text-center" >
			<h2>Calculate the norm of a vector :</h2> <br>
			<?php
		if(isset($standard)){
			echo "<p>The norm of the vector is equal to: √($x ²+ $y ²) = $standard</p>";
		}
	 ?> 
				<form action="" method="post" id="standard">
					<div class="form-group">
      <label for="x">x: </label>
      <input type="text" class="form-control" name="x" id="x" aria-describedby="emailHelp" placeholder="Enter X value">
       <label for="y">y: </label>
      <input type="text" class="form-control" name="y" id="y" aria-describedby="emailHelp" placeholder="Enter Y value"> <br>
      <input type="submit" class="btn btn-primary" id="submit" name="submit" value="calculate">
    				</div>
				</form>
		</div>
	</div>
	<div class="col-sm">
		<div class="container">
			<h2><u>Recall :</u></h2>
			<p>The standard of the vector is given by the following formula : √(x² + y²)</p>
			<h3>Example:</h3>
			<p> u→</p>
		</div>
	</div>
</div>
</div>