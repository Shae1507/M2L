<?php include 'header.php'; ?>
<title>Matériels</title>
<div class="container-fluid">
    <div class="row">
      	<div class="col-lg-10 col-lg-offset-1">
			<h2 class="western titreService spaceClass" style="color: #FF4500">Equipement en matériel informatique des espaces</h2>
			<p class="western spaceClass" align="justify">Pour ce qui est des ordinateurs et des outils d'impression, la M2L ne dispose que de ses propres équipements, dans les bureaux d'administration du CROSL et dans la salle multimédia. Les bureaux des ligues sont équipés par les ligues elles-mêmes (hors mobilier de base). Des ressources d'impression mutualisées payantes sont néanmoins disponibles à l'administration de la M2L.</p>
			<h4 class="western spaceClass"><a name="__RefHeading___Toc294250839"></a>Connectique fournie selon les espaces</h4>
			<p class="western spaceClass" align="justify">Chaque bureau de ligue du bâtiment A dispose de deux prises Ethernet de catégorie <em>5</em> et d'une prise téléphonique. Dans le nouveau bâtiment C, ce sont trois prises Ethernet de catégorie <em>6</em> qui sont disponibles dans chaque bureau pour connecter du matériel informatique ou un appareil de téléphonie IP.</p>
			<p class="western spaceClass" align="justify">Chaque salle de réunion dispose d'une prise Ethernet pour la connexion d'un PC portable au réseau (de catégorie <em>5</em> dans le bâtiment B et <em>6</em> dans le bâtiment D). Elle dispose en outre d'un système fixe de vidéo projection, mais pas d'ordinateur à demeure.</p>
			<p class="western spaceClass" align="justify">La salle de formation multimédia dispose de 26 prises Ethernet de catégorie <em>5</em>, une pour chacun des 25 PC (24 PC "stagiaires" et un PC "formateur"), et la dernière pour une imprimante réseau.</p>
			<p class="western spaceClass" align="justify">L'amphithéâtre dispose de 4 prises Ethernet de catégorie <em>5</em> sur le pupitre. Il dispose également d'un système de vidéo projection sur grand écran. Une prise Ethernet est disponible également dans la régie.</p>
			<p class="western" align="justify">Les bureaux d'administration de la M2L disposent en tout de 27 prises de catégorie <em>6</em>, pour les neuf bureaux. La salle de reprographie est dotée de 4 prises Ethernet de catégorie <em>6</em> pour les systèmes d'impression numériques connectés.</p>
			<h4 class="western spaceClass">Implantation des écrans du réseau d'affichage et des bornes Wifi</h4>
			<p class="western spaceClass" align="justify">Un système de diffusion d'informations est installé sur 3 écrans 42" dans les espaces de circulation. Ils servent essentiellement à l'information des visiteurs sur les lieux de réunion. Les écrans d'information sont renseignés depuis l'administration de la M2L.</p>
			<p class="western spaceClass" align="justify">Un réseau Wifi gratuit est disponible pour les visiteurs dans les espaces de réunion du rez-de-chaussée, mais également dans les étages des bureaux des ligues (les bornes y sont positionnées en quinconce d'un étage à l'autre).</p>
			<p class="western spaceClass" align="justify"><em>Schéma d'implantation des bornes Wifi et du réseau d'affichage</em></p>
			<p class="western" align="center"><img src="images/wifi.png"></p>
			<h4 class="western spaceClass"><a name="__RefHeading___Toc294250841"></a>Implantation des baies de brassage</h4>
			<p class="western spaceClass" align="justify">Il y a eu un laps de temps important entre la construction des bâtiments A et B (construits au début des années 90) et C et D (tout dernièrement construits, en 2010).</p>
			<p class="western spaceClass" align="justify">Pour le bâtiment A, on trouve une armoire de brassage secondaire pour chacun des 4 niveaux d'implantation des bureaux de ligues. Chacune de ces armoires regroupe 22 prises Ethernet : 20 vers les bureaux, une vers la borne Wifi et une vers la salle de réunion. On trouve un commutateur 26 ports dans chacune de ces armoires (24 ports 10/100 et deux ports Giga combo RJ-45 / SFP). Ces armoires de brassage sont connectées à une armoire centralisatrice au rez-de-chaussée, dans un petit local climatisé du bâtiment B.</p>
			<p class="western spaceClass" align="justify">Pour le nouveau bâtiment C, on a positionné une seule armoire de brassage au niveau quasi central du second étage du bâtiment. Cette armoire réunit 128 prises, 32 par étage (3 par bureau, une prise pour la salle de réunion et une pour la borne wifi). On y trouve 4 commutateurs 48 ports, dont tous les ports sont utilisables en gigabits/s. Cette armoire est connectée en fibre optique à l'armoire centralisatrice du bâtiment B.</p>
			<p class="western spaceClass" align="justify">Les salles du RDC des nouveaux bâtiments C et D (salles à réservations, bureaux d'administration de la M2L, la salle de reprographie) ainsi que les bornes Wifi et les 3 écrans d'information sont tous connectés à l'armoire de brassage principale du bâtiment B dans laquelle on trouve 2 commutateurs à 24 ports et un routeur. C'est également le lieu d'implantation de l'armoire à serveurs.</p>
			<br />
			<h3 class="western"><strong>Réseaux informatiques</strong></h3>
			<p class="western" align="justify">La M2L dispose actuellement:</p>
			<ul>
				<li>d'un réseau commun aux ligues et à l'administration,</li>
			</ul>
			<ul>
				<li>d'un réseau de type DMZ dans lequel on trouve un ensemble de serveurs accessibles depuis l'extérieur,</li>
			</ul>
			<ul>
				<li>d'une connexion à internet.</li>
			</ul>
			<br />
			<p class="western spaceClass" align="justify">Note : une segmentation des réseaux est en projet pour augmenter la sécurité.</p>
			<p class="western spaceClass" align="justify"><strong><em>Réseaux IP</em></strong></p>
			<p class="western spaceClass"><img src="images/internet.png"/></p>
			<br />
			<h3 class="western"><strong>Les serveurs M2L</strong></h3>
			<p class="western">L'administration de la M2L dispose de plusieurs serveurs :</p>
			<ul>
				<li>un serveur d'annuaire et de fichiers qui abrite également des bases de données de gestion et qui fait office de serveur DHCP,</li>
			</ul>
			<ul>
				<li>un serveur d'impression relié aux différents moyens d'impression des bureaux et de la salle de reprographie qui fait également office de serveur antiviral,</li>
			</ul>
			<ul>
				<li>un serveur NAS permettant la sauvegarde des données de l'administration et de celles des ligues.</li>
			</ul>
			<br />
			<p class="western">Dans la DMZ, on trouve :</p>
			<ul>
				<li>un serveur web,</li>
			</ul>
			<ul>
				<li>un serveur de messagerie pour le domaine lorraine-sport.net. Les ligues ont des adresses du type <u><a class="western" href="mailto:escrime@lorraine-sport.net">escrime@lorraine-sport.net</a>,</u></li>
			</ul>
			<ul>
				<li>un serveur de gestion des configurations.</li>
			</ul>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>