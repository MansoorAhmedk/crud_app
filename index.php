<?php
// Database Connection
$conn = new mysqli("localhost","root","","CRUD");

if($conn->connect_error){
    die("Connection failed! ".$conn->connect_error);
}

// Initialize the variables
$upadate = false;
$email = $name = "";

// update data
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $upadate = TRUE;
    $result = $conn->query("SELECT * FROM crud where id=$id");
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
    } 
    
};



// Insert data into database
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $name =$_POST['name'];
    $email = $_POST['email'];
    if(isset($_GET['edit'])){
        $conn->query("UPDATE crud SET name='$name', email='$email' WHERE id = $id");
    }else{
        $conn->query("INSERT INTO crud(name, email) VALUES('$name','$email')");
    }
    header('location: index.php');
    exit;

}

// Delete

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM crud WHERE id = $id");
    header('location: index.php');
    exit;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CRUD APPLICATION</h1>

    <div class="form">
        <fieldset>
            <legend><?php echo $upadate ? "Update Student" : "Add Student"?></legend>
            <form  method="post">
                <input type="hidden" name="id"  value="<?php echo $_GET['edit'] ?? '' ?>">
                <input type="text" name="name" placeholder="Name" required value="<?php echo htmlspecialchars($name); ?>">
                <input type="email"  name="email" placeholder="email" required value="<?php echo htmlspecialchars($email); ?>">
                <input type="submit" value=<?php echo $upadate ? "Update student" : "Add Student"?>>
            </form>

        </fieldset>
    </div>
    <br>
    <hr>
    <div class="value">
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        <?php
            $result = $conn->query("SELECT * from crud");
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td> <span class="edit"><a href="?edit=<?php echo $row['id']; ?>">Edit</a></span> | <span class="del"><a href="?delete=<?php echo $row['id']; ?>" onclick= "return confirm('DDo you want to delete this field?')"> Delete </a> </span> </td>
                </tr>
                <?php
            }
        ?>



        </table>
    </div>


    
</body>
</html>