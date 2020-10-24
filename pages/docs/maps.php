  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $title; ?></div>
        <div class="intro-heading text-uppercase">WIKI - MAP</div>
      </div>
    </div>
  </header>

  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 class="section-subheading text-muted"><?php echo $trad_docs['wiki']['maps']['contents']['info-gps']; ?></h3>
        </div>
	</div>
      <div class="row">
	<div class="col-md-3">
	<label for="scale">Map Minecraft : </label>
	<select id="scale">
		<option value="4000" selected><?php echo $trad_docs['wiki']['maps']['contents']['map']; ?></option>
	</select>
	<hr>
	<!--<h4 class="text-center">DD (<?php echo $trad_docs['wiki']['maps']['contents']['dd']; ?>)</h4>-->
	<div>
		<label for="latitude_dec">Latitude : </label>
		<input type="number" class="form-control fullsize" min="-90" max="90" step="0.000001" pattern="[0-9]+([\.,][0-9]+)?" id="latitude_dec" value="0.000000">
	</div>
	<br>
	<div>
		<label for="longitude_dec">Longitude : </label>
		<input type="number" class="form-control fullsize" min="-180" max="180" step="0.000001" pattern="[0-9]+([\.,][0-9]+)?" id="longitude_dec" value="0.000000">
	</div>
	
	<hr>

	<!--<h4 class="text-center">DMS (<?php echo $trad_docs['wiki']['maps']['contents']['dms']['title']; ?>)</h4>-->
	<div>
		<label for="latitude_direction">Latitude : </label>
		<select id="latitude_direction">
			<option value="north"><?php echo $trad_docs['wiki']['maps']['contents']['dms']['nord']; ?></option>
			<option value="south"><?php echo $trad_docs['wiki']['maps']['contents']['dms']['soud']; ?></option>
		</select>
		<input type="number" min="0" max="90" step="1" id="latitude_hour" value="0">°
		<input type="number" min="0" max="60" step="1" id="latitude_minute" value="0">'
		<input type="number" min="0" max="60" step="0.001" id="latitude_second" pattern="[0-9]+([\.,][0-9]+)?" value="0.000">"
	</div>
	<br>
	<div>
		<label for="longitude_direction">Longitude : </label>
		<select id="longitude_direction">
			<option value="east"><?php echo $trad_docs['wiki']['maps']['contents']['dms']['east']; ?></option>
			<option value="west"><?php echo $trad_docs['wiki']['maps']['contents']['dms']['west']; ?></option>
		</select>
		<input type="number" min="0" max="90" step="1" id="longitude_hour" value="0">°
		<input type="number" min="0" max="60" step="1" id="longitude_minute" value="0">'
		<input type="number" min="0" max="60" step="0.001" id="longitude_second" pattern="[0-9]+([\.,][0-9]+)?" value="0.000">"
	</div>

	<hr>
	<div>
		<label for="command"><?php echo $trad_docs['wiki']['maps']['contents']['coordonate']; ?> Minecraft (X,Y,Z): </label><br>
		<input type="text" class="form-control fullsize" id="command" value="">
	</div>
	</div>
	
	<div class="col-md-9">
		 <div id="map"> </div>
		<!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-185.27343750000003%2C-40.713955826286046%2C207.0703125%2C78.97138592818219&amp;layer=mapnik" style="border: 0px"></iframe>-->
	</div>
      </div>
    </div>
  </section>
  
