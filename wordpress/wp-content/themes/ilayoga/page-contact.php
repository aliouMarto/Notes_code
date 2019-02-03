<?php
/*
  Template Name: Page contact

  */
?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="container">
        <?php the_content(); ?>
    </section>
    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<footer class="licence">
	    <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/"><img alt="Propriété de la 3W Academy" style="border-width:0" src="https://3wa.fr/wp-content/themes/3wa2015/img/logos/big.png" /></a><br /><span>Cet exercice</span> de <a href="https://3wa.fr">3W Academy</a> est mis à disposition <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">pour l'usage personnel des étudiants, Pas de Rediffusion - Attribution - Pas d'Utilisation Commerciale - Pas de Modification - International</a>.<br />Les autorisations au-delà du champ de cette licence peuvent être obtenues auprès de <a href="mailto:contact@3wa.fr" rel="cc:morePermissions">contact@3wa.fr</a>. Les maquettes ont été réalisées par <a href="http://www.justine-muller.fr">Justine Muller</a>.
	</footer>
<?php get_footer(); ?>