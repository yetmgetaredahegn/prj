Hello

<?php
  $title = 'PHP';
  $message = "Welcome to $title programming!"; //interpolation works with double quotes
  echo $message;
  echo "\n";
  $m2 = 'This programming language is ' . $title . '!'; //concatenation with single quotes and dot operator
  echo $m2;
  //heredoc syntax
    $heredoc = <<<EOT
This is a heredoc string. It can span multiple lines and supports variable interpolation like $title.
EOT;
  echo "\n";
  echo $heredoc;
  //nowdoc syntax
  $nowdoc = <<<'EOT'
This is a nowdoc string. It can also span multiple lines but does not support variable interpolation like $title.
EOT;
  echo "\n";
  echo $nowdoc;
?>