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

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/5.4.1/typeit.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js?a=<?php echo time(); ?>"></script>
</body>
</html>
