<?php 
$pks_gallery_one = get_field('pks_gallery_one');

    $count_item = count($pks_gallery_one);

    $first_items    = array();
    $second_items   = array();
    $divider        = ceil($count_item / 2);

    $first_items      = array_slice($pks_gallery_one, 0, $divider);
    if ($count_item > 1) {
        $second_items      = array_slice($pks_gallery_one, $divider, $count_item);
    }


        // another problem maximum 5 index in each array

	$arr        = [1, 2, 3, 334, 5, 6, 7, 8, 9, 10, 131];
	$total      = count($arr);
	
	$my2DArray = [];
	
	for ($j = 0; $j < $total; $j++) {
	    $indexed                = floor($j / 5);
	    $my2DArray[$indexed][]  = $arr[$j];
	}
	
	echo '<pre>';
	print_r($my2DArray);
	echo '</pre>';
	


        
?>
