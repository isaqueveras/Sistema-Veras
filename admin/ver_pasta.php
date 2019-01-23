<!-- <?php  
	$pasta = "audios";
	$s = scandir($pasta);

	foreach ($s as $k) {
		if ($k != "." && $k != "..") {
			echo "$k<br>";
		}
	}
?> -->

<audio id="audio">
    <source src="audios/info1.3gp"/>
</audio>

<script type="text/javascript">

    audio = document.getElementById('audio');

	function play(){
	    audio.play();
	}

</script>

<input type="button" value="Tocar" onclick="play()">