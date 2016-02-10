<?php


class header_fise{

	//
	private $keywords;
	private $description;
	private $title;
	private $script;
	private $path;

	function __construct(){
		$this->script = $this->keywords = $this->description = $this->title = "";
		$path = "./";
	}
	
	public function setKeywords($string){
		$this->keywords = $string;
		return;
	}
	
	public function setPath($string){
		$this->path = $string;
		return;
	}
	
	public function setDescription($string){
		$this->description = $string;
		return;
	}
	
	public function setScript($string){
		$this->script .= '<script type="text/javascript" src="'.$string.'"></script>';
		
	}
	
	public function setTitle($string){
		$this->title = $string;
	}
	public function showHead(){
	
		$cadena =  '
			<!DOCTYPE html>
			<html>
			<head>
			  <title>'.$this->title.'</title>
			  <meta name="viewport" content="width=device-width,  initial-scale=1.0">
			  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			  <link rel="stylesheet" href="'.$this->path.'css/bootstrapset.css">
			  <link rel="stylesheet" href="'.$this->path.'css/inx.css">
			  <link rel="shortcut icon" href="'.$this->path.'image/icono.jpg">
			  <link rel="stylesheet" href="'.$this->path.'js/bootstrap.js">
			  <link href="'.$this->path.'css/carousel.css" rel="stylesheet">
			  '.$this->script.'
			  <script src="http://code.jquery.com/jquery.js"></script>
					<style>.img-circle-adv {
					  border-radius: 25px;
					  border:solid 2px #5a5a5a;
					  line-height: 1.42857143;
					  padding: 4px;
					}.gjh{
					margin-left:-50px;
				  }</style>
			  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css">
			<meta name="description" content="'.$this->description.'">
			<meta name="keywords" content="'.$this->keywords.'"/>
			</head>
			<body>

		';
		echo $cadena ;
	}

	
}


?>