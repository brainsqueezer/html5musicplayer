function realencode(str)                   
{                   
  var str2=escape(str);
 while (str2.indexOf("+") != -1)
  str2=str2.replace("+", "%2B");
 while (str2.indexOf("/") != -1)
  str2=str2.replace("/", "%2F");
  return str2;
}

    HTML5.Audio.Proxy.getProxy({swfPath:'swf/html5-audio.swf'});

var music;
var playlist;

function loadfile (id) {

var path = playlist[id].path;
var file = playlist[id].file;
   var url = path+'/'+file;
if (music) {

        music.pause();
}
	document.getElementById('pista').value = file;

//api
        music = new HTML5.Audio(url);
        music.play();
music.timestart = new Date();
music.set( 'onended', function() {
      
var nextid = (id+1)%playlist.length;      
music.timeend = new Date();
loadfile(nextid);
} );
    }



function play() {x
x
        if ( ! music ) return;
music.play();
}


    function stop () {
        if ( ! music ) return;
        music.pause();
    }
  


function position() {
        if ( ! music ) return 0;
if (music.timeend) {
		var timeend = music.timeend;
} else {
		var timeend = new Date();

}
		var timedifference = timeend.getTime() - music.timestart.getTime();
return timedifference;
//return false;

}



function file_list(folder) {
var url = 'http://vacavella.dyndns.org/music2/listfiles.php?folder='+realencode(folder);

new Ajax.Request(url, {
  method:'get',
  onSuccess: function(transport){
     var json = transport.responseText.evalJSON();
file_show(json);
   }
});
}



function folders_list() {
var url = 'http://vacavella.dyndns.org/music2/list.php';

new Ajax.Request(url, {
  method:'get',
  onSuccess: function(transport){
     var json = transport.responseText.evalJSON();
folders_show(json);
   }
});
}


function file_show(nodos) {

//Get the reference to the <ul> 
MyUL = document.getElementById('filelist');

if ( MyUL.hasChildNodes() )
{
    while ( MyUL.childNodes.length >= 1 )
    {
        MyUL.removeChild( MyUL.firstChild );       
    } 
}


//cargamos playlist 
playlist = nodos;

for(var i=0; i<nodos.length; i++ ) {
//Create the <li> node 
theLi = document.createElement('li');
thea = document.createElement('a');
thea.href= 'javascript:loadfile('+i+');';
if (nodos[i].title == '')
thea.innerHTML = i + '. '+ nodos[i].file;
else
   thea.innerHTML = i + '. ' + nodos[i].artist + ' - '+nodos[i].title;
//Append it to the Current list (Places it last on the list)
theLi.appendChild(thea);
MyUL.appendChild(theLi);
}

}


function folders_show(nodos) {

//Get the reference to the <ul> 
MyUL = document.getElementById('folderlist');

if ( MyUL.hasChildNodes() )
{
    while ( MyUL.childNodes.length >= 1 )
    {
        MyUL.removeChild( MyUL.firstChild );       
    } 
}


for(var i=0; i<nodos.length; i++ ) {
//Create the <li> node 
theLi = document.createElement('li');
thea = document.createElement('a');
thea.href= 'javascript:file_list(\''+nodos[i]+'\');';
thea.innerHTML = nodos[i]
//Append it to the Current list (Places it last on the list)
theLi.appendChild(thea); 
MyUL.appendChild(theLi); 
}

}



function time2str(timedifference) {
	var timeend = new Date();
		timeend.setTime(timedifference);

		var minutes_passed = timeend.getMinutes();
		if(minutes_passed < 10){
			minutes_passed = "0" + minutes_passed;
		}
		var seconds_passed = timeend.getSeconds();
		if(seconds_passed < 10){
			seconds_passed = "0" + seconds_passed;
		}
		var milliseconds_passed = timeend.getMilliseconds();
		if(milliseconds_passed < 10){
			milliseconds_passed = "00" + milliseconds_passed;
		}
		else if(milliseconds_passed < 100){
			milliseconds_passed = "0" + milliseconds_passed;
		}
		//return minutes_passed + ":" + seconds_passed + "." + milliseconds_passed;
		return minutes_passed + ":" + seconds_passed;

}



function showtimer() {

var pos_time = position();
var pos_str = time2str(pos_time);
	document.getElementById('contador').value = pos_str;
	timercount = setTimeout("showtimer()", 1000);
}

function init() {
file_list();
showtimer();
}

window.onload=init;

