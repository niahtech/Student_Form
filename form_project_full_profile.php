<?php include 'form_project_database.php';?>
<?php include 'form_project_header.php';?>
<?php
    $id = $_SESSION['id'];
    $sql = $conn->query("SELECT * FROM niah WHERE Id=$id");
    $full_profile = $sql->fetch_assoc();

    if(isset($_POST['id'])){
        $_SESSION['edit']=$_POST['id'];
        header('Location: form_project_editProfile.php');
    }
?>

<style>
    .full_profile{
        width:40%;
        border: 1px solid;
        margin: auto;
        background-color:rgb(244, 243, 243);
    }
    h1{
        color:red;
        text-align: center;
    }
    .profile_details{
        padding-left: 10%;
    }
</style>
<div class="full_profile">
    <h1>Full Profile of <?php echo $full_profile['First_Name'],'  ',$full_profile['Last_Name']; ?></h1>
    <div class="profile_details">
        <h3>First Name: <?php echo $full_profile['First_Name'];?></h3>
        <h3>Last Name: <?php echo $full_profile['Last_Name'];?></h3>
        <h3>Matric Number: <?php echo $full_profile['Matric_Number'];?></h3>
        <h3>Date of Birth:<?php echo $full_profile['Date_of_Birth'];?></h3>
        <h3>Phone Number:<?php echo $full_profile['Phone_Number']?></h3>
        <h3>Father's First Name:<?php echo $full_profile['Father_First_Name']?></td>
        <h3>Father's Last Name:<?php echo $full_profile['Father_Last_Name']?></h3>
        <h3>Mother's First Name: <?php echo $full_profile['Mother_First_Name']?></h3>
        <h3>Mother's Last Name: <?php echo $full_profile['Mother_Last_Name']?></h3>
        <h3>Gender:<?php echo $full_profile['Gender']?></h3>
        <h3>State of Origin:<?php echo $full_profile['State_of_Origin']?></h3>
        <h3>Institution:<?php echo $full_profile['Institution']?></h3>
        <h3>Level:<?php echo $full_profile['Level']?></h3>
        <h3>CGPA:<?php echo $full_profile['CGPA']?></h3>
        <h3>Occupation:<?php echo $full_profile['Occupation']?></h3>
        <h3>Status:<?php echo $full_profile['Status']?></h3>
        <h3>Reason for joining: <?php echo $full_profile['Reason_for_joining']?></h3>
        <h3>Date Created<?php echo $full_profile['created']?></h3>
        <h3>Date Updated: <?php echo $full_profile['updated']?></h3>
        <form method="POST">
            <button type="submit" name="id" value="<?= $full_profile['Id']?>">Edit</button>
        </form>
        <a href="form_project_editProfile.php?id=<?= $full_profile['Id']; ?>">EDIT</a>
    </div>
</div>