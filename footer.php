		<div class="footer foot">
			<div class="container">
				<div class="row footer_bottom">
					<div class="copy col-lg-4">
			           <p>© 2018 by <br />Lou BOURET & Yassine BADJI</p>
			           <p>Site fictif</p>
			        </div>
			        <div class="copy col-lg-4">
			           <a href="mentions_legales.php">Mentions légales</a> |
			           <?php 
							if (!isset($_SESSION['pseudo'])) { echo "<a href='connexion.php'>Connexion</a></p>"; }
	   						else { 	
		 						if ( $data['rang'] == 2){ 
		 							echo "<a href='admin.php'>Admin</a> | <a href='connexion.php?deco=1#popup1'>Deconnexion</a></p>";
		 						}
								else {
				 					echo " <a href='connexion.php?deco=1#popup1'>Deconnexion</a></p>"; 
								}
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