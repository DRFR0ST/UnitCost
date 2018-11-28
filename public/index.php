<?php
add_filter( 'rwmb_meta_boxes', 'pharmacy_meta_boxes' );
function pharmacy_meta_boxes( $meta_boxes )
{
	$meta_boxes[] = array(
		'title'      => __( 'Extra Product Info', 'pharmacy' ),
		'post_types' => 'product',
		'fields'     => array(
			array(
				'id'       => 'unit',
				'name'     => __( 'Unit', 'pharmacy' ),
				'type'     => 'text',
				'datalist' => array(
					'options' => array(
						__( 'Box', 'pharmacy' ),
						__( 'Blister pack', 'pharmacy' ),
						__( 'Packet', 'pharmacy' ),
						__( 'Bottle', 'pharmacy' ),
					),
				),
			),
			array(
				'id'       => 'dosage_form',
				'name'     => __( 'Dosage form', 'pharmacy' ),
				'type'     => 'text',
				'datalist' => array(
					'options' => array(
						__( 'Capsule', 'pharmacy' ),
						__( 'Tablet', 'pharmacy' ),
						__( 'Liquid', 'pharmacy' ),
						__( 'Ointment', 'pharmacy' ),
					),
				),
			),
			array(
				'id'   => 'specification',
				'name' => __( 'Specification', 'pharmacy' ),
				'type' => 'text',
			),
			array(
				'id'   => 'manufacturer',
				'name' => __( 'Manufacturer', 'pharmacy' ),
				'type' => 'text',
			),
			array(
				'id'   => 'distributor',
				'name' => __( 'Distributor', 'pharmacy' ),
				'type' => 'text',
			),
			array(
				'id'   => 'expiry_date',
				'name' => __( 'Expiry date', 'pharmacy' ),
				'type' => 'date',
			),
		),
	);
	return $meta_boxes;
}
add_action( 'admin_init', 'pharmacy_extra_info' );
function pharmacy_extra_info()
{
	if ( $meta = rwmb_meta( 'unit' ) )
	{
		echo '<strong>' . __( 'Unit:', 'pharmacy' ) . "</strong> $meta<br>";
	}
	if ( $meta = rwmb_meta( 'dosage_form' ) )
	{
		echo '<strong>' . __( 'Dosage form:', 'pharmacy' ) . "</strong> $meta<br>";
	}
	if ( $meta = rwmb_meta( 'specification' ) )
	{
		echo '<strong>' . __( 'Specification:', 'pharmacy' ) . "</strong> $meta<br>";
	}
	if ( $meta = rwmb_meta( 'manufacturer' ) )
	{
		echo '<strong>' . __( 'Manufacturer:', 'pharmacy' ) . "</strong> $meta<br>";
	}
	if ( $meta = rwmb_meta( 'distributor' ) )
	{
		echo '<strong>' . __( 'Distributor:', 'pharmacy' ) . "</strong> $meta<br>";
	}
	if ( $meta = rwmb_meta( 'expiry_date' ) )
	{
		echo '<strong>' . __( 'Expiry date:', 'pharmacy' ) . "</strong> $meta<br>";
	}
}