<?php  
  $audio_res_7 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_7 = mysql_num_rows($audio_res_7);
?>
<select class="form-control" name="turma_7">
    <?php while($audio_7 = mysql_fetch_array($audio_res_7)){ ?>
        <option value="<?php echo $audio_7['arquivo']; ?>"><?php echo $audio_7['pre']; ?></option>
    <?php } ?>
</select>