<?php
/**
 * Welcome Page for CF7 Customizer
 *
 * @since 0.0.1
 * @package CFC
 *
 */

$cfc_version = CFC_VERSION;

?>


 <div class="wrap about-wrap">

 	<h1><?php printf( __( 'CF7 Customizer &nbsp;%s' ), $cfc_version ); ?></h1>

 	<div class="about-text">
 		<?php printf( __( 'CF7 Customizer is an intuitive plugin to design your contact forms via WordPress live customizer, right at the front-end.' ), $cfc_version ); ?>
 	</div>

 	<div class="cfc_logo"></div>


 	<!-- <div class="changelog point-releases">
 		<h3><?php echo _n( 'Maintenance and Security Release', 'Maintenance and Security Releases', 4 ); ?></h3>
 		<p><?php printf( _n( '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
 	         '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.', 4 ), '4.2.4', number_format_i18n( 4 ) ); ?>
 			<?php printf( __( 'For more information, see <a href="%s">the release notes</a>.' ), 'http://codex.wordpress.org/Version_4.2.4' ); ?>
 		</p>

 	</div> -->

	<div class="feature-section changelog one-col">


				<h2>Get Started</h2>

				<ul>
					<?php if ( ! defined( 'WPCF7_VERSION' ) ) { ?>
						<li><strong>Step #0:&rarr; </strong><a href="/wp-admin/plugins.php?page=cfc-install-plugins" target="_blank">Install & Activate <code>Contact Form 7</code></a>.</li>
					<?php } ?>

					<li><strong>Step #1:</strong> <a href="/wp-admin/admin.php?page=wpcf7-new" target="_blank">&rarr; Add New Form</a> and <code>SAVE</code> it.</li>
					<li><strong>Step #2:</strong> <code>COPY</code> the shortcode of the form you just created and paste it inside your Contact <a href="/wp-admin/edit.php?post_type=page" target="_blank">Page</a>.</li>
					<li><strong>Step #3:</strong> Go to your contact page(front-end) and open <code>CUSTOMIZER</code> from the admin bar.</li>
					<li><strong>Step #4:</strong> Find and open <code>CF7 Customizer</code> panel and customize your contact forms. Voila!</li>
				</ul>

		 	</div>



 	 <div class="feature-section one-col">

		<h2>What's Inside?</h2>

 	</div>

	<div class="headline-feature feature-video">

		<div class="wistia_responsive_padding" style="padding:48.75% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
		<div id="wistia_a9vgk4oaz2" class="wistia_embed" style="width:100%px;height:100%px;">&nbsp;</div>
		</div></div>
		<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
		<script>
		wistiaEmbed = Wistia.embed("a9vgk4oaz2", {
		  videoFoam: true
		});
		</script>

	</div>

	<div class="feature-section one-col ">
		<div class="cfc_subscribe">
			<div class="cfc_subscribe__first">
				<img src="<?php echo CFC_URL . '/assets/admin/inc/welcome/assets/img/logo_transparent.png' ?>" style="width: 10rem;">
			</div>
			<div class="cfc_subscribe__second">
				<div>
					<p>Now if you GENUINELY like this plugin then it would be a HUGE help if you left a 5 star rating & review. It might seem insignificant, but it helps more than you might think.</p>
					<a style="background: #fff;padding: 0.6rem;text-decoration: none;" href="https://wordpress.org/support/plugin/cf7-customizer/reviews/?filter=5#new-post" target="_blank">→ Rate WordPress Form Customizer</a>
				</div>
			</div>
			<!-- /.cfc_subscribe__second -->
		</div>
		<!-- /.cfc_subscribe -->
	 </div>
	<div class="changelog feature-section two-col">
		<div class="col">
			<img src="<?php echo CFC_URL . '/assets/admin/inc/welcome/assets/img/1.png'; ?>" />
			<h3><?php _e( 'Form Text & BG Colors' ); ?></h3>
			<p><?php _e( 'Customize form\'s text color, background color, add a background image or chnage the font-size.' ); ?></p>
		</div>

		<div class="col">
			<img src="<?php echo CFC_URL . '/assets/admin/inc/welcome/assets/img/2.png'; ?>" />
			<h3><?php _e( 'Form Padding, Margin & Border' ); ?></h3>
			<p><?php _e( 'Add padding, margin or even border to your form, customize the border color.' ); ?></p>
		</div>
	</div>





	<div class="changelog feature-section two-col">
		<div class="col">
			<img src="<?php echo CFC_URL . '/assets/admin/inc/welcome/assets/img/3.png'; ?>" />
			<h3><?php _e( 'Input Field Styling' ); ?></h3>
			<p><?php _e( 'Style the input fields of a form by adding width, colors, border, padding and margins.' ); ?></p>
		</div>

		<div class="col">
			<img src="<?php echo CFC_URL . '/assets/admin/inc/welcome/assets/img/4.png'; ?>" />
			<h3><?php _e( 'Button Styling' ); ?></h3>
			<p><?php _e( 'Customize the form button with colors, border, even change the hover state colors.' ); ?></p>
		</div>
	</div>


	 	<!-- <div class="feature-section one-col">


			<h2>Get Started</h2>

			<ul>
				<?php if ( ! defined( 'WPCF7_VERSION' ) ) { ?>
					<li><strong>Step #1:</strong><a href="/wp-admin/plugins.php?page=cfc-install-plugins" target="_blank">&rarr; Install & Activate <code>Contact Form 7</code></a>.</li>
				<?php } ?>
				<li><strong>Step #1:</strong> <a href="/wp-admin/admin.php?page=wpcf7-new" target="_blank">&rarr; Add New Form</a> and <code>SAVE</code> it.</li>
				<li><strong>Step #2:</strong> <code>COPY</code> the shortcode of the form you just created and paste it inside your Contact <a href="/wp-admin/edit.php?post_type=page" target="_blank">Page</a>.</li>
				<li><strong>Step #3:</strong> Go to your contact page(front-end) and open <code>CUSTOMIZER</code> from the admin bar.</li>
				<li><strong>Step #4:</strong> Find and open <code>CF7 Customizer</code> panel and customize your contact forms. Voila!</li>
			</ul>

	 	</div> -->

		<div class="feature-section one-col ">

			<div class="cfc_subscribe">

				<div class="cfc_subscribe__first">

					<img src="<?php echo CFC_URL . '/assets/admin/inc/welcome/assets/img/logo_transparent.png' ?>" style="width: 10rem;">

				</div>

				<div class="cfc_subscribe__second">
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//worwox.us2.list-manage.com/subscribe/post?u=c167b1ee0e48862e6a9ab2b6d&amp;id=faa4d2f95a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">

					<div class="mc-field-group">
						<label for="mce-EMAIL" style="
													    display: table;
													    width: 100%;
													    text-transform: uppercase;
													    font-size: 1.4rem;
													    font-family: OpenSans;
													    margin: 3rem 0 0;
													">
													Signup to get more CF7 Addons </label>
						<p>I hate spam more than you. Pinky promise. No SPAM! Hardly one email per month.</p>
						<input type="email" value="<?php echo get_option( 'admin_email' , 'email@address.com' ) ?>" name="EMAIL" class="required email" id="mce-EMAIL" style="
													    display: table-cell;
													    width: 100%;
													    margin: 1rem 0;
													    border: 0;
													    padding: 1rem;
													">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_c167b1ee0e48862e6a9ab2b6d_faa4d2f95a" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="
													    display: table-cell;
													    width: 100%;
													    padding: 1rem;
													    border: 0;
													    border-radius: 0;
													    height: 3.5rem;
													    text-transform: uppercase;
													    background-color: #FFFFFF;
													"></div>
					    </div>
					</form>
					</div>
					<!--End mc_embed_signup-->

				</div>
				<!-- /.cfc_subscribe__second -->

			</div>
			<!-- /.cfc_subscribe -->

		 </div>


 </div> <!-- Last Div -->
