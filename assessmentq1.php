<html>
<head></head>

<body></body>

<form action='assessmentq1.php' method='post'>
<label>User 1</label>
<input type=number name='user1first'>
<input type=number name='user1second'>
<input type=number name='user1third'>
<input type=number name='user1fourth'>
<input type=number name='user1fifth'>
<br>
<label>User 2</label>
<input type=number name='user2first'>
<input type=number name='user2second'>
<input type=number name='user2third'>
<input type=number name='user2fourth'>
<input type=number name='user2fifth'>
<br>
<label>User 3</label>
<input type=number name='user3first'>
<input type=number name='user3second'>
<input type=number name='user3third'>
<input type=number name='user3fourth'>
<input type=number name='user3fifth'>
<input type=submit>
</form>

<?php
$user1arr = [$_POST['user1first'], $_POST['user1second'], $_POST['user1third'], $_POST['user1fourth'], $_POST['user1fifth']];
$user2arr = [$_POST['user2first'], $_POST['user2second'], $_POST['user2third'], $_POST['user2fourth'], $_POST['user2fifth']];
$user3arr = [$_POST['user3first'], $_POST['user3second'], $_POST['user3third'], $_POST['user3fourth'], $_POST['user3fifth']];

function user1display($para){
    echo 'The number of user 1 that is above and equal 5 are ';
    for($i=0; $i<count($para); $i++){
        if($para[$i] >= 5){
            echo $para[$i].", ";
        }
    }
}

function user2display($para){
    echo 'The number of user 2 that is below and equal 5 are ';
    for($i=0; $i<count($para); $i++){
        if($para[$i] <= 5){
            echo $para[$i].", ";
        }
    }
}

function user3display($para1, $para2){

    // to display the number submitted in user 3
    echo 'The number of user 3 are ';
    for($i=0; $i<count($para2); $i++){
        echo $para2[$i].", ";   
    }
    echo '<br>';
    echo 'Between user 1 and 3, the biggest number is  ';
    $max = 0;
    for($i=0; $i<count($para1); $i++){
        if($para1[$i] >= $max){
            $max = $para1[$i];
        }
    } 
    for($i=0; $i<count($para2); $i++){
        if($para2[$i] >= $max){
            $max = $para2[$i];
        }
    }
    echo $max;
}
user1display($user1arr);
user2display($user2arr);
user3display($user1arr,$user3arr);
?>



</html>