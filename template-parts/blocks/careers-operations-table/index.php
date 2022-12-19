<?php 
    $careers_operations_main_title = get_field('careers_operations_main_title');
?>

<section class="careers-operations-table" id="careersOperationsTable">
    <?php if($careers_operations_main_title): ?> 
        <div class="bg-primary header-web">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h2 class="title text-white"><?php echo $careers_operations_main_title; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <?php if($careers_operations_main_title): ?> 
            <div class="row header">
                <div class="col-md-12">
                    <div>
                        <h2 class="text-primary title"><?php echo $careers_operations_main_title; ?></h2>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="modern-list" id="careersOperationsTable">
                    <?php

                        $args = array(  
                            'post_type' => 'jobs',
                            'post_status' => 'publish'
                        );

                        $the_jobs_query = new WP_Query($args);

                        if ($the_jobs_query->have_posts()) {
                            while($the_jobs_query->have_posts()) {
                                $the_jobs_query->the_post();
                                ?>
                                    <div class="item">
                                        <div>
                                            <p class="operations"><?php echo the_title(); ?></p>
                                            <p class="description"><?php echo get_field('job_location', get_the_ID()); ?></p>
                                            <p class="description"><?php echo get_field('job_id', get_the_ID()); ?></p>
                                        </div>
                                        <div>
                                            <a href="<?php echo the_permalink(); ?>" class="button-primary"><?php echo pll__('Apply To This Job'); ?></a>
                                        </div>
                                    </div>
                                <?php 
                            }
                        }
                        wp_reset_postdata();
                        wp_reset_query();
                    ?>

                    <div class="mt-2 mb-2 text-right footer">
                        <button class="button-primary" id="nextPage"><?php echo pll__('Next'); ?></button>
                        <button class="button-primary" id="showAll"><?php echo pll__('Show all'); ?></button>
                    </div>
                </div>
            <div>
            <table class="modern-table mb-5">
                <thead>
                    <tr>
                        <th scope="col"><?php echo pll__('Job ID#'); ?></th>
                        <th scope="col"><?php echo pll__('Job Title'); ?></th>
                        <th scope="col"><?php echo pll__('Location'); ?></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $args = array(  
                            'post_type' => 'jobs',
                            'post_status' => 'publish'
                        );

                        $the_jobs_query = new WP_Query($args);

                        if ($the_jobs_query->have_posts()) {
                            while($the_jobs_query->have_posts()) {
                                $the_jobs_query->the_post();
                                ?>
                                    <tr>
                                        <td><?php echo get_field('job_id', get_the_ID()); ?></td>
                                        <td><?php echo the_title(); ?></td>
                                        <td><?php echo get_field('job_location', get_the_ID()); ?></td>
                                        <td><a href="<?php echo the_permalink(); ?>" class="button-primary"><?php echo pll__('Apply To This Job'); ?></a></td>
                                    </tr>
                                <?php 
                            }
                        }
                        wp_reset_postdata();
                        wp_reset_query();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
        