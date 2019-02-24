<?php
include 'header.php';
include 'functions.php';

$question = questionnaire();
?>
<title>Admin</title>
<div class="container">
  <div class="row">
        <div class="col-lg-12 questionnaire">
          <form class="well">
            <legend class="titleQuest">Questionnaire de recrutement</legend>
            <?php
            while($donnees=$question->fetch())
            {
            ?>
            <h4><?= $donnees["question"]?></h4>
            <fieldset>
              <div class="radio">
                <label class="radio">
                  <input type="radio" name="origine" value="ami" id="ami">
                  Info 
                </label>
              </div>
              <div class="radio">
                <label class="radio">
                  <input type="radio" name="origine" value="web" id="web">
                  Info 
                </label>
              </div>
              <div class="radio">
                <label class="radio">
                  <input name="origine" value="web" id="web">
                  Info 
                </label>
              </div>
              <div class="radio">
                <label class="radio">
                  <input type="radio" name="origine" value="web" id="web">
                  Info 
                </label>
              </div>
            <?php
        	}
            ?>

              <button class="btn btn-primary" type="submit">Envoyer</button>
            </fieldset>
          </form>
        </div>
      </div>
</div>


<?php
include 'footer.php';
?>