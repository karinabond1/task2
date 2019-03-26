<?php
class Calc
{
	private $first;
	private $second;

	public function setFirst($first)
	{
		if(is_numeric($first))
		{
			$this->first = (int)$first;
		}
	}
	public function getFirst()
	{
		return $this->first;
	}

	public function add($a)
	{
		if(is_numeric($a))
		{
			$this->first += (int)$a;
		}
	}
	
	public function setSecond($second)
	{
		if(is_numeric($second))
		{
			$this->second = (int)$second;
		}
	}
	public function getSecond()
	{
		return $this->second;
	}

	public function plus()
	{
		return $this->first+$this->second;
	}

	public function minus()
	{
		return $this->first-$this->second;	
	}
	public function mult()
	{
		return $this->first*$this->second;	
	}
	public function dev()
	{
		return round(($this->first/$this->second), 2);	
	}
	public function persent()
	{
		return round(($this->first%$this->second),2);
	}
	public function rad()
	{
		return round((sqrt($this->first)),2);
	}
	public function one_dev()
	{
		return round((1/$this->first),2);
	}

	
}

?>
