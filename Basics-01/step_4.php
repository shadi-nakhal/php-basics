<?php 


$name = "shadi";
$position = "student";
$github_url = "https://github.com/shadi-nakhal";


print "Hello, I'm ".$name.", I'm a ".$position. " please check my github link <br>" . $github_url;

echo "<br>";
echo "<br>";

echo "Hello, I'm $name, I'm a $position please check my github link <br> $github_url";

echo "<br>";
echo "<br>";

echo 'hello, I\'m '. $name . ', I\'m a' .$position . 'please check my github link <br>' . $github_url;

echo "<br>";
echo "<br>";

echo <<<EOT
     hello, I'm $name I'm a $position please check my github link <br> $github_url
EOT;


?>

