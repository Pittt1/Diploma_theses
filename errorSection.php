<div id="loginPanel" class="loginPanel">
<h3>
<?php
//pobieram treść błędu z danych sesji
session_start();
echo $_SESSION['error'];
?>
</h3>
</div>