<?php
session_start();

require_once 'Google/Client.php';
require_once 'Google/Service/Calendar.php';

$apiClient = new Google_Client();

$service = new Google_Service_Calendar($apiClient);

$calendarListEntry = $service->calendarList->get('General');

if (isset($_SESSION['oauth_access_token'])) {
  $apiClient->setAccessToken($_SESSION['oauth_access_token']);
} else {
  $token = $apiClient->authenticate();
  $_SESSION['oauth_access_token'] = $token;
}

echo $calendarListEntry->getSummary();

echo "Yes, this is test";


?>