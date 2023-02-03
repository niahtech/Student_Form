<?php include 'form_project_header.php'?>
<?php include 'form_project_database.php'?>

<?php
    $stdfname=$stdlname=$fadafname=$fadalname=$modafname=$modalname=$DOB=$email=$phone=$gender=$origin=$Institution=$Level=$CGPA=$origin='';
    $matno=$occupation=$status=$why='';
    $DOBErr=$emailErr=$phoneErr=$genderErr=$originErr=$InstitutionErr=$LevelErr=$CGPAErr=$originErr='';
    $matnoErr=$occupationErr=$statusErr=$whyErr='';
    $fadafnameErr=$modafnameErr=$stdfnameErr='';
    $fadalnameErr=$modalnameErr=$stdlnameErr='';
    //form submit
    if(isset($_POST['submit'])){
        //validate name
        if(empty($_POST['stdfname'])){
            $stdfnameErr='first name is required';
        }
        else{
            $stdfname= filter_input(INPUT_POST,'stdfname',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['stdlname'])){
            $stdlnameErr='last name is required';
        }
        else{
            $stdlname= filter_input(INPUT_POST,'stdlname',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['fadafname'])){
            $fadafnameErr='first name is required';
        }
        else{
            $fadafname= filter_input(INPUT_POST,'fadafname',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['fadalname'])){
            $fadalnameErr='Last name is required';
        }
        else{
            $fadalname= filter_input(INPUT_POST,'fadalname',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['modafname'])){
            $modafnameErr='first name is required';
        }
        else{
            $modafname= filter_input(INPUT_POST,'modafname',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['modalname'])){
            $modalnameErr='Last name is required';
        }
        else{
            $modalname= filter_input(INPUT_POST,'modalname',FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if(empty($_POST['DOB'])){
            $DOBErr='Date of Birth is required';
        }
        else{
            $DOB= filter_input(INPUT_POST,'DOB',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['email'])){
            $emailErr='Email is required';
        }
        else{
            $email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        }
        if(empty($_POST['phone'])){
            $phoneErr='Phone Number is required';
        }
        else{
            $phone= filter_input(INPUT_POST,'phone',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['gender'])){
            $genderErr='Gender is required';
        }
        else{
            $gender= filter_input(INPUT_POST,'gender',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['origin'])){
            $originErr='State of Origin is required';
        }
        else{
            $origin= filter_input(INPUT_POST,'origin',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['Institution'])){
            $InstitutionErr='Institution is required';
        }
        else{
            $Institution= filter_input(INPUT_POST,'Institution',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['Level'])){
            $LevelErr='Level is required';
        }
        else{
            $Level= filter_input(INPUT_POST,'Level',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['CGPA'])){
            $CGPAErr='CGPA is required';
        }
        else{
            $CGPA= filter_input(INPUT_POST,'CGPA',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['matno'])){
            $matnoErr='Matric Number is required';
        }
        else{
            $matno= filter_input(INPUT_POST,'matno',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['occupation'])){
            $occupationErr='Occupation is required';
        }
        else{
            $occupation= filter_input(INPUT_POST,'occupation',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['status'])){
            $statusErr='Status is required';
        }
        else{
            $status= filter_input(INPUT_POST,'status',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(empty($_POST['why'])){
            $whyErr='Occupation is required';
        }
        else{
            $why= filter_input(INPUT_POST,'why',FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if(empty($DOBErr)&& empty($emailErr)&& empty($phoneErr)&&empty($genderErr)&&empty($originErr)&&empty($InstitutionErr)&&empty($LevelErr)&&empty($CGPAErr)&&empty($originErr)&&empty($matnoErr)&&empty($occupationErr)&&empty($statusErr)&&empty($whyErr)&&empty($fadafnameErr)&&empty($modafnameErr)&&empty($stdfnameErr)&&empty($fadalnameErr)&&empty($modalnameErr)&&empty($stdlnameErr)){
            //Add to database
            $sql="INSERT INTO niah (First_Name,Last_Name,Date_of_Birth,Email,Phone_Number,Father_First_Name,Father_Last_Name,Mother_First_Name,Mother_Last_Name,Gender,State_of_Origin,Institution,Level,CGPA,Matric_Number,Occupation,Status, Reason_for_joining)VALUES ('$stdfname','$stdlname','$DOB','$email','$phone','$fadafname','$fadalname','$modafname','$modalname','$gender','$origin','$Institution','$Level','$CGPA','$matno','$occupation','$status','$why')";
            if(mysqli_query($conn,$sql)){
                //success
                header('Location: form_project_feedback.php' );
            }else{
                //error
                echo 'Error'.mysqli_error ($conn);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
        <style>
        .container{
            padding-top: 1%;
            padding-bottom: 1%;
            width:50%;
            margin: auto;
            background-color: rgb(244, 243, 243);
        }
        .head{
            text-align: center;
        }
        .fillform{
            width:80%;
            margin: auto;
        }
        label{
            display: block;
            margin-top:3%;
        }
        input{
            width:99%;
            height:4vh;
        }
        .twonames{
            display: flex;
            justify-content: space-between;
            width:100%;
        }
        .twonames input{
            width:46%;
        }
        .gender label{
            display:inline;
        }
        .gender input{
            width:3%;
            height:2vh;

        }
        select{
            width:100.5%;
            height:6vh;
        }
        textarea{
            width:99%;
        }
        input[type=submit]{
            width:100%;
            background-color: blue;
            border: none;
            border-radius: 0.2em;
            height:6vh;
            color:white;
        }

        .everyerror{
            display: flex;
            margin-top: 1%;
            color:red;
            justify-content: space-between;
        }
        .errorinput{
            border:1px solid red;
            border-radius: 0.2em;
        }


    </style>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <h2 class="head h2">Registration Form</h2>
        <p class="head p">Kindly Fill the Form Below</p>
        <div class="fillform">
            <div>
                <label for="name">Name</label>
                <div class="twonames">
                    <input type="text" name="stdfname" id="" placeholder="First name" class="<?php echo $stdfnameErr ? 'errorinput' : null ?>">
                    <input type="text" name="stdlname" id="" placeholder="Last name" class="<?php echo $stdlnameErr ? 'errorinput' : null ?>" >
                </div>
                <div class="everyerror">
                    <div class="error">
                        <?php echo $stdfnameErr; ?>
                    </div>
                    <div class="errorinputlast">
                        <?php echo $stdlnameErr; ?>
                    </div>
                </div>
            </div>
            <div>
                <label for="DOB">Date of Birth</label>
                <input type="date" name="DOB" id="" class="<?php echo $DOBErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $DOBErr; ?>
                </div>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="" placeholder="Enter your email" class="<?php echo $emailErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $emailErr; ?>
                </div>
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="" placeholder="Enter your phone number" class="<?php echo $phoneErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $phoneErr; ?>
                </div>
            </div>
            <div>
                <label for="fathername">Father's name</label>
                <div class="twonames">
                    <input type="text" name="fadafname" id="" placeholder="First name" class="<?php echo $fadafnameErr ? 'errorinput' : null ?>">
                    <input type="text" name="fadalname" id="" placeholder="Last name"class="<?php echo $fadalnameErr ? 'errorinput' : null ?>">
                </div>
                <div class="everyerror">
                    <div class="error">
                        <?php echo $fadafnameErr; ?>
                    </div>
                    <div class="errorinputlast">
                        <?php echo $fadalnameErr; ?>
                    </div>
                </div>
            </div>
            <div>
                <label for="mothername">Mothers's name</label>
                <div class="twonames">
                    <input type="text" name="modafname" id="" placeholder="First name" class="<?php echo $modafnameErr ? 'errorinput' : null ?>">
                    <input type="text" name="modalname" id="" placeholder="Last name"class="<?php echo $modalnameErr ? 'errorinput' : null ?>">
                </div>
                <div class="everyerror">
                    <div class="error">
                        <?php echo $modafnameErr; ?>
                    </div>
                    <div class="errorinputlast">
                        <?php echo $modalnameErr; ?>
                    </div>
                </div>
            </div>
            <div>
                <label for="Gender">Gender</label>
                <div class="gender">
                    <input type="radio" name="gender" id="" value='M' class="<?php echo $genderErr ? 'errorinput' : null ?>">
                    <label for="male">M</label>
                    <input type="radio" name="gender" id="" value="F" class="<?php echo $genderErr ? 'errorinput' : null ?>">
                    <label for="female">F</label>
                </div>
                <div class="everyerror">
                    <?php echo $genderErr; ?>
                </div>
            </div>
            <div>
                <label for="State of Origin">State of Origin</label>
                <input type="text" name="origin" id="" class="<?php echo $originErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $originErr; ?>
                </div>
            </div>
            <div>
                <label for="Institution">Institution</label>
                <input type="text" name="Institution" id="" class="<?php echo $InstitutionErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $InstitutionErr; ?>
                </div>
            </div>
            <div>
                <label for="Level">Level</label>
                <input type="text" name="Level" id=""class="<?php echo $LevelErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $LevelErr; ?>
                </div>
            </div>
            <div>
                <label for="CGPA">C.G.P.A</label>
                <input type="tel" name="CGPA" id="" class="<?php echo $CGPAErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $CGPAErr; ?>
                </div>
            </div>
            <div>
                <label for="matno">Matric Number</label>
                <input type="text" name="matno" id="" class="<?php echo $matnoErr ? 'errorinput' : null ?>">
                <div class="everyerror">
                    <?php echo $matnoErr; ?>
                </div>
            </div>
            <div>
                <label for="occupation">Occupation</label>
                <select name="occupation" id="" class="<?php echo $occupationErr ? 'errorinput' : null ?>">
                    <option value=""></option>
                    <option value="Student">Student</option>
                    <option value="Trader">Trader</option>
                    <option value="Developer">Developer</option>
                </select>
                <div class="everyerror">
                    <?php echo $occupationErr; ?>
                </div>
            </div>
            <div>
                <label for="status">Status</label>
                <select name="status" id="" class="<?php echo $statusErr ? 'errorinput' : null ?>">
                    <option value=""></option>    
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                </select>
                <div class="everyerror">
                    <?php echo $statusErr; ?>
                </div>
            </div>
            <div>
                <label for="why">Why do you want to Join us</label>
                <textarea name="why" id="" cols="30" rows="10" placeholder="Why do you want to join us" class="<?php echo $whyErr ? 'errorinput' : null ?>"></textarea>
                <div class="everyerror">
                    <?php echo $whyErr; ?>
                </div>
            </div>
            <input type="submit" value="Submit" name="submit">

        </div>
        </form>
    
    </div>

</body>
</html>
    