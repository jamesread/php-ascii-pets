<?php
$hostname = gethostname();
?>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<body>
    <h1>Hi! This is php-show-my-hostname!</h1>
    
    <p>My hostname is <strong><?=$hostname ?></strong>!</p>   
    
    <p>The datetime is <strong><?=date(DATE_ATOM) ?></strong></p>
</body>
