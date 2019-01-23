<?php  
  $audio_res_4 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_4 = mysql_num_rows($audio_res_4);
?>
<select class="form-control" name="turma_4">
    <?php while($audio_4 = mysql_fetch_array($audio_res_4)){ ?>
        <option value="<?php echo $audio_4['arquivo']; ?>"><?php echo $audio_4['pre']; ?></option>
    <?php } ?>
</select>