<?php 
    $modern_landscape_video = get_field('modern_landscape_video');
    $modern_landscape_title = get_field('modern_landscape_title');
    $franchise_info_group = get_field('franchise_info_group');
    $square_feet_group = get_field('square_feet_group');
    $location_served_group = get_field('location_served_group');
    $modern_landscape_map = get_field('modern_landscape_map');
?>

<div class="modern-landscape-container py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-2">
                <?php 
                    if($modern_landscape_video){
                        echo $modern_landscape_video;
                    }
                ?>
            </div>
            <div class="col-12 modern-landscape-container__map-container" style="background-image:url(<?php echo $modern_landscape_map['url']; ?>);">
                <?php if($modern_landscape_title): ?>
                    <h2 class="modern-landscape-container__main-title font-weight-bold white-color font-family-soucer-sans-pro text-center mb-5 mb-md-4"><?php echo $modern_landscape_title; ?></h2>
                <?php endif; ?>
                <div class="modern-landscape-container__info-container">
                    <div class="container">
                        <div class="row">
                            <?php if($franchise_info_group): ?>
                                <div class="col-4 text-center d-flex flex-column justify-content-start align-items-center py-md-3 px-md-5">
                                    <span class="modern-landscape-container__text white-color font-weight-bold font-family-soucer-sans-pro text-center line-height-1-4"><?php echo $franchise_info_group['franchise_info_group_title']; ?></span>
                                    <span class="modern-landscape-container__text modern-landscape-container__text--sm-desktop white-color font-family-soucer-sans-pro text-center line-height-1-4"><?php echo $franchise_info_group['franchise_info_group_description']; ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if($square_feet_group): ?>
                                <div class="col-4 text-center d-flex flex-column justify-content-start align-items-center py-md-3 px-md-5 modern-landscape-container__info-container-border">
                                    <span class="modern-landscape-container__text modern-landscape-container__text--square-feet white-color font-weight-bold font-family-soucer-sans-pro text-center line-height-1-4 mb-2"><?php echo $square_feet_group['square_feet_group_title']; ?></span>
                                    <span class="modern-landscape-container__text modern-landscape-container__text--sm-desktop white-color font-family-soucer-sans-pro text-center line-height-1-4"><?php echo $square_feet_group['square_feet_group_description']; ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if($location_served_group): ?>
                                <div class="col-4 text-center d-flex flex-column justify-content-start align-items-center py-md-3 px-md-5">
                                    <span class="modern-landscape-container__text white-color font-weight-bold font-family-soucer-sans-pro text-center line-height-1-4"><?php echo $location_served_group['location_served_group_title']; ?></span>
                                    <span class="modern-landscape-container__text modern-landscape-container__text--sm-desktop modern-landscape-container__map-location white-color font-family-soucer-sans-pro text-center line-height-1-4"><?php echo $location_served_group['location_served_group_description']; ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>