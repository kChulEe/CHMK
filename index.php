<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
  
        <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
        <div id="player"></div>
        
        <p id="demo"></p>

        <script>
          // 2. This code loads the IFrame Player API code asynchronously.
          var tag = document.createElement('script');

          tag.src = "https://www.youtube.com/iframe_api";
          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          // 3. This function creates an <iframe> (and YouTube player)
          //    after the API code downloads.
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

          // 4. The API will call this function when the video player is ready.
          function onPlayerReady(event) {
            event.target.playVideo();
          }

          // 5. The API calls this function when the player's state changes.
         var videoTime = 0;
          function onPlayerStateChange(event) {
            if (event.data == 2) {
              videoTime = player.getCurrentTime();
               document.getElementById("demo").innerHTML = videoTime;
            }
          }
        
        </script>
        
        <div>
          <ul>
            <?php
                include 'includes/sql_connect.php';

                $query1 = "select * from pants";
                if ($stmt = $con->prepare($query1)) {
                    $stmt->execute();
                    $stmt->bind_result($field1, $field2, $field3, $field4, $field5);
                    if ($stmt->fetch() == "TRUE") {
                        $image = $field5;
                        echo '<img src="'.$image.'" width="100" height="100" />';
                        printf("%s, %s, $%s \n", $field2, $field3, $field4);
                        printf("\n");
                    }
                    $stmt->close();
                }
            ?>
          </ul>
          <ul>
            <?php
                $query2 = "select * from shirts";
                if ($stmt = $con->prepare($query2)) {
                    $stmt->execute();
                    $stmt->bind_result($field1, $field2, $field3, $field4, $field5);
                    if ($stmt->fetch() == "TRUE") {
                        $image = $field5;
                        echo '<img src="'.$image.'" width="100" height="100" />';
                        printf("%s, %s, $%s \n", $field2, $field3, $field4);
                    }
                    $stmt->close();
                }

            ?>
          </ul>
        </div>


        
        
    </body>


</html>