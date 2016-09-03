<?php
/**
 * Template part for displaying the company information content in footer.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$footer_organization_name	= get_field( 'ci_company_name', 7 );
$footer_street_address		= get_field( 'ci_street_address', 7 );
$footer_extended_address	= get_field( 'ci_extended_address', 7 );
$footer_locality			= get_field( 'ci_locality', 7 );
$footer_region				= get_field( 'ci_region', 7 );
$footer_postal_code			= get_field( 'ci_postal_code', 7 );

$footer_voice				= get_field( 'ci_telephone_voice', 7 );
$footer_fax					= get_field( 'ci_telephone_fax', 7 );

$footer_days_1				= get_field( 'ci_office_days_1', 7 );
$footer_hours_1				= get_field( 'ci_office_hours_1', 7 );
$footer_days_2				= get_field( 'ci_office_days_2', 7 );
$footer_hours_2				= get_field( 'ci_office_hours_2', 7 );

?>

<address>
	<div class="vcard">
		<div class="org fn">
			<div class="organization-name"><?php echo $footer_organization_name; ?></div>
		</div>
		<div class="adr">
			<div class="street-address"><?php echo $footer_street_address; ?></div>
			<?php echo !empty( $footer_extended_address ) ? '<div class="street-address">' . $footer_extended_address . '</div>' : ''; ?>
			<span class="locality"><?php echo $footer_locality; ?></span>, 
			<span class="region"><?php echo $footer_region; ?></span> 
			<span class="postal-code"><?php echo $footer_postal_code; ?></span>
		</div>
		<div class="tel">
			<span class="type">Voice</span> <span class="value"><?php echo $footer_voice; ?></span>
		</div>
		<?php if( !empty( $footer_fax ) ) : ?>
		<div class="tel">
			<span class="type">Fax</span> <span class="value"><?php echo $footer_fax; ?></span>
		</div>
		<?php endif; ?>
	</div>
	<div class="office-hours">
		<span class="type">Office Hours</span> 
		<div class="hours-entry"><span class="days"><?php echo $footer_days_1; ?></span>, <span class="hours"><?php echo $footer_hours_1; ?></span></div>
		<?php if( !empty( $footer_days_2 ) ) : ?>
		<div class="hours-entry"><span class="days"><?php echo $footer_days_2; ?></span>, <span class="hours"><?php echo $footer_hours_2; ?></span></div>
		<?php endif; ?>
	</div>
</address>
