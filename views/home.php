<?php 
	
?>
<?php
			echo "<h2>Welcome ".$_SESSION['email']."</h2>";
		
		?>
<form action="vol" style="justify-content: center;
    
    align-content: center;
    display: grid;" method="post">
			<h2>SEARCH FOR  FLIGHTS</h2>
			
			
			
        <label>départ</label>
		<input type="text" name="depart" >

		<label > arrivée</label>
		<input type="text" name="destination" >

        <label>date de départ</label>
		<input type="date" name="datedepart" >


			<br>
			
			<br>
			<input type="submit" value="Search for  Flights" name="Search">
		</form>