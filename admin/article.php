<?php require_once("header.inc.php"); ?>




<div class="row" id="content">
	<div class="col-md-9" id="content_text">
		<h1 style="margin-top: 100px; margin-left: 50px;"> Article : </h1> 


		<?php
		if (isset($_GET['retour']))
		{
			?>
			<div class="alert alert-success">
				Merci. Votre article intitulé "<?php echo $_GET['titre'] ?>" a bien été enregistrée.
			</div>
			<?php
		}
		?>

		<form class="form-horizontal" action="article_action.php" method="post">
			<div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="titre" >Titre *:</label>
				<div class="col-sm-10"><input type="text" class="form-control" id="titre" name="titre" required="required"> 
				</div>
			</div>

			<div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="image" >Logo :</label>
				<div class="col-sm-10"><input type="file" class="form-control" id="logo" name="logo" > 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="texte">Texte *:</label>
				<div class="col-sm-10"><textarea class="form-control" required="required" id="texte" name="texte" ></textarea> </div>
			</div>
			<input type="submit" value="Envoyer" class="btn btn-default" style="margin-left: 150px;">
		</form>
	</div>
	
</div>



<?php require_once("footer.inc.php"); ?>
