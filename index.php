<?php
$hostname = gethostname();

function stringToColor($s) {                                                       
    $crcVal = crc32($s);                                                           
                                                                                   
    $r = $crcVal & 0xff;                                                           
    $g = $crcVal >> 2 & 0xff;                                                      
    $b = $crcVal >> 3 & 0xff;                                                      
                                                                                   
    return array($r, $g, $b);
    
} 

//https://stackoverflow.com/questions/38063499/how-to-invert-rgb-hex-values-by-contrast-in-php
function contrastColor($colorArray) {
    $r = ($colorArray[0] < 128) ? 255 : 0;
    $g = ($colorArray[1] < 128) ? 255 : 0;
    $b = ($colorArray[2] < 128) ? 255 : 0;

    return array($r, $g, $b);
}

$showGitHubLink = trim(strtoupper(getenv('SHOW_GITHUB_LINK'))) == "YES";

$colorArray = stringToColor($hostname);
$contrastColor = contrastColor($colorArray);
$color = "rgb($colorArray[0],$colorArray[1],$colorArray[2])";
$text = "rgb($contrastColor[0],$contrastColor[1],$contrastColor[2])";

?>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<body style = "background-color: <?=$color ?>;color: <?=$text ?>;">
    <h1>Hi! This is php-show-my-hostname!</h1>
    
    <p>My hostname is <strong><?=$hostname ?></strong>!</p>   
    
    <p>The datetime is <strong><?=date(DATE_ATOM) ?></strong></p>
    
    <?php 
    
    if ($showGitHubLink) {
        echo '<p><a href = "https://github.com/jamesread/php-show-my-hostname">php-show-my-hostname</a> On GitHub</p>';
    }
      
    ?>
</body>
