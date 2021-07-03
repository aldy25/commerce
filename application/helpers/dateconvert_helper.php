<?php
function date_convertmonth($intMonth)
{
    $monthString = null;
    if($intMonth == 1)
    {
        $monthString = "Januari";
    }
    else if($intMonth == 2)
    {
        $monthString = "Februari";
    }
    else if($intMonth == 3)
    {
        $monthString = "Maret";
    }
    else if($intMonth == 4)
    {
        $monthString = "April";
    }
    else if($intMonth == 5)
    {
        $monthString = "Mei";
    }
    else if($intMonth == 6)
    {
        $monthString = "Juni";
    }
    else if($intMonth == 7)
    {
        $monthString = "Juli";
    }
    else if($intMonth == 8)
    {
        $monthString = "Agustus";
    }
    else if($intMonth == 9)
    {
        $monthString = "September";
    }
    else if($intMonth == 10)
    {
        $monthString = "Oktober";
    }
    else if($intMonth == 11)
    {
        $monthString = "November";
    }
    else if($intMonth == 12)
    {
        $monthString = "Desember";
    }
    else
    {
        $monthString = "Invalid input!";
    }

    return $monthString;
}
function date_convertmonth2($intMonth)
{
	$monthString = null;
	if($intMonth == "01")
	{
		$monthString = "Januari";
	}
	else if($intMonth == "02")
	{
		$monthString = "Februari";
	}
	else if($intMonth == "03")
	{
		$monthString = "Maret";
	}
	else if($intMonth == "04")
	{
		$monthString = "April";
	}
	else if($intMonth == "05")
	{
		$monthString = "Mei";
	}
	else if($intMonth == "06")
	{
		$monthString = "Juni";
	}
	else if($intMonth == "07")
	{
		$monthString = "Juli";
	}
	else if($intMonth == "08")
	{
		$monthString = "Agustus";
	}
	else if($intMonth == "09")
	{
		$monthString = "September";
	}
	else if($intMonth == 10)
	{
		$monthString = "Oktober";
	}
	else if($intMonth == 11)
	{
		$monthString = "November";
	}
	else if($intMonth == 12)
	{
		$monthString = "Desember";
	}
	else
	{
		$monthString = "Invalid input!";
	}

	return $monthString;
}

function date_monthtoint($monthStr)
{
   if($monthStr === "Januari" || $monthStr === "January")
   {
      return "1";
   }
   else if($monthStr === "Februari" || $monthStr === "February")
   {
	  return "2";

   }
   else if($monthStr === "Maret" || $monthStr === "March")
   {
	  return "3";
   }
   else if($monthStr === "April")
   {
	  return "4";

   }
   else if($monthStr === "Mei" || $monthStr === "May")
   {
	  return "5";
   }
   else if($monthStr === "Juni" || $monthStr === "June")
   {
	  return "6";

   }
   else if($monthStr === "Juli" || $monthStr === "July")
   {
	  return "7";

   }
   else if($monthStr === "Agustus" || $monthStr === "August")
   {
	  return "8";

   }
   else if($monthStr === "September")
   {
	  return "9";

   }
   else if($monthStr === "Oktober" || $monthStr === "October")
   {
	  return "10";

   }
   else if($monthStr === "November")
   {
	  return "11";

   }
   else if($monthStr === "Desember" || $monthStr === "December")
   {
	  return "12";

   }
   else
   {
      return false;
   }
}

function date_convertday($in)
{
	if($in === "Sunday")
	{
		echo "Minggu";
	}
	else if($in === "Monday")
	{
		echo "Senin";
	}
	else if($in === "Tuesday")
	{
		echo "Selasa";
	}
	else if($in === "Wednesday")
	{
		echo "Rabu";
	}
	else if($in === "Thursday")
	{
		echo "Kamis";
	}
	else if($in === "Friday")
	{
		echo "Jum'at";
	}
	else if($in === "Saturday")
	{
		echo "Sabtu";
	}
	else
	{
		echo "error_converting";
	}
}
