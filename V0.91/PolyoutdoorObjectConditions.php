<?php
if(isChecked('accent_tables', 'round_end_table_regular_height'))
	{	
		//$pdf->InsertOption($round_end_table_regular_height->image, $round_end_table_regular_height->title, $round_end_table_regular_height->specs, $round_end_table_regular_height->description);
		$pdf->InsertOption($round_end_table_regular_height);
		

		
		//echo 'image is ' . $round_end_table_regular_height->image . '<br/>';
		//print_r($round_end_table_regular_height);
	}
	
if(isChecked('accent_tables', 'round_end_table_counter_height'))
	$pdf->InsertOption($round_end_table_counter_height);
		
if(isChecked('accent_tables', 'round_end_table_bar_height'))
	$pdf->InsertOption($round_end_table_bar_height);
		
if(isChecked('accent_tables', 'poly_accent_table'))
	$pdf->InsertOption($poly_accent_table);
		
if(isChecked('accent_tables', 'oblong_end_table'))
	$pdf->InsertOption($oblong_end_table);

if(isChecked('accent_tables', 'buffet_table'))
    $pdf->InsertOption($buffet_table);

if(isChecked('accent_tables', 'oval_accent_table'))
	$pdf->InsertOption($oval_accent_table);

if(isChecked('accent_tables', 'candy_table'))
    $pdf->InsertOption($candy_table);

if(isChecked('accent_tables', 'deluxe_poly_bent_accent_table'))
    $pdf->InsertOption($deluxe_poly_bent_accent_table);

if(isChecked('accent_tables', 'cupholder'))
    $pdf->InsertOption($cupholder);

if(isChecked('arbors_and_trellises', 'plymouth_arbor'))
    $pdf->InsertOption($plymouth_arbor);

if(isChecked('arbors_and_trellises', 'jefferson_arbor'))
    $pdf->InsertOption($jefferson_arbor);

if(isChecked('arbors_and_trellises', 'heritage_arbor'))
    $pdf->InsertOption($heritage_arbor);

if(isChecked('arbors_and_trellises', 'kinzer_arbor'))
    $pdf->InsertOption($kinzer_arbor);

if(isChecked('arbors_and_trellises', 'madison_arbor'))
    $pdf->InsertOption($madison_arbor);

if(isChecked('arbors_and_trellises', 'kingston_arbor'))
    $pdf->InsertOption($kingston_arbor);

if(isChecked('arbors_and_trellises', 'victorian_arbor'))
    $pdf->InsertOption($victorian_arbor);

if(isChecked('arbors_and_trellises', 'two-hoop_style_arbor'))
    $pdf->InsertOption($two_hoop_style_arbor);

if(isChecked('arbors_and_trellises', 'arch_top_trellis'))
    $pdf->InsertOption($arch_top_trellis);

if(isChecked('arbors_and_trellises', 'five_spoke_trellis'))
    $pdf->InsertOption($five_spoke_trellis);

if(isChecked('arbors_and_trellises', 'square_top_trellis'))
    $pdf->InsertOption($square_top_trellis);

if(isChecked('arbors_and_trellises', 'fairfield_planter_trellis'))
    $pdf->InsertOption($fairfield_planter_trellis);

if(isChecked('arbors_and_trellises', 'ground_stake'))
    $pdf->InsertOption($ground_stake);



if(isChecked('bird_feeders', 'small_double_hopper_feeder'))
    $pdf->InsertOption($small_double_hopper_feeder);

if(isChecked('bird_feeders', 'hopper_feeder_with_sloped_tray'))
    $pdf->InsertOption($hopper_feeder_with_sloped_tray);

if(isChecked('bird_feeders', 'medium_hopper_bird_feeder'))
    $pdf->InsertOption($medium_hopper_bird_feeder);

if(isChecked('bird_feeders', 'large_hopper_feeder'))
    $pdf->InsertOption($large_hopper_feeder);

if(isChecked('bird_feeders', 'large_double_hopper_feeder_with_suet_cages'))
    $pdf->InsertOption($large_double_hopper_feeder_with_suet_cages);

if(isChecked('bird_feeders', 'suet_feeder_with_tail_prop'))
    $pdf->InsertOption($suet_feeder_with_tail_prop);

if(isChecked('bird_feeders', 'double_suet_feeder_with_tail_prop'))
    $pdf->InsertOption($double_suet_feeder_with_tail_prop);

if(isChecked('bird_feeders', 'upside_down_suet_feeder'))
    $pdf->InsertOption($upside_down_suet_feeder);

if(isChecked('bird_feeders', 'small_upside-down_suet_feeder'))
    $pdf->InsertOption($small_upside_down_suet_feeder);

if(isChecked('bird_feeders', 'recycled_plastic_double_suet_feeder'))
    $pdf->InsertOption($recycled_plastic_double_suet_feeder);

if(isChecked('bird_feeders', 'mealworm_feeder'))
    $pdf->InsertOption($mealworm_feeder);

if(isChecked('bird_feeders', 'deluxe_fruit_feeder'))
    $pdf->InsertOption($deluxe_fruit_feeder);

if(isChecked('bird_feeders', 'woodpecker_feeder'))
    $pdf->InsertOption($woodpecker_feeder);

if(isChecked('bird_feeders', 'grand_slam_oriole_feeder'))
    $pdf->InsertOption($grand_slam_oriole_feeder);

if(isChecked('bird_feeders', 'squirrel_in_a_glass_jar_feeder'))
    $pdf->InsertOption($squirrel_in_a_glass_jar_feeder);

if(isChecked('bird_feeders', 'small_post_mount_spindle_feeder'))
    $pdf->InsertOption($small_post_mount_spindle_feeder);

if(isChecked('bird_feeders', 'large_post_mount_spindle_feeder'))
    $pdf->InsertOption($large_post_mount_spindle_feeder);

if(isChecked('bird_feeders', 'hanging_spindle_feeder'))
    $pdf->InsertOption($hanging_spindle_feeder);

if(isChecked('bird_feeders', 'deluxe_gazebo_bird_feeder'))
    $pdf->InsertOption($deluxe_gazebo_bird_feeder);

if(isChecked('bird_feeders', 'pvc_bird_feeder_post'))
    $pdf->InsertOption($pvc_bird_feeder_post);

if(isChecked('bird_feeders', 'hanging_platform_feeder'))
    $pdf->InsertOption($hanging_platform_feeder);

if(isChecked('bird_feeders', 'platform_feeder'))
    $pdf->InsertOption($platform_feeder);

if(isChecked('bird_feeders', 'small_hanging_platform_feeder'))
    $pdf->InsertOption($small_hanging_platform_feeder);

if(isChecked('bird_feeders', 'fly_thru_feeder'))
    $pdf->InsertOption($fly_thru_feeder);

if(isChecked('bird_feeders', 'joshuas_squirrel_feeder'))
    $pdf->InsertOption($joshuas_squirrel_feeder);

if(isChecked('bird_feeders', 'squirrel_feeder'))
    $pdf->InsertOption($squirrel_feeder);

if(isChecked('bird_feeders', 'natural_wood_hanging_spindle_feeder'))
    $pdf->InsertOption($natural_wood_hanging_spindle_feeder);

if(isChecked('bird_feeders', 'natural_wood_small_post_mount_feeder'))
    $pdf->InsertOption($natural_wood_small_post_mount_feeder);



if(isChecked('bird_houses', 'hexagon_bluebird_house'))
    $pdf->InsertOption($hexagon_bluebird_house);

if(isChecked('bird_houses', 'bluebird_nesting_box'))
    $pdf->InsertOption($bluebird_nesting_box);

if(isChecked('bird_houses', 'two-tone_nesting_box_and_feeder'))
    $pdf->InsertOption($two_tone_nesting_box_and_feeder);

if(isChecked('bird_houses', '4_chambered_bat_house'))
    $pdf->InsertOption($four_chambered_bat_house);



if(isChecked('chaise_lounges', 'casual-back_chaise_lounge'))
    $pdf->InsertOption($casual_back_chaise_lounge);

if(isChecked('chaise_lounges', 'comfo-back_chaise_lounge'))
    $pdf->InsertOption($comfo_back_chaise_lounge);



if(isChecked('coffee_tables', 'octagon_coffee_table'))
    $pdf->InsertOption($octagon_coffee_table);

if(isChecked('coffee_tables', 'round_coffee_table'))
    $pdf->InsertOption($round_coffee_table);

if(isChecked('coffee_tables', 'square_coffee_table'))
    $pdf->InsertOption($square_coffee_table);

if(isChecked('coffee_tables', 'rectangle_coffee_table'))
    $pdf->InsertOption($rectangle_coffee_table);

if(isChecked('coffee_tables', '38inch_round_conversation_table'))
    $pdf->InsertOption($thirty_eight_inch_round_conversation_table);

if(isChecked('coffee_tables', 'oblong_coffee_table'))
    $pdf->InsertOption($oblong_coffee_table);

if(isChecked('coffee_tables', 'chat_table'))
    $pdf->InsertOption($chat_table);



if(isChecked('cushions', '21inch_seat_cushion'))
    $pdf->InsertOption($twenty_one_inch_seat_cushion);

if(isChecked('cushions', 'single_comfo_and_cozi-back_seat_cushion'))
    $pdf->InsertOption($single_comfo_and_cozi_back_seat_cushion);

if(isChecked('cushions', 'double_comfo_and_cozi-back_seat_cushion'))
    $pdf->InsertOption($double_comfo_and_cozi_back_seat_cushion);

if(isChecked('cushions', 'comfo-back_chaise_lounge_seat_cushion'))
    $pdf->InsertOption($comfo_back_chaise_lounge_seat_cushion);

if(isChecked('cushions', 'double_casual-back_seat_cushion'))
    $pdf->InsertOption($double_casual_back_seat_cushion);

if(isChecked('cushions', 'three_seat_casual-back_seat_cushion'))
    $pdf->InsertOption($three_seat_casual_back_seat_cushion);

if(isChecked('cushions', 'casual-back_chaise_lounge_seat_cushion'))
    $pdf->InsertOption($casual_back_chaise_lounge_seat_cushion);

if(isChecked('cushions', 'mission_chair_seat_cushion'))
    $pdf->InsertOption($mission_chair_seat_cushion);

if(isChecked('cushions', 'comfo-back_cushion'))
    $pdf->InsertOption($comfo_back_cushion);

if(isChecked('cushions', 'comfo-back_dining_chair_cushion'))
    $pdf->InsertOption($comfo_back_dining_chair_cushion);

if(isChecked('cushions', 'cozi-back_cushion'))
    $pdf->InsertOption($cozi_back_cushion);

if(isChecked('cushions', 'double_casual-back_cushion'))
    $pdf->InsertOption($double_casual_back_cushion);

if(isChecked('cushions', 'three_seat_casual-back_cushion'))
    $pdf->InsertOption($three_seat_casual_back_cushion);

if(isChecked('cushions', 'casual-back_chaise_lounge_back_cushion'))
    $pdf->InsertOption($casual_back_chaise_lounge_back_cushion);

if(isChecked('cushions', 'neck_pillow'))
    $pdf->InsertOption($neck_pillow);

if(isChecked('cushions', 'lumbar_pillow'))
    $pdf->InsertOption($lumbar_pillow);



if(isChecked('garden_fencing', 'garden_picket_fence'))
    $pdf->InsertOption($garden_picket_fence);

if(isChecked('garden_fencing', 'two_rail_accent_corner_fence'))
    $pdf->InsertOption($two_rail_accent_corner_fence);

if(isChecked('garden_fencing', '1.5inch_or_3inch_classic_picket_accent_corner_fence'))
    $pdf->InsertOption($one_and_one_half_or_three_inch_classic_picket_accent_corner_fence);

if(isChecked('garden_fencing', 'round_accent_corner_fence'))
    $pdf->InsertOption($round_accent_corner_fence);

if(isChecked('garden_fencing', 'split_rail_accent_corner_fence'))
    $pdf->InsertOption($split_rail_accent_corner_fence);

if(isChecked('gliders', 'poly_bent_glider'))
    $pdf->InsertOption($poly_bent_glider);

if(isChecked('gliders', '4foot_poly_bent_glider'))
    $pdf->InsertOption($four_foot_poly_bent_glider);

if(isChecked('gliders', 'deluxe_poly_bent_glider'))
    $pdf->InsertOption($deluxe_poly_bent_glider);


if(isChecked('gliders', 'comfo-back_single_glider'))
    $pdf->InsertOption($comfo_back_single_glider);


if(isChecked('gliders', 'comfo-back_double_glider'))
    $pdf->InsertOption($comfo_back_double_glider);


if(isChecked('gliders', 'comfo-back_double_glider'))
    $pdf->InsertOption($comfo_back_double_glider);


if(isChecked('gliders', 'daisy_single_glider'))
    $pdf->InsertOption($daisy_single_glider);


if(isChecked('gliders', 'daisy_double_glider'))
    $pdf->InsertOption($daisy_double_glider);


if(isChecked('gliders', 'cozi-back_single_glider'))
    $pdf->InsertOption($cozi_back_single_glider);


if(isChecked('gliders', 'cozi-back_double_glider'))
    $pdf->InsertOption($cozi_back_double_glider);


if(isChecked('gliders', 'double_fan_back_glider'))
    $pdf->InsertOption($double_fan_back_glider);


if(isChecked('gliders', 'poly_fan_back_glider'))
    $pdf->InsertOption($poly_fan_back_glider);


if(isChecked('gliders', 'deluxe_slat_back_glider'))
    $pdf->InsertOption($deluxe_slat_back_glider);


if(isChecked('gliders', 'adirondack_gliders'))
    $pdf->InsertOption($adirondack_gliders);


if(isChecked('gliders', 'roll_back_glider'))
    $pdf->InsertOption($roll_back_glider);



if(isChecked('mailboxes_and_lamp_posts', 'fluted_mailbox_post'))
    $pdf->InsertOption($fluted_mailbox_post);

if(isChecked('mailboxes_and_lamp_posts', 'fluted_mailbox_post'))
    $pdf->InsertOption($fluted_mailbox_post);

if(isChecked('mailboxes_and_lamp_posts', 'vinyl_mailbox_post'))
    $pdf->InsertOption($vinyl_mailbox_post);

if(isChecked('mailboxes_and_lamp_posts', 'recessed_panel_mailbox_post'))
    $pdf->InsertOption($recessed_panel_mailbox_post);

if(isChecked('mailboxes_and_lamp_posts', 'vinyl_lamp_posts'))
    $pdf->InsertOption($vinyl_lamp_posts);



if(isChecked('ottomans', 'gliding_footstool'))
    $pdf->InsertOption($gliding_footstool);

if(isChecked('ottomans', 'stationary_footstool'))
    $pdf->InsertOption($stationary_footstool);

if(isChecked('ottomans', 'adirondack_footstool'))
    $pdf->InsertOption($adirondack_footstool);

if(isChecked('ottomans', 'poly_bent_gliding_ottoman'))
    $pdf->InsertOption($poly_bent_gliding_ottoman);

if(isChecked('ottomans', 'foot_stool'))
    $pdf->InsertOption($foot_stool);

if(isChecked('ottomans', 'gliding_ottoman'))
    $pdf->InsertOption($gliding_ottoman);

if(isChecked('ottomans', 'stationary_ottoman'))
    $pdf->InsertOption($stationary_ottoman);




if(isChecked('park_and_garden_benches', 'daisy_garden_bench'))
{

    $pdf->InsertOption($daisy_garden_bench);

}


if(isChecked('park_and_garden_benches', 'garden_bench'))
    $pdf->InsertOption($garden_bench);

if(isChecked('park_and_garden_benches', 'park_bench'))
    $pdf->InsertOption($park_bench);

if(isChecked('park_and_garden_benches', 'deluxe_garden_bench'))
    $pdf->InsertOption($deluxe_garden_bench);

if(isChecked('park_and_garden_benches', 'classic_garden_bench'))
    $pdf->InsertOption($classic_garden_bench);

if(isChecked('park_and_garden_benches', 'slat_back_park_bench'))
    $pdf->InsertOption($slat_back_park_bench);




if(isChecked('patio_and_picnic_table_sets', 'rectangle_garden_classic_iris_table'))
    $pdf->InsertOption($rectangle_garden_classic_iris_table);

if(isChecked('patio_and_picnic_table_sets', 'oblong_garden_classic_table'))
    $pdf->InsertOption($oblong_garden_classic_table);

if(isChecked('patio_and_picnic_table_sets', 'garden_classic_tables'))
    $pdf->InsertOption($garden_classic_tables);

if(isChecked('patio_and_picnic_table_sets', 'round_patio_table'))
    $pdf->InsertOption($round_patio_table);

if(isChecked('patio_and_picnic_table_sets', 'round_pub_table'))
    $pdf->InsertOption($round_pub_table);

if(isChecked('patio_and_picnic_table_sets', 'square_pub_table'))
    $pdf->InsertOption($square_pub_table);

if(isChecked('patio_and_picnic_table_sets', 'square_patio_table'))
    $pdf->InsertOption($square_patio_table);

if(isChecked('patio_and_picnic_table_sets', 'oval_patio_table'))
    $pdf->InsertOption($oval_patio_table);

if(isChecked('patio_and_picnic_table_sets', 'rectangle_patio_table'))
    $pdf->InsertOption($rectangle_patio_table);

if(isChecked('patio_and_picnic_table_sets', 'log_cabin_table'))
    $pdf->InsertOption($log_cabin_table);

if(isChecked('patio_and_picnic_table_sets', 'round_picnic_table'))
    $pdf->InsertOption($round_picnic_table);

if(isChecked('patio_and_picnic_table_sets', 'border_table'))
    $pdf->InsertOption($border_table);

if(isChecked('patio_and_picnic_table_sets', '35inch_straight_bench'))
    $pdf->InsertOption($thirty_five_inch_straight_bench);

if(isChecked('patio_and_picnic_table_sets', 'log_cabin_bench'))
    $pdf->InsertOption($log_cabin_bench);

if(isChecked('patio_and_picnic_table_sets', '23inch_curved_bench'))
    $pdf->InsertOption($twenty_three_inch_curved_bench);

if(isChecked('patio_and_picnic_table_sets', 'poly_octagon_picnic_table'))
    $pdf->InsertOption($poly_octagon_picnic_table);

if(isChecked('patio_and_picnic_table_sets', 'poly_wood_octagon_picnic_table'))
    $pdf->InsertOption($poly_wood_octagon_picnic_table);

if(isChecked('patio_and_picnic_table_sets', 'octagon_picnic_table'))
    $pdf->InsertOption($octagon_picnic_table);

if(isChecked('patio_and_picnic_table_sets', 'rectangular_picnic_table'))
    $pdf->InsertOption($rectangular_picnic_table);

if(isChecked('patio_and_picnic_table_sets', 'vinyl_picnic_table'))
    $pdf->InsertOption($vinyl_picnic_table);

if(isChecked('patio_and_picnic_table_sets', 'garden_mission_bench'))
    $pdf->InsertOption($garden_mission_bench);

if(isChecked('patio_and_picnic_table_sets', 'outdoor_bar'))
    $pdf->InsertOption($outdoor_bar);

if(isChecked('patio_and_picnic_table_sets', 'outdoor_bar_stool'))
    $pdf->InsertOption($outdoor_bar_stool);

if(isChecked('patio_and_picnic_table_sets', 'classic_balcony_set'))
    $pdf->InsertOption($classic_balcony_set);



if(isChecked('planters', 'poly_planter_box'))
    $pdf->InsertOption($poly_planter_box);

if(isChecked('planters', 'poly_heart_planter'))
    $pdf->InsertOption($poly_heart_planter);

if(isChecked('planters', 'vinyl_planter'))
    $pdf->InsertOption($vinyl_planter);

if(isChecked('planters', 'hot_bed'))
    $pdf->InsertOption($hot_bed);

if(isChecked('planters', 'fairfield_planter_trellis'))
    $pdf->InsertOption($fairfield_planter_trellis);



if(isChecked('porch_swings', 'poly_bent_swing'))
    $pdf->InsertOption($poly_bent_swing);

if(isChecked('porch_swings', 'casual-back_double_swing'))
    $pdf->InsertOption($casual_back_double_swing);

if(isChecked('porch_swings', 'casual-back_three_seat_swing'))
    $pdf->InsertOption($casual_back_three_seat_swing);

if(isChecked('porch_swings', 'comfo-back_double_swing'))
    $pdf->InsertOption($comfo_back_double_swing);

if(isChecked('porch_swings', 'cozi-back_double_swing'))
    $pdf->InsertOption($cozi_back_double_swing);

if(isChecked('porch_swings', 'poly_fan_back_swing'))
    $pdf->InsertOption($poly_fan_back_swing);

if(isChecked('porch_swings', 'slat_back_porch_swing'))
    $pdf->InsertOption($slat_back_porch_swing);

if(isChecked('porch_swings', 'deluxe_slat_back_porch_swing'))
    $pdf->InsertOption($deluxe_slat_back_porch_swing);

if(isChecked('porch_swings', 'roll_back_porch_swing'))
    $pdf->InsertOption($roll_back_porch_swing);



if(isChecked('rocking_chairs', 'poly_bent_rocking_chair'))
    $pdf->InsertOption($poly_bent_rocking_chair);

if(isChecked('rocking_chairs', 'comfo-back_rocker'))
    $pdf->InsertOption($comfo_back_rocker);

if(isChecked('rocking_chairs', 'president_rocking_chair'))
    $pdf->InsertOption($president_rocking_chair);

if(isChecked('rocking_chairs', 'deluxe_poly_bent_rocker'))
    $pdf->InsertOption($deluxe_poly_bent_rocker);

if(isChecked('rocking_chairs', 'poly_fan_back_rocker'))
    $pdf->InsertOption($poly_fan_back_rocker);

if(isChecked('rocking_chairs', 'cozi-back_swivel_rocker_dining_chair'))
    $pdf->InsertOption($cozi_back_swivel_rocker_dining_chair);

if(isChecked('rocking_chairs', 'comfo-back_swivel_rocker_dining_chair'))
    $pdf->InsertOption($comfo_back_swivel_rocker_dining_chair);

if(isChecked('rocking_chairs', '2foot_cameron_mill_rocker'))
    $pdf->InsertOption($two_foot_cameron_mill_rocker);

if(isChecked('rocking_chairs', '4foot_cameron_mill_rocker'))
    $pdf->InsertOption($four_foot_cameron_mill_rocker);



if(isChecked('settee_gliders', 'adirondack_settee_glider'))
    $pdf->InsertOption($adirondack_settee_glider);

if(isChecked('settee_gliders', 'standard_adirondack_settee_glider'))
    $pdf->InsertOption($standard_adirondack_settee_glider);

if(isChecked('settee_gliders', 'deluxe_slatback_settee_glider'))
    $pdf->InsertOption($deluxe_slatback_settee_glider);

if(isChecked('settee_gliders', 'roll_back_settee_glider'))
    $pdf->InsertOption($roll_back_settee_glider);

if(isChecked('settee_gliders', 'comfo-back_settee_glider'))
    $pdf->InsertOption($comfo_back_settee_glider);




if(isChecked('stationary_and_folding_chairs', 'cozi-back_swivel_chair'))
    $pdf->InsertOption($cozi_back_swivel_chair);

if(isChecked('stationary_and_folding_chairs', 'cozi-back_dining_chair'))
    $pdf->InsertOption($cozi_back_dining_chair);

if(isChecked('stationary_and_folding_chairs', 'comfo-back_dining_chair'))
    $pdf->InsertOption($comfo_back_dining_chair);

if(isChecked('stationary_and_folding_chairs', 'comfo-back_swivel_chair'))
    $pdf->InsertOption($comfo_back_swivel_chair);

if(isChecked('stationary_and_folding_chairs', 'daisy_side_chair'))
    $pdf->InsertOption($daisy_side_chair);

if(isChecked('stationary_and_folding_chairs', 'garden_mission_dining_chair'))
    $pdf->InsertOption($garden_mission_dining_chair);

if(isChecked('stationary_and_folding_chairs', 'daisy_arm_chair'))
    $pdf->InsertOption($daisy_arm_chair);

if(isChecked('stationary_and_folding_chairs', 'comfo-back_deck_chair'))
    $pdf->InsertOption($comfo_back_deck_chair);

if(isChecked('stationary_and_folding_chairs', 'comfo-back_adirondack'))
    $pdf->InsertOption($comfo_back_adirondack);

if(isChecked('stationary_and_folding_chairs', 'poly_fan_back_chair'))
    $pdf->InsertOption($poly_fan_back_chair);

if(isChecked('stationary_and_folding_chairs', 'folding_adirondack_chairs'))
    $pdf->InsertOption($folding_adirondack_chairs);

if(isChecked('stationary_and_folding_chairs', 'patio_chairs'))
    $pdf->InsertOption($patio_chairs);



if(isChecked('windmills_and_lighthouses', 'garden_spot_windmill'))
    $pdf->InsertOption($garden_spot_windmill);

if(isChecked('windmills_and_lighthouses', 'poly_windmill'))
    $pdf->InsertOption($poly_windmill);

if(isChecked('windmills_and_lighthouses', 'poly_lighthouse'))
    $pdf->InsertOption($poly_lighthouse);




if(isChecked('wishing_wells', 'strasburg_wishing_well'))
    $pdf->InsertOption($strasburg_wishing_well);




/*

SELECT * FROM products

foreach($rows as $row)
{
$product_name = 'product' . $row['id'];
if(isChecked($row['cat2'], $product_name))
{
//need to change PolyoutdoorConfig class and InsertOption functions to reflect the different fields, like specs, sku, colors, etc
$product = new PolyoutdoorConfig($row['cat1'], $row['cat2'], 'placeholder', 'Octagon Coffee Table', 'images/products/coffee_tables/Octagon-Coffee-Table.jpg', 'MODEL:PLACEHLDR123 DIMENSIONS:00" WIDE X 00" HIGH X 00" LONG WEIGHT:00 LBS', 'This is a placeholder description, which means the product you selected has not yet been set up in this system. Please be patient, as this process will take time due to the volume of products.', 244);

$pdf->InsertOption($product);
}

}

 */









?>