<span class="glyphicon glyphicon-repeat"></span>
<?php
	if ($un!='' && $tm=='' && $by=='' && $cons=='' && $prf=='' && $sub=='' && $cont!='')  {
    	echo"<a href='?un=$u' class='amounbas'>Regresar</a>";      
   	}
  if ($un!='' && $tm!='' && $by=='' && $cons=='' && $prf=='' && $sub=='' && $cont!='')  {
      echo"<a href='?un=$u&tm=$t' class='amounbas'>Regresar</a>";      
    } 
	if ($un!='' && $tm=='' && $by!='' && $cons=='' && $prf=='' && $sub=='' && $cont!='')  {
    	echo"<a href='?un=$u&by=$by' class='amounbas'>Regresar</a>";      
   	}
  if ($un!='' && $tm=='' && $by=='' && $cons!='' && $prf=='' && $sub=='' && $cont!='')  {
    	echo"<a href='?un=$u&cons=$cons' class='amounbas'>Regresar</a>";      
   	}	 
  if ($un!='' && $tm=='' && $by=='' && $cons=='' && $prf!='' && $sub=='' && $cont!='')  {
    	echo"<a href='?un=$u&prf=$prf' class='amounbas'>Regresar</a>";      
   	}

?>