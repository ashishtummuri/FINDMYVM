<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FIND MY VM</title>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
<style>
    <?php include 'C:/xampp/htdocs/FindMyVM/main.css'; ?>
</style> 

</head>
<body>
    <center>
    <div class = "header">
        <h1>FIND MY VM</h1>
        <h2>Search the VM details by its IP address or Host Name</h2>
    </div>
    
       <form action="" method="POST">
        <input type="text" name="ip" placeholder="Enter the IP To search"> <br>
        <input type="submit" name = "search" value="Search VM"> <br>
       </form> 
       <!-- <button type="button" class="btn btn-primary btn-lg" href='/FINDMYVM/create.php'>Update</button> -->
       <td class="button">
            <a class = 'btn btn-primary btn-sm' href='/FINDMYVM/create.php?id=$row[ip]'>CREATE</a>
            <a class = 'btn btn-primary btn-sm' href='/FINDMYVM/edit.php?id=$row[ip]'>EDIT</a>
            <a class = 'btn btn-danger btn-sm' href='/FINDMYVM/delete.php?id=$row[ip]'>DELETE</a>

        </td>

<?php
$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"vmdb");

if(isset($_POST['search']))
{
    $ip = $_POST['ip'];
    
    $query = "SELECT * FROM mitc_inventory where ip = '$ip'  ";
    $query_run = mysqli_query($connection,$query);
   

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
            <form action="" method="POST">
                <div class = "result">
                
                    <label>PRIMARY IP:</label><?php echo $row['ip'] ?><br> <br>
                    <label>HOST NAME:</label><?php echo $row['Hostname'] ?><br> <br>
                    <label>CLUSTER NAME:</label><?php echo $row['Cluster_name'] ?><br><br>
                    <label>OWNER:</label><?php echo $row['Application_Owner'] ?><br><br>
                    <label>APPLICATION:</label><?php echo $row['Application_Name'] ?><br><br>
                    <label>OS:</label><?php echo $row['OS'] ?><br><br>
                    <label>HOST IP:</label><?php echo $row['Host_IP'] ?><br><br>
                    <label>CPU:</label><?php echo $row['CPU'] ?><br> <br>
                    <label>MEMORY:</label><?php echo $row['Memory']?><br><br> 
                    <label>VCENTER IP:</label><?php echo $row['Vcenter_IP'] ?><br><br>
                    <label>STATUS :</label><?php echo $row['Status'] ?> <br><br>

                </div>

            </form>
        <?php
    }
}
?>
    </center>
</body>
</html>