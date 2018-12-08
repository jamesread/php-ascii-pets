<?php
$hostname = gethostname();

$showGitHubLink = trim(strtoupper(getenv('SHOW_GITHUB_LINK'))) == "YES";

switch (getenv("PET_TYPE")) {
	case 'dogs': $sourcePets = "pets/dogs.txt"; 
	default: $sourcePets = "pets/cats.txt";
}

$pets = explode("***", file_get_contents($sourcePets));

$firstHostnameCharacter = $hostname[0];

$petIndex = (is_numeric($firstHostnameCharacter)) ? $firstHostnameCharacter : ord($firstHostnameCharacter) - 96; 

$pet = $pets[$petIndex];


?>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<body>
    <h1>Hi! This is php-show-my-hostname!</h1>
    
    <p>My hostname is <strong><?=$hostname ?></strong>!</p>   

	<pre style = "font-weight: bold;">
	<?php echo $pet; ?>
	</pre>
    
    <p>The datetime is <strong><?=date(DATE_ATOM) ?></strong></p>
    
    <?php 
    
    if ($showGitHubLink) {
        echo '<p><a href = "https://github.com/jamesread/php-show-my-hostname">php-show-my-hostname</a> On GitHub</p>';
    }
      
    ?>
</body>
