<?php
    function greet($name, $color) {
        echo"<p>Greetings, my name is $name and my favorite color is $color </p>";
    }

    greet('John', 'blue');
    greet('Jane', 'green');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description');?></p>

<p>Hi, my name is <?php echo $myName; ?></p>
<p>Hi, my name is <?php echo $visionMembers[0]?></p>

<?php
    $myName = "Orion";
    $visionMembers = array('John', 'Jane', 'Bob', 'Jimmy');

    $number = 1;

    while($number < 101 ) {
        echo "<li>$number</li>";
        $number++;
    }
?>

<?php
    $teamNames = array('John', 'Jane', 'Bob', 'Jimmy');
    $count = 0;

    while($count < count($teamNames)){
        echo "<li> Greetings, my name is $teamNames[$count]</li>";
        $count++;
    }

?>




