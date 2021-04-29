<?php 
	if(isset($_POST['Search'])){
	$data = new VolsController();
		$vols = $data->getAllVols();
	$depart=  $_POST['depart'];
   $destination=  $_POST['destination'];
   $datedepart=  $_POST['datedepart'];
	
	}
?>


<form action="reservation" method="post">
	<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>vol ID</th>
                    <th>depart</th>
                    <th>destination </th>
                    <th>prix</th>
                  
                    <th>nbplace</th>
                    <th>datedepart</th>
                    <th>Select</th>
					    </tr>
					  </thead>
					  <tbody>
               <?php foreach($vols as $vol):?>
		<tr>
   


<td><?php  echo  $vol['idv'];?></td>
   <td><?php  echo  $vol['depart'];?></td>
   <td><?php  echo $vol['destination'];?></td>
  
   <td><?php  echo $vol['prix'];?></td>
   <td><?php  echo $vol['nbplace'];?></td>
   <td><?php  echo $vol['datedepart'];?></td>
   <td><input type="radio" name="idv" value="<?php  echo  $vol['idv'];?>"></td>
    <td><input type="hidden" name="dater" value="<?php  echo $vol['datedepart'];?>"></td>
        						</tr>;
				
		<?php endforeach;?>
        </tbody>
            </table>
    					
<label>nombre de voyageures</label>
		<input type="number" name="np"  required>
<input type="submit" value="Select vol" name="Select">;

</form>
