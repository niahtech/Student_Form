<?php include 'form_project_header.php'?>
<?php include 'form_project_database.php'?>
<?php
    $sql ='SELECT * FROM niah';
    $result = mysqli_query($conn,$sql);
    $feedback=mysqli_fetch_all($result,MYSQLI_ASSOC);
        
    

    if(isset($_POST['id'])){
        $_SESSION['id']=$_POST['id'];
        header("location: form_project_full_profile.php");
    }
    if(isset($_POST['deletebtn'])){
        $id=$_POST['deletebtn'];
        $sql=$conn->query("DELETE FROM niah WHERE id = $id");
        header('Location: form_project_feedback.php');
    }
?>

<?php if(empty($feedback)): ?>
    <h2>There is no student data</h2>
<?php endif; ?>
<?php if(!empty($feedback)): ?>
    <h2>Student Registered</h2>
<?php endif; ?>

<style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        width:1000px;
        margin: auto;
        text-align: center;
     }
     h2{
        text-align: center;
     }
     .profile{
        background-color: red;
        color:white;
        border:none;
        border-radius: 0.3em;
        width:80%;
     }
</style>

<table class="mytable">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Matric Number</th>
            <th>Gender</th>
            <th>Level</th>
            <th>Occupation</th>
            <th>Full Profile</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($feedback as $item): ?>
            <tr>
                <td><?php echo $item['Id']?></td>
                <td><?php echo $item['First_Name']?></td>
                <td><?php echo $item['Last_Name']?></td>
                <td><?php echo $item['Matric_Number']?></td>
                <td><?php echo $item['Gender']?></td>
                <td><?php echo $item['Level']?></td>
                <td><?php echo $item['Occupation']?></td>
                <td>
                    <!-- <a href="form_project_full_profile.php?id=<?= $item['Id']; ?>">View Full Profile</a> -->
                    <form method="POST">
                         <button name="id" value="<?=$item['Id']?>" style="background-color:black; color:white;">Full Profile</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                         <button name="deletebtn" value="<?=$item['Id']?>" style="background-color:black; color:white;">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table> 