<?php

// PHP 3 In Class Exercise: Dice Game

class Dice {
    private $face_value; // A number from 1 to 6

    function __construct() {
        $this->face_value = 6; // Dice always start with 6 facing up
    }

    // Roll the die:
    function roll() {
        $this->face_value = rand( 1, 6 ); // set face value to a random number from 1 to 6
    }

    // Return the face value (i.e. the number facing up):
    function get_face_value() {
        return $this->face_value; // Return the current face value
    }
}

$d1 = new Dice();
$d2 = new Dice();

?>
<table border="1">
<tr>
	<th>
		Roll #
	</th>
	<th>
		Player 1 Rolled
	</th>
	<th>
		Player 2 Rolled
	</th>
	<th>
		Winner
	</th>
</tr>
<?php
	for ( $i=1; $i <= 10; $i++ ) {
?>
<tr>
	<td>
		<?= $i ?>
	</td>
	<td>
<?php
		$d1->roll();
		echo $d1->get_face_value();
?>
	</td>
	<td>
<?php
		$d2->roll();
		echo $d2->get_face_value();
?>
	</td>
	<td>
<?php
		if ( $d1->get_face_value() > $d2->get_face_value() ) {
			echo "Player 1";
		} else if ( $d2->get_face_value() > $d1->get_face_value() ) {
			echo "Player 2";
		} else {
			echo "Tie!";
		}
?>
	</td>
</tr>
<?php
	}
?>
</table>
