<?php 
    $career_history_image = get_field('career_history_image');
    $career_history_sub_title = get_field('career_history_sub_title');
    $career_history_title = get_field('career_history_title');
    $career_history_button = get_field('career_history_button');
?>
<section class="hero-image-block align-full career-history">
    <div class="bg-movil">
        <div class="row no-gutters ">
            <!-- col image -->
            <?php if($career_history_image): ?>
                <div class="col-12 col-md-6">
                    <img class="w-100 image-hero" src="<?php echo $career_history_image['url']; ?>" alt="<?php echo $career_history_image['alt']; ?>">
                </div>
            <?php endif; ?>
            <!-- col-content -->
            <div class="col-12 col-md-6 col-content d-flex align-items-start">
                <div class="content-info p-3">
                    <?php if($career_history_sub_title): ?>
                        <h5 class="subtitle"><?php echo $career_history_sub_title; ?></h5>
                    <?php endif; ?>
                    <?php if($career_history_title): ?>
                        <h2 class="title">Their stories could be your stories</h2>
                    <?php endif; ?>
                    <?php if($career_history_button): ?>
                        <div class="">
                            <a class="button-primary-uppercase row-button" href="<?php echo $career_history_button['url']; ?>"><?php echo $career_history_button['title']; ?> <span /></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>