<?php
$pdf_html="<html lang=\"en\">
<body>  
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-info\" style=\"margin-collapse: none;margin-top: 10mm;margin-bottom: 5mm\">
                    <div class=\"panel-heading\">
                        <h4>Your best contact details</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>
                            <strong>Name   :</strong> ".$_POST['pname']."  <br>
                            <strong>Email  :</strong> ".$_POST['pemail']." <br>
                            <strong>Mobile :</strong> ".$_POST['pphone']."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pagebreak />
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-info\" style=\"margin-collapse: none;margin-top: 10mm;margin-bottom: 5mm\">
                    <div class=\"panel-heading\">
                        <h4>Business Information – to be used on your website</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>
                            <strong>Business Name   :</strong> ".$_POST['bname']."  <br><br>
                            <strong>Business Email (will be used on website)  :</strong> ".$_POST['bemail']." <br><br>
                            <strong>Phone Number (will be used on website) :</strong> ".$_POST['bphone']." <br><br>
                            <strong>Website :</strong> ".$_POST['bwebsite']." <br><br>
                            <strong>Address (to display on the website) :</strong> ".$_POST['baddress']." <br><br>
                            <strong>Hide my address from the website (not a store) :</strong> ".$_POST['hidemyaddress']." <br><br>
                            <strong>Address (for your Google My Business page) :</strong> ".$_POST['bgoogleaddress']." <br><br>
                            <strong>Suburb :</strong> ".$_POST['bsuburb']." <br><br>
                            <strong>Post Code :</strong> ".$_POST['bpostcode']." <br><br>
                        </p>
                        <h4>Core Business Hours:</h4>
                        <table style=\"border-collapse: collapse;width: 100%;\">
                            <thead>
                                <tr>
                                    <td style=\"text-align: left;padding: 8px;\"><strong>Day</strong></td>
                                    <td style=\"text-align: left;padding: 8px;\"><strong>Open</strong></td>
                                    <td style=\"text-align: left;padding: 8px;\"><strong>Close</strong></td>
                                </tr>
                            </thead>
                            <tr>
                                <td style=\"text-align: left;padding: 8px;\"><strong>Monday</strong></td> 
                                <td style=\"text-align: left;padding: 8px;\">&nbsp;&nbsp;&nbsp; ".$_POST['open1']."</td>
                                <td style=\"text-align: left;padding: 8px;\">".$_POST['close1']."</td>
                            </tr>

                            <tr>
                                <td style=\"text-align: left;padding: 8px;\"><strong>Tuesday</strong></td>
                                <td style=\"text-align: left;padding: 8px;\">&nbsp;&nbsp;&nbsp; ".$_POST['open2']."</td>
                                <td style=\"text-align: left;padding: 8px;\">".$_POST['close2']."</td>
                            </tr>

                            <tr>
                                <td style=\"text-align: left;padding: 8px;\"><strong>Wednesday</strong></td>&nbsp;&nbsp;&nbsp;
                                <td style=\"text-align: left;padding: 8px;\">&nbsp;&nbsp;&nbsp; ".$_POST['open3']."</td>
                                <td style=\"text-align: left;padding: 8px;\">".$_POST['close3']."</td>
                            </tr>

                            <tr>
                                <td style=\"text-align: left;padding: 8px;\"><strong>Thursday</strong></td>&nbsp;&nbsp;&nbsp;
                                <td style=\"text-align: left;padding: 8px;\">&nbsp;&nbsp;&nbsp; ".$_POST['open4']."</td>
                                <td style=\"text-align: left;padding: 8px;\">".$_POST['close4']."</td>
                            </tr>

                            <tr>
                                <td style=\"text-align: left;padding: 8px;\"><strong>Friday</strong></td>&nbsp;&nbsp;&nbsp;
                                <td style=\"text-align: left;padding: 8px;\">&nbsp;&nbsp;&nbsp; ".$_POST['open5']."</td>
                                <td style=\"text-align: left;padding: 8px;\">".$_POST['close5']."</td>
                            </tr>

                            <tr>
                                <td style=\"text-align: left;padding: 8px;\"><strong>Saturday</strong></td>&nbsp;&nbsp;&nbsp;
                                <td style=\"text-align: left;padding: 8px;\">&nbsp;&nbsp;&nbsp; ".$_POST['open6']."</td>
                                <td style=\"text-align: left;padding: 8px;\">".$_POST['close6']."</td>
                            </tr>

                            <tr>
                                <td style=\"text-align: left;padding: 8px;\"><strong>Sunday</strong></td>&nbsp;&nbsp;&nbsp;
                                <td style=\"text-align: left;padding: 8px;\">&nbsp;&nbsp;&nbsp; ".$_POST['open7']."</td>
                                <td style=\"text-align: left;padding: 8px;\">".$_POST['close7']."</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pagebreak />
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-info\" style=\"margin-collapse: none;margin-top: 10mm;margin-bottom: 5mm\">
                    <div class=\"panel-heading\">
                        <h4>Marketing Information</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>
                            <strong>Core Service  :</strong> ".$_POST['coreservice']." <br><br>
                            <strong>Please list your services you wish to display on the website: </strong> ".$_POST['servicesyouoffer']." <br><br>
                            <strong>Your top 3 competitors :</strong> <br> 
                            1. : ".$_POST['top3competitors']." <br>
                            2. : ".$_POST['top3competitorson1']." <br>
                            3. : ".$_POST['top3competitorson2']." <br><br> 
                            <strong>Websites you like :</strong> <br> 
                            1. : ".$_POST['websitesyoulike1']." <br>
                            2. : ".$_POST['websitesyoulike2']." <br>
                            3. : ".$_POST['websitesyoulike3']." <br><br>
                            <strong>Can you please provide 3 benefits or things you think are important, for visitors to your website, to know about each of your main services? :</strong> <br> 
                            1. : ".$_POST['providebenefits1']." <br>
                            2. : ".$_POST['providebenefits2']." <br>
                            3. : ".$_POST['providebenefits3']." <br><br>
                            <strong>What is your USP (Unique Selling Point) i.e. what sets you apart from you your competitors?  :</strong> ".$_POST['usp']." <br>
                            <strong>Target Geography  :</strong> ".$_POST['targetgeography']." <br>
                            <strong>Do clients pay via – Cash, Card, PayPal, AfterPay etc?  :</strong> ".$_POST['payvia']." <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pagebreak />
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-info\" style=\"margin-collapse: none;margin-top: 10mm;margin-bottom: 5mm\">
                    <div class=\"panel-heading\">
                        <h4>Existing Account Access Required (Technical)</h4>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Please make sure to verify these details prior sending us.</h4>
                        <p>
                            <strong>Have you purchased a domain name: </strong> ".$_POST['purchasedadomainname']."  <br><br>
                            <strong>If yes, please supply the following so we can access your domain :</strong> <br>
                            1. ".$_POST['canaccessyourdomain1']." <br>
                            2. ".$_POST['canaccessyourdomain2']." <br>
                            3. ".$_POST['canaccessyourdomain3']." <br>
                        </p>
                        <p>
                            <strong>Will we host your website? : </strong> ".$_POST['hostyourwebsite']."  <br><br>
                            <strong>Will we host your emails? : </strong> ".$_POST['hostyouremails']."  <br><br>
                            <strong>If Yes, are your current emails hosted with Outlook? : </strong> ".$_POST['hostedwithoutlook']."  <br><br>
                            <strong>If no, please provide your email logins :</strong> <br>
                            1. ".$_POST['emailhostingprovidername']."  <br>
                            2. ".$_POST['emailhostingcontrolpaneluser']."  <br>
                            3. ".$_POST['emailhostingcontrolpanelpassword']."  <br>
                        </p>

                        <p>
                            <strong>Website Content Management (Wordpress, Magento, Wix, Weebly... etc) :</strong> <br>
                            1. ".$_POST['websitecontentmanagement1']." <br>
                            2. ".$_POST['websitecontentmanagement2']." <br>
                            3. ".$_POST['websitecontentmanagement3']." <br><br>
                            <strong>Current Web Developer / Designer :</strong> <br>
                            1. ".$_POST['webdeveloperdesigner1']." <br>
                            2. ".$_POST['webdeveloperdesigner2']." <br>
                            3. ".$_POST['webdeveloperdesigner3']." <br>
                        </p>
                        <p>
	                        <strong>Hosting Control Panel – cPanel – (if available)</strong> <br>
	                        1. ".$_POST['hostingcontrolpanellink']."  <br>
	                        2. ".$_POST['hostingcontrolpaneluser']."  <br>
	                        3. ".$_POST['hostingcontrolpanelpass']."  <br>
                        </p>
                        <p>
	                        <strong>FTP – (if available)</strong> <br>
	                        1. ".$_POST['ftplink']."  <br>
	                        2. ".$_POST['ftpuser']."  <br>
	                        3. ".$_POST['ftppass']."  <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pagebreak />
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-info\" style=\"margin-collapse: none;margin-top: 10mm;margin-bottom: 5mm\">
                    <div class=\"panel-heading\">
                        <h4>Current Digital Assets (leave blank if you don’t have any)</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>
                            <strong>Facebook Business Page link  :</strong> ".$_POST['facebookbusinesspagelink']."  <br>
                            <strong>Facebook Username  :</strong> ".$_POST['facebookuser']."  <br>
                            <strong>Facebook Password  :</strong> ".$_POST['facebookpass']."  <br><br>

                            <strong>Google My Business Page link  :</strong> ".$_POST['googlemybusinesspagelink']."  <br>
                            <strong>Google Username :</strong> ".$_POST['googleuser']."  <br>
                            <strong>Google Password :</strong> ".$_POST['googlepass']."  <br><br>

                            <strong>Google Plus Page link  :</strong> ".$_POST['googleplusbusinesspagelink']."  <br>
                            <strong>Google Plus Username :</strong> ".$_POST['googleplususer']."  <br>
                            <strong>Google Plus Password :</strong> ".$_POST['googlepluspass']."  <br><br>

                            <strong>LinkedIn Business Page link  :</strong> ".$_POST['linkedinbusinesspagelink']."  <br>
                            <strong>LinkedIn Username :</strong> ".$_POST['linkeduser']."  <br>
                            <strong>LinkedIn Password :</strong> ".$_POST['linkedpass']."  <br><br>

                            <strong>Your Twitter Page link  :</strong> ".$_POST['yourtwitterpagelink']."  <br>
                            <strong>Twitter Username :</strong> ".$_POST['twitteruser']."  <br>
                            <strong>Twitter Password :</strong> ".$_POST['twitterpass']."  <br><br>

                            <strong>Your Instagram Page link  :</strong> ".$_POST['instagrambusinesspagelink']."  <br>
                            <strong>Instagram Username :</strong> ".$_POST['instagramuser']."  <br>
                            <strong>Instagram Password :</strong> ".$_POST['instagrampass']."  <br><br>

                            <strong>Your Houzz Page link  :</strong> ".$_POST['houzzbusinesspagelink']."  <br>
                            <strong>Houzz Username :</strong> ".$_POST['houzzuser']."  <br>
                            <strong>Houzz Password :</strong> ".$_POST['houzzpass']."  <br><br>

                            <strong>Admin Access Google Analytics (if Installed) link :</strong> ".$_POST['accessgoogleanalytics']."  <br>
                            <strong>Google Analytics Username :</strong> ".$_POST['googleanalyticsuser']."  <br>
                            <strong>Google Analytics Password :</strong> ".$_POST['googleanalyticspass']."  <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>";    

include( "mpdf/mpdf.php" );
$mpdf=new mPDF( 'c','A4','15','dejavusans',10,10,30,10,5,5 );  
$mpdf->SetDisplayMode( 'fullpage' );
$date = date("Y");
$stylesheet = file_get_contents('../css/bootstrap.css');
$mpdf->WriteHTML( $stylesheet,1 );
//$mpdf->SetHeader('Document Title|Center Text|{PAGENO}');
$header='<img style=\"margin-collapse: none;margin-bottom: 20mm\" src="http://new1.belocal.today/wp-content/themes/dumketo/img/pdf-header.png">';
$mpdf->SetHTMLHeader($header);
$footer='<img style=\"margin-collapse: none;margin-top: 20mm\" src="http://new1.belocal.today/wp-content/themes/dumketo/img/pdf-footer.png">';
//$footer = '<div align="center">© '.$date.' BeLocal Today. All Rights Reserved. <img src="http://new1.belocal.today/wp-content/uploads/2017/06/belocal.png" alt="belocal" data-lazy-loaded="true" style="display: inline;"> Digital Transformation by <a style="color: #ffc600;" href="http://belocal.today/" target="_blank">BeLocal Today</a></div>';
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML( $pdf_html, 2);


$pdf_name = $_POST['bname'].'-'.$_POST['pphone'];
$mpdf->Output( "../pdf/$pdf_name.pdf",'F' );
    


