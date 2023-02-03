<?php
    session_start();
?>
<style>
    .heading{
        margin: auto;
        display: flex;
        justify-content: space-between;
        height:5%;
    }
    .logo{
        background-image: url(../Form_Project/Logo.svg);
        background-size:contain;
        background-repeat: no-repeat;
        width:50%;
    }
    .left{
        display: flex;
        width:160px;
        justify-content: space-between;
        margin-right:6px;
        margin-top:6px;
    }
    a{
        text-decoration: none;
    }
    a:hover{
        color:red
        
    }
</style>

<div class='heading'>
    <div class="logo"></div>
    <div class="left">
        <div class="Home"><a href="form_project.php">Home</a></div>
        <div class="Feedback"><a href="form_project_feedback.php">Feedback</a></div>
    </div>
</div>