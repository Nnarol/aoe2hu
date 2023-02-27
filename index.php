<?php include("header.php"); ?>

<script>
	$(document).ready(function() { 
		fillLeaderBoard();
		fillEvents();
	});	
</script>

<!-- TARTALOM -->
<div class="mainpage">
	<div class="column">
		<!-- 1. oszlop kezdete -->
		<div class="basic-container">
			<h3>AKTUÁLIS</h3>
			<div class="innerText">
				Winter Cup 2022<br>
				<a href="https://docs.google.com/document/d/113ESjbwFZU6wof4_8tyH3W6D9SZ37KP4Uz4CU0ogPcY/edit" target="_blank">Szabályzat</a><br>
				<a href="https://docs.google.com/spreadsheets/d/1Ly-gOwmJr94Qgtey0MCTuNKNR2SOGWz-BghZi5e4KhM/edit#gid=2005349360" target="_blank">INFÓK</a><br>
				<a href="https://www.youtube.com/watch?v=lP8TlCnDt5I&ab_channel=RolandK%28Scipi%29" target="_blank">Bemutató videó</a><br>
				
				
				<hr align="center" width="70%"><br> 
																
			</div>
		</div>
		
		<div class="basic-container">
			<h3>MENÜ</h3>
			<div class="innerText">
				<a href="tartalom/klanok/"><b>Klánok</b></a> <br>
				<a href="tartalom/tortenelem/"><b>Történelem</b></a> <br>
				<a href="tartalom/bestplayers/"><b>Legjobb játékosok</b></a> <br>
				<a href="tartalom/bajnoksagok/"><b>Bajnokságok</b></a> <br>
				<a href="map.php"><b>Térkép</b></a> <br>
				<a href="tartalom/hunleaguerankings/"><b>HunLeague Rankings</b></a> <br>
				<a href="tartalom/talik/"><b>Találkozók</b></a> <br>
				<a href="tartalom/bajnoksagok/">Hall of Fame</a> <br>
				<a href="tartalom/akiktettek/">Akik sokat tettek</a> <br>
				<a href="tartalom/zone.html" onclick="basicPopup(this.href);return false">Zone ratings mentés</a> <br>
				<div class="innerHeader">INTERJÚK</div>
				<a href="tartalom/interjuk/caveman.php">[MeM] CaveMaN</a> <br>
				<a href="tartalom/interjuk/andrew.php">Andrew_LK</a> <br>
				<a href="https://steamcommunity.com/app/221380/discussions/0/864980734647435878/" target="_blank">BoSB_Richard</a> (angolul) <br>
				<a href="tartalom/interjuk/horvy.php">Horvy_SG</a> <br>
				<a href="tartalom/interjuk/benzin.php">Leto_Benzin_</a> <br>
				<a href="tartalom/interjuk/kunyi.php">Leto_kunyika</a> <br>
				<a href="tartalom/interjuk/latko.php">Leto_Latko</a> <br>
				<a href="tartalom/interjuk/techno.php">Leto_Techno</a> <br>
				<a href="tartalom/interjuk/luffis.php">Snow_luffis</a> <br>
				<a href="tartalom/interjuk/ordog.php">WiSp_orDOG</a> <br>
				<a href="tartalom/interjuk/soldi3r.php">WiSp_Soldi3r</a> <br>
			</div>
		</div>	
		
		<div class="basic-container">
			<h3>ÚTMUTATÓK&CIKKEK </h3>
			<div class="innerText">
				<img src="image/icon_text.png" width="12" height="15"/> - Szöveg; <img src="image/icon_video.png" width="18" height="15" /> - Videó <br>
				<a href="tartalom/cikkek/kezdoknek.php">Kezdõknek</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="info.php">Játékok infó</a> - Multiplayer lehetõségekkel <br>
				<a href="https://www.youtube.com/watch?v=loZMFwaO6bQ" onclick="basicPopup(this.href);return false">Játékok telepítése</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=eiuwUDy3Dq8" onclick="basicPopup(this.href);return false">WK telepítése</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=skyXXmRgPvQ" onclick="basicPopup(this.href);return false">DE Ismertetõ by Lui</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="tartalom/cikkek/fc.php">Fast Castle</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/arena.php">Arena</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/bf.php">Black Forest</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/egysegek.php">Egységek fejlesztése</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/domborzat.php">Domborzati hatások</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/nemminden.php">Nem minden az, aminek látszik!</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/epites.php">Építési idõk, építés több falusival</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/falazas.php">Gazdaságos falazás</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/tc.php">Hogyan lõ a TC?</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/micro.php">Micro- és macromenedzsment</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/eco.php">Mikroökonómia</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/petardas.php">Petárdás</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/patrol.php">Patrol</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="tartalom/cikkek/darkage.php">Dark age termelési technikák</a> <img src="image/icon_text.png" width="12" height="15"/> <br>
				<a href="https://www.youtube.com/watch?v=Uit3ucdv39E" onclick="basicPopup(this.href);return false">Scout+Archer Rush - Arabia</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=J_xz2pJHK1Q" onclick="basicPopup(this.href);return false">Csak Archer Rush - Arabia</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=8zPpcIf1gpQ" onclick="basicPopup(this.href);return false">Full Scout, majd Knight Rush - Arabia</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=uG8Ca5fKjHI" onclick="basicPopup(this.href);return false">Man-At-Arms+Archer Rush - Arabia</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=-ts6NfZNZxk" onclick="basicPopup(this.href);return false">Boomolás - Black Forest</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=f8wIQTkQzx8" onclick="basicPopup(this.href);return false">Monk+Siege Rush - Arena</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=59hvlTgmlms" onclick="basicPopup(this.href);return false">Tower Rush - Arabia</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=MRE0XtTzhKI" onclick="basicPopup(this.href);return false">Man-At-Arms, Archer, EW Rush - Arabia</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=kJY1YJUBwms" onclick="basicPopup(this.href);return false">Fast Imperial - Arena</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=dwrVEe1Dows" onclick="basicPopup(this.href);return false">Nomad Build Order</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.youtube.com/watch?v=7jJH9zIXnUE" onclick="basicPopup(this.href);return false">Drush+Fast Castle</a> <img src="image/icon_video.png" width="18" height="15" /> <img src="image/flag/hu.png" /> <br>
				
			</div>
		</div>
		
		<div class="basic-container">
		<h3>LINKEK</h3>
		<div class="innerText">
			<a href="https://www.ageofempires.com/" target="_blank">Hivatalos oldal</a> <br>
			<a href="https://www.aoezone.net/" target="_blank">AoEZone</a> - Nemzetközi AoE közösség <br>
			<a href="https://steamcommunity.com/app/813780" target="_blank">Steam közösségközpont</a> <br>
			<a href="https://www.voobly.com/" target="_blank">Voobly</a> <br>
			<div class="innerHeader">Hasznos kiegészítõk a játékhoz </div> 
			<a href="https://aoe2.net/" target="_blank">AoE2.net</a> - Ranglisták, meccsek<br>
			<a href="https://www.aoe2insights.com/" target="_blank">AoE2Insights</a> - Ranglisták, meccsek (részletesebb)<br>
			<a href="https://aoenexus.com/country/#HU-4" target="_blank">AoENexus</a> - Ranglisták országokra bontva<br>
			<a href="https://liquipedia.net/ageofempires/Main_Page" target="_blank">AoE2 Liquipedia</a> - Bajnokság enciklopédia<br>
			<a href="https://aocrecs.com/" target="_blank">AoCRecs</a> <br>
			<a href="https://aoestats.io/" target="_Blank">AoEStats</a> <br>
			<a href="http://aoe2-de-tools.herokuapp.com/" target="_blank">DE Tools</a> <br>
			<a href="https://aoe2cm.net/" target="_blank">AoE2 Captains mode</a>, <a href="tartalom/cikkek/cm.php">Útmutató a használatához</a> <br>
			<a href="https://www.cysion.be/aocbox/" target="_blank">AoCBox</a> - Leírások angolul <br>
			<div class="innerHeader">Archív oldalak </div>
			<a href="archive.php">Hírek archívum</a> - 2018-2020 <br>
			<a href="http://users.atw.hu/ageofempires/aoe2/forum/viewforum.php?f=6&sid=9ef43cf45cd16fdd8d334b3b89612f5b" target="_blank">Régi fórum archívum</a> - 2011-2014 <br>
			<a href="http://users.atw.hu/ageofempires/aoe2/forum_old/" target="_blank">Régi fórum archívum</a> - 2008-2011 <br>
			<a href="https://web.archive.org/web/20011202171753/http://aok.supergamez.hu/" target="_blank">Aok.supergamez.hu</a> - Régi aok oldal 2000-2001 <br>
			<div class="innerHeader">Fórumok</div>
			Gamepod(PH!) - <a href="https://gamepod.hu/tema/age_of_empires_ii_definitive_edition/friss.html" target="_blank"><b>DE</b> (2019)</a> - <a href="https://gamepod.hu/tema/age_of_empires_ii_hd_edition/friss.html" target="_blank"><b>HD</b> (2013)</a> - <a href="https://gamepod.hu/tema/age_of_empires_2_conquerors/friss.html" target="_blank"><b>Orig</b> (1999)</a> <br>
			Gepigeny - <a href="https://gepigeny.hu/jatek/age-of-empires-ii-definitive-edition" target="_blank"><b>DE</b> (2019)</a> - <a href="https://gepigeny.hu/jatek/age-of-empires-ii-hd" target="_blank"><b>HD</b> (2013)</a> - <a href="https://gepigeny.hu/jatek/age-of-empires-ii-the-conquerors-expansion" target="_blank"><b>Orig</b> (1999)</a> <br>
			Playdome -  <a href="https://www.playdome.hu/forum.php?action=ll&t=470&start=0" target="_blank"><b>Orig</b> (1999)</a> <br>
			<a href="https://www.rewired.hu/content/age-empires?page=2#comment-227953" target="_blank">Rewired</a> <br>
			SG - <a href="https://sg.hu/forum/tema/993574958" target="_blank"><b>Orig</b> (1999)</a> <br>
		</div>
	</div>
		
		<div class="basic-container">
		<h3>TWITCH</h3>
			<div class="innerText">
				<div class="innerHeader">Magyar Twitcherek</div>
				<a href="https://www.twitch.tv/apahuntv" target="_blank">Apahun</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/apor1" target="_blank">Apor</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/dave_hun" target="_blank">Dave_hun</a> <br>
				<a href="https://www.twitch.tv/thefoxmulderaoe" target="_blank">Fox_Mulder</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/hamblo_" target="_blank">Hamblo</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/john26" target="_blank">John</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/hun_ban" target="_blank">KOiponty</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/mooncakeaoe" target="_blank">MoonCake</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/phorictwitch" target="_blank">Phoric</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/rosso__" target="_blank">rosso</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/squeakaoe" target="_blank">squeak</a> <img src="image/flag/hu.png" /> <br>
				<a href="https://www.twitch.tv/tivadar0" target="_blank">Tivadar01</a> <img src="image/flag/hu.png" /> <br>
					
			</div>
		</div>
	
	<!-- 1. oszlop vége -->
	</div>
	<div class="column">
	<!-- 2. oszlop kezdete -->	
	
		<div class="basic-container">
			<h3>LÉPJ VELÜNK KAPCSOLATBA</h3>
			<table class="concactTable">
				<tr>
					<td><strong><a href="https://www.facebook.com/groups/aockozosseg/" target="_blank"><img src="image/facebook.jpg"></a></strong></td>
					<td><strong><a href="http://discord.gg/zUj9pcf" target="_blank"><img src="image/discord.jpg"></a></strong></td>
					<td><strong><a href="https://s.team/chat/O2KxPwhm" target="_blank"><img src="image/steam.jpg"></a></strong></td>
				</tr>
				<tr>
					<td><strong><a href="https://www.facebook.com/groups/aockozosseg/" target="_blank">FB csoport</a></strong></td>
					<td><strong><a href="http://discord.gg/zUj9pcf" target="_blank">Discord</a></strong></td>
					<td><strong><a href="https://s.team/chat/O2KxPwhm" target="_blank">Steam chat</a></strong></td>
				</tr>
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="3" align="center"><strong>ageofempires2hu@gmail.com<br><small><font color="Red"><i>Nem segélykérõ!</i></font><br>(Érdeklõdés a honlappal kapcsolatban, cikkbeküldés)</small></strong></td>
				</tr>	
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
			</table>
		</div>
	
	
	
	<div class="basic-container">
			<h3>DISCORD</h3>
			<p align="center">
			<iframe src="https://discord.com/widget?id=282983398597722113&theme=dark" width="350" height="1500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
			</p>
	</div>
	

	
	<!-- 2. oszlop vége -->
	</div>
	<div class="column">
	<!-- 3. oszlop kezdete -->
	
		<div class="basic-container">
			<h3>RANGLISTA</h3>
		<div class="innerText">
		
			<label id="errorLabel"></label>
			<table id="1v1LeaderboardTable" class="leaderboardTable">
				<caption>DE 1v1 Random Map Top 25</caption>
				<thead>
					<tr>
						<th width="20"></th>
						<th>Name</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
			
			<br><br>
			
			<table id="teamLeaderboardTable" class="leaderboardTable">
				<caption>DE Team Random Map Top 25</caption>
				<thead>
					<tr>
						<th width="20"></th>
						<th>Name</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
			
			<br><br>

			<table class="leaderboardTable">
				<caption>Voobly 1v1 Random Map Top 10</caption>
				<thead>
					<tr>
						<th width="20"></th>
						<th>Name</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="ranglista">1.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/71570/Ratings/games/profile/71570/131" target="_blank">Maxxtro</a></td>
						<td class="ranglista">2027</td>
					</tr>
					<tr>
						<td class="ranglista">2.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/139049/Ratings/games/profile/139049/131" target="_blank">Leto_trombone</a></td>
						<td class="ranglista">2024</td>
					</tr>
					<tr>
						<td class="ranglista">3.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123734344/Ratings/games/profile/123734344/131" target="_blank">squeak</a></td>
						<td class="ranglista">2008</td>
					</tr>
					<tr>
						<td class="ranglista">4.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123536350/Ratings/games/profile/123536350/131" target="_blank">Andrew_LK</a></td>
						<td class="ranglista">2007</td>
					</tr>
					<tr>
						<td class="ranglista">5.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123267127/Ratings/games/profile/123267127/131" target="_blank">Leto_Mallory_</a></td>
						<td class="ranglista">1993</td>
					</tr>
					<tr>
						<td class="ranglista">6.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124535034/Ratings/games/profile/124535034/131" target="_blank">__John__</a></td>
						<td class="ranglista">1976</td>
					</tr>
					<tr>
						<td class="ranglista">7.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124043529/Ratings/games/profile/124043529/131" target="_blank">Leto_Arathyen</a></td>
						<td class="ranglista">1906</td>
					</tr>
					<tr>
						<td class="ranglista">8.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124048563/Ratings/games/profile/124048563/131" target="_blank">Bobler</a></td>
						<td class="ranglista">1874</td>
					</tr>
					<tr>
						<td class="ranglista">9.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123796515/Ratings/games/profile/123796515/131" target="_blank">Leto_Apor</a></td>
						<td class="ranglista">1872</td>
					</tr>
					<tr>
						<td class="ranglista">10.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124845888/Ratings/games/profile/124845888/131" target="_blank">Xerxes_HUN</a></td>
						<td class="ranglista">1849</td>
					</tr>
				</tbody>
			</table>
			
			<br><br>
				
			<table class="leaderboardTable">
				<caption>Voobly TG Random Map Top 10</caption>
				<thead>
					<tr>
						<th width="20"></th>
						<th>Name</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="ranglista">1.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124922576/Ratings/games/profile/124922576/132" target="_blank">__John__</a></td>
						<td class="ranglista">2030</td>
					</tr>
					<tr>
						<td class="ranglista">2.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123734344/Ratings/games/profile/123734344/132" target="_blank">squeak</a></td>
						<td class="ranglista">1967</td>
					</tr>
					<tr>
						<td class="ranglista">3.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124522216/Ratings/games/profile/124522216/132" target="_blank">Leto_kunyi_</a></td>
						<td class="ranglista">1960</td>
					</tr>
					<tr>
						<td class="ranglista">4.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/139049/Ratings/games/profile/139049/132" target="_blank">Leto_trombone</a></td>
						<td class="ranglista">1901</td>
					</tr>
					<tr>
						<td class="ranglista">5.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123413179/Ratings/games/profile/123413179/132" target="_blank">adaam</a></td>
						<td class="ranglista">1861</td>
					</tr>
					<tr>
						<td class="ranglista">6.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/178943/Ratings/games/profile/178943/132" target="_blank">Maxxtro</a></td>
						<td class="ranglista">1844</td>
					</tr>
					<tr>
						<td class="ranglista">7.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124636927/Ratings/games/profile/124636927/132" target="_blank">Bobler</a></td>
						<td class="ranglista">1824</td>
					</tr>
					<tr>
						<td class="ranglista">8.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/124916530/Ratings/games/profile/124916530/132" target="_blank">Leto_kekeke</a></td>
						<td class="ranglista">1804</td>
					</tr>
					<tr>
						<td class="ranglista">9.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123680901/Ratings/games/profile/123680901/132" target="_blank">Beszosz</a></td>
						<td class="ranglista">1802</td>
					</tr>
					<tr>
						<td class="ranglista">10.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/123536350/Ratings/games/profile/123536350/132" target="_blank">Andrew_LK</a></td>
						<td class="ranglista">1795</td>
					</tr>
					
				</tbody>
			</table>
			
			<br><br>
				
			<table class="leaderboardTable">
				<caption>IGZ Top 5</caption>
				<thead>
					<tr>
						<th width="20"></th>
						<th>Name</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="ranglista">1.</td>
						<td class="ranglista"><a href="https://www.voobly.com/profile/view/57372" target="_blank">Andrew_LK</a></td>
						<td class="ranglista">2162</td>
					</tr>
					<tr>
						<td class="ranglista">2.</td>
						<td class="ranglista"><a href="https://voobly.com/profile/view/4216" target="_blank">[TWP]Latko</a></td>
						<td class="ranglista">2044</td>
					</tr>
					<tr>
						<td class="ranglista">3.</td>
						<td class="ranglista"><a href="https://voobly.com/profile/view/123331125" target="_blank">Maxxtro</a></td>
						<td class="ranglista">1911</td>
					</tr>
					<tr>
						<td class="ranglista">4.</td>
						<td class="ranglista"><a href="http://www.voobly.com/profile/view/946" target="_blank">kunyi</a></td>
						<td class="ranglista">1850</td>
					</tr>
					<tr>
						<td class="ranglista">5.</td>
						<td class="ranglista"><a href="http://www.voobly.com/profile/view/123269412" target="_blank">abi_</a></td>
						<td class="ranglista">1832</td>
					</tr>
					
				</tbody>
			</table>
			
			<br><br>
			
			<table class="leaderboardTable">
				<caption>GamePark Top 5</caption>
				<thead>
					<tr>
						<th width="20"></th>
						<th>Name</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="ranglista">1.</td>
						<td class="ranglista">Andrew_LK</td>
						<td class="ranglista">2004</td>
					</tr>
					<tr>
						<td class="ranglista">2.</td>
						<td class="ranglista">TWP_Latko_</td>
						<td class="ranglista">1892</td>
					</tr>
					<tr>
						<td class="ranglista">3.</td>
						<td class="ranglista">Maxxtro</td>
						<td class="ranglista">1816</td>
					</tr>
					<tr>
						<td class="ranglista">4.</td>
						<td class="ranglista">WoRA_abi__</td>
						<td class="ranglista">1757</td>
					</tr>
					<tr>
						<td class="ranglista">5.</td>
						<td class="ranglista">Kody</td>
						<td class="ranglista">1747</td>
					</tr>
					
				</tbody>
			</table>
			
			<br><br>
			
			<table class="leaderboardTable">
				<caption>MS Gaming Zone Top 5</caption>
				<thead>
					<tr>
						<th width="20"></th>
						<th>Name</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="ranglista">1.</td>
						<td class="ranglista">Andrew_LK</td>
						<td class="ranglista">2107</td>
					</tr>
					<tr>
						<td class="ranglista">2.</td>
						<td class="ranglista">Zsebkendõ_AS</td>
						<td class="ranglista">2005</td>
					</tr>
					<tr>
						<td class="ranglista">3.</td>
						<td class="ranglista">hugi_0</td>
						<td class="ranglista">1952</td>
					</tr>
					<tr>
						<td class="ranglista">4.</td>
						<td class="ranglista">Leto_kunyika</td>
						<td class="ranglista">1910</td>
					</tr>
					<tr>
						<td class="ranglista">5.</td>
						<td class="ranglista">WiSp_orDOG</td>
						<td class="ranglista">1903</td>
					</tr>
					
				</tbody>
			</table>
</div>
		</div>
	
	

	
	<!-- <center><a href="https://livetrafficfeed.com/online-counter" data-text="ffffff" data-background="e61c1c" data-root="0" id="LTF_online_website">Site Online Counter</a>
	<script type="text/javascript" src="//cdn.livetrafficfeed.com/static/online/live.v2.js"></script><noscript><a href="http://visofts.com/page-authority-domain-authority-checker/">Page Authority Checker</a>
	</noscript></center> -->

	<!-- 3. oszlop vége -->
	</div>
</div>
<!-- TARTALOM VÉGE -->

<?php include("footer.php"); ?>

<!-- régi menü ha kéne:
<td valign="top" width="33%">
		<table width="100%" cellspacing="1" cellpadding="0" bgcolor="#000000" align="left">
			<tr>
				<td class="header"><strong>&nbsp;::&nbsp;Navigation&nbsp;..<strong></strong></strong></td>
			</tr>
			<tr>
				<td class="menu"><strong>&nbsp;&nbsp;<a href="#">Link 1</a></strong></td>
			</tr>
			
			<tr>
				<td class="header"><b>&nbsp;News and Updates</b></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td class="header"><strong>&nbsp;::&nbsp;Whatever&nbsp;..</strong></td>
			</tr>
			<tr>
				<td><br>Blah<br><br>Blah<br><br>Blah<br><br>Blah<br><br>Blah<br><br>Blah<br><br>Blah<br></td>
			</tr>
		</table>
		</td>
		-->



</body>
</html>
