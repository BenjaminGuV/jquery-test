<?php

	if ( $_POST ) {
		sleep(3);
		switch ($_POST["destino"]) {
			case 'Aguascalientes':
				?>
					<div class="destinoTxt">
						<h1>Renta de autos en Aguascalientes</h1>
						<p>
							Renta autos en Aguascalientes, Ciudad situada en el centro del país, considerada como uno de los estados más pequeños de México. Con la renta de autos en Aguascalientes, ciudad en la que la modernidad y la industrialización dominan la vida de sus habitantes, puedes disfrutar las tradiciones que aún forman parte de los Aguascalentenses; prueba de esto es la Feria Nacional de San Marcos, considerada como la feria más importante de país, el Festival de las Calaveras, y el aniversario de la Ciudad, realizado en el mes de Octubre.
						</p>
						<p>
							En ABC CAR RENTAL ofrecemos autos de renta muy economicos en todo el territorio de la Republica Mexicana
						</p>
						<input type="button" value="RENTA UN AUTO EN AGUASCALIENTES" class="bt_visit">
					</div>
					<div class="destinoImg">
						<img src="http://mexicocarrental.com.mx/pruebas/ABCmadre/Renta-De-Autos-En-Aguascalientes/img/imagen_corto.jpg">
					</div>
				<?php
				break;
			case 'Acapulco':
				?>

					<div class="destinoTxt">
						<h1>Renta de autos en Acapulco</h1>
						<p>
							Renta un auto en Acapulco, paraíso tropical, lleno de vida. Con la renta de autos en Acapulco puedes pasar tus días viviendo emocionantes aventuras ó simplemente disfrutando y dejándote consentir con sus cálidas playas. Sin duda, rentar autos en Acapulco en la mejor opción, disfrutando también de la diversidad de centros nocturnos que tiene para ti una de las ciudades que nunca duerme. 
Con la renta de Autos en Acapulco disfrutarás tus vacaciones en	familia, con amigos ó con tu pareja, Acapulco forma parte de los atractivos playeros del Pacífico Mexicano y ofrece una amplia gama de actividades recreativas y de entretenimiento para todos.
						</p>
						
						<input type="button" value="RENTA UN AUTO EN ACAPULCO" class="bt_visit">
					</div>
					<div class="destinoImg">
						<img src="http://mexicocarrental.com.mx/pruebas/ABCmadre/Renta-De-Autos-En-Acapulco/img/imagen_corto.jpg">
					</div>

				<?php
				break;
			case 'Campeche':
					?>

					<div class="destinoTxt">
						<h1>Renta de autos en Campeche</h1>
						<p>
							Renta autos en Campeche y comienza a gozar de las maravillas que tiene tiene en sus litorales y áreas naturales protegidas como la Laguna de Términos, Petenes y Calakmul. Con la renta de autos en Campeche recorre y deleita los deliciosos sabores de su comida típica como lo son la gran variedad de mariscos, panuchos, empanadas, tacos y el famoso pan de cazón. 
Con la renta de autos en Campeche, puedes disfrutar de su diversidad de actividades al aire libre, visitando las Grutas de Xtacumbilxunaan, ubicado a 11o Km. de la Ciudad de Campeche, lugar rodeado de bellezas inigualables donde podrás apreciar y conocer el Rincón de la Bruja.
						</p>
						
						<input type="button" value="RENTA UN AUTO EN CAMPECHE" class="bt_visit">
					</div>
					<div class="destinoImg">
						<img src="http://mexicocarrental.com.mx/pruebas/ABCmadre/Renta-De-Autos-En-Campeche/img/imagen_corto.jpg">
					</div>

					<?php
				break;
			
			default:
				# code...
				break;
		}

	}
	

?>