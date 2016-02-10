<div class="panel panel-default">
									<div class="panel-heading" role='tab' id='heading3'>
										<div class="row">
											<div class="col-md-1 hidden-sm hidden-xs">
                                   				<img class="img-circle" src="../image/vectorial.jpg" alt="Generic placeholder image" width="60" height="60" border:"2px solid">
                            				</div>
											<div class="col-md-5 col-sm-6">
												<h3>
													<a class='avn' href="#collapse3" data-toggle='collapse' data-parent='#accordion3'>
															Calculo vectorial
													</a>
											    </h3>
											</div>
										</div>
									</div>
									
									<div id="collapse3" class='panel-collapse collapse'>
										<div class="panel-body">
											<?php 

								$consulta="SELECT * FROM unidades_materias WHERE materia='$materia' order by id_unidades asc LIMIT 12,16";
								$ejecutar=$conexion->query($consulta);
								while ($imprime=mysqli_fetch_array($ejecutar)) {
									$id_unidad=$imprime['id_unidades'];
									$unidad=$imprime['unidad'];
                                                                        $unidad_d=utf8_decode($imprime['unidad']);
                                                                        $unidad_l=urls_amigables($unidad_d);
									echo "

									<div class='col-md-12 col-sm-12'>";
										
									if ($id_unidad==101 || $id_unidad==103 || $id_unidad==106 || $id_unidad==116 ) {
										echo "
										<a class='colqa' href='http://fiseaprende.com/c-avanzado/panelcalculo?un=$unidad_l'>
											<div class='panel panel-success' style='border-color:rgba(255, 255, 255,.1);'>
												<div class='temesize panel-body'>
													<h4>&nbsp;$unidad</h4>
													
												</div>
											</div>
										</a>
									</div>"
									;
									}
									else{
									
									echo "
										<a class='colqa' href='#$id_unidad' data-toggle='modal'>
											<div class='panel panel-success' style='border-color:rgba(255, 255, 255,.1);'>
												<div class='temesize panel-body'>
													<h4><span class='glyphicon glyphicon-plus'></span> $unidad</h4>
													
												</div>
											</div>
										</a>
									</div>
									";
									echo"<div style='margin-top:50px;margin-right:-17px;' class='modal fade' id='$id_unidad' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
                                    include("../scripts/modal_tema.php");		
									}
						
								}

							 ?>
										</div>
									</div>
								</div>