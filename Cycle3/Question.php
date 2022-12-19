<html>
    <head><H1> QUIZ </H1></head>
    <body>
        <form name="questform" action="" method="post">
            Q1. What is the main component of a computer system?<br>
            <input type="radio" name="q1" value="1">a. Monitor<br>
            <input type="radio" name="q1" value="2">b. Keyboard <br>
            <input type="radio" name="q1" value="3">c. Processor<br>
            <input type="radio" name="q1" value="4">d. Hard Drive<br>
            Q2. What is the main function of an operating system?<br>
            <input type="radio" name="q2" value="1">a. o run applications<br>
            <input type="radio" name="q2" value="2">b. To store data <br>
            <input type="radio" name="q2" value="3">c. To connect to the internet<br>
            <input type="radio" name="q2" value="4">d. To manage the hardware and software resources of a computer<br>
            Q3. What is a computer virus?<br>
            <input type="radio" name="q3" value="1">a. A program that is designed to damage or disrupt the operation of a computer<br>
            <input type="radio" name="q3" value="2">b. A program that is designed to protect a computer from other malicious programs <br>
            <input type="radio" name="q3" value="3">c. A program that is designed to improve the performance of a computer<br>
            <input type="radio" name="q3" value="4">d. A program that is designed to perform a specific task or function<br>
            Q4. What is a computer network?<br>
            <input type="radio" name="q4" value="1">a. A group of computers that are connected together for the purpose of sharing data and resources<br>
            <input type="radio" name="q4" value="2">b. A group of computers that are connected together for the purpose of gaming<br>
            <input type="radio" name="q4" value="3">c. A group of computers that are connected together for the purpose of communicating with each other<br>
            <input type="radio" name="q4" value="4">d. A group of computers that are connected together for the purpose of storing data<br>
            Q5. What is a computer mouse used for?<br>
            <input type="radio" name="q5" value="1">a. To input data into a computer<br>
            <input type="radio" name="q5" value="2">b. To output data from a computer<br>
            <input type="radio" name="q5" value="3">c. To navigate and interact with objects on a computer screen<br>
            <input type="radio" name="q5" value="4">d. To process data within a computer<br>

        <input type="submit" name="submit" value="Submit Answers">
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
if(array_key_exists('submit',$_POST)){
    require_once "Question.php";
    $cs = 0;
    $tq = 5;     
    if($_POST['q1']=="3" ){
    $cs++;}  
    if($_POST['q2']=="4 " ){
        $cs++;}  
        if($_POST['q3']=="1" ){
            $cs++;}  
            if($_POST['q4']=="1" ){
                $cs++;  }
                if($_POST['q5']=="3" ){
                    $cs++;  
                    }
    echo "You answered $cs out of $tq questions";    
                }   
    ?>    
