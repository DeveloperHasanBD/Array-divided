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
?>
