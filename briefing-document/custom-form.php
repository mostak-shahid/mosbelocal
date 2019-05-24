<?php 
global $dumketo;
?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.directory-form').submit(function(event) {
            var formData = {
                'name' 	                : $('input[name=name]').val(),
                'details'               : $('input[name=details]').val(),
                'email'                 : $('input[name=email]').val(),
                'phone'                 : $('input[name=phone]').val(),                
            };
            $.ajax({
                type 		: 'POST',
                url 		: '<?php echo get_template_directory_uri(); ?>/briefing-document/custom-form-ajax.php',
                data 		: formData,
                dataType 	: 'json',
                encode 		: true
            })
            .done( function(data) {
                console.log(data);
                if ( data.file == 'ok' ){      
                	document.getElementById('thnks-msg').innerHTML = '<div class="alert alert-warning alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Mail Sent Successfully </div>';          	
			    	//setTimeout("window.location = '<?php //echo $dumketo['download_file']; ?>';",1500);
			    	//setTimeout("window.open('<?php //echo $dumketo['download_file']; ?>','_newtab')", 1500);
			    }
			    if ( data.file == 'not ok' ){ 
			    	document.getElementById('thnks-msg').innerHTML = '<div class="alert alert-warning alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Data Already Exists.</div>';          
			    }
			    $('#contact')[0].reset();
            })            
            event.preventDefault();
        });
    });
</script>

<section class="custom-form">
    <div class="container1">
    	<div class="row">
    		<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
    			<div id="thnks-msg"></div>
    		</div>
			<form action="" method="POST" id="contact" class="directory-form">
				<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
					<div id="name-group" class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Business Name" required>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
					<div  id="details-group" class="form-group">
						<input type="text" id="details" name="details" id="details" class="form-control" placeholder="Business Owner Name" required>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
					<div id="email-group" class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Business Email" required>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
					<div id="phone-group" class="form-group">
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="Business Phone Number" required>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3"></div>
				<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
					<div class="form-group">
						<input type="submit" id="submit" name="submit" value="" class="btn btn-default hmSub">
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3"></div>
			</form>
    	</div>
    </div>
</section>