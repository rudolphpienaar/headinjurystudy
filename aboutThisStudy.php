<?php

$content = file_get_contents("templates/aboutThisStudy.html");

// add footer
$content = str_replace('${FOOTER}', file_get_contents("templates/footer.html"), $content);

echo $content;

?>