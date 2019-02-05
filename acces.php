<?php
if (isset($data['pseudo']))	{

	if ($data['rang'] < 2)
	{

			echo '<script type="text/javascript"> alert("Vous n\'avez pas accès à cette page, votre rang n\'est pas assez élevé!"); window.location.href = "index.php"; </script>';

	}


}
else {

				echo '<script type="text/javascript"> alert("Vous n\'avez pas accès à cette page, merci de vous identifiez!"); window.location.href = "connexion.php"; </script>';

}

?>