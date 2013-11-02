<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of APIResponse
 *
 * @author TrungHieu
 */
class APIResponse implements \Illuminate\Support\Contracts\ArrayableInterface
{
    const CODE_SUCCESS = 1;
    const CODE_FAILED = 0;
    
    private $_code;
    private $_data;
    
    public function __construct($code, $data)
    {
	$this->_code = $code;
	$this->_data = $data;
    }

    public function toArray()
    {
	return array(
	    'code' => $this->_code,
	    'data' => $this->_data,
	);
    }
}

?>
