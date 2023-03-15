<!-- 
Task
Write a validation logic for a simple voting system. Validations to check includes: 
    Check if voter is above 18 years 
    Check if voter has PVC 
    Check if voter’s ward is 020 
    If all checks out, echo “Voter eligible to vote”.
    If any fails, echo why it failed. 
    Push Code to Github and submit link
 -->
<?php
    $age = ""; // Put in appropriate Age to test results
    $pvc = ""; // Boolean, switch between true/false to test results
    $ward = "020"; // Put in appropriate ward to test results

    if ($age < 18) {
        echo "Underaged!, You have to be at least 18yrs Old to Vote";
    } else {
        if ($pvc = false) {
            echo "Oops!, PVC is required to Vote!";
        } else {
            if ($ward != "020") {
                echo "Oops!, Invalid ward. You are not registered to vote in 020";
            } else {
                echo "Voter eligible to vote";
            }
            
        }
    }
    
    
?>