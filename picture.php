<?php

echo '<div class="page-header" id="banner">

        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Picture</h1>
            <p class="lead">Make you beautiful</p>
          </div>

        </div>
      </div>

      <div class="row">
          <div class="col-lg-7">
          	<video id="video"></video>
      			<button id="startbutton">Prendre une photo</button>
      			<canvas id="canvas"></canvas>

            <form action="send_pic.php" method="POST">
              <img hidden src="http://placekitten.com/g/320/261" name="pic" id="photo" alt="photo">
              <input hidden name="pic2" value="toto" id="result"/>
              <button id="send">Send</button>
            </form>
  			
          </div>
      </div>';

?>