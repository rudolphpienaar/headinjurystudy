<?php

$content = file_get_contents("templates/home.html");

// add analytics
$content = str_replace('${ANALYTICS}', file_get_contents("analyticstracking.php"), $content);
// add footer
$content = str_replace('${FOOTER}', file_get_contents("templates/footer.html"), $content);

echo $content;

?>
