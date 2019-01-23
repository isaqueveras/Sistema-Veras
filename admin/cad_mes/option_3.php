<?php  
  $audio_res_3 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_3 = mysql_num_rows($audio_res_3);
?>
<select class="form-control" name="turma_3">
    <?php while($audio_3 = mysql_fetch_array($audio_res_3)){ ?>
        <option value="<?php echo $audio_3['arquivo']; ?>"><?php echo $audio_3['pre']; ?></option>
    <?php } ?>
</select>