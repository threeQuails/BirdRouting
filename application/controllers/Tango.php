<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tango extends Application {

    function __construct()
	{
		parent::__construct();
	}

	/**
	 * bravo page 
	 */
	public function index()
	{
		$this->show(5);
	}

}
