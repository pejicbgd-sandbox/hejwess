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

<!--<div class="main-wrap">
	<div class="line black"></div>
</div>

	<footer class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer-logo.png" alt="" />
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
				<p>+34 625 36 42 67<p>
				<p>+34 625 36 42 97<p>
				<h3>Sign up for a newsletter</h3>
				<form method="post" action="">
					<input type="email" placeholder="Email address" name="email" required />
					<button type="submit">Submit</button>
				</form>
				<div class="social">
						<a href="#" title="Facebook">
							<i class="fa">&#xf09a;</i>
						</a>
						<a href="#" title="Twitter">
							<i class="fa">&#xf099;</i>
						</a>
						<a href="#" title="Linkedin">
							<i class="fa">&#xf0e1;</i>
						</a>
						<a href="#" title="Instagram">
							<i class="fa">&#xf16d;</i>
						</a>
						<a href="#" title="Youtube">
							<i class="fa">&#xf16a;</i>
						</a>
				</div>
			</div>

		</div>
	</footer>-->


<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/5.4.1/typeit.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js?a=<?php echo time(); ?>"></script>
</body>
</html>
