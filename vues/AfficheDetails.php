<div id="affichedata">
	
	<?php
    if($data["titre"]!=""){
			echo "<h1>" . $data["titre"] . "</h1>";
		}
		if($data["urlImage"]!=""){
	?>
			<img src = " ./images/<?php echo $data["urlImage"]?>.jpg" alt = " <?php echo $data["titre"] ?>"/>
	<?php
		}
		else{
	?>
			<img src = "./images/no-image-available.jpg" alt = "aucune image"/><br><br>
	<?php

		}

	?>
	<ul>	
	<?php
			
		
		if(($data["prenom"]&&$data["nom"]!="")&&($data["prenom"]!= null && $data["nom"]!= null )){
			echo "<li><span>Artiste: ". $data["nom"].", ".$data["prenom"]. "</span></li>";
		}
		
		else{
			echo "<li><span>Atelier: ". $data["nomCollectif"]."</span></li>";
		}
		
		if($data["categorieObjet"]!=""){
			echo "<li><span>Catégorie: " . $data["categorieObjet"]. "</span></li>";
		}	
		
		if($data["categorie"]!=""){
			echo "<li><span>Sous-Catégorie: ". $data["categorie"]. "</span></li>";
		}
		
		if($data["parc"]!=""){
			echo "<li><span>Parc: ". $data["parc"]. "</span></li>";
		}
		
		if($data["materiaux"]!=""){
			echo "<li><span>Matériaux: ". $data["materiaux"]. "</span></li>";
		}
		
		if($data["adresseCivique"]!=""){
			echo "<li><span>Adresse :". $data["adresseCivique"]. "</span></li>";
		}
		
		if($data["nomArrondissement"]!=""){
			echo "<li><span>Arrondissement :". $data["nomArrondissement"]. "</span></li>";
		}	
        
        
        if($data["coordonneeLatitude"]!=""){
		
        //    https://developers.google.com/maps/documentation/javascript/adding-a-google-map
        //   comment mettre une map de google dans un site 
     ?>
    <style>
       #map {
        height: 400px;
        width: 800px
       }
    </style>
            <div id="map"></div>
            <script>
                 function initMap() {
                   var uluru = {lat: <?php echo $data["coordonneeLatitude"] ?>, lng: <?php echo $data["coordonneeLongitude"] ?> };
                   var map = new google.maps.Map(document.getElementById('map'), {
                     zoom: 4,
                     center: uluru
                   });
                   var marker = new google.maps.Marker({
                     position: uluru,
                     map: map
                   });
                 }
            </script>
            <script async defer
                 src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC4QkcRKk6J15A3d0lLu8SZljq6opZkBMI&callback=initMap&zoom=14'>
            </script>
            
        <?php
        }

	?>	

	</ul>	
</div>
