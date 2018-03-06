<?php include "includes/header.php" ?>
<?php
require_once "connection.php"
$requete = "SELECT
`id`,
`sujet`
FROM
`forum`
;";
$stmt= $conn ->prepare($requete);
$stmt->execute();
?>





<?php include "footer.php" ?>

