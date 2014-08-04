<?php
/* 
 * PHPtoICS - Generates an .ics file for a particular event from a PHP script
 * Variables are filled with sample data but can be easily filled via GET or POST 
 * GET values (i.e. "ics.php?current_date=xxxxx&date_start=xxxxxx" etc.)
 * such as $date_created = $_GET['current_date']."\n";
 * Compiled by @jeffreylees
 */
 
//Setting Headers
header("Content-Type: text/Calendar");
header("Content-Disposition: inline; filename=filename.ics");

//Assigning Variables
$date_created = "20140730T101015Z\n"; //Dates must be in the format YYYYMMDD"T"MMSS i.e. 20140804T1122Z 
$date_start = "20140731T101015Z\n"; 
$date_stop = "20140731T111015Z\n";
$date_modified = "20140731T101015Z\n";
$description = "Description information about this sample event.\n";
$location = "Sample Location\n"; 
$priority = "3\n";
$summary = "Event Title\n";
$randomnumber = "234058494803823749503859"; //Generate a random number for this via PHP

// Outputting the ICS file contents
echo "BEGIN:VCALENDAR\n";
echo "PRODID:-//Microsoft Corporation//Outlook 12.0 MIMEDIR//EN\n";
echo "VERSION:2.0\n";
echo "METHOD:PUBLISH\n";
echo "X-MS-OLK-FORCEINSPECTOROPEN:TRUE\n";
echo "BEGIN:VEVENT\n";
echo "CLASS:PUBLIC\n";
echo "CREATED:".$date_created;
echo "DESCRIPTION:".$description;
echo "DTEND:".$date_stop;
echo "DTSTAMP:".$date_created;
echo "DTSTART:".$date_start;
echo "LAST-MODIFIED:".$date_modified;
echo "LOCATION:".$location;
echo "PRIORITY:".$priority;
echo "SEQUENCE:0\n";
echo "SUMMARY;LANGUAGE=en-us:".$summary;
echo "TRANSP:OPAQUE\n";
echo "UID:".$randomnumber;
echo "X-MICROSOFT-CDO-BUSYSTATUS:BUSY\n";
echo "X-MICROSOFT-CDO-IMPORTANCE:1\n";
echo "X-MICROSOFT-DISALLOW-COUNTER:FALSE\n";
echo "X-MS-OLK-ALLOWEXTERNCHECK:TRUE\n";
echo "X-MS-OLK-AUTOFILLLOCATION:FALSE\n";
echo "X-MS-OLK-CONFTYPE:0\n";
echo "END:VEVENT\n";
echo "END:VCALENDAR\n";
?>
