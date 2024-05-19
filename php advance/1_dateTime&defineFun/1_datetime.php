<?php


// date
// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week

// time
// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)


// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");
echo "Current Date and Time: $currentDateTime<br>";

// Get the current day of the month
$dayOfMonth = date("d");
echo "Day of the Month: $dayOfMonth<br>";

// Get the current month
$month = date("m");
echo "Month: $month<br>";

// Get the current year
$year = date("Y");
echo "Year: $year<br>";

// Get the current day of the week
$dayOfWeek = date("l");
echo "Day of the Week: $dayOfWeek<br>";

// Get the current hour in 24-hour format
$hour24 = date("H");
echo "Hour (24-hour format): $hour24<br>";

// Get the current hour in 12-hour format with leading zeros
$hour12 = date("h");
echo "Hour (12-hour format with leading zeros): $hour12<br>";

// Get the current minutes with leading zeros
$minutes = date("i");
echo "Minutes with leading zeros: $minutes<br>";

// Get the current seconds with leading zeros
$seconds = date("s");
echo "Seconds with leading zeros: $seconds<br>";

// Get the lowercase Ante meridiem or Post meridiem
$meridiem = date("a");
echo "Lowercase Ante meridiem or Post meridiem: $meridiem<br>";



// Create a date using mktime()
$customDate = mktime(12, 0, 0, 5, 18, 2024); // (hour, minute, second, month, day, year)
echo "Custom Date Created with mktime(): " . date("Y-m-d H:i:s", $customDate) . "<br>";

// Get your time zone
$timezone = date_default_timezone_get("Asia/Yangon");
echo "Your Timezone: $timezone<br>";

// Get date from a string using strtotime()
$dateString = "2024-05-25";
$convertedDate = strtotime($dateString);
echo "Date from String with strtotime(): " . date("Y-m-d", $convertedDate) . "<br>";


$currentDate1 = date_create(date("c"));
echo date_format($currentDate1,"d-m-o h:i a");


$currentDate2 = date_create(date("d-m-y"));
date_add($currentDate2,date_interval_create_from_date_string("10 days"));
echo date_format($currentDate2,'d-m-y');


$currentDate3 = date_create(date("d-m-y"));
date_sub($currentDate3,date_interval_create_from_date_string("10 days"));
echo date_format($currentDate3,'d-m-y');

echo cal_days_in_month(CAL_GREGORIAN,date("m"), date("Y"));
?>
