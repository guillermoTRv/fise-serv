<div class='panel panel-default pan'>
	<div class='panel-body'>
		<?php include("../scripts/recomend/fichareco.php"); ?>
			<hr>
			<?php 
				$co="SELECT id_comentreco,id_reco,id_user,texto_creco,link_reco,voto FROM coment_reco WHERE id_reco='$rec' order by id_comentreco desc";
				$e_co=$conexion->query($co);
				while ($aco=mysqli_fetch_array($e_co)) {
					$id_comentreco=$aco[0];
					$id_us=$aco[2];
					$texto_creco=$aco[3];
					$link_reco=$aco[4];
					$voto=$aco[5];

					$vot=$id_comentreco."f";
					$btnv=$id_comentreco."v";
					$m_v=$id_comentreco."m";

					$user="SELECT id_user,name_user FROM usuariosfise WHERE id_user='$id_us'";
		            $e_user=$conexion->query($user);
		            $nombre=$e_user->fetch_array();
		            $gh=$nombre[1];
					echo "
				        <script>
				            $(function(){
				                $('#$btnv').click(function(e){
				                    var url='../scripts/recomend/registrar_votorec.php';
				                    $.ajax({
				                        type:'POST',
				                        url:url,
				                        data:$('#$vot').serialize(),

				                        success:function(data){
				                            $('#$m_v').html(data);
				                
				                        }

				                    });

				                    return false;
				                });
				            });
				        </script>
				        	";
					echo "
						<p class='lrecodel'>
			                <strong>$texto_creco</strong>
			            </p>
			            <p style='margin-top:5px;'>
			               	<a class='jun' target='_blank' href='$link_reco'><span class='glyphicon glyphicon-send'></span>
			                	$link_reco
			                </a>
			            </p>
			            <p style='margin-top:-6px;'>
			                <strong>

			                <form id='$vot' method='post' enctype='multipart/form-data'>
								<input type='hidden' name='v_n' value='$id_comentreco'>
								<a href='#' value='enviar' id='$btnv' class='lnk'>
							     <span class='glyphicon glyphicon-thumbs-up'></span> Me gusta
							    </a>
							    <spam id='$m_v'><spam>
							</form>

			                    $voto puntos &nbsp; <small><em>respondio - $gh</em></small>
			                </strong>
			            </p>
						<hr>
					";
				}
			 ?>
	</div>
</div>
<?php include("../scripts/recomend/return.php"); ?>
