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









            



<!-- COUNTDOWN ENU  -->












































body{
font-family: 'Libre Baskerville', serif;
}



h1, h2, #go-to-top, #error_404, .nav_menu_link, #banner-badge{
    font-family: 'Antonio', sans-serif;
}

.menu-active{
    transform: translateY(40px);
    transition: transform .4s ease-in;
}


/* Contact Form */
div.wpcf7 p {
    display: inline-flex;
}
div.wpcf7 p label {
	font-size: 14px;
    text-transform: capitalize;
}
.wpcf7-form input {
	border: 1px solid #cecece;
	padding: 4px 12px;
    height: 42px;
    margin-top: 3px;
    display: block;
    width: 100%;
    margin-left: 3px;

}

.wpcf7-form input:focus{
    box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.1);

}
.wpcf7-form input[type="submit"] {
	background-color: #D4AF37;
	color: #ffffff;
	cursor: pointer;
    font-size: 18px;
	text-transform: capitalize;
	text-align: center;
	padding: 10px 35px;
    border: none;
    line-height: 0;
    display: inline-block;
    margin: 0px 0px 0px 3px;
    position: relative;
    bottom: 0;
	border: 2px solid #D4AF37;
    width: 100%;



}

/* .wpcf7-form input[type="submit"]:focus{
    box-shadow: 0px 10px 15px 16px rgba(0,0,0,0.1);
} */

.wpcf7-form div.wpcf7-response-output{
        position: relative;
    bottom: -35px;

}
.wpcf7-form input,
.wpcf7-form input[type="submit"]:focus {
	outline: none;
}

.wpcf7-form input[type="submit"]:hover {
	background-color: #D4AF37;
	border: 2px solid #D4AF37;
    	color: #fff;
}

@media screen and (max-width: 1023px) {

    .wpcf7-form input[type="submit"] {
        position: relative;
    bottom: 0px;
    margin: 15px -50px 15px 0px ;
    }
    .wpcf7-form div.wpcf7-response-output{
        position: relative;
    bottom: 20px;

}
}


#testimonials .swiper-pagination{
    position: relative;
    /* bottom: -30px; */
    
}
#testimonials .swiper-pagination span.swiper-pagination-bullet-active{
    background-color: #D4AF37;

}

body #menu-container{
    /* display: none; */
}
body #header-container #menu-container li:not(:last-of-type){
    display: none;
}
body #header-container #menu-container li:last-of-type{
    /* position: relative;
    bottom: -10px;
    border: 2px solid red; */
}

body #header-container #menu-container li:last-of-type #main_countedown_1  .element_conteiner {
    min-width: 0px;
}

body #header-container #menu-container li:last-of-type .element_conteiner > span.time_left{
    background-color: #D4AF37;
    color: black;
    font-size: 15px;
      /* padding: 10px; */
      display: inline-block;
}
body #header-container #menu-container li:last-of-type .element_conteiner > span.time_description{

    font-size: 15px;
 
}
body #header-container #menu-container li:last-of-type a:first-child div:first-child{
        position: relative;
    top: 10px;

}
body #menu-container li:last-of-type a span#count-remove{
    display:none
}

.countDownAddedHeader {
    padding-top: 0;
    padding-bottom: 0;
}

/* .hide-mobile{
    display: none;
} */

@media screen and (min-width: 1024px) {


    body #header-container #menu-container li:last-of-type .element_conteiner > span.time_left{
  padding: 10px;

}
body #header-container #menu-container {
    display: flex;
    justify-content: end;
    align-items: flex-end;
}
body #header-container #menu-container li:not(:last-of-type){
    display: inline-block;
    position: relative;
    top: -20px;
}


/* .countDownAddedLi{
    top: 0px;
} */

}
/* <span id="count-remove">Count Down</span> */









































add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
    
    // loop
    foreach( $items as &$item ) {
        
        // vars
        $count_down = get_field('count_down_setting', $item);
        
        
        // append count_down
        if( $count_down ) {
            
            $item->title .= $count_down;
            
        }
        
    }
    
    
    // return
    return $items;
    
}
