<?php 
/**
 * Атрибуты без значения в классе Tag
 */

class Tag
{
	private $name;
	private $attrs = [];


	public function __construct($name)
	{
		$this->name = $name;
	}

	public function setAttr($name, $value)
	{
		$this->attrs[$name] = $value;
		return $this;
	}

	public function removeAttr($name, $value)
	{
		unset($this->attrs[$name]);
		return $this;
	}

	public function setAttrs($attrs)
	{
		foreach ($attrs as $name => $value) {
			$this->setAttr($name, $value);
		}
		return $this;
	}
	
	public function open()
	{
		$name = $this->name;
		$attrsStr = $this->getAttrsStr($this->attrs);

		return "<$name $attrsStr>";
	}

	public function close()
	{
		$name = $this->name;
		return "</$name>";
	}

	private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
			$result = '';
			
			foreach ($attrs as $name => $value) {
				// Если значение атрибута равно true:
				if ($value === true) {
					$result .= " $name";
				} else {
					$result .= " $name=\"$value\"";
				}
			}
			
			return $result;
		} else {
			return '';
		}
	}
}
	echo (new Tag('input'))
		->setAttr('id', 'test')
		->setAttr('class', 'eee bbb')
		->open();

		
?>