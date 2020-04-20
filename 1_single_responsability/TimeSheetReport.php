<?php

class TimeSheetReport {

	public function print(Employee $employee)
	{
		echo "printing the timesheet report of " . $employee->getName();
	}
}