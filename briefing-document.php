<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header() ?>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.stepform').submit(function(event) {
                    var form=$(".stepform");     
                    event.preventDefault();                                   
                    var formData = new FormData(this);
                    $.ajax({
                        type        : 'POST',
                        url         : '<?php echo home_url(); ?>/wp-content/themes/mosbelocal/briefing-document/briefing-document.php',
                        data        : formData,
                        cache       : false,
                        contentType : false,
                        processData : false,
                        dataType    : 'json',
                        enctype     : 'multipart/form-data',
                        encode      : true,
                        beforeSend: function() {
                            $("#loader").show();
                            $("#loader").html( '<img src="<?php echo home_url(); ?>/wp-content/themes/mosbelocal/briefing-document/loading.gif" />' );
                        },
                        success: function(data) {
                            $("#loader").hide();
                            console.log(data);                            
                            if ( data.file == 'ok' ){    
                                setTimeout("window.open( '<?php echo home_url(); ?>/wp-content/themes/mosbelocal"+data.filepath+"','Download' )", 1000);
                                setTimeout("window.location = '<?php echo home_url(); ?>/webmax-thank-you/';",1500);
                                // document.getElementById('thnks-msg').innerHTML = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Document Submitted. </div>';
                                // var url = '<?php echo home_url(); ?>/wp-content/themes/mosbelocal"+data.filepath+"';
                                //setTimeout("window.location = url;",1500);
                            }
                            if ( data.file == 'not ok' ){ 
                                document.getElementById('thnks-msg').innerHTML = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Business Name already Exists. </div>';           
                            }
                        }    
                    }); 
                    //$('.stepform')[0].reset();     
                });
            });
        </script> 
<section id="contact-page" class="page-content">
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
                                <a href="#finish" type="button" class="btn btn-default btn-circle btn-6">6</a>
                                <p>Finish</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="thnks-msg"></div>                          
                <form class="stepform" method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-toggle="validator" role="form" >                 
                    <div class="setup-content setup-content-1" id="personal">
                        <?php require_once('briefing-document/briefing-document-form/personal.php'); ?>
                    </div> 
                    
                    <div class="setup-content setup-content-2" id="business">
                        <?php require_once('briefing-document/briefing-document-form/business.php'); ?>
                    </div>
                    
                    <div class="setup-content setup-content-3" id="marketing">
                        <?php require_once('briefing-document/briefing-document-form/marketing.php'); ?>
                    </div>
                    
                    <div class="setup-content setup-content-4" id="technical">
                        <?php require_once('briefing-document/briefing-document-form/technical.php'); ?>
                    </div>
                    
                    <div class="setup-content setup-content-5" id="digital">
                        <?php require_once('briefing-document/briefing-document-form/digital.php'); ?>
                    </div>
                    
                    <div class="setup-content setup-content-6" id="finish">
                        <?php require_once('briefing-document/briefing-document-form/finish.php'); ?>
                    </div>
                    <div id="loader" style="display: none;"></div>     
                </form>
                <div class="clientsPara"> 
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
            <?php endif;?>          
    </div>
</section>
<?php get_footer() ?>