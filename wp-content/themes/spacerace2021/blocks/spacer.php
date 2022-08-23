<?php
/**
 * Spacer
 *
 *
 */

$mobile = get_sub_field('mobile_height');
$desktop = get_sub_field('desktop_height');
$id = rand(100, 4000);
?>

<div class="spacer-<?php echo $id; ?>">
    <style>
        .spacer-<?php echo $id; ?> {
            margin-top: <?php echo $mobile; ?>px;
        }
        @media (min-width: 800px) {
            .spacer-<?php echo $id; ?> {
                margin-top: <?php echo $desktop; ?>px;
            }
        }
    </style>
</div>
