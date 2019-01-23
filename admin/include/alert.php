<?php 
	if(isset($_SESSION['proc'])){ ?>
		<div class='alert alert-warning alert-dismissible fade show' role='alert'>
			<strong>Notificação: </strong>  
		    <?php echo $_SESSION['proc'];  
		          unset ($_SESSION['proc']); ?>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		</div> 
<?php } ?>