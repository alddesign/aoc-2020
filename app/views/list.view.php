<?php 
namespace Alddesign\EzMvc; 
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\Helper;
use Alddesign\EzMvc\System\View;
?>

<?php View::createChild("html-header", $this)->render(); ?> 
<ul>
	<?php foreach($solutions as $day => $parts): ?>
		<li>
			<h4 style="margin: 0;">Day <?php echo $day; ?></h4>
			<ul>
				<?php foreach($parts as $part => $solution): ?>
					<li><a href="<?php Helper::echoUrl(sprintf('/Solution/run/%s/%s', $day, $part)); ?>">Part <?php echo $part; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</li>
	<?php endforeach ?>           
</ul>
<?php View::createChild("html-footer", $this, ["footerText" => "Copyright by me..."])->render(); ?> 