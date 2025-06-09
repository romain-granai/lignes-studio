<div class="topnav">

<?php 
    $shownNav = get_field('shown_navigation');
    if($shownNav == 'full-nav'): 
?>

    <nav class="nav nav--main">
        <ul>
            <li>
                <a href="<?php echo get_home_url(); ?>" title="Acceuil">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32">
                        <path part="base-color" fill="currentColor" d="M 18.52 20.58 V 27.77 H 24.85 V 17.84 H 29.64 L 15.98 4.23 L 2.36 17.84 H 7.15 V 27.77 H 13.45 V 20.58 H 18.52 Z"></path>
                    </svg>
                </a>
            </li>

            <?php
                // Récupère l'emplacement du menu "main"
                $locations = get_nav_menu_locations();
                if ( isset( $locations['main'] ) ) {
                    // Récupère tous les items du menu
                    $menu_items = wp_get_nav_menu_items( $locations['main'] );
                    // Identifiant de l'objet courant (page, article, CPT…)
                    $current_id = get_queried_object_id();

                    foreach ( $menu_items as $item ) {
                        // Vérifie si l'item du menu correspond à la page en cours
                        $is_active = ( intval( $item->object_id ) === intval( $current_id ) )
                            ? 'active'
                            : '';

                        printf(
                            '<li class="%s"><a href="%s" title="%s">%s</a></li>',
                            esc_attr( $is_active ),
                            esc_url( $item->url ),
                            esc_attr( $item->title ),
                            esc_html( $item->title )
                        );
                    }
                }
            ?>

        </ul>
    </nav>
    
    <nav class="nav nav--secondary">
        <?php
            wp_nav_menu( array(
                'menu' => 'secondary',
                'container' => false
            ) );
        ?>
        <!-- <ul>
            <li><a href="#">Ressources</a></li>
        </ul> -->
    </nav>

<?php else: ?>

    <nav class="nav nav--back-home">
        <ul>
            <li class="arrow-backward"><a href="<?php echo get_home_url(); ?>" title="Lignes.Studios">Lignes.Studio</a></li>
        </ul>
    </nav>

<?php endif; ?>
</div>