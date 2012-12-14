<?php

// Sanca Hub
// Let's parse the google calendar XML to render next events!

// Script adapted from http://www.rcjhawk.us/software/gcal/
// Based on P.J. Cabrera's "Listing 5" at 
// http://www.ibm.com/developerworks/opensource/library/os-php-xpath/
// License at http://www.ibm.com/developerworks/apps/download/index.jsp?contentid=270615&filename=os-php-xpath.google-calendar-api.zip&method=http&locale=worldwide:w

//  Set the time zone.  See the supported time zones here:
//   http://php.net/manual/en/timezones.php
date_default_timezone_set('America/Sao_Paulo');

//  This tells the code where to look in Google's data protocal
//   to find the tags used in the calendar feed.  Note that
//   we're only looking at "confirmed" links.  For more details, see
//   http://code.google.com/apis/gdata/docs/1.0/elements.html
$confirmed = 'http://schemas.google.com/g/2005#event.confirmed';

// This puts the date in a form Google will read:
$right_now = date("Y-m-d\Th:i:sP", time());

//  For our purposes, a month will be 30 days
//$month_in_seconds = 60 * 60 * 24 * 30;
//$next_month = date("Y-m-d\Th:i:sP", time() + $month_in_seconds);

// For sancahub.com.br purposes
$year_in_seconds = 60 * 60 * 24 * 365;
$next_year = date("Y-m-d\Th:i:sP", time() + $year_in_seconds);

//  This is my version of the call to Google's API.  See
//   http://code.google.com/apis/calendar/data/2.0/reference.html#Parameters
//   for alternatives.

//   This version gets all the events happening starting from right now until
//   30 days from now.

//  Don't forget to replace "yourcalendaraddress" by your Google
//   calendar address.  For your default calendar, it's just your gmail
//   address before the "@gmail.com"

$feed = "http://www.google.com/calendar/feeds/sancahub%40gmail.com/" . 
        "public/full?orderby=starttime&singleevents=true&" .
        "sortorder=ascending&" .
        "start-min=" . $right_now . "&" .
        "start-max=" . $next_year;

//  Create a new document from the feed
$doc = new DOMDocument(); 
$doc->load( $feed );

$entries = $doc->getElementsByTagName( "entry" );

// Sanca Hub: limit foreach to a specific number of events
$i = 0; 

// Loop
foreach ( $entries as $entry ) { 
    
	// Find the status of a given entry
	$status = $entry->getElementsByTagName( "eventStatus" ); 
	$eventStatus = $status->item(0)->getAttributeNode("value")->value;

	// If it's confirmed, parse it
	if ($eventStatus == $confirmed) {

		// This looks at the "title" tag
		$titles = $entry->getElementsByTagName( "title" );
		$title = $titles->item(0)->nodeValue;

		// $title might have an unescaped isolated ampersand in it (as in
		// "Chat & Chew".)  This will fix that so that the web page will validate
		$title = ereg_replace(" & ", " &amp; ", $title);

		// This looks at the "gd:when" tag,
		//  to get the actual time the event is going to happen.
		// Note that the "gd" indicates this is part of the Google schema
		$times = $entry->getElementsByTagName( "when" ); 

		// Pull off the time
		$startTime = $times->item(0)->getAttributeNode("startTime")->value;

		// Parse it into something we like.  For other formatting options see
		// http://php.net/manual/en/function.date.php
	    //$when = date( "l\, F j\, Y \a\\t h:i A T", strtotime( $startTime ) );
		$month = date( "m", strtotime( $startTime ) );
		$day = date( "j", strtotime( $startTime ) );
		$time = date( "H:i", strtotime( $startTime ) );
		
		// Sanca Hub: translates month label to brazilian portuguese
		switch ($month) {
		        case "01":    $mes = "Janeiro";     break;
		        case "02":    $mes = "Fevereiro";   break;
		        case "03":    $mes = "Março";       break;
		        case "04":    $mes = "Abril";       break;
		        case "05":    $mes = "Maio";        break;
		        case "06":    $mes = "Junho";       break;
		        case "07":    $mes = "Julho";       break;
		        case "08":    $mes = "Agosto";      break;
		        case "09":    $mes = "Setembro";    break;
		        case "10":    $mes = "Outubro";     break;
		        case "11":    $mes = "Novembro";    break;
		        case "12":    $mes = "Dezembro";    break; 
		 }
		 $month = $mes;

		// Ditto for location
		// Sanca Hub: not using nowadays
		//$places = $entry->getElementsByTagName( "where" ); 
		//$where = $places->item(0)->getAttributeNode("valueString")->value;

		//  You can pick off other tags, of course, but these are the ones I need
		
		// Sanca Hub: get the info field
		$infos = $entry->getElementsByTagName( "content" );
		$info = $infos->item(0)->nodeValue;

		// Sanca Hub: because the first and second date have different visual styles,
		// let's load some new vars to read them outside the loop
		$sancahub_title[$i] = $title;
		$sancahub_month[$i] = $month;
		$sancahub_day[$i] = $day;
		$sancahub_time[$i] = $time;
		$sancahub_info[$i] = $info;
		
		// Sanca Hub: limit to 2 events
		if(++$i >= 2) break;
	}
}
?>