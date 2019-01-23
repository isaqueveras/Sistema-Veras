<?php  
  $audio_res_2 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_2 = mysql_num_rows($audio_res_2);
?>
<select class="form-control" name="turma_2">
    <?php while($audio_2 = mysql_fetch_array($audio_res_2)){ ?>
        <option value="<?php echo $audio_2['arquivo']; ?>"><?php echo $audio_2['pre']; ?></option>
    <?php } ?>
</select>