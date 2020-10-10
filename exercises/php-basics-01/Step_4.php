<?php
$name= "Manal";
$position = "Intern";
$github_url = "https://github.com/Manal-Jaber";
$s1 = "Hello, I'm ";
$s2 = ", I'm an ";
$s3 = " please check my github link";
echo "Hello, I'm ".$name.", I'm an ".$position." please check my github link ".$github_url."<br>";

echo "Hello, I'm ";
echo $name.", I'm an ";
echo $position;
echo " please check my github link ";
echo $github_url;
echo "<br>";

echo $s1.$name.$s2.$position.$s3.$github_url;
?>