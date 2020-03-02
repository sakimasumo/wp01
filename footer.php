<!-- contents -->
</div>
<aside>
	<div class="widget widget_search">
		<?php get_search_form()?>
			</div>
			<?php dynamic_sidebar()?>
		</aside>
</main>
<footer>
<p>Copyright &copy; ZDRiVE, K.K. All rights reserved.</p>
</footer>
<?php
if (function_exists('wptouch_switch')) {
    wptouch_switch();
    remove_action( 'wp_footer', 'wptouch_switch' );
}
?>
</div>
<?php wp_footer()?>
</body>
</html>
