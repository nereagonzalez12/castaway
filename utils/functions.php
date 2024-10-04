<?php

declare(strict_types=1);
?>

<?php

function render_player(string $template)
{
    require "classes/$template.php";
}

function render_template(string $template)
{
    require "templates/$template.php";
}

?>