<?php
$hostname = gethostname();

function stringToColor($s) {                                                       
    $crcVal = crc32($s);                                                           
                                                                                   
    $r = $crcVal & 0xff;                                                           
    $g = $crcVal >> 2 & 0xff;                                                      
    $b = $crcVal >> 3 & 0xff;                                                      
                                                                                   
    return "rgb($r, $g, $b)";                                                    
} 

$showGitHubLink = trim(strtoupper(getenv('SHOW_GITHUB_LINK'))) == "YES";

$color = stringToColor($hostname);

?>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<body style = "background-color: <?=$color ?>;">
    <h1>Hi! This is php-show-my-hostname!</h1>
    
    <p>My hostname is <strong><?=$hostname ?></strong>!</p>   
    
    <p>The datetime is <strong><?=date(DATE_ATOM) ?></strong></p>
    
    <?php 
    
    if ($showGitHubLink) {
        echo '<p><a href = "https://github.com/jamesread/php-show-my-hostname">php-show-my-hostname</a> On GitHub</p>';
    }
      
    ?>
</body>
