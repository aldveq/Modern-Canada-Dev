<?php
    $download_pdf_fact_sheet_form_title = get_field('download_pdf_fact_sheet_form_title');
    $download_pdf_fact_sheet_form_description = get_field('download_pdf_fact_sheet_form_description');
    $download_pdf_fact_sheet_form_pdf_file = get_field('download_pdf_fact_sheet_form_pdf_file');
?>

<section class="download-pdf-fact-sheet-form-container py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center justify-content-lg-start align-items-lg-start">
                <?php 
                    if($download_pdf_fact_sheet_form_title):
                        ?>
                            <h1 class="font-family-soucer-sans-pro font-weight-bold primary-text-color"><?php echo $download_pdf_fact_sheet_form_title; ?></h1>
                        <?php
                    endif;
                ?>
                <?php
                    if($download_pdf_fact_sheet_form_description):
                        ?>
                            <p class="text-center text-lg-left"><?php echo $download_pdf_fact_sheet_form_description; ?></p>
                        <?php
                    endif;
                ?>
            </div>
            <div class="col-12 col-lg-8 d-flex justify-content-center align-items-center justify-content-lg-end  align-items-lg-end">
                <form class="form-inline download-pdf-fact-sheet-form-container__form needs-validation" method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/forms/download-pdf-fact-sheet-form.php" id="downloadPDFFileForm" novalidate>
                    <div class="form-group position-relative mr-0 mr-md-3 mb-sm-3 mb-md-0 mb-lg-4">
                        <label for="name" class="connect-with-us-container__label download-pdf-fact-sheet-form-container__label"><?php echo pll__('Name'); ?></label>
                        <input type="text" class="form-control form-control connect-with-us-container__input download-pdf-fact-sheet-form-container__input" name="name" id="name" required>
                        <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    </div>
                    <div class="form-group position-relative mr-0 mr-md-3 mb-sm-3 mb-md-0 mb-lg-4">
                        <label for="email" class="connect-with-us-container__label download-pdf-fact-sheet-form-container__label"><?php echo pll__('E-mail Address'); ?></label>
                        <input type="email" class="form-control form-control connect-with-us-container__input download-pdf-fact-sheet-form-container__input" name="email" id="email" required>
                        <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    </div>
                    <button type="submit" class="btn btn-primary connect-with-us-container__submit download-pdf-fact-sheet-form-container__submit mb-lg-4"><i class="icon-paper-plane"></i></button>
                </form>
                <?php
                    if($download_pdf_fact_sheet_form_pdf_file):
                        ?>
                            <a href="<?php echo $download_pdf_fact_sheet_form_pdf_file['url']; ?>" class="btn btn-primary connect-with-us-container__submit download-pdf-fact-sheet-form-container__submit download-pdf-fact-sheet-form-container__pdf-file-button mx-0 mb-lg-4" id="pdfFileButton" download><?php echo pll__('Download file'); ?></a>
                        <?php
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>