<?php global $dumketo; ?>

<div class="col-md-12">
    <h3>Business Information – to be used on your website</h3>
    <div class="form-group">
        <input name="bname" id="bname" type="text" required="required" class="form-control bname" placeholder="Business Name *" />
    </div>

    <div class="form-group">
        <input name="bemail" id="bemail" type="email" required="required" class="form-control bemail" placeholder="Business Email (will be used on website) *" />
    </div>

    <div class="form-group">
        <input name="bphone" id="bphone" type="text" required="required" class="form-control bphone" placeholder="Phone Number (will be used on website) *" />
    </div>

    <div class="form-group">
        <input name="bwebsite" id="bwebsite" type="text" class="form-control bwebsite" placeholder="Website" />
    </div>

    <div class="form-group">
        <input name="baddress" id="baddress" type="text" required="required" class="form-control baddress" placeholder="Address (to display on the website) *" />
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="hidemyaddress">
        <label class="form-check-label" for="hidemyaddress">Hide my address from the website (not a store)</label>
    </div>

    <div class="form-group">
        <input name="bgoogleaddress" id="bgoogleaddress" type="text" required="required" class="form-control bgoogleaddress" placeholder="Street Address (for your Google My Business verification) *" />
    </div>

    <div class="form-group">
        <input name="bsuburb" id="bsuburb" type="text" required="required" class="form-control bsuburb" placeholder="Suburb *" />
    </div>

    <div class="form-group">
        <input name="bpostcode" id="bpostcode" type="text" required="required" class="form-control bpostcode" placeholder="Post Code *" />
    </div>

    <div class="form-group">
        <input name="babn" id="babn" type="text" class="form-control" placeholder="ABN" />
    </div>

    <p class="help-block">Please note: A physical address is required even if you use a PO Box. Google My Business pages will only send a PIN code to a physical address. This address does not have to be displayed on Google My Business if you wish to keep your address private.</p>



    <h4>Core Business Hours:</h4>

    <table>
        <thead>
            <tr>
                <td>Day</td>
                <td>Open</td>
                <td>Close</td>
            </tr>
        </thead>
        <tr>
            <td>Monday</td>
            <td>
                <div class="form-group-tb">
                    <input name="open1" id="open1" type="text" class="form-control" placeholder="Open" />
                </div>
            </td>
            <td>
                <div class="form-group-tb">
                    <input name="close1" id="close1" type="text" class="form-control" placeholder="Close" />
                </div>
            </td>
        </tr>

        <tr>
            <td>Tuesday</td>
            <td>
                <div class="form-group-tb">
                    <input name="open2" id="open2" type="text" class="form-control" placeholder="Open" />
                </div>
            </td>
            <td>
                <div class="form-group-tb">
                    <input name="close2" id="close2" type="text" class="form-control" placeholder="Close" />
                </div>
            </td>
        </tr>

        <tr>
            <td>Wednesday</td>
            <td>
                <div class="form-group-tb">
                    <input name="open3" id="open3" type="text" class="form-control" placeholder="Open" />
                </div>
            </td>
            <td>
                <div class="form-group-tb">
                    <input name="close3" id="close3" type="text" class="form-control" placeholder="Close" />
                </div>
            </td>
        </tr>

        <tr>
            <td>Thursday</td>
            <td>
                <div class="form-group-tb">
                    <input name="open4" id="open4" type="text" class="form-control" placeholder="Open" />
                </div>
            </td>
            <td>
                <div class="form-group-tb">
                    <input name="close4" id="close4" type="text" class="form-control" placeholder="Close" />
                </div>
            </td>
        </tr>

        <tr>
            <td>Friday</td>
            <td>
                <div class="form-group-tb">
                    <input name="open5" id="open5" type="text" class="form-control" placeholder="Open" />
                </div>
            </td>
            <td>
                <div class="form-group-tb">
                    <input name="close5" id="close5" type="text" class="form-control" placeholder="Close" />
                </div>
            </td>
        </tr>

        <tr>
            <td>Saturday</td>
            <td>
                <div class="form-group-tb">
                    <input name="open6" id="open6" type="text" class="form-control" placeholder="Open" />
                </div>
            </td>
            <td>
                <div class="form-group-tb">
                    <input name="close6" id="close6" type="text" class="form-control" placeholder="Close" />
                </div>
            </td>
        </tr>

        <tr>
            <td>Sunday</td>
            <td>
                <div class="form-group-tb">
                    <input name="open7" id="open7" type="text" class="form-control" placeholder="Open" />
                </div>
            </td>
            <td>
                <div class="form-group-tb">
                    <input name="close7" id="close7" type="text" class="form-control" placeholder="Close" />
                </div>
            </td>
        </tr>

    </table>

    <div class="btn-areas">
        <button type="button" data-id="2" class="btn-prev btn btn-primary btn-lg">Back</button> <button class="btn btn-primary nextBtn btn-lg" type="button">Next</button>
    </div>
</div>