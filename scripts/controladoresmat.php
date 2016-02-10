<?php
	error_reporting(E_ALL ^ E_NOTICE);
	
	if ($u!='' && $t=='' && $by=='' && $cons=='' && $prf=='' && $cont=='' && $sub=='') {
		include("page/page_unmat.php");
	}
	if ($u!='' && $t!='' && $by=='' && $cons=='' && $prf=='' && $cont=='' && $sub=='') {
		include("page/page_tmmat.php");
	}
	if ($u!='' && $t=='' && $by!='' && $cons=='' && $prf=='' && $cont=='' && $sub=='') {
		include("page/page_bymat.php");
	}
	if ($u!='' && $t=='' && $by=='' && $cons!='' && $prf=='' && $cont=='' && $sub=='') {
		include("page/page_consmat.php");
	}
	if ($u!='' && $t=='' && $by=='' && $cons=='' && $prf!='' && $cont=='' && $sub=='') {
		include("page/page_prfmat.php");
	}
	if ($u=='Subir' && $t=='' && $by=='' && $cons=='' && $prf=='' && $cont=='' && $sub!=''){
		include("subircont.php");
	}
	if ($u!='' && $tm=='' && $by=='' && $cons=='' && $prf=='' && $cont=='' && $sub!=''){
		include("subircont.php");
	}
	if ($cont!='') {
		include("vistamatprot.php");
	}

?>