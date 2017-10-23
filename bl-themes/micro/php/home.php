<!-- Section -->
<section class="content">
        <?php foreach ($pages as $page): ?>
                <article class="page">
                        <?php if( $page->title() ) { ?>
                        <header>
                                <h2><?php echo $page->title() ?></h2>
                        </header>
                        <?php } ?>

                        <?php if( $page->coverImage() ) { ?>
                                <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
                        <?php } ?>

                        <?php echo $page->content() ?>

                        <footer>
                                <?php echo $page->date() ?>
                        </footer>
                </article>
        <?php endforeach ?>
</section>

<!-- Pagination -->
<ul class="pagination">
<?php
	if (Paginator::showPrev()) {
		echo '<li><a href="'.Paginator::prevPageUrl().'">'.$L->get('Next').'</a></li>';
	}

	if (Paginator::showNext()) {
		echo '<li><a href="'.Paginator::nextPageUrl().'">'.$L->get('Previous').'</a></li>';
	}
?>
</ul>
