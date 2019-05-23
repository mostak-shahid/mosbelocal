<?php global $dumketo; ?>


<div class="col-md-12">
    <h3>Existing Account Access Required (Technical)</h3>
    <h4>Please make sure to verify these details prior sending us. </h4>
    
    <div class="form-group">
        <label class="control-label">1. Have you purchased a domain name?</label>
        <div class="radio-div">
           <span>Yes</span> <input type="radio" name="purchasedadomainname" id="purchasedadomainname1" value="yes">
           <span>No</span> <input type="radio" name="purchasedadomainname" id="purchasedadomainname2" value="no">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label">2. If yes, please supply the following so we can access your domain</label>

        <input name="canaccessyourdomain1" id="canaccessyourdomain1" type="text" class="form-control" placeholder="Domain Control Panel link" /><br/> 
        <input name="canaccessyourdomain2" id="canaccessyourdomain2" type="text" class="form-control" placeholder="Domain Control Panel Username" /><br/>                
        <input name="canaccessyourdomain3" id="canaccessyourdomain3" type="text" class="form-control" placeholder="Domain Control Panel Password" />
    </div>

    <div class="form-group">
        <label class="control-label">3. Will we host your website?</label>
        <div class="radio-div">
           <span>Yes</span> <input type="radio" name="hostyourwebsite" id="hostyourwebsite1" value="yes">
           <span>No</span> <input type="radio" name="hostyourwebsite" id="hostyourwebsite2" value="no">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label">4. Will we host your emails?</label>
        <div class="radio-div">
           <span>Yes</span> <input type="radio" name="hostyouremails" id="hostyouremails1" value="yes">
           <span>No</span> <input type="radio" name="hostyouremails" id="hostyouremails2" value="no">
        </div>
        <p class="help-block">(Please note, if we host your emails you will be migrated to Google Mail)</p>
    </div>

    

    <div class="form-group">
        <label class="control-label">5. If Yes, are your current emails hosted with Outlook?: </label>
        <div class="radio-div">
           <span>Yes</span> <input type="radio" name="hostedwithoutlook" id="hostedwithoutlook1" value="yes">
           <span>No</span> <input type="radio" name="hostedwithoutlook" id="hostedwithoutlook2" value="no">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label">6. If no, please provide your email logins </label>

        <input name="emailhostingprovidername" id="emailhostingprovidername" type="text" class="form-control" placeholder="Email hosting provider name" /><br/>
        <input name="emailhostingcontrolpaneluser" id="emailhostingcontrolpaneluser" type="text" class="form-control" placeholder="Email hosting control panel username:" /><br/>
        <input name="emailhostingcontrolpanelpassword" id="emailhostingcontrolpanelpassword" type="text" class="form-control" placeholder="Email hosting control panel Password:" />
    </div>
    

    <div class="form-group">
        <label class="control-label">7. Website Content Management (Wordpress, Magento, Wix, Weebly... etc) :</label>

        <input name="websitecontentmanagement1" id="websitecontentmanagement1" type="text" class="form-control" placeholder="Website Admin Login link:" /><br/>                
        <input name="websitecontentmanagement2" id="websitecontentmanagement2" type="text" class="form-control" placeholder="Website Admin Login user name:" /><br/>                
        <input name="websitecontentmanagement3" id="websitecontentmanagement3" type="text" class="form-control" placeholder="Website Admin Login password:" />
    </div>
    
    <div class="form-group">                
        <label class="control-label">8. Current Web Developer / Designer:</label>

        <input name="webdeveloperdesigner1" id="webdeveloperdesigner1" type="text" class="form-control" placeholder="Name:" /><br/>                
        <input name="webdeveloperdesigner2" id="webdeveloperdesigner2" type="text" class="form-control" placeholder="Phone number:" /><br/>                
        <input name="webdeveloperdesigner3" id="webdeveloperdesigner3" type="text" class="form-control" placeholder="Email:" />
    </div>

    <div class="form-group">
        <label class="control-label">9. Hosting Control Panel – cPanel – (if available)</label>

        <input name="hostingcontrolpanellink" id="hostingcontrolpanellink" type="text" class="form-control" placeholder="Control panel link:" /><br/>
        <input name="hostingcontrolpaneluser" id="hostingcontrolpaneluser" type="text" class="form-control" placeholder="Control panel username:" /><br/>
        <input name="hostingcontrolpanelpass" id="hostingcontrolpanelpass" type="text" class="form-control" placeholder="Control panel Password:" />
    </div>

    <div class="form-group">
        <label class="control-label">11. FTP – (if available)</label>

        <input name="ftplink" id="ftplink" type="text" class="form-control" placeholder="FTP link:" /><br/>
        <input name="ftpuser" id="ftpuser" type="text" class="form-control" placeholder="FTP username:" /><br/>
        <input name="ftppass" id="ftppass" type="text" class="form-control" placeholder="FTP Password:" />
    </div>
    

    <div class="btn-areas"> 
        <button type="button" data-id="4" class="btn-prev btn btn-primary btn-lg">Back</button> <button class="btn btn-primary nextBtn btn-lg" type="button" >Next</button>
    </div>
</div>
