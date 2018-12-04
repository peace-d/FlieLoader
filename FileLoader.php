<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * FileLoader Class
 * Helps you load your javascript and css files quickly and easly.
 * How to use?
 * Load your class via auto or in your controller( $this->load->library('FileLoader') )
 * Initialize where you want the css and js to be loaded
 * add your file in the folders and load in your controller $this->fileloader->addCSS('filename');
 *
 */
class FileLoader
{
	protected $oCI;
	protected $sCssPath;
	protected $aCssFiles = array();
	protected $sJsPath;
	protected $aJsFiles = array();
	
	public function __construct()
	{
		// Assign the CodeIgniter super-object
        $this->oCI =& get_instance();
		
		// Load CodeIgniter native classes
		$this->oCI->load->helper('url');
		$this->oCI->config->item('base_url');
		
		// Config class
		$this->sCssPath = base_url().'assets/css/';
		$this->sJsPath = base_url().'assets/js/';
	}
	
	public function addCSS( $sCssName )
	{
		// if ( file_exists($this->sCssPath.''.$sCssName.'css') )
		if ( $sCssName )
		{
			$this->aCssFiles[] = $sCssName;
			return true;
		}
		else return false;
	}
	
	public function loadCSS()
	{
		$sCssFiles = '';

		foreach ($this->aCssFiles as $sFilename)
		{
			$sCssFiles .= '<link rel="stylesheet" href="'.$this->sCssPath.$sFilename.'.css" type="text/css" />'.PHP_EOL;
		}
		echo $sCssFiles;
	}
	
	public function addJS( $sJSName )
	{
		// if ( file_exists($this->sCssPath.''.$sCssName.'css') )
		if ( $sJSName )
		{
			$this->aJsFiles[] = $sJSName;
			return true;
		}
		else return false;
	}
	
	public function loadJS()
	{
		$sJsFiles = '';
		foreach ($this->aJsFiles as $sFilename)
		{
			$sJsFiles .= '<script type="text/javascript" src="'.$this->sJsPath.$sFilename.'.js" type="text/css"></script>'.PHP_EOL;
		}
		echo $sJsFiles;
	}

}
