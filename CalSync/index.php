<?php
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
include_once "templates/base.php";
session_start();

set_include_path("lib" . PATH_SEPARATOR . get_include_path());
require_once 'Google/Client.php';
require_once 'Google/Service/Calendar.php';

/************************************************
  ATTENTION: Fill in these values! Make sure
  the redirect URI is to this page, e.g:
  http://localhost:8080/user-example.php
 ************************************************/
 $client_id = '233586027539-be1jn7iojghn3cn678s2onueadprnote.apps.googleusercontent.com';
 $client_secret = 'YTqwT6sF8ZKVq2mO1gFQ4HQX';
 $redirect_uri = 'http://voyd.co/CalSync';

/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("https://www.googleapis.com/auth/urlshortener");
$client->addScope("https://www.googleapis.com/auth/calendar");

/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$cal_service = new Google_Service_Calendar($client);

/************************************************
  If we're logging out we just need to clear our
  local access token in this case
 ************************************************/
if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
 ************************************************/
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}


/************************************************
  If we're signed in we pull a calendarlist
  object and loop through it on each calendar
  getting names.

  Note that we re-store the
  access_token bundle, just in case anything
  changed during the request - the main thing that
  might happen here is the access token itself is
  refreshed if the application has offline access.
 ************************************************/

if ($client->getAccessToken()) {

	$calendarList = $cal_service->calendarList->listCalendarList();

	echo "<ul>";
	
	while(true) {
	  foreach ($calendarList->getItems() as $calendarListEntry) {
		echo "<li>" . $calendarListEntry->getSummary() . "</li>";
	  }
	  $pageToken = $calendarList->getNextPageToken();
	  if ($pageToken) {
		$optParams = array('pageToken' => $pageToken);
		$calendarList = $service->calendarList->listCalendarList($optParams);
	  } else {
		break;
	  }
	}

	echo "</ul>";
	
	$_SESSION['access_token'] = $client->getAccessToken();

}

echo pageHeader("User Query - Calendar Lister");
if (
    $client_id == '<YOUR_CLIENT_ID>'
    || $client_secret == '<YOUR_CLIENT_SECRET>'
    || $redirect_uri == '<YOUR_REDIRECT_URI>') {
  echo missingClientSecretsWarning();
}
?>

<div class="box">
  <div class="request">
    <?php if (isset($authUrl)): ?>
      <a class='login' href='<?php echo $authUrl; ?>'>Connect Me!</a>
    <?php else: ?>
      <a class='logout' href='?logout'>Logout</a>
    <?php endif ?>
  </div>

<?php
//echo pageFooter(__FILE__);
?>