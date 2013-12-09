<?php

/**
 * Register helper functions here to make the `global.php` file tidier
 * @author Hieu Le <letrunghieu.cse09@gmail.com>
 */
/* body classes */
function addBodyClasses($classes)
{
    $instance = BodyClass::instance();
    $instance->addClasses($classes);
}

function bodyClasses($echo = true)
{
    $instance = BodyClass::instance();
    if ($echo)
	echo $instance->dump();
    else
	return $instance->dump();
}

/* end body classes */

/* UI functions */

function uiHelpTip($key, $replacements = array())
{
    $content = trans($key, $replacements);
    return "<a href='#' data-toggle='tooltip' data-placement='auto top' title='{$content}'><i class='fa fa-question-sign'></i></a>";
}

function uiTimeTag(Carbon\Carbon $datetime, $format = '')
{
    $datetimeProp = $datetime->toRFC3339String();
    $titleProp = $datetime->toW3CString();
    if ($format)
	$contentProp = $datetime->format($format);
    else
	$contentProp = $datetime->diffForHumans();
    return "<time datetime='{$datetimeProp}' title='{$titleProp}'>{$contentProp}</time>";
}

/* end UI functions */

function getPage($pageSegment)
{
    $matches = null;
    if (preg_match('/page-([0-9]+)/', $pageSegment, $matches))
    {
	return $matches[1];
    }
    return 1;
}

?>
