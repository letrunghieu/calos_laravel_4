<?php

/**
 * Manage classes of the `body` tag
 *
 * @author TrungHieu
 */
class BodyClass
{

    private $_classes = array();
    private static $_instance;

    public function addClasses($classes)
    {
	if (is_string($classes))
	    $classes = preg_split('/\s+/', trim($classes));
	if (is_array($classes))
	{
	    $this->_classes = array_merge ($this->_classes, $classes);
	}
	else
	{
	    throw new Exception("The input classes must be an array or a string");
	}
    }
    
    public function dump()
    {
	return implode(' ', $this->_classes);
    }
    
    /**
     * 
     * @return BodyClass
     */
    public static function instance()
    {
	if (!static::$_instance)
	    static::$_instance = new BodyClass;
	return static::$_instance;
    }

}

?>
