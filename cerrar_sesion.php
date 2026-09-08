```php id="7k2pqa"
<?php

session_start();

session_unset();

session_destroy();

header("Location: index.php");

exit();

?>
```
