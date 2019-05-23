<?php global $dumketo; ?>
<div class="col-md-12">
    <h3>Your Best Contact Details</h3>
    <input type="hidden" name="acc_manager" value="<?php echo $acc_manager; ?>">
    <div class="form-group">
        <input name="pname" id="pname" type="text" required="required" class="form-control pname" placeholder="Your Name *" />
    </div>
    <div class="form-group">
        <input name="pemail" id="pemail" type="email" required="required" class="form-control pemail" placeholder="Your Email *" />
    </div>
    <div class="form-group">
        <input name="pphone" id="pphone" type="text" required="required" class="form-control pphone" placeholder="Your Contact Number *" />
    </div>
    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
</div>
