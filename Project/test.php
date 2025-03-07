<?php
include 'connection.php';
$sql = "SELECT * FROM rejected";
$result = $con->query($sql);
$row = $result->fetch_assoc();

echo $row['name'];
?>

                    <script type="text/javascript">
                function myFunction() {
                let text = "Press Okay to Confirm";
                if (confirm(text) == true)
                 {
                    document.getElementById("accept").setAttribute("href", "accept.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>&email=<?php echo $row['email']; ?>&address=<?php echo $row['address']; ?>&cnum=<?php echo $row['cnum']; ?>&date=<?php echo $row['date']; ?>&time=<?php echo $row['time']; ?>"); 
                }
                }
                </script>

<script type="text/javascript">

function myFunction() {
let text = "Press Okay to Confirm";
if (confirm(text) == true)
 {
    document.getElementById("accept").setAttribute("href", "accept.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>&email=<?php echo $row['email']; ?>&address=<?php echo $row['address']; ?>&cnum=<?php echo $row['cnum']; ?>&date=<?php echo $row['date']; ?>&time=<?php echo $row['time']; ?>"); 
}
}
</script>
<a class = 'accept' href= 'accept.php?id=$row[id]&name=$row[name]&email=$row[email]&address=$row[address]&cnum=$row[cnum]&date=$row[date]&time=$row[time]'><strong>Accept</strong></a>
<input type = 'submit' class = 'accept' value = 'Accept' action = 'test2.php'>