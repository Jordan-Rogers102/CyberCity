<?php
include "../../includes/template.php";
/** @var $conn */

if (!authorisedAccess(false, true, true)) {
    header("Location:../../index.php");
}

?>
<title>Cyber City</title>
<div class = "wideBox" >
    <div class = "title" >
        <h1>Backup Diesel Generators</h1>
        <h2>
            The last line of defence is a backup diesel generator powering a simplistic
            refrigeration unit housing the last of their virus samples. If we can
            reroute the towns next shipment of diesel, they will be left with no way to
            refrigerate the samples, losing them.
        </h2>
<button

    </div>
</div>
<p></p>
<?php
$userList = $conn->query("SELECT ID, Username, AccessLevel, Enabled FROM Users WHERE Enabled=1"); #Get all Enabled Modules
while ($userData = $userList->fetch()) {
    $userID = $userData["ID"];
    echo "<div class='product_wrapper'>";
    echo "<a class='moduleButton' href='userEdit.php?UserID=" . $userID . "'>Start</a>";
    echo "</div>";
}

?>