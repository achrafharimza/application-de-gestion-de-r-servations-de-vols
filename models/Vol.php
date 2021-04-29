<?php 

class Vol {

	static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM vol ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	}


	