<?php
$hostname = gethostname();

$showGitHubLink = trim(strtoupper(getenv('SHOW_GITHUB_LINK'))) == "YES";

switch (getenv("PET_TYPE")) {
	case 'dogs': $sourcePets = "pets/dogs.txt"; 
	default: $sourcePets = "pets/cats.txt";
}

$pets = explode("***", file_get_contents($sourcePets));

$lastHostnameCharacter = substr($hostname, -1);

$petIndex = (is_numeric($lastHostnameCharacter)) ? $lastHostnameCharacter : ord($lastHostnameCharacter) - 96; 

$pet = $pets[$petIndex];


?>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<body>
    <h1>Hi! This is Ascii Pets!</h1>
    
    <p>My hostname is <strong><?=$hostname ?></strong>, and this pet lives here; </p>   

	<pre style = "font-weight: bold;">
	<?php echo $pet; ?>
	</pre>
    
    <p>This pet was generated on <strong><?=date("D Js F, H:mm ") ?></strong></p>
    
    <?php 
    
    if ($showGitHubLink) {
        echo '<p><a href = "https://github.com/jamesread/php-ascii-pets">php-ascii-pets</a> On GitHub</p>';
    }
      
    ?>
</body>
