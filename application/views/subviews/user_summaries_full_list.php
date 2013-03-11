<?php 
	if (isset($listTitle) && strlen($listTitle) > 0)
	{
?>
	<h4 class="muted"><?php echo $listTitle ?></h4>
<?php
	}
?>

<ul class="inline">
	<?php 
		if (isset($lUserSummaries) && count($lUserSummaries) > 0)
		{
			foreach ($lUserSummaries as $iUserSummary) 
			{
		?>
				<li> 
					<?php 
						$subViewName = 'subviews/user_summary_full_name_image';

						if (isset($subview) && strlen($subview) > 0)
						{
							$subViewName = $subview;
						}

						$this->load->view($subViewName, array(
							'user_summary' => $iUserSummary
							) 
						) 
					?> 
				</li>
		<?php	
			}
		} 
		else 
		{
			if (isset($errorMessage) && strlen($errorMessage) > 0)
			{
		?>
			<li><?php echo $errorMessage ?></li>
		<?php
			}
		}
	?>
</ul>
