<!DOCTYPE html>
<html>
    <head>
		<!--this line is for ajax implementation, this is needed to call php inside js-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    
    <body>
        <!--placeholder for YouTube-->
		<div id="player"></div>
        <!--placeholder for checking frame progression-->
        <p id="demo"></p>
        
		<!--this is where Javascript for YouTube starts-->
        <script>
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			var player;
			function onYouTubeIframeAPIReady() {
				player = new YT.Player('player', {
					height: '390',
					width: '640',
					videoId: 'Pj-TNdFBCq0',
					events: {
						'onReady': onPlayerReady,
						'onStateChange': onPlayerStateChange
					}
				});
			}
			//automatically plays video once it loads
			function onPlayerReady(event) {
				event.target.playVideo();
			}
			//variable made for indicating frames
			var videoTime = 0;
			//whenever the video is paused, following calls are made
			function onPlayerStateChange(event) {
				if (event.data == 2) {
					videoTime = player.getCurrentTime();
					//testing if frame progression works
				    //document.getElementById("demo").innerHTML = videoTime;
					
					//start frame selection
					if (videoTime > 15 && videoTime < 30) {
						if (window.XMLHttpRequest) {
							xmlhttp = new XMLHttpRequest();
        				} else {
							xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
								document.getElementById("demo1").innerHTML = xmlhttp.responseText;
							}	
						};
						//call php function with its path
						xmlhttp.open("GET","phpcalls/democall.php?q=",true);
						xmlhttp.send();
					}
					//start frame selection
					if (videoTime > 40 && videoTime < 50) {
						if (window.XMLHttpRequest) {
							xmlhttp = new XMLHttpRequest();
        				} else {
							xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
								document.getElementById("demo1").innerHTML = xmlhttp.responseText;
							}	
						};
						//call php function with its path
						xmlhttp.open("GET","phpcalls/democall1.php?q=",true);
						xmlhttp.send();
					//every other frame, show blank in the placeholder
					}else{
						document.getElementById("demo1").innerHTML = "";
					}
				}
			}
        </script>
        
		<!--placeholder for the query result-->
		<p id="demo1"></p>  
    </body>
</html>