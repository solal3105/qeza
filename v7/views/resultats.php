<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>resultats.css" rel="stylesheet">
</head> 
<!--  Début de la page -->
<header>
	<img src="assets\images\logo_grand_transparent.png" id="logo">
</header>
<body>
	<div id="sous_menu">
		<input type="button" class="bouton_sous_menu" value="Modifier les critères"  name="modifier la recherche" id="recherche" onclick="location.href='?page=personas';">
		<div id="budget" class="bouton_sous_menu">
			<p>Budget :</p>
			<input type="number" name="budget" onclick="" step="5">
			<i class="fa fa-eur" aria-hidden="true"></i>
		</div>
		<div id="trier" class="bouton_sous_menu">
			<p>Trier par :</p>
			<select name="trier" class="">
				<option value="prix">Prix</option>
				<option value="note" selected>Note</option>
			</select>
		</div>
	</div>
<div id="conteneur">
		<?php
		foreach ($tel as $key => $value) { ?>
			<div class="telephone">
			<h2><?= $value['Fabricant'].' '.$value['modele'] ?></h2>
			<img src="<?= PATHS_PHOTOS_PHONES . $value['Fabricant'] . "_" . $value['modele'] . "_hd.jpg" ?>">
			<p class="prix">
				<?php 
				echo rand(150, 1100);
				?>
			</p>
			<p class="note"><?= (int)($notesFinales[$value['ID']]*10)/10 ?>/10</p>
			</div>
		<?php } ?>
	</div>
</body>
