<?php 
namespace Alddesign\EzMvc; 
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\Helper;
use Alddesign\EzMvc\System\View;
?>

<?php View::createChild("html-header", $this)->render(); ?> 
    <h2><?php echo sprintf('Advent of Code solution for day %s part %s', $solution->day, $solution->part); ?></h2>
    <div>
        <?php $solution->run(); ?>
    </div>
<?php View::createChild("html-footer", $this, ["footerText" => "Copyright by me..."])->render(); ?> 