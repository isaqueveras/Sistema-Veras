<?php  
  $audio_res_8 = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio_8 = mysql_num_rows($audio_res_8);
?>
<select class="form-control" name="turma_8">
    <?php while($audio_8 = mysql_fetch_array($audio_res_8)){ ?>
        <option value="<?php echo $audio_8['arquivo']; ?>"><?php echo $audio_8['pre']; ?></option>
    <?php } ?>
</select>