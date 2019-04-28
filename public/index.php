
<?php
require_once("../private/initialize.php");

$events_set=find_all_events();

include("../private/views/header.php");
include("../private/views/inicio_view.php");
include("../private/views/footer.php");
?>