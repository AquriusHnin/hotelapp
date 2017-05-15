<?php 

namespace App\Http\Controllers\Backend\TraitsComponent;

trait BookingTraits{


	function generate_booking_date($start_month,$end_month)
	{
		$days=array();
		$interval="1 day";
		$start = \DateTime::createFromFormat('Y-m-d', $start_month);
		
		$end = \DateTime::createFromFormat('Y-m-d', $end_month);

		$interval = \DateInterval::createFromDateString($interval);

		$period   = new \DatePeriod($start, $interval, $end);


		foreach ($period as $key=>$dt) {
			

			$days[$key]=$dt->format('Y-m-d');
		}
		return $days;

	}
}