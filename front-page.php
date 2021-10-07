<?php get_header();?>


<h1>Esprit Sud</h1>

<div class="main__container">
    <section class='header'> 
    i<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>
                </div>
                <div class="carré">
                    <span id='carré'>
                        <p>Bienvenue dans l’univers aquatique et décoratif d’Esprit sud by CMTP <br></p>
                        <p>Venez découvrir notre large gamme de produits et surprenez-vous à rêver de votre futur piscine à l’eau pure et crustalline arborée d’arbres exotiques et de sculptures</p>
                    </span>
                </div>
            </div>
     </section>
</div>
<?php get_footer();?>