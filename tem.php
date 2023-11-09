          <?php if ( have_rows( 'count_down_section' ) ) : ?>
            <?php while ( have_rows( 'count_down_section' ) ) : the_row(); 
                // Get count_down_id
                $count_down_id = get_sub_field('count_down_id');
                if ($count_down_id) { ?>
                    <!-- Count Down Section -->
                        <div class="">
                            <!-- Display count_down content -->
                            <?php if ( $count_down = get_sub_field( 'count_down' ) ) : ?>
                                <?php echo $count_down; ?>
                            <?php endif; ?>
                        </div>
                    <?php
                    } // End if $count_down_id exists
                endwhile; ?>
            <?php endif; ?>









            
<?php if ( have_rows( 'count_down_section' ) ) : ?>
    <?php while ( have_rows( 'count_down_section' ) ) : the_row(); 

        // Get count_down_id
        $count_down_id = get_sub_field('count_down_id');
        if ($count_down_id) { ?>

            <!-- Count Down Section -->
            <section id="<?php if ( $count_down_id = get_sub_field( 'count_down_id' ) ) : ?><?php echo esc_html( $count_down_id ); ?><?php endif; ?>" class="px-6 lg:px-10 overflow-x-hidden bg-gray-100">
                <div class="text-center lg:max-w-7xl mx-auto max-w-2xl py-14 lg:py-20">

                    <!-- Display count_down content -->
                    <?php if ( $count_down = get_sub_field( 'count_down' ) ) : ?>
                        <?php echo $count_down; ?>
                    <?php endif; ?>

                </div>
            </section>

        <?php
        } // End if $count_down_id exists
    endwhile; ?>
<?php endif; ?>
