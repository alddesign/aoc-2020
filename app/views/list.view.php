<?php 
namespace Alddesign\EzMvc;

use Alddesign\EzMvc\Solutions\SolutionStore;
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\Helper;
use Alddesign\EzMvc\System\View;
use DateTime;
use DateInterval;

$date = new DateTime('2020-11-30');
?>

<?php View::createChild("html-header", $this)->render(); ?> 

<div id="calendar-wrapper">
<table class="table table-bordered calendar">
	<thead>
		<tr>
			<th colspan="7" class="text-center">December 2020</th>
		</tr>
		<tr>
			<th>MON</th>
			<th>TUE</th>
			<th>WED</th>
			<th>THU</th>
			<th>FRI</th>
			<th>SAT</th>
			<th>SUN</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($entries as $entry): ?>
			<?php if($entry->isMon){ echo '<tr>'; } ?>
			
			<td class="day<?php echo !$entry->isDecember ? ' not-december' : ''; ?>">
				<div class="day-number"><?php echo $entry->day; ?></div>

				<?php foreach($entry->solutions as $solution): ?>
					<?php if($solution->ready):?>
						<div class="solution solution-ready">
							<b><a href="<?php echo $solution->getUrl(); ?>">Part <?php echo $solution->part; ?></a></b>
						</div>
					<?php else: ?>
						<div class="solution">
							Part <?php echo $solution->part; ?>
						</div>
					<?php endif;?>
				<?php endforeach; ?> 
			</td>

			<?php if($entry->isSun){ echo '</tr>'; } ?>
		<?php endforeach; ?> 		
	</tbody>
</table>
</div>

<?php View::createChild("html-footer", $this, false, ["footerText" => "Copyright by me..."])->render(); ?> 