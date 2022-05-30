// window.onload = function() {
//     audioplay();
//   };

//   function audioplay() {
//     var sound = document.createElement('audio');
//     sound.id       = 'audio-player';
//     sound.src      = 'videos/soundtracka.mp3';
//     document.getElementById('song').appendChild(sound);
//     var audio = document.getElementById("audio-player");
//     audio.autoplay = true;
//     audio.play();
//   };


var audio =
{
   
	pista1: "videos/soundtracka.mp3",
	reproducir: function(rutaPista)
	{
        if(audio.musica != null)
		{
            audio.musica.pause();
			audio.musica.src = "";
		}
		audio.musica = new Audio(rutaPista);
		audio.musica.play();
	}
};

// document.onload = audio.reproducir(audio.pista1);
// console.log(window);


// document.addEventListener("load", audio.reproducir(audio.pista1));

document.getElementsByTagName("body")[0].onload = function()
    { //that en lugar de "pantalla-titulo"
    	audio.reproducir(audio.pista1);
    }