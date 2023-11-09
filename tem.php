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