<?php 
namespace Alddesign\EzMvc; 
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\Helper;
use Alddesign\EzMvc\System\View;
?>

<?php View::createChild("html-header", $this)->render(); ?> 
    <div class="container-fluid">
        <h3>
            <?php $solution->run(); ?>
        </h3>
    </div>
<?php View::createChild("html-footer", $this, false, ["footerText" => "Copyright by me..."])->render(); ?> 