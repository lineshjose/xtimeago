<?php
/*
	Name: 'X' Time Ago PHP Function.
	Version : 1.00
	Author: Linesh Jose
	Url: http://lineshjose.com
	Email: lineshjose@gmail.com
	Donate:  http://bit.ly/donate-linesh
	github: https://github.com/lineshjose
	Demo: http://lineshjose.com/blog/how-to-create-x-time-ago-date-format-in-php/
	Copyright: Copyright (c) 2011 LineshJose.com
	
	Note: This script is free; you can redistribute it and/or modify  it under the terms of the GNU General Public License as published by 	the Free Software Foundation; either version 2 of the License, or (at your option) any later version.This script is distributed in the hope 	that it will be useful,    but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the  GNU General Public License for more details.

-----------------------------------------------------------

	This function returns date as 20 seconds ago, 1 minutes ago, etc.. 
	@param $timestamp : timestamp value
*/
	// X-time ago function
	function ShowDate($timestamp) 
	{
		$stf = 0;
		$cur_time = time();
		$diff = $cur_time - $timestamp;
		$phrase = array('second','minute','hour','day','week','month','year','decade');
		$length = array(1,60,3600,86400,604800,2630880,31570560,315705600);
		for($i =sizeof($length)-1; ($i >=0)&&(($no =  $diff/$length[$i])<=1); $i--); if($i < 0) $i=0; $_time = $cur_time  -($diff%$length[$i]);
		$no = floor($no); if($no <> 1) $phrase[$i] .='s'; $value=sprintf("%d %s ",$no,$phrase[$i]);
		if(($stf == 1)&&($i >= 1)&&(($cur_tm-$_time) > 0)) $value .= time_ago($_time);
		return $value.' ago ';
	}

?>	