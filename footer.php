		<div class="footer foot">
			<a title="Se connecter" class="top_link" style="display: inline;" href="connexion.php"><i class="glyphicon glyphicon-user"></i></a>
			<a title="Deconnexion" class="deconnect_link" style="display: inline;" href="connexion.php?deco=1#popup1"><i class="glyphicon glyphicon-log-out"></i></a>
			<div class="container">
				<div class="row footer_bottom">
					<div class="copy col-lg-4">
			           <p>© 2018 by <br />Lou BOURET & Yassine BADJI</p>
			           <p>Site fictif</p>
			        </div>
			        <div class="copy col-lg-4">
			           <a href="mentions_legales.php" class="mention">Mentions légales</a> 
			           <?php 
		 						if (isset($_SESSION['pseudo']) && $data['rang'] == 2){ 
		 							?>| <a href='admin.php'>Admin</a> <br /> <a href="gestionFormation.php" style="padding-left: 40px;">Gestion Formation</a> 
		 							<?php
		 						}
			            ?>
		            </div>
		            <div class="col-lg-4">
					  <dl id="sample" class="dropdown" style ="width: 305px;">
					 	<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Entrez votre email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>	   					
						</ul>

					  	<ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
						</dl>
					</div>
				</div>
			</div>
		</div>
</body>	
</html>