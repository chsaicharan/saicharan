<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet">
<style>
    table {
        
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
main{
    padding-top:35px;
}   
    a:active{
        color:red;
    }
    </style>
</head>
<body>
<nav>
        <div class="container">
            <div> 
                <p style="float:left">
                    <a href="index.html" style="padding-left: 100px">NINELEAPS</a>
                 </p>
                  <p style="float:right">
                    <a href="index.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="table.php">Table</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="list.php">List</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                    </p>
            </div>
        </div>
    </nav>
    <main>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charan";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT name,designation,manager FROM employees";
$result = $conn->query($sql);
?>
<button float="right" style="background-color: lightcyan;
width: 15%;
line-height: 1.5em;margin-right:30px;
border-block-end-color: black;"><a href="register.html"><b>Add New</b></a></button>
<h2 align="center">Employee List</h2>
<hr>
<table border="1">
<tr><th>S.No</th><th>Employee Name</th><th>Employee Details</th><th>Reporting Manager</th></tr>
<?php
if ($result->num_rows > 0) {
$x=1;
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
<tr>
<td><?php echo $x; ?></td>
<td><?php echo $row["name"]; ?></td>       
<td><?php echo $row["designation"]; ?></td> 
<td><?php echo $row["manager"]; ?></td> 
<?php $x=$x+1; ?>
 </tr>
<?php
}    
} 
$conn->close();
?>
</table>
</main>
</body>
</html>