<?php if( have_rows('content') ): ?>
<div class="blocks">
    <?php while( have_rows('content') ): the_row(); ?>
        <?php if( get_row_layout() == 'just_text' ): 
            $text = get_sub_field('text');    
        ?>
            <section class="section section--just-text">
                <div class="block block--just-text">
                    <?php echo $text; ?>
                    <!-- <h2>Au sein de Lignes Studio, mon approche est stratégique, créative et collaborative. Elle repose sur la conviction que l’analyse, la mise en perspective et l’exploration sont fondamentales pour apporter des réponses concrètes à des enjeux spécifiques.&nbsp;<br>
                    <br>Pour gagner en cohérence, en pertinence et en visibilité, j’aligne toujours le fond et la forme, je trace des lignes claires qui permettront de positionner, de différencier, de valoriser et de faire rayonner chaque projet dans son secteur et au-delà.</h2> -->
                </div>
            </section>
        <?php elseif( get_row_layout() == 'dropdowns' ): 
            $colClass = get_sub_field('grid') == 'two-col' ? 'dropdowns--2-col' : '';
        ?>
            <?php if(have_rows('dropdowns')): ?>
            <section class="section section--dropdowns">
                <div class="block block--dropdowns">
                    <ul class="dropdowns <?php echo $colClass; ?>">
                    <?php while( have_rows('dropdowns') ): the_row(); 
                        $label = get_sub_field('label');
                        $content = get_sub_field('content');
                        $bgColor = get_sub_field('color');
                        $isOpenClass = get_sub_field('is_open') ? 'dropdown--is-open': '';
                    ?>
                        <li class="dropdown <?php echo $isOpenClass; ?>" style="--bg-color: <?php echo $bgColor; ?>">
                            <button class="dropdown__trigger">
                                <h3 class="dropdown__trigger__label"><?php echo $label; ?></h3>
                                <span class="dropdown__trigger__plus-minus"></span>
                            </button>
                            <div class="dropdown__content">
                                <div>
                                    <div>
                                        <?php echo $content; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                </div>
            </section>
            <?php endif; ?>

        <?php elseif( get_row_layout() == 'simple_list' ): 
            $colClass = get_sub_field('grid') == 'two-col' ? 'simple-list--2-col' : '';
        ?>
            <?php if(have_rows('list')): ?>

            <section class="section section--simple-list">
                <div class="block block--simple-list">
                    <ul class="simple-list <?php echo $colClass; ?>">

                        <?php while( have_rows('list') ): the_row(); 
                            $item = get_sub_field('item');
                        ?>

                            <li><?php echo $item; ?></li>
                            
                        <?php endwhile; ?>

                    </ul>
                </div>
            </section>

            <?php endif; ?>

        <?php endif; ?>





    <?php endwhile; ?>
</div>
<?php endif; ?>