<?php  
  $audio_res_5 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_5 = mysql_num_rows($audio_res_5);
?>
<select class="form-control" name="turma_5">
    <?php while($audio_5 = mysql_fetch_array($audio_res_5)){ ?>
        <option value="<?php echo $audio_5['arquivo']; ?>"><?php echo $audio_5['pre']; ?></option>
    <?php } ?>
</select>