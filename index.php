<?php get_header(); ?>
<!-- *****BEGIN WP CONTENT***** -->
<section id="showcase">
		<div class="container">
			<h1>Affordable and Professional Web Design</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada eget ante nec mollis.</p>
		</div>
	</section>

	<section id="optinform">
		<div class="container">
			<h1>Get your FREE report: 10 Web Design Principles You Should Know Today!</h1>
			<form>
				<input type="email" placeholder="Enter your email..."/>
				<button type="submit" class="button_1">Send me the Report!</button>
			</form>
		</div>
	</section>

	<section id="Services">
		<div class="container">
			<div class="Box">
				<img src=<?php echo get_theme_file_uri('/images/html.png'); ?> alt="HTML5" width="100" height="100">
				<h3>HTML5</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada eget ante nec mollis.</p>
			</div>
			<div class="Box">
				<img src=<?php echo get_theme_file_uri('/images/CSS.png'); ?> alt="CSS3" width="100" height="100">
				<h3>CSS3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada eget ante nec mollis.</p>
			</div>
			<div class="Box">
				<img src=<?php echo get_theme_file_uri('/images/JS.png'); ?> alt="Javascript" width="100" height="100">
				<h3>Javascript</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada eget ante nec mollis.</p>
			</div>
		</div>
	</section>
<!-- *****END WP CONTENT***** -->
<?php get_footer(); ?>
<!-- *****BEGIN WP CONTENT***** -->
<?php wp_footer(); ?>
</body>
</html>
<!-- *****END WP CONTENT***** -->
