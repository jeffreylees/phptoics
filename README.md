Simply creating an Outlook .ics event from a PHP file...


This simple PHP script generates an Outlook .ics file for a particular event from a PHP script
 * Variables are filled with sample data but can be easily filled via GET or POST (i.e. "ics.php?current_date=xxxxx&date_start=xxxxxx", with $date_created = $_GET['current_date']."\n"; etc.
 * Date/times must be in the format of YYYYMMDDTMMSSZ. So August 1, 2014, 10:00am would be: 20140801T1000Z
 * Compiled by @jeffreylees - almost no original coding here, compiled somewhere around ten scripts I found in various places, none of which would work quite right, in order to come up with this one.
