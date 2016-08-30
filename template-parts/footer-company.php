<?php
/**
 * Template part for displaying The hero banner content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

$footer_voice			= get_field( 'ci_telephone_voice' );
$footer_fax				= get_field( 'ci_telephone_fax' );
$footer_days_1			= get_field( 'ci_office_days_1' );
$footer_hours_1			= get_field( 'ci_office_hours_1' );
$footer_days_2			= get_field( 'ci_office_days_2' );
$footer_hours_2			= get_field( 'ci_office_hours_2' );

?>
					<address>
						<div class="vcard">
							<div class="org fn">
								<div class="organization-name">Signature Healthcare of Volusia</div>
							</div>
							<div class="adr">
								<div class="street-address">801 Beville Rd #201</div>
								<span class="locality">South Daytona</span>, 
								<span class="region">FL</span> 
								<span class="postal-code">32119</span>
							</div>
							<div class="tel">
								<span class="type">Voice</span> <span class="value">386-322-5200</span>
							</div>
							<div class="tel">
								<span class="type">Fax</span> <span class="value">386-767-0062</span>
							</div>
						</div>
						<div class="office-hours">
							<span class="type">Office Hours</span> 
							<div class="hours-entry"><span class="days">Mon - Thurs</span>, <span class="hours">8am - 4pm</span></div>
							<div class="hours-entry"><span class="days">Fri</span>, <span class="hours">8am - 12pm</span></div>
						</div>
					</address>