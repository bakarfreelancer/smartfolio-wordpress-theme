<?php
/**
 * The 404 template file
 */
get_header();
?>

<div class="container">
    <div class="row py-2">
        <main class="col-sm-9 text-center">
            <h1  style="font-size: 40px">Page Not Found</h1>
            <p>Seems like you are lost!</p>
            <a href="/" style="border:1px solid #000; display: block; width: fit-content; margin: auto; padding: 5px">BACK TO HOME</a>
        </main>
        <aside class="col-sm-3">
            <?php get_sidebar(  );?>
        </aside>
    </div>
</div>

<?php get_footer( ); ?>