<style type = "text/css">
body {
    font-family: sans-serif;
    font-size: 200%;
    line-height: 2;
}
</style>
<body>
<h1>Hi! This is php-show-my-hostname!</h1>

<?php
$hostname = gethostname();

echo '<p>My hostname is <strong>' . $hostname . '</strong>!</p>';

?>
</body>
