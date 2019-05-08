<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet">
<style>
    main{
        padding-top:70px;
        padding-left:70px;
    }
    a:active{
        color:red;
    }
    dl.a
    {
        list-style-type:circle;
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

<h3>Employee Information</h3>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
<ul class="a">
<li><?php echo $row["name"];echo "   "; echo $row["designation"]; ?></li>     
<li><?php echo $row["manager"]; ?></li> 
    </ul>
<?php
}    
} 
$conn->close();
?>
</main>
</body>
</html>