<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage hejwess
 */
?>

	</div><!-- .site-content -->

	<footer class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<img src="" alt="" />
			</div>

			<div class="col-xs-12 col-md-3">
				<h4>Quick links</h4>
				<ul>
					<li>
						<a href="#" title="">Link 1</a>
					</li>
					<li>
						<a href="#" title="">Link 2</a>
					</li>
					<li>
						<a href="#" title="">Link 3</a>
					</li>
					<li>
						<a href="#" title="">Link 4</a>
					</li>
					<li>
						<a href="#" title="">Link 5</a>
					</li>
					<li>
						<a href="#" title="">Link 6</a>
					</li>
				</ul>
			</div>

			<div class="col-xs-12 col-md-3">
				<h4>Strategic leadership</h4>
				<ul>
					<li>
						<a href="#" title="">About me</a>
					</li>
					<li>
						<a href="#" title="">Services</a>
					</li>
					<li>
						<a href="#" title="">Events</a>
					</li>
					<li>
						<a href="#" title="">Blog</a>
					</li>
					<li>
						<a href="#" title="">Contact</a>
					</li>
					<li>
						<a href="#" title="">Login</a>
					</li>
				</ul>
			</div>

			<div class="col-xs-12 col-md-3">
				<h4>Contact</h4>
				<p>telefone 1<p>
				<p>telefone 2<p>
				<h4>Sign up for a newsletter</h4>
				<form method="post" action="">
					<input type="email" name="email" required />
					<button type="submit">Submit</button>
				</form>
			</div>

		</div>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
