<?php  
  $audio_res_6 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_6 = mysql_num_rows($audio_res_6);
?>
<select class="form-control" name="turma_6">
    <?php while($audio_6 = mysql_fetch_array($audio_res_6)){ ?>
        <option value="<?php echo $audio_6['arquivo']; ?>"><?php echo $audio_6['pre']; ?></option>
    <?php } ?>
</select>