<?php global $dumketo; ?>


<div class="col-md-12">
    <h3>Hosting</h3>

    <div class="form-group">
        <label class="control-label">1. Hosting (FTP)</label>
        <input name="hostingftplink" id="hostingftplink" type="text" class="form-control" placeholder="Hostname link:" /><br/>

        <input name="hostingftpuser" id="hostingftpuser" type="text" class="form-control" placeholder="Username:" /><br/>

        <input name="hostingftppass" id="hostingftppass" type="text" class="form-control" placeholder="Password:" /><br/>

        <input name="hostingftpport" id="hostingftpport" type="text" class="form-control" placeholder="Port:" />
    </div>

    <div class="form-group">
        <label class="control-label">3. Is your email also hosted with the same company and package as your website? (if applicable)</label>
        <div class="radio-div">
            <span>Yes</span> <input type="radio" name="packageasyourwebsite" id="packageasyourwebsite1" value="yes">
            <span>No</span> <input type="radio" name="packageasyourwebsite" id="packageasyourwebsite2" value="no">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label">4. What email software (i.e. outlook) you use to access your email (if applicable): </label>
        <input name="accessyouremailifapplicable" id="accessyouremailifapplicable" type="text" class="form-control" placeholder="" />
    </div>

    <div class="form-group">
        <label class="control-label">5. Email Hosting Provider Name/Business Name (if different to your web hosting):</label>
        <input name="hostingprovidername" id="hostingprovidername" type="text" class="form-control" placeholder="" />
    </div>

    <div class="form-group">
        <label class="control-label">6. Do you want to keep your email services with your current provider (we have 5 email addresses included in your package)?</label>
        <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="withyourcurrentprovider" id="withyourcurrentprovider1" value="yes">
                    <span>No</span> <input type="radio" name="withyourcurrentprovider" id="withyourcurrentprovider2" value="no">
                </div>
    </div>

    <div class="form-group">
        <label class="control-label">7. Please list the email addresses you currently have or if they will be new. (5 are included. $2 per email per month there after</label>


        <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail1:" id="iftheywillbenewemail1" type="text" class="form-control" placeholder="Email 1:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass1" id="iftheywillbenewepass1" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio1" id="iftheywillbeneweradio1" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio1" id="iftheywillbeneweradio2" value="no">
                </div>
                <!--
                <div class="radio radio-div">
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                    </label>
                </div>
-->
            </div>
        </div>

        <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail2:" id="iftheywillbenewemail2" type="text" class="form-control" placeholder="Email 2:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass2" id="iftheywillbenewepass2" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio2" id="iftheywillbeneweradio12" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio2" id="iftheywillbeneweradio22" value="no">
                </div>
            </div>
        </div>

          <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail3:" id="iftheywillbenewemail3" type="text" class="form-control" placeholder="Email 3:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass3" id="iftheywillbenewepass3" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio3" id="iftheywillbeneweradio13" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio3" id="iftheywillbeneweradio23" value="no">
                </div>
            </div>
        </div>
        
                  <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail4:" id="iftheywillbenewemail4" type="text" class="form-control" placeholder="Email 4:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass4" id="iftheywillbenewepass4" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio4" id="iftheywillbeneweradio14" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio4" id="iftheywillbeneweradio24" value="no">
                </div>
            </div>
        </div>
        
                          <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail5:" id="iftheywillbenewemail5" type="text" class="form-control" placeholder="Email 5:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass5" id="iftheywillbenewepass5" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio5" id="iftheywillbeneweradio15" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio5" id="iftheywillbeneweradio25" value="no">
                </div>
            </div>
        </div>
        
                                  <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail6:" id="iftheywillbenewemail6" type="text" class="form-control" placeholder="Email 6:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass6" id="iftheywillbenewepass6" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio6" id="iftheywillbeneweradio16" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio6" id="iftheywillbeneweradio26" value="no">
                </div>
            </div>
        </div>
        
                                          <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail7:" id="iftheywillbenewemail7" type="text" class="form-control" placeholder="Email 7:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass7" id="iftheywillbenewepass7" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio7" id="iftheywillbeneweradio17" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio7" id="iftheywillbeneweradio27" value="no">
                </div>
            </div>
        </div>
        
                                                  <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail8:" id="iftheywillbenewemail8" type="text" class="form-control" placeholder="Email 8:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass8" id="iftheywillbenewepass8" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio8" id="iftheywillbeneweradio18" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio8" id="iftheywillbeneweradio28" value="no">
                </div>
            </div>
        </div>
        
                                                          <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail9:" id="iftheywillbenewemail9" type="text" class="form-control" placeholder="Email 9:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass9" id="iftheywillbenewepass9" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio9" id="iftheywillbeneweradio19" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio9" id="iftheywillbeneweradio29" value="no">
                </div>
            </div>
        </div>
        
                                                               <div class="col-sm-12 col-md-12 cpm">

            <div class="col-sm-12 col-md-4 cpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewemail10:" id="iftheywillbenewemail10" type="text" class="form-control" placeholder="Email 10:" />
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mbcpm">
                <div class="form-group-tb">
                    <input name="iftheywillbenewepass10" id="iftheywillbenewepass10" type="text" class="form-control" placeholder="Password:" />
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-1 cpm newMail">
                <p>New email</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-2 cpm rediobtn">
                <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="iftheywillbeneweradio10" id="iftheywillbeneweradio10" value="yes">
                    <span>No</span> <input type="radio" name="iftheywillbeneweradio10" id="iftheywillbeneweradio20" value="no">
                </div>
            </div>
        </div>




    </div>

    <div class="form-group">
        <label class="control-label">8. If these emails are existing will you require email migration from previous email provider (may incur one off small email migration fee)?</label>
        <div class="radio-div">
                    <span>Yes</span> <input type="radio" name="frompreviousemailprovider" id="frompreviousemailprovider1" value="yes">
                    <span>No</span> <input type="radio" name="frompreviousemailprovider" id="frompreviousemailprovider2" value="no">
                </div>
    </div>

    <div class="form-group">
        <label class="control-label">Please list below email addresses you want migrated with password-</label>
        <input name="wantmigratedwithpassword1" id="wantmigratedwithpassword1" type="text" class="form-control" placeholder="Email 1:" /><br/>

        <input name="wantmigratedwithpassword2" id="wantmigratedwithpassword2" type="text" class="form-control" placeholder="Email 2" /><br/>

        <input name="wantmigratedwithpassword3" id="wantmigratedwithpassword3" type="text" class="form-control" placeholder="Email 3" /><br/>

        <input name="wantmigratedwithpassword4" id="wantmigratedwithpassword4" type="text" class="form-control" placeholder="Email 4" /><br/>

        <input name="wantmigratedwithpassword5" id="wantmigratedwithpassword5" type="text" class="form-control" placeholder="Email 5" />
    </div>

    <div class="btn-areas">
        <button type="button" data-id="11" class="btn-prev btn btn-primary btn-lg">Back</button> <button class="btn btn-primary nextBtn btn-lg" type="button">Next</button>
    </div>
</div>
