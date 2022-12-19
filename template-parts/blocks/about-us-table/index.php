<?php 
    $about_us_table_title = get_field('about_us_table_title');
    $about_us_table_description = get_field('about_us_table_description');
?>
<section class="about-us-table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <?php if($about_us_table_title): ?>
                        <h2 class="text-primary title"><?php echo $about_us_table_title; ?></h2>
                    <?php endif; ?>
                    <?php if($about_us_table_description): ?>
                        <p class="description"><?php echo $about_us_table_description; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="modern-list">

                    <?php 
                        if( have_rows('about_us_table_files') ):
                            while( have_rows('about_us_table_files') ) : the_row();
                                $about_us_table_file = get_sub_field('about_us_table_file');
                                ?>
                                    <div class="item">
                                        <a class="name" target="_blank" href="<?php echo $about_us_table_file['url']; ?>"><?php echo $about_us_table_file['title']; ?></a>
                                        <p class="link">PDF</p>
                                    </div>
                                <?php 
                            endwhile;
                        endif;
                    ?>
                    <div class="mt-2 mb-2 text-right footer">
                        <button class="button-primary">Next</button>
                        <button class="button-primary">Show all</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

