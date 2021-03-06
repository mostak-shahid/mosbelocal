<?php /*Template Name: Form Template*/ ?>
<?php get_header() ?>
<section id="page" class="page-content">
    <div class="content-wrap">
            <?php if ( have_posts() ) :?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php if (has_post_thumbnail()):?>
                        <div class="page-img-container">
                            <?php the_post_thumbnail('blog-image-full', array('class' => 'img-fluid img-blog img-centered'))?>
                        </div>
                    <?php endif;?>                      
                    <div class="container">
                        <?php get_template_part( 'content', 'page' ) ?>


                        <div class="visible-md visible-lg">
                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                        <a href="#personal" type="button" class="btn btn-primary btn-circle btn-1">1</a>
                                        <p>Personal</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#business" type="button" class="btn btn-default btn-circle btn-2" disabled="disabled">2</a>
                                        <p>Business</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#marketing" type="button" class="btn btn-default btn-circle btn-3" disabled="disabled">3</a>
                                        <p>Marketing</p>
                                    </div>     
                                    <div class="stepwizard-step">
                                        <a href="#technical" type="button" class="btn btn-default btn-circle btn-4" disabled="disabled">4</a>
                                        <p>Technical</p>
                                    </div>        
                                    <div class="stepwizard-step">
                                        <a href="#digital" type="button" class="btn btn-default btn-circle btn-5" disabled="disabled">5</a>
                                        <p>Digital Assets</p>
                                    </div>          
                                    <div class="stepwizard-step">
                                        <a href="#finish" type="button" class="btn btn-default btn-circle btn-6" disabled="disabled">6</a>
                                        <p>Finish</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="thnks-msg"></div>                            
                        <form class="stepform" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-toggle="validator" role="form">                    
                            <div class="row setup-content setup-content-1" id="personal">
                                <?php require_once('inner/inner-form/personal.php'); ?>
                            </div> 
                            
                            <div class="row setup-content setup-content-2" id="business">
                                <?php require_once('inner/inner-form/business.php'); ?>
                            </div>
                            
                            <div class="row setup-content setup-content-3" id="marketing">
                                <?php require_once('inner/inner-form/marketing.php'); ?>
                            </div>
                            
                            <div class="row setup-content setup-content-4" id="technical">
                                <?php require_once('inner/inner-form/technical.php'); ?>
                            </div>
                            
                            <div class="row setup-content setup-content-5" id="digital">
                                <?php require_once('inner/inner-form/digital.php'); ?>
                            </div>
                            
                            <div class="row setup-content setup-content-6" id="finish">
                                <?php require_once('inner/inner-form/finish.php'); ?>
                            </div>
                        </form>
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 clientsPara"> 
                            <h3> Clients to provide</h3>
                
                            <p>1. Logo (RAW file if possible, otherwise high quality)</p>
                            <p>2. Headshot of Business Owner</p>
                            <p>3. Headshot of all employees</p>
                            <p>4. Relevant images of your workplace (if brick and motor)</p>
                            <p>5. Relevant Images of you or your employees at work (i.e.)</p>
                            <p>6. Email copy of client testimonials</p>
                        </div>
                    </div>
                <?php endwhile;?>   


            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif;?>          
    </div>
</section>
<?php get_footer() ?>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.stepform').submit(function(event) {
                    var form=$(".stepform");
                    $.ajax({
                        type        : 'POST',
                        url         : 'https://www.belocal.today/wp-content/themes/dumketo/custom-form/briefing-document.php',
                        data        : form.serialize(),
                        dataType    : 'json',
                        encode      : true
                    })
                    .done( function(data) {
                        console.log(data);
                        if ( data.file == 'ok' ){      
                            setTimeout("window.location = 'https://www.belocal.today/webmax-thank-you/';",1500);
                        }
                        if ( data.file == 'not ok' ){ 
                            document.getElementById('thnks-msg').innerHTML = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Business Name already Exists. </div>';           
                        }
                        $('.stepform')[0].reset();
                    })            
                    event.preventDefault();
                });
            });
        </script> 
    
<?php get_footer(); ?>