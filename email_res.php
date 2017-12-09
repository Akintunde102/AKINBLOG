<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);


$subscriberfile = "emails.csv";
if (array_key_exists('email', $_POST) && $_POST['email']) {
  $subscribers = file($subscriberfile);
  $emails = array();
  foreach ($subscribers as $subscriber) {
    list($email, $name) = split(",",trim($subscriber));
    $emails[$email] = $name;
  }
  if (!check_email_address($_POST['email'])) {
    echo '<p>Your email address <b>' .$_POST['email']. '</b> does not look right. Please check your spelling and try again.</p>';
  }
  elseif (array_key_exists($_POST['email'], $emails)) {
    echo '<p>The email address <b>' .$_POST['email']. '</b> is already subscribed. Thanks again for your interest.</p>';
  }
  else {
    $emails[$_POST['email']] = $_POST['name'];
    $f = fopen($subscriberfile, 'w');
    foreach ($emails as $key => $value) {
      $value = ereg_replace("[^A-Za-z0-9' ]", "", $value);
      fwrite($f, "$key,$value\n");
    }
    fclose($f);
    echo '<p>Thank you. <b>' .$_POST['email']. '</b> has been subscribed.</p>';
  }
}
?>
<?php
function check_email_address($email) {
  // First, we check that there's one @ symbol, and that the lengths are right
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
      return false;
    }
  }
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
      return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}
?>