
<?php

$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"vmdb");

$ip = "";
$Hostname = "";
$Cluster_name = "";
$Application_Owner = "";
$Application_Name = "";
$OS = "";
$Host_IP = "";
$CPU = "";
$Memory = "";
$Vcenter_IP = "";
$Status = "";

$errorMessage = "";
$successMessage = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ip = $_POST["ip"];
    $Hostname = $_POST["Hostname"];
    $Cluster_name = $_POST["Cluster_name"];
    $Application_Owner = $_POST["Application_Owner"];
    $Application_Name = $_POST["Application_Name"];
    $OS = $_POST["OS"];
    $Host_IP = $_POST["Host_IP"];
    $CPU = $_POST["CPU"];
    $Memory = $_POST["Memory"];
    $Vcenter_IP = $_POST["Vcenter_IP"];
    $Status = $_POST["Status"];

    do {
        if(empty($ip) || empty($Hostname) || empty($Cluster_name) || empty($Application_Owner) || empty ($Application_Name)) {
            $errorMessage = "All the Fields are required";
            break;
        }

        $query = "INSERT INTO mitc_inventory= (ip, Hostname, Cluster_name, Application_Owner, Application_Name, OS, CPU, Memory, Vcenter_IP, Status) ".
                "VALUES ('$ip','$Hostname', '$Cluster_name', '$Application_Owner', '$Application_Name','$OS', '$CPU', '$Memory', '$Vcenter_IP','$Status')";
        // $query_run = mysqli_query($connection,$query);
        $result = $connection->query($query);
        
        if (!$result) {
            $errorMessage = "Invalid Query: " . $connection->error;
            break;
        }

        $ip = "";
        $Hostname = "";
        $Cluster_name = "";
        $Application_Owner = "";
        $Application_Name = "";
        $OS = "";
        $Host_IP = "";
        $CPU = "";
        $Memory = "";
        $Vcenter_IP = "";
        $Status = "";

        $successMessage = "VM Added Successfully";

        header("location: /FINDMYVM/index.php");
        exit;

    } while (false);
}   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW VM</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class = "container">
        <center><h2> Update New VM </h2></center> <br><br>
        <?php
        if (!empty($errorMessage)){
            echo "
            <div>
                <strong>$errorMessage</strong>
            </div>";
            }   
        ?>
        <form method="POST">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">IP</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="ip" value="<?php echo $ip; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">HOST NAME</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Hostname" value="<?php echo $Hostname; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CLUSTER NAME</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Cluster name" value="<?php echo $Cluster_name; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">OWNER</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Application_Owner" value="<?php echo $Application_Owner; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">APPLICATION</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Application_Name" value="<?php echo $Application_Name; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">OS</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="OS" value="<?php echo $OS; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">HOST IP</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Host IP" value="<?php echo $Host_IP; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CPU</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="CPU" value="<?php echo $CPU; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">MEMORY</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Memory" value="<?php echo $Memory; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">VCENTER IP</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Vcenter IP" value="<?php echo $Vcenter_IP; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">STATUS</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="Status" value="<?php echo $Status; ?>">  
                </div>
            </div>
            
            <?php
            if (!empty($successMessage)){
                echo "
                <div>
                    <strong>$successMessage</strong>
                </div>";
            }
            ?>
            <div class = "row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/FINDMYVM/index.php" role="button">CANCEL</a>
                </div>
            </div>
        </form>

    </div>
</body>
</html>