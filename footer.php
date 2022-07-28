<footer>
	<div class="container">
		<div class="row">
			<p class="footer-copyright text-center m-auto">&copy;
				<?php
					echo date_i18n( __( 'Y', 'multiversus' ) );
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			</p>
		</div>
	</div>
</footer>
</body>
</html>