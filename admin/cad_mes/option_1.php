<?php  
  $audio_res_1 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_1 = mysql_num_rows($audio_res_1);
?>
<select class="form-control" name="turma_1">
    <?php while($audio_1 = mysql_fetch_array($audio_res_1)){ ?>
        <option value="<?php echo $audio_1['arquivo']; ?>"><?php echo $audio_1['pre']; ?></option>
    <?php } ?>
</select>