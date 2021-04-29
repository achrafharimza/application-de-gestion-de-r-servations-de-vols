<?php 

class ReservationsController{

	
	
	public function addReservation(){
		if(isset($_POST["submit"])){
           
            $np=$_POST["np"];
      
         
       
         
          
			$data = array(
                "idc" =>  $_SESSION["idc"] ,
				"idv" => $_POST["idp"],
				"numplace" => $_POST["np"],
				"dater" => $_POST["dater"],
			
				
			
			);
			$result = Reservation::add($data);
			if($result === "ok"){
				Session::set("success","Reservation Ajouté");
				
			}else{
				echo $result;
			}
		}
	}

		}



?>