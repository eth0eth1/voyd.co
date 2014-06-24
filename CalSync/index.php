<?php
require_once 'Google/Client.php';
require_once 'Google/Service/Calendar.php';


$calendarListEntry = $service->calendarList->get('calendarId');

echo $calendarListEntry->getSummary();

echo "Yes, this is test";


?>