<?php
$mysqli = new mysqli("192.168.43.198", "root", "", "newblance");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT hotelid, hotelname, star, address, phonenumber, NT
FROM test2 WHERE hotelid = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $star, $adr, $phn, $NT);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>HotelName</th>";
echo "<th>Stars</th>";
echo "<th>Addresss</th>";
echo "<th>Phone</th>";
echo "<th>Price</th>";
echo "<th>My favourite</th>";
echo "<tr>";
echo "</tr>";
echo "<td>" . $cid. "</td>";
echo "<td>" . $cname . "</td>";
echo "<td>" . $star . "</td>";
echo "<td>" . $adr . "</td>";
echo "<td>" . $phn . "</td>";
echo "<td>" . $NT . "</td>";
echo "<td>" . "<img id='cmd' src='img/forv.png' alt='' onclick='app(". $cid .")'>" . "</td>";
echo "</tr>";
echo "</table>";
?>