<?php

/**
 * The class contains several different behaviors.
 * It violates the single responsability principle.
 *
 * The solution is to move the behavior related to printing timesheet 
 * reports into a separate class.
 */
class Employee {
	private $name;

	public function getName()
	{
		return $this->name;
	}

	public function printTimeSheetReport()
	{
		echo "printing the timesheet report of " . $this->getName();
	}
}