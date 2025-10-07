<?php
/**
 * ACF Field Groups for the Pchelka Theme
 *
 * @package Pchelka
 */

if( function_exists('acf_add_local_field_group') ):

// Field Group: Service Fields
acf_add_local_field_group(array(
	'key' => 'group_service_fields',
	'title' => 'Service Fields',
	'fields' => array(
		array(
			'key' => 'field_service_price_label',
			'label' => 'Price Label',
			'name' => 'price_label',
			'type' => 'text',
			'default_value' => 'Прием от',
		),
		array(
			'key' => 'field_service_price_value',
			'label' => 'Price Value',
			'name' => 'price_value',
			'type' => 'text',
            'prepend' => '₽',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'service',
			),
		),
	),
));

// Field Group: Doctor Fields
acf_add_local_field_group(array(
	'key' => 'group_doctor_fields',
	'title' => 'Doctor Fields',
	'fields' => array(
		array(
			'key' => 'field_doctor_specialty',
			'label' => 'Specialty',
			'name' => 'specialty',
			'type' => 'text',
            'placeholder' => 'Терапевт, врач высшей категории',
		),
		array(
			'key' => 'field_doctor_experience',
			'label' => 'Experience',
			'name' => 'experience',
			'type' => 'text',
            'placeholder' => 'Опыт работы: 15 лет',
		),
        array(
			'key' => 'field_doctor_rating',
			'label' => 'Rating',
			'name' => 'rating',
			'type' => 'number',
            'min' => 0,
            'max' => 5,
            'step' => 0.1,
		),
		array(
			'key' => 'field_doctor_achievements',
			'label' => 'Achievements',
			'name' => 'achievements',
			'type' => 'repeater',
			'sub_fields' => array(
				array(
					'key' => 'field_doctor_achievement_item',
					'label' => 'Achievement',
					'name' => 'achievement',
					'type' => 'text',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'doctor',
			),
		),
	),
));

// Field Group: Equipment Fields
acf_add_local_field_group(array(
	'key' => 'group_equipment_fields',
	'title' => 'Equipment Fields',
	'fields' => array(
		array(
			'key' => 'field_equipment_manufacturer',
			'label' => 'Manufacturer',
			'name' => 'manufacturer',
			'type' => 'text',
		),
        array(
			'key' => 'field_equipment_features',
			'label' => 'Features',
			'name' => 'features',
			'type' => 'repeater',
			'sub_fields' => array(
				array(
					'key' => 'field_equipment_feature_item',
					'label' => 'Feature',
					'name' => 'feature',
					'type' => 'text',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'equipment',
			),
		),
	),
));

// Field Group: Loyalty Program Fields
acf_add_local_field_group(array(
	'key' => 'group_loyalty_fields',
	'title' => 'Loyalty Program Fields',
	'fields' => array(
        array(
			'key' => 'field_loyalty_benefits',
			'label' => 'Benefits',
			'name' => 'benefits',
			'type' => 'repeater',
			'sub_fields' => array(
				array(
					'key' => 'field_loyalty_benefit_item',
					'label' => 'Benefit',
					'name' => 'benefit',
					'type' => 'text',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'loyalty',
			),
		),
	),
));

// Field Group: Review Fields
acf_add_local_field_group(array(
	'key' => 'group_review_fields',
	'title' => 'Review Fields',
	'fields' => array(
		array(
			'key' => 'field_review_rating',
			'label' => 'Rating',
			'name' => 'rating',
			'type' => 'number',
            'min' => 0,
            'max' => 5,
            'step' => 0.1,
		),
        array(
			'key' => 'field_review_date',
			'label' => 'Date',
			'name' => 'date',
			'type' => 'date_picker',
            'display_format' => 'd F Y',
            'return_format' => 'd F Y',
		),
        array(
            'key' => 'field_review_is_verified',
            'label' => 'Verified Review?',
            'name' => 'is_verified',
            'type' => 'true_false',
            'ui' => 1,
        ),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'review',
			),
		),
	),
));

endif;