<?php  
  $audio_res_9 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_9 = mysql_num_rows($audio_res_9);
?>
<select class="form-control" name="turma_9">
    <?php while($audio_9 = mysql_fetch_array($audio_res_9)){ ?>
        <option value="<?php echo $audio_9['arquivo']; ?>"><?php echo $audio_9['pre']; ?></option>
    <?php } ?>
</select>