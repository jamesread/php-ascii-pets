<?php
$hostname = gethostname();

function stringToColor($s) {                                                       
    $crcVal = crc32($s);                                                           
                                                                                   
    $r = $crcVal & 0xff;                                                           
    $g = $crcVal >> 2 & 0xff;                                                      
    $b = $crcVal >> 3 & 0xff;                                                      
                                                                                   
    return "rgb($r, $g, $b)";                                                    
} 

$color = stringToColor($hostname);

?>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<body style = "background-color: <?=$color ?>;">
    <h1>Hi! This is php-show-my-hostname!</h1>
    
    <p>My hostname is <strong><?=$hostname ?></strong>!</p>   
    
    <p>The datetime is <strong><?=date(DATE_ATOM) ?></strong></p>
</body>
