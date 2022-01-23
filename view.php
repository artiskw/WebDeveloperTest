<?php
// datu bazes ieraksti
 
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php"></a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
    <thead>
        <tr>
            <th><strong>ID</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Action</strong></th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sel_query="Select * from form ORDER BY id desc;";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td align="center"><?php echo $row["id"]; ?></td>
                <td align="center"><?php echo $row["email"]; ?></td>
                <td align="center">
                    <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</body>
</html>
