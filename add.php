x
<?
     $filelocation = "ips.txt";
     $newfile = fopen($filelocation,"a+");
     $add = $body. "\n";
     fwrite($newfile, $add);
     fclose($newfile);
?>
