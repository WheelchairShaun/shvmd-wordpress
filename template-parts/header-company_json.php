<?php
/**
 * Template part for displaying the company information content with json+ld in header.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$header_honorific_prefix	= get_field( 'ci_honorific_prefix', 7);
$header_given_name			= get_field( 'ci_given_name', 7);
$header_additional_name		= get_field( 'ci_additional_name', 7);
$header_family_name			= get_field( 'ci_family_name', 7);
$header_honorific_suffix	= get_field( 'ci_honorific_suffix', 7);

$header_photo				= get_field( 'ci_photo');

$header_organization_name	= get_field( 'ci_company_name', 7 );
$header_street_address		= get_field( 'ci_street_address', 7 );
$header_extended_address	= get_field( 'ci_extended_address', 7 );
$header_locality			= get_field( 'ci_locality', 7 );
$header_region				= get_field( 'ci_region', 7 );
$header_postal_code			= get_field( 'ci_postal_code', 7 );

$header_voice				= get_field( 'ci_telephone_voice', 7 );
$header_fax					= get_field( 'ci_telephone_fax', 7 );

$header_maps				= get_field( 'ci_google_maps_url')
?>

	<script type="application/json+ld">
		{
			"@context": "http://schema.org",
			"@type": "Physician",
			"name": "<?php echo !empty( $header_honorific_prefix ) ? $header_honorific_prefix . ' ' : ''; ?><?php echo $header_given_name; ?><?php echo !empty( $header_additional_name ) ? ' ' . $header_additional_name : ''; ?> <?php echo $header_family_name; ?><?php echo !empty( $header_honorific_suffix ) ? ', ' . $header_honorific_suffix : ''; ?>",
			"legalName": "<?php echo $header_organization_name; ?>",
			"alternateName": "Concierge Medicine",
			"description": "Daytona Beach Concierge Doctor",
			"url": "<?php echo get_site_url(); ?>",
			"logo": "<?php echo !empty( $header_photo ) ? $header_photo['url'] : bloginfo( 'template_directory' ) . "/img/hcard.jpg"; ?>",
			"telephone": "<?php echo $header_voice; ?>",
			"faxNumber": "<?php echo $header_fax; ?>",
			"location": "Daytona Beach",
			"maps": "<?php echo $header_maps; ?>",
			"address": 
			{
				"@type": "PostalAddress",
				"streetAddress": "<?php echo $header_street_address; echo !empty( $header_extended_address ) ? ', ' . $header_extended_address : ''; ?>",
				"addressLocality": "<?php echo $header_locality; ?>",
				"addressRegion": "<?php echo $header_region; ?>",
				"postalCode": "<?php echo $header_postal_code; ?>",
				"addressCountry": "USA"
			}
		}
	</script>
