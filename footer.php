        <footer class="footer">
            <div class="footer__in">

                <h2 class="footer__title"><?php echo get_field('footer_title', 'option'); ?></h2>

                <?php if( have_rows('footer_list', 'option') ): ?>

                    <ul>
                        <?php while( have_rows('footer_list', 'option') ): the_row(); 
                            $item = get_sub_field('item');
                        ?>
                            <li><?php echo $item; ?></li>
                        <?php endwhile; ?>
                    </ul>

                <?php endif; ?>

                <p class="copyright"><?php echo get_field('copyright', 'option'); ?> <?php echo date("Y"); ?>
                </p>
            </div>
        </footer>
        
        <?php wp_footer(); ?>
    </body>
</html>