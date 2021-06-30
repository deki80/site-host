<?php

class Collector {

  /*
  * better to use Interface instead of Class instance as a dependancy,
  * but no need for that in these case
  */

  public static function getUserDomains(User $user)
  {
    $userId = $user->userId;
    $ch = curl_init("https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?client_id=" . $userId . "&apikey=d17261d51ff7046b760bd95b4ce781ac");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($result);
    return $data;
  }

}
