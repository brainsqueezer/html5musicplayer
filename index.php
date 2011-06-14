<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>music</title>


<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jkl-js2as.js"></script>
<script type="text/javascript" src="js/html5-audio.js"></script>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/player.js"></script>
</head>
<body>



<form>

<input type="text" id="pista" value="" size="40" />
<input type="text" id="contador" value="" size="10" />

<input type="button" value="play" onclick="play();" />
<input type="button" value="stop" onclick="stop();" />

</form>



<h2>Archivos:</h2>
<ul id="filelist">
</ul>


<p><a href="javascript:folder_download();">Download</a></p>
<h2>Carpetas:</h2>

<ul id="folderlist">

<li><a href="javascript:file_list('A/Amy Winehouse.Frank (224Kbps Mp3)');">Amy Winehouse - Frank
(2003)</a></li>
<li><a href="javascript:file_list('A/Amy_Winehouse_-_Back_To_Black_Deluxe_Edition_2007');">Amy Winehouse - Back to Black [Deluxe Edition] (2007)</a></li>
<li><a href="javascript:file_list('A/Ayo_-_Joyful_2006/');">Ayo - Joyful (2006)</a></li> 
<li><a href="javascript:file_list('A/Ayo_-_Live_at_the_Olympia_2007/');">Ayo - Live at the Olympia (2007)</a></li> 
<li><a href="javascript:file_list('A/Ayo.-.Gravity.At.Last.2008');">Ayo - Gravity At Last (2008)</a></li>
<li><a href="javascript:file_list('B/bebo_y_cigala_-_lagrimas_negras_2003');">Bebo y Cigala - Lágrimas Negras (2003)</a></li>

<li><a href="javascript:file_list('B/Bebo Valdes y Dieguito el Cigala (Blanco y Negro)');">Bebo y Cigala - Blanco y Negro (Lágrimas Negras)</a></li>

<li><a href="javascript:file_list('D/Bebo Valdes y Diego el Cigala - Lagrimas Negras en Directo Jazzaldia 2003');">Bebo Valdés y Diego el Cigala - Lagrimas Negras en Directo Jazzaldia 2003</a></li>

<li><a href="javascript:file_list('B/BEBO DE CUBA 192 kbps by a_guarachar [www.soneros.tk]/SUITE CUBANA');">Bebo Valdés - Bebo de Cuba: Suite Cubana (2004)</a></li>
<li><a href="javascript:file_list('B/BEBO DE CUBA 192 kbps by a_guarachar [www.soneros.tk]/EL SOLAR DE BEBO');">Bebo Valdés - Bebo de Cuba: El solar de Bebo (2004)</a></li>
<li><a href="javascript:file_list('B/Bebo & Chucho Valdes - Afro-Cuban Jazz');">Bebo &amp; Chucho Valdés - Afro-Cuban Jazz</a></li>

<li><a href="javascript:file_list('B/bob%20dylan/22%20-%20Desire%20(1976)');">Bob Dylan - Desire (1976)</a></li>
<li><a href="javascript:file_list('C/Calle_54');">B.S.O. Calle 54</a></li>

<li><a href="javascript:file_list('C/Caetano_Veloso_-_A_Bossa_de_Caetano');">Caetano Veloso - A Bossa de Caetano</a></li>
<li><a href="javascript:file_list('C/Caetano_Veloso_-_O_Melhor_de_Caetano_Veloso');">Caetano Veloso - O Melhor de Caetano Veloso</a></li>
<li><a href="javascript:file_list('C/Caetano_Veloso_-_Lo_Mejor_de_Caetano_Veloso');">Caetano Veloso - Lo Mejor de Caetano Veloso</a></li>

<li><a href="javascript:file_list('C/Celia_Cruz_and_Friends_-_A_Night_Of_Salsa');">Celia Cruz and Friends - A Night Of Salsa</a></li>

<li><a href="javascript:file_list('C/Concha_Buika_-_Buika_2005');">Concha Buika - Buika (2005)</a></li>
<li><a href="javascript:file_list('C/Concha_Buika_-_Los_Conciertos_de_Radio3_2005');">Concha Buika -  Los conciertos de Radio 3 (2005)</a></li>
<li><a href="javascript:file_list('C/Concha_Buika_-_Mi_nina_Lola_2006');">Concha Buika - Mi niña Lola (2006)</a></li>
<li><a href="javascript:file_list('C/Concha_Buika_y_Chucho_Valdes_-_El_ultimo_trago_2009');">Concha Buika y Chucho Valdés - El
último trago (2009)</a></li>
<li><a href="javascript:file_list('C/Corinne_Bailey_Rae_2006');">Corinne Bailey Rae (2006)</a></li>

<li><a href="javascript:file_list('C/Corinne_Bailey_Rae_-_Special_Edition_2007');">Corinne Bailey Rae Special Edition (2007)</a></li>

<li><a href="javascript:file_list('C/Corinne_Bailey_Rae_-_The_Sea_2010');">Corinne Bailey Rae - The Sea (2010)</a></li>




<li><a href="javascript:file_list('D/Dieguito el Cigala - Undebel 1999');">Dieguito el Cigala - Undebel (1999)</a> 1998? ok</li>
<li><a href="javascript:file_list('D/Dieguito_el_Cigala_-_Entre_vareta_y_canasta_2000');">Dieguito el Cigala - Entre vareta y canasta (2000)</a> ok</li>
<li><a href="javascript:file_list('D/Dieguito el Cigala - Corren tiempos de alegria 20001');">Dieguito el Cigala - Corren tiempos de alegria (2001)</a> ok</li>
<li><a href="javascript:file_list('D/Dieguito el Cigala con el Ninho Josele - Directo 2002');">Dieguito el Cigala - Directo en el Teatro Real (con el Niño Josele) (2002)</a> ok</li>
<li><a href="javascript:file_list('D/Diego El Cigala -Picasso en mis ojos by Josele/Diego El Cigala -Picasso en mis ojos');">Dieguito el Cigala - Picasso en mis ojos (2005)</a> ok</li>
<li><a href="javascript:file_list('D/Dieguito.el.Cigala.-.Dos.Lagrimas.2008');">Dieguito el Cigala - Dos Lagrimas (2008)</a> ok</li>
<li><a href="javascript:file_list('D/Dieguito el Cigala con Montse Cortes - Concierto en Almeria (Directo)');">Dieguito el Cigala con Montse Cortes - Concierto en Almeria (Directo)</a></li>

<li><a href="javascript:file_list('D/Diego el Cigala y el Niño de la Tolea (Directo)');">Dieguito el Cigala y el Niño de la Tolea (Directo)</a></li>
<li><a href="javascript:file_list('D/Dieguito_el_Cigala_-_EXTRAS');">Dieguito el Cigala - Extras</a></li>


<li>Dieguito el Cigala - Una rosa en Triana (2010)</li>

<li><a href="javascript:file_list('D/DLG/DLG - Dark Latin Groove');">DLG - Dark Latin Groove (1996)</a></li>
<li><a href="javascript:file_list('D/DLG/DLG - Swing on');">DLG - Swing on (1997)</a></li>
<li><a href="javascript:file_list('D/DLG/DLG - Gotcha');">DLG - Gotcha! (1999)</a></li>
<li><a href="javascript:file_list('D/DLG/DLG - Greatest Hits');">DLG - Greatest Hits (2000) (recopilatorio)</a></li>

<li><a href="javascript:file_list('D/DLG/DLG - Renacer');">DLG - Renacer (2008)</a></li>
<li><a href="javascript:file_list('D/DLG/DLG - Best of');">DLG - Best of</a> existe?</li>
<li><a href="javascript:file_list('E/Eliades_Ochoa_-_Estoy_como_nunca');">Eliades Ochoa - Estoy como nunca</a></li>
<li><a href="javascript:file_list('E/Eliades_Ochoa_-_Cuidadito_Compay_Gallo_que_llego_el_perico');">Eliades Ochoa - Cuidadito Compay Gallo que llego el perico</a></li>
<li><a href="javascript:file_list('E/Eliades_Ochoa_-_Se_solto_un_leon');">Eliades Ochoa - Se solto un leon</a></li>
<li><a href="javascript:file_list('E/Eliades_Ochoa_-_Sublime_Illusion');">Eliades Ochoa - Sublime Illusion</a></li>
<li><a href="javascript:file_list('E/Eliades_Ochoa_-_Un_guajiro_sin_fronteras');">Eliades Ochoa - Un guajiro sin fronteras</a></li>
<li><a href="javascript:file_list('E/Eliades_Ochoa_y_Compay_Segundo_-_Cuarteto_Patria');">Eliades Ochoa y Compay Segundo - Cuarteto Patria</a></li>

<li><a href="javascript:file_list('E/Eliane_Elias_-_Illusions_1987');">Eliane Elias - Illusions (1987)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Cross_Currents_1988');">Eliane Elias - Cross Currents (1988)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Plays_Jobim_1990');">Eliane Elias - Plays Jobim (1990)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Paulistana_1993');">Eliane Elias - Paulistana (1993)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Solos_and_Duets_1995');">Eliane Elias - Solos and Duets (1995)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Sings_Jobim_1998');">Eliane Elias - Sings Jobim (1998)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Kissed_By_Nature_2002');">Eliane Elias  - Kissed By Nature (2002)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Brazilian_Classics_2003');">Eliane Elias - Brazilian Classics (2003)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Dreamer_2004');">Eliane Elias - Dreamer (2004)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Around_The_City_2006');">Eliane Elias - Around The City (2006)</a></li>
<li><a href="javascript:file_list('E/Eliane_Elias_-_Something_for_you_2008');">Eliane Elias - Something for you (2008)</a></li>

<li><a href="javascript:file_list('M/Madeleine_Peyroux_-_Dreamland_1996');">Madeleine Peyroux - Dreamland (1996)</a></li>
<li><a href="javascript:file_list('M/Madeleine_Peyroux_and_William_Galison_-_Got_You_on_My_mind_2004');">Madeleine Peyroux & William Galison - Got You on My mind (2004)</a></li>
<li><a href="javascript:file_list('M/Madeleine_Peyroux_-_Careless_Love_2004');">Madeleine Peyroux - Careless Love (2004)</a></li>
<li><a href="javascript:file_list('M/Madeleine_Peyroux_-_Half_the_perfect_world_2006');">Madeleine Peyroux - Half the perfect world (2006)</a></li>
<li><a href="javascript:file_list('M/Madeleine_Peyroux_-_Bare_Bones_2009');">Madeleine Peyroux - Bare Bones (2009)</a></li>

<li><a href="javascript:file_list('M/Manzanita/30 Grandes exitos y un ramito de violetas (Disc 1)');">Manzanita - 30 Grandes exitos y un ramito de violetas (Disc 1)</a> ??</li>


<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[1979] Off The Wall');">Michael Jackson - Off The Wall
(1979)</a></li>


<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[1982] Thriller');">Michael Jackson - Thriller (1982)</a></li>
<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[1987] Bad');">Michael Jackson - Bad (1987)</a></li>

<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[1991] Dangerous');">Michael Jackson - Dangerous
(1991)</a></li>
<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[1995] HIStory');">Michael Jackson - HIStory (1995)</a></li>
<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[1997] Blood On The Dance Floor');">Michael Jackson -
Blood On The Dance Floor (1997)</a></li>
<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[2001] Invincible');">Michael Jackson - Invincible
(2001)</a></li>
<li><a href="javascript:file_list('M/Michael_Jackson_-_This_Is_It_2009');">Michael Jackson - This is it (2009)</a></li>
<li><a href="javascript:file_list('M/Michael Jackson - Discography (320kbps)/[xxxx] Unreleased & Other');">Michael Jackson - Unreleased
& Other</a></li>




<li><a href="javascript:file_list('M/Maria_Rita_-_Maria_Rita_2003');">Maria Rita - Maria Rita (2003)</a></li>

<li><a href="javascript:file_list('M/Maria_Rita_-_Segundo_2005');">Maria Rita - Segundo (2005)</a></li>
<li><a href="javascript:file_list('M/Maria_Rita_-_Samba_Meu_2007');">Maria Rita - Samba Meu (2007)</a></li>
<li><a href="javascript:file_list('M/Maria_Rita_-_Perfil_2009');">Maria Rita - Perfil (2009)</a> existe?</li>
<li><a href="javascript:file_list('M/Maria_Rita_-_Maria_Rita_v2');">Maria Rita - Maria Rita v2</a> existe?</li>
<li><a href="javascript:file_list('M/Maria_Rita_-_Discografia');">Maria Rita - Discografia</a> existe?</li>

<li><a href="javascript:file_list('M/Miriam_Bayard_-_La_bamba_1996');">Miriam Bayard - La bamba (1996)</a></li>
<li><a href="javascript:file_list('P/Prince_-_Musicology_2004');">Prince - Musicology (2004)</li>
<li><a href="javascript:file_list('R/Roberta_Flack_-_Killing_Me_Softly_1973');">Roberta Flack - Killing Me Softly (1973)</li>
<li><a href="javascript:file_list('S/Suzanne Vega Discografie/1998 - THE BEST OF SUZANNE VEGA - TRIED AND TRUE');">Suzanne Vega - The best of Suzanne Vega - Tried and True (1998)</a></li>
<li><a href="javascript:file_list('V/Various_Artists_-_Brasileiro');">Putumayo - Brasileiro (1999)</a></li>

<li><a href="javascript:file_list('R/Ruben Gonzalez y Eliades Ochoa/Buena Vista Social Club');">Ruben Gonzalez y Eliades Ochoa - Buena Vista Social Club</a></li>

<li><a href="javascript:file_list('varios/');">Varios</a></li>
</ul>

<a href="javascript:folders_list();">Mostrar todos</a>



</body>
</html>
