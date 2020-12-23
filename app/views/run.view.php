<?php 
namespace Alddesign\EzMvc; 
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\Helper;
use Alddesign\EzMvc\System\View;
?>

<?php View::createChild("html-header", $this)->render(); ?> 
    <div class="container-fluid" id="container">
        <div id="content" class="">
            <?php $solution->run(); ?>
        </div>
    </div>
<?php View::createChild("html-footer", $this, false, ["footerText" => "Copyright by me..."])->render(); ?> 