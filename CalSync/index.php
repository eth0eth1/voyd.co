<?php
require_once 'Google/Client.php';
require_once 'Google/Service/Calendar.php';

$apiClient = new apiClient();
$apiClient->setUseObjects(true);
$service = new apiCalendarService($apiClient);

$calendarListEntry = $service->calendarList->get('calendarId');

if (isset($_SESSION['oauth_access_token'])) {
  $apiClient->setAccessToken($_SESSION['oauth_access_token']);
} else {
  $token = $apiClient->authenticate();
  $_SESSION['oauth_access_token'] = $token;
}

echo $calendarListEntry->getSummary();

echo "Yes, this is test";


?>