<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modern
 */

get_header();
?>

    <main id="primary" class="site-main">

        <section class="container pt-5">
            <h2 class="text-muted font-weight-bold">Base Colors</h2> 

            <div class="card-deck mb-5 pt-5">

                <div class="card text-white bg-primary col-12 col-md-4">
                    <div class="card-body py-5">
                        <h5 class="card-title">Brand Color Primary</h5>
                        <p class="card-text">/dev/assets/css/3-base/_variables.scss</p>
                    </div>
                </div>
            
                <div class="card text-white bg-secondary border-0 col-12 col-md-4">
                    <div class="card-body py-5">
                        <h5 class="card-title">Brand Secondary color</h5>
                        <p class="card-text">/dev/assets/css/3-base/_variables.scss</p>
                    </div>
                </div>

                <div class="card bg-third text-black col-12 col-md-4">
                    <div class="card-body py-5">
                        <h5 class="card-title text-black">Brand Third color</h5>
                        <p class="card-text text-black">/dev/assets/css/3-base/_variables.scss</p>
                    </div>
                </div>

            </div>

            <h4 class="text-muted mb-4">Validation and User feedback</h4> 
            <div class="card-deck mb-5">
                
                <div class="card bg-success text-white text-center col-12 col-md-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Success</h5>
                    </div>
                </div>

                <div class="card bg-danger text-white text-center col-12 col-md-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Danger</h5>
                    </div>
                </div>

                <div class="card bg-warning text-white text-center col-12 col-md-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Warring</h5>
                    </div>
                </div>

                <div class="card bg-info text-white text-center col-12 col-md-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Info</h5>
                    </div>
                </div>

            </div>
        </section>

        <section class="container">
            <h2 class="text-muted font-weight-bold">Typography</h2> 
            
            <div class="card-deck mb-5">
                <div class="card border-0 bg-color-light">
                    <div class="card-body">
                        <h1 class="font-weight-bold hero-title">Aa</h1>
                        <h2 class="font-weight-bold">Source Sans Pro</h2>
                        <h5 class="font-weight-bold">Source Sans Pro <span class="text-muted h6">| Bold | Medium | Regular | lite </span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="container pt-2 pb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-muted">Headings</h2>
                    
                    <h1 class="">H1. Lorem ipsum dolor sit.</h1>
                    <h2 class="">H2. Lorem ipsum dolor sit.</h2>
                    <h3 class="">H3. Lorem ipsum dolor sit.</h3>
                    <h4 class="">H4. Lorem ipsum dolor sit.</h4>
                    <h5 class="">H5. Lorem ipsum dolor sit.</h5>
                    <h6 class="">H6. Lorem ipsum dolor sit.</h6>

                    <h3 class="text-muted mt-4">Paragraphs</h2> 
                    <p>
                        El Mestizo es el primer mercado Gastronómico de Costa Rica, un nuevo concepto de Gastronomía y Ocio, en donde podrás disfrutar, en un mismo lugar, de extraordinarias experiencias culinarias, llenas de cultura y de cocina con rebeldía. Es un punto de encuentro que te permitirá ver el mundo a través de increíbles creaciones exclusivas, hechas por los chefs más talentosos, creativos y experimentales. No. We're on the top. Oh yeah, good luck with that. Oh no! The professor will hit me! But if Zoidberg 'fixes' it… then perhaps gifts! You know the worst thing about being a slave? They make you work, but they don't pay you or let you go.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="text-muted">Forms</h2>
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-muted mb-4">Buttons</h4>
                    </div>

                    <div class="col-12">
                        <div class="row no-gutters">
                            
                        </div>

                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <h5 class="mb-3">Large</h5>

                                <button type="button" href="#" class="btn btn-primary large">primary</button>
                                <button type="button" href="#" class="btn btn-secondary large">secundary</button>
                                <button type="button" href="#" class="btn btn-third large">third</button>
                            </div>

                            <div class="col-6 col-md-4">
                                <h5 class="mb-3">Small</h5>

                                <button type="button" href="#" class="btn btn-primary">Button</button>
                                <button type="button" href="#" class="btn btn-secondary">Button</button>
                                <button type="button" href="#" class="btn btn-third">Button</button>
                            </div>

                            <div class="col-6 col-md-4">
                                <h5 class="mb-3">Stroked</h5>

                                <button type="button" href="#" class="btn btn-outline-primary">Button</button>
                                <button type="button" href="#" class="btn btn-outline-secondary">Button</button>
                                <button type="button" href="#" class="btn btn-outline-third">Button</button>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-12 col-md-6 py-2">
                        <button type="button" href="#" class="btn btn-red-brand mb-md-4 mb-lg-0">BUTTON <i class="fas fa-arrow-right"></i></button>

                        <button type="button" href="#" class="btn btn-red-brand active">BUTTON <i class="fas fa-arrow-right"></i></button>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <h4 class="text-muted mb-4">Inputs</h4>
                    </div>
                    <div class="col-12 col-md-6">
                        <form class="need-validated">
                            <div class="form-group">
                                <label for="" class="label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>

                            <div class="form-group">
                                <label for="" class="label">LABEL</label>
                                <input type="text" class="form-control is-valid" placeholder="NAME">
                            </div>

                            <div class="form-group">
                                <label for="" class="label">LABEL</label>
                                <input type="email" class="form-control is-invalid" placeholder="EMAIL">
                            </div>

                            <div class="form-group">
                                <label for="" class="label">LABEL</label>
                                <textarea class="form-control" rows="5" placeholder="NORMAL / ACTIVE"></textarea>
                            </div>
                        
                        </form>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="" class="label">LABEL</label>
                            <input type="text" class="form-control" placeholder="ACTIVE">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <form action="" class="was-validated">
                            <div class="form-group">
                                <label for="" class="label">LABEL</label>
                                <textarea class="form-control " rows="5" placeholder="SUCCESS"></textarea>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
