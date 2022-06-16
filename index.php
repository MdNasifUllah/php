
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I am here </h1>

<?php
    $msg = 'hello world';
    echo $msg;
    $msg2 = ' this';
    $msg3 = ' PHP msg';
    $msg4 = ' NASIF';

    echo $msg2." is".$msg3;

    
?>
        <h1>hello world from 
            <?php echo $msg4. '<br />' ; ?> 
        </h>
<?php
    $str="hello world from MIST";
    echo $str. '<br />'; 
    echo strlen($str). '<br />';
    echo str_word_count($str). '<br />';

    // array

    $students=[
        'Nasif'=>22,
        'Asif'=>25,
        'Saif'=>30   
    ];

    foreach[ $students as $name=>$roll]
    {
        echo 
    }
?>

</body>
</html>