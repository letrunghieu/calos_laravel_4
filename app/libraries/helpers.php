<?php

/**
 * Register helper functions here to make the `global.php` file tidier
 * @author Hieu Le <letrunghieu.cse09@gmail.com>
 */
/* body classes */
function add_body_classes($classes)
{
    $instance = BodyClass::instance();
    $instance->addClasses($classes);
}

function body_classes($echo = true)
{
    $instance = BodyClass::instance();
    if ($echo)
	echo $instance->dump();
    else
	return $instance->dump();
}

/* end body classes */

/* UI functions */
function ui_help_tip($key, $replacements = array()){
    $content = trans($key, $replacements);
    return "<a href='#' data-toggle='tooltip' data-placement='auto top' title='{$content}'><i class='fa fa-question-sign'></i></a>";
}
/* end UI functions */
?>
