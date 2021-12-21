<?php 
/**
 * Класс Tag
 */ 
class Tag
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function open()
	{
		$name = $this->name;
		return "<$name>";
	}

	public function close()
	{
		$name = $this->name;
		return "</$name>";
	}
}
// img tag
$img = new Tag('img');
echo $img->open();

// header()
$header = new Tag('header');
echo $header->open() . 'header of site' .$header->close();
?>