jQuery(document).ready(function ($) {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find( "input[type='text'], input[type='url'], input[type='tel'], input[type='email']" ),
        isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }
        
        if(!/^[A-Za-z ][A-Za-z0-9!@#$%^&* ]*$/.test( $('.pname').val() )) {
            isValid = false;
            $('.pname').closest(".form-group").addClass("has-error");
            $('.pname').after('<span class="help-block">Please insert valid Name.</span>');
        }

        if(!/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( $('.pemail').val() )) {
            isValid = false;
            $('.pemail').closest(".form-group").addClass("has-error");
            $('.pemail').after('<span class="help-block">Please insert valid email.</span>');
        }

        if(!/^[0-9]+$/.test( $('.pphone').val() )) {
            isValid = false;
            $('.pphone').closest(".form-group").addClass("has-error");
            $('.pphone').after('<span class="help-block">Please insert valid Number.</span>');
        }
        

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
        $(".btn-prev").click(function(){
	        var prev_id = parseInt($(this).data('id'));
	        if(prev_id>=1) {
		        //$(".content").text("Changed");
                var last = prev_id-1;
		        $(".setup-content-"+prev_id).hide();
		        $(".setup-content-"+last).show();                
		        $(".btn-"+prev_id).removeClass("btn-primary");                
		        $(".btn-"+last).addClass("btn-primary");                
		        //$(".btn-prev").attr("data-id", prev_id - 1);
		    }
	    });
    
    
});



