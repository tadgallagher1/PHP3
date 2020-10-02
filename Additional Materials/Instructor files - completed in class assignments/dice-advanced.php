<?php

// PHP 3 In Class Exercise: Dice Game (advanced version)

class Dice {
    private $face_value; // A number from 1 to 6
    private $num_sides; // How many sides this die has

    function __construct( $sides ) {
    	$this->num_sides = $sides;
        $this->face_value = 1;
    }

    // Roll the die:
    function roll() {
        $this->face_value = rand( 1, $this->num_sides ); // set face value to a random number from 1 to $num_sides
    }

    // Return the face value (i.e. the number facing up):
    function get_face_value() {
        return $this->face_value; // Return the current face value
    }
}

$d1 = new Dice( 10 );
$d2 = new Dice( 5 );

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
