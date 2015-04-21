<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CMP3011
 */
?>

</div>

<footer>
    <section class="contactinfo">
        <p>15 N. Main St., Unit C-14, Bellingham MA 02019</P>
        <p>&copy;2014 LOVE Pole Fitness</p>
    </section>
    <section class="socialmedia">
        <a href="https://www.facebook.com/lovepolefitness" target="_blank">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/facebook_icon.png" alt="facebook" class="facebook"></a>
        <a href="https://www.youtube.com/channel/UC5aUh-Dn_Nb3NvMM6JiMUhA" target="_blank">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/youtube_icon.png" alt="youtube" class="youtube"></a>
        <a href="mailto:lovepolefitness@hotmail.com" target="_blank">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/email.png" alt="email" class="email"></a>
        <a href="http://www.twitter.com/@lovepolefit" target="blank">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/twitter.png" alt="twitter" class="twitter"></a>
    </section>
</footer>

<?php wp_footer(); ?>

</body>
</html>
