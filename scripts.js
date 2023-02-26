
const visibleTopNumber = 25;
	
const names = [
	2245989, // Abnormal
	1874276, // Adam
	461288, // Akos
	5864968, // ancsang
	4599805, // Andrew  (old:4176394)
	449081, // AoM
	4501039, // Apor
	757000, // Asialle
	5367305, // Aza
	1765276, // Beledey
    2482709, // Biggest.noob.ever
	892398, // Blabla
	2471104, // Bone
	809127, // Dakota aka Choco
	260231, // Dave_hun
	2052962, // Dietrich (Xerxes haverja)
	5193410, // Fish  (old:370591)
	2649622, // Fox_Mulder
	896897, // Genghis Tron
	1685279, // Goofy
	4944103, // Gyore
	3138358, // hangyapete
	7704772, // huninter
	209130, // Imperator
	1651354, // John  (másik: 3222807)
	2430108, // kacsablabla
	2817960, // kekeke
	5161489, // KOiponty
	396849, // Koole
	1594220, // kunyi
	173362, // Lida
	2376066, // Lui
	1071964, // MadeinIron
	274487, // Marty McFly 
	541010, // Maxxtro
	5394359, // MilAn0207
	643225, // MiMMo_
	278812, // Misplaymaker
	7381689, // MoonCake (másik: 225914)
	809985, // NNarol
	415366, // nub
	213422, // overkill
	621184, // Phoric
	770811, // Picture.txt
	434331, // Redwing
	938794, // Rideg
	2664496, // Rolo
	220114, // rosso
	225967, // Rudolfking
	5538699, // Ryper
	773106, // Salytmacska
	350111, // Satrapa
	6423907, // Schlek
	519728, // Scipi
	809309, // Sir Benedict
	1005331, // senki alfonz
	596219, // ShahShah
	1618662, // sheldon
	261055, // squeak
	2007694, // Szabman
	255231, // szeb
	3256849, // Tivadar01
	230159, // Tommy
	2379458, // trombone
	242320, // Vasalarc
	375935, // Xerxes
	3473543, // zotya02
	1071964, // MadeinIron
	
	
	
];

const rankedLists = [{ 
		url: 'https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=3&start=1&count=10000',
		target: '#1v1LeaderboardTable > tbody:last-child',
	},
	{ 
		url: 'https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=4&start=1&count=10000',
		target: '#teamLeaderboardTable > tbody:last-child',
	},
];

function fillLeaderBoard() {
   for (j = 0; j < rankedLists.length; j++) {
	   $.ajax({
				type: "GET",
			    crossDomain: true,
			    dataType: 'jsonp',
				url: rankedLists[j].url,
				success: function(response)
				{
					if (!response || !response.leaderboard || !response.leaderboard.length) {
						$("#errorLabel").text("Érvénytelen ranglista válasz.");
						return;
					}
					var hunList = $.grep(response.leaderboard, function( a ) {
					  return $.inArray(a.profile_id, names) > -1;
					});
					
					var table;
					if (response.leaderboard_id === 3) {
						table = $(rankedLists[0].target);
					}
					if (response.leaderboard_id === 4) {
						table = $(rankedLists[1].target);
					}
				    for (i = 0; i < hunList.length && i < visibleTopNumber; i++) {
					   table.append('<tr><td>' + (i+1) + '.</td><td>'+ hunList[i].name +'</td><td>'+ hunList[i].rating +'</td></tr>');
					}
			   },
			  error: function() {
			   $("#errorLabel").text("Sikertelen ranglista letöltés.");
			  }
		   });
   }
}

function fillPlayerRatings() {
	var ratingDivs = document.getElementsByClassName("de-rating");
	// console.log('ratingDivs: ' + ratingDivs.length);
	$.each(ratingDivs, function(i, value) {		
		callForDiv(value, 3, ' '); //idézõjelek közé 1v1 
	//	callForDiv(value, 4, 'TG ');
	});
}

function callForDiv(ratingDiv, leaderBoardId, type) {
	$.ajax({
		type: "GET",
		crossDomain: true,
		dataType: 'jsonp',
		url: "https://aoe2.net/api/player/ratinghistory?game=aoe2de&count=1",
		data: { profile_id: ratingDiv.id, leaderboard_id: leaderBoardId },
		success: function(response) {
			successRatingCallback(JSON.parse(response), ratingDiv, type);
	   }
	});
}

function successRatingCallback(response, divToUpdate, type) {
	if (!response || !response.length) {
		return;
	}
	// console.log('div: ' + divToUpdate + ' | rating: '  + response[0].rating + ' | type: ' + type);
	if (divToUpdate) {
		divToUpdate.innerHTML += '' + type + response[0].rating + ' ';
	}
}

function fillEvents() {
	var settings = {};
	var element = document.getElementById('caleandar');
	caleandar(element, events, settings);
};

function setupMap() {
	var map = L.map('map').setView([47.20, 21.05], 7);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.marker([46.95548, 18.19015]).addTo(map)
		.bindPopup('<b>Alsótekeres</b><br>NortoN')
	
	L.marker([48.15135, 21.17171]).addTo(map)
		.bindPopup('<b>Bekecs</b><br>CsabiST')
	
	L.marker([47.49851, 19.04128]).addTo(map)
		.bindPopup('<b>Budapest</b><br>Adaam, Bandi_, Beszosz, Blabla, Bleti, dave_hun, durin24,  FishWithoutMercy, Fox_Mulder, GamesJr, GyoreE, HiTekk,  Kopaszdemokrata, _Lui_,  ProstAcer, Rideg, Ryper, Sir Benedict, Tomivagyok, Vasalarc, wawrick')
	
	L.marker([47.25775, 17.15286]).addTo(map)
		.bindPopup('<b>Celldömölk</b><br>Mougrimm, pokom')
	
	L.marker([47.37697, 18.92029]).addTo(map)
		.bindPopup('<b>Érd</b><br>Wolody')
		
	L.marker([46.03331, 19.04099]).addTo(map)
		.bindPopup('<b>Gara</b><br>skutaigergo')	
	
	L.marker([47.59914, 19.34833]).addTo(map)
		.bindPopup('<b>Gödöllõ</b><br>Scipi')
		
	L.marker([47.07378, 15.43838]).addTo(map)
		.bindPopup('<b>Grác</b><br>Zrínyi Miklós')
	
	L.marker([47.68871, 17.63481]).addTo(map)
		.bindPopup('<b>Gyõr</b><br>Rolo, Sadisthun')
		
	L.marker([46.39971, 19.11345]).addTo(map)
		.bindPopup('<b>Hajós</b><br>oO aRoN Oo')
		
	L.marker([46.52294, 18.98296]).addTo(map)
		.bindPopup('<b>Kalocsa</b><br>Apahun')
			
	L.marker([46.35651, 17.78950]).addTo(map)
		.bindPopup('<b>Kaposvár</b><br>AoM92, Kavics')	
			
		
	L.marker([46.08389, 26.11788]).addTo(map)
		.bindPopup('<b>Kézdiszárazpatak</b><br>Dacx')
		
	L.marker([46.00079, 26.13749]).addTo(map)
		.bindPopup('<b>Kézdivásárhely</b><br>Apor')
	
	L.marker([46.43067, 19.47906]).addTo(map)
		.bindPopup('<b>Kiskunhalas</b><br>_TheTivadar_')	
		
	L.marker([55.6861, 12.5743]).addTo(map)
		.bindPopup('<b>Koppenhága</b><br>Ankou')	
	
	L.marker([47.00880, 16.60558]).addTo(map)
		.bindPopup('<b>Körmend</b><br>kunyi')
	
	L.marker([51.50734, -0.12765]).addTo(map)
		.bindPopup('<b>London</b><br>wawa90')
	
	L.marker([47.80953, 20.57078]).addTo(map)
		.bindPopup('<b>Mezõkövesd</b><br>Szabman10')
	
	L.marker([48.10455, 20.78518]).addTo(map)
		.bindPopup('<b>Miskolc</b><br>Asialle, Azäzël, KOiponty')
		
	L.marker([48.13724, 11.57609]).addTo(map)
		.bindPopup('<b>München</b><br>overkill, Rudolfking')
		
	L.marker([47.65984, 23.58199]).addTo(map)
		.bindPopup('<b>Nagybánya</b><br>MilAn0207')
		
	L.marker([47.85594, 17.77027]).addTo(map)
		.bindPopup('<b>Nagymegyer</b><br>squeak')
		
	L.marker([46.80071, 16.91304]).addTo(map)
		.bindPopup('<b>Nemeshetés</b><br>Techno')

	L.marker([46.62314, 18.85675]).addTo(map)
		.bindPopup('<b>Paks</b><br>Biggest.noob.ever')
	
	L.marker([46.07649, 18.22857]).addTo(map)
		.bindPopup('<b>Pécs</b><br>imre0930, Phoric')
		
	L.marker([48.14371, 17.10948]).addTo(map)
		.bindPopup('<b>Pozsony</b><br>genghis_tr0n')
	
	L.marker([47.68496, 16.59121]).addTo(map)
		.bindPopup('<b>Sopron</b><br>Baxa, Colonel')
		
	L.marker([46.34165, 20.04157]).addTo(map)
		.bindPopup('<b>Szatymaz</b><br>peppsi96')
		
	L.marker([46.25315, 20.15241]).addTo(map)
		.bindPopup('<b>Szeged</b><br>rosso, Xerxes')
		
	L.marker([47.19132, 18.41003]).addTo(map)
		.bindPopup('<b>Székesfehérvár</b><br>Beledey')
		
	L.marker([46.93225, 20.09587]).addTo(map)
		.bindPopup('<b>Tiszakécske</b><br>Bence')	
		
	L.marker([47.93168, 21.03662]).addTo(map)
		.bindPopup('<b>Tiszaújváros</b><br>bodopi')	
		
	L.marker([47.09330, 17.91163]).addTo(map)
		.bindPopup('<b>Veszprém</b><br>zotya02')	

}