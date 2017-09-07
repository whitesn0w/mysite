<?php
 	if(!is_file(PATH_LOG)){
 		return;
 	}
 	$logs = file_get_contents(PATH_LOG);
 	$logs = explode("\n", $logs);
 ?>

 <table border="1">

 	<?php
 		if(is_array($logs)){
 			array_pop($logs);
 			foreach ($logs as $log) {
 				$tds = explode("|", $log);
 	?>
 			<tr>
 			<td>
 				<?php 
 					echo date('l dS of F Y h:i:s A', $tds[0]);
 				?>
 			</td>
 			<td>
 				<strong>Page</strong><a href="<?php echo $tds[1]; ?>"><?= $tds[1];?></a><br />
 				<strong>Referrer:</strong> <a href="<?php echo $tds[2]; ?>"><?php echo $tds[2]; ?></a>
 			</td>
 			</tr>	
 			<?php 	
 			}
 		}
 		?>	
 	
 </table>