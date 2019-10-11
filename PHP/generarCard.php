<?php
$producto = file_get_contents('php://input');
$producto = json_decode($producto, true);
$id = $producto["id"];
$nombre = $producto["nombre"];
$precio = $producto["precio"];

echo '
<div class="card" id="card'.$id.'">
						<div class="card-body">
							<div class="row">
								<div class="col-2 columnaCard">	
									<a onclick="borrarCard(`card'.$id.'`)" class="btn btn-danger">X</a>
								</div>
								<div class="col-5 columnaCard">
									<b>'.$nombre.'</b><BR>
									<i style="font-size: 11px;">'.$id.'</i><BR>
									$'.$precio.' c/u<br> <p style="display:none;" id="precio'.$id.'">'.$precio.'</p>
								</div>
								<div class="col-5 columnaCard">
									<div class="row"><a onclick="disminuir('.$id.')" class="menos btn btn-primary">- </a><input type="text" id="'.$id.'" value="1"><a onclick="aumentar('.$id.')" class="mas btn btn-primary"> +</a>
										<br>
									</div>
									<div class="row d-flex flex-row-reverse">
										<h2 class="d-flex mr-3 mt-3 mb-0 align-self-end" id="preciofinal'.$id.'"></h2>
									</div>		
								</div>	
							</div>
						</div>
					</div>'
?>