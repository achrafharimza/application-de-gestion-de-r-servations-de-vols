
<div class="pos">

<div class="login-box">
  <h2>SEARCH FOR  FLIGHTS</h2>
 
  <form action="vol" method="post">
    <div class="user-box">
      <input type="text" name="depart" required="">
      <label>depart</label>
    </div>
    <div class="user-box">
      <input type="text" name="destination" required="">
      <label>destination</label>
    </div>
	<div class="user-box">
      <input type="date" name="datedepart" >
      <label>date de depart</label>
    </div>
<div>
    <div id="redate" style="display: none"   class="user-box">
      <input type="date" name="dateretour" >
      <label>date de retour</label>
    </div>
   </div> 
    		<div class="sho">
							  						  Aller-simple <input type='radio' name='trip' onclick="javascript:yesnoCheck();" value='1' id="simple" checked/> Aller-retour <input type='radio' name='trip' value='2' onclick="javascript:yesnoCheck();" id="alretour"/>

				      	</div>
	
     <button name="Search" class="btn btn-outline-light">Search for  Flights</button>
	 	
  
  </form>
  
		</div>		
				
</div>
<script>
    function yesnoCheck() {
    if (document.getElementById('simple').checked) {
        document.getElementById('redate').style.display = 'none';
        }
    else if(document.getElementById('alretour').checked) {
        document.getElementById('redate').style.display = 'block';
       
   }
     
    } 
    </script>