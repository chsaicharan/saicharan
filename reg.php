<html>
<head>
<title></title>
<style>
    table {
        
    font-family: arial, sans-serif;
    border:none;
    width: 30%;
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
    padding-left:70px;
    padding-top:70px;
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
                    <a href="homepage.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="table.php">Table</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="list.php">List</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;           
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


$n=$_POST["name"];
$d=$_POST["designation"];
$m=$_POST["manager"];
$sql = "INSERT INTO employees(name,designation,manager) VALUES ('$n','$d','$m')";
if($conn->query($sql) === FALSE)
{
echo "unable to inserted ";
} 
else 
{
echo "";

}
$conn->close();
?>
<p style="padding-left:70px;">
<h3><?php echo $n; ?>[Employee]</h3>
<hr>

        <p><b>Name</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $n; ?></p>
    <br>
    <p><b>Designation</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $d; ?></p>
    <br>
    <p><b>Manager </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $m; ?></p>
    <br>
</p>
</main>
</body></html>