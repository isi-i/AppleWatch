<?php
  // 小倉ゼミ2020
  $slackApiKey = "xoxb-1126505360932-1581684335984-8bYS3Shnz0GmAft6bZLrY5Eg";

  $memo = $_POST['memo'];
  $name = $_POST['name'];
  $action = $_POST['action'];

  $text = "名前: ".$name."\n事柄: ".$action."\nメモ: ```".$memo." ```";
  $text = urlencode($text);

  $channel = urlencode("保育tech");

  $url = "https://slack.com/api/chat.postMessage?token=" . $slackApiKey . "&channel=%23" . $channel . "&text=" . $text;

  file_get_contents($url);

  echo "メモ:".$memo." 名前:".$name." 事柄:".$action;
?>
<p>送信しました。</p>

<a href="http://oguzemi.sakura.ne.jp/renTest/AppleWatch.html">戻る</a>