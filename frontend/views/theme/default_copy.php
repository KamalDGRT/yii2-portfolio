<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\DefaultthemeAsset;
use common\widgets\Alert;
use yii\helpers\VarDumper;

$this->title = $titleString;
DefaultthemeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- <meta name="description" content="RHCSA | Moderator @ DSCSIST" />
    <meta name="author" content="Kamal Sharma" />
    <meta name="keywords" content="Kamal Sharma, Sathyabama Institute of Science and Technology"> 
    <meta charset="UTF-8">
    <meta name="keywords" content="RHCSA,DSC">
    <meta name="author" content="Kamal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <?php
    $this->registerMetaTag([
        'name' => 'description',
        'content' => ''
    ]);

    $this->registerMetaTag([
        'name' => 'author',
        'content' => ''
    ]);

    $this->registerMetaTag([
        'name' => 'keywords',
        'content' => ''
    ]);
    ?>

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="vjCover"></div>

    <div class="vjCoverwhite">
        <!-- User No Profile Pic -->
        <?php
        if (isset($profilepicModel->has_image)) {
            echo Html::img($profilepicModel->getImageUrl(), [
                'class' => 'vjUserPhoto',
            ]);
        } else {
            echo Html::img(Yii::$app->params['frontendUrl'] . 'public/imgfc/default.png', [
                'class' => 'vjUserPhoto',
            ]);
        }
        // render the submit button
        ?>
        <!-- User's First Name and Last Name -->
        <h1><?php echo $aboutmeModel->firstname . " " . $aboutmeModel->lastname; ?></h1>

        <!-- User's Profession -->
        <p class="vjProfession"><?php echo $aboutmeModel->profession; ?></p>

        <div class="vjJagya20"></div>
    </div> <!-- Cover Photo, Photo, Name and Profession -->

    <?php
    echo  "<pre>";
    // var_dump($aboutmeModel);
    echo "</pre>";
    ?>


    <!-- Cotent for Popups begin here!-->

    <div class="vjModalContainer">


        <!-- SAU PRATHAM POPUP NA CONTENT MUKI DEVA VINANTI -->


        <!-- SAVE ME CONTENT SARU -->
        <div class="md-modal md-effect-1" id="savemepopup">
            <div class="md-content">
                <h3>Save to Phone Book</h3>
                <div align="center">
                    <div class="vjJagya10"></div>
                    <p>Save my Contact Information in your phone book</p>
                    <div class="vjJagya10"></div>

                    <img src="/kamal-4/qr" width="150px">
                    <p class="vjModalNiAndarNaText">Scan above QR Code OR</p>
                    <p class="vjModalNiAndarNaText"><strong>Step : 1 - </strong>Download this

                        <!-- NICHE "abc.vcf" ni Jagya e tamare dynamic link mukvi -->
                        <a href="/kamal-4/download">VCF File</a>
                    </p>


                    <p class="vjModalNiAndarNaText"><strong>Step : 2 - </strong>Open the VCF File</p>
                    <p class="vjModalNiAndarNaText"><strong>Step : 3 - </strong>Save To Contacts</p>

                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>
        </div> <!-- SAVE ME CONTENT PATYU -->





        <!-- ABOUT ME CONTENT SARU -->
        <div class="md-modal md-effect-1" id="aboutmepopup">
            <div class="md-content">

                <h3>About me</h3>
                <div align="center">
                    <div class="vjJagya30"></div>

                    <p class="vjModalNiAndarNaText">RHCSA | Moderator @ DSCSIST</p>
                    <div class="vjJagya30"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>

        </div> <!-- ABOUT ME CONTENT PATYU -->

        <!-- FLOAT CONTENT SARU -->

        <div class="md-modal md-effect-1" id="enqform">
            <div class="md-content">

                <h3>Submit Enquiry </h3>
                <div>
                    <div class="vjJagya10"></div>


                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>
        </div>
        <!-- FLOAT CONTENT PATYU -->



        <!-- SKILLS CONTENT SARU -->

        <div class="md-modal md-effect-1" id="skillspopup">
            <div class="md-content">
                <h3>Skills and Expertise</h3>
                <div align="center">
                    <div class="vjJagya20"></div>

                    <p class="vjModalSKILLSNaText">C</p>
                    <div class="vjSkillFullBar">

                        <div class="vjSkillData" style="width:96%;"></div>
                    </div>

                    <p class="vjModalSKILLSNaText">C++</p>
                    <div class="vjSkillFullBar">

                        <div class="vjSkillData" style="width:95%;"></div>
                    </div>

                    <p class="vjModalSKILLSNaText">Python</p>
                    <div class="vjSkillFullBar">

                        <div class="vjSkillData" style="width:86%;"></div>
                    </div>
                    <div class="vjJagya30"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>
        </div> <!-- SKILLS CONTENT PATYU -->
        <!-- MILESTONES CONTENT SARU -->
        <div class="md-modal md-effect-1" id="milestonespopup">
            <div class="md-content">

                <h3>Achievements</h3>
                <div align="center">
                    <div class="vjJagya20"></div>
                    <!-- ACHIEVEMENT 1 -->
                    <div style="max-width:400px;"><img src="/public/vcard/vjimages/milestonecup.png" class="vjMILESTONESimage"></div>
                    <div class="vjMILESTONESheading">Red Hat Certified Administrator</div>
                    <div class="vjMILESTONESdescription">Received the certificate on 22nd October 2020.</div>
                    <!-- ACHIEVEMENT 1 -->
                    <div style="max-width:400px;"><img src="/public/vcard/vjimages/milestonecup.png" class="vjMILESTONESimage"></div>
                    <div class="vjMILESTONESheading">Core Team Member</div>
                    <div class="vjMILESTONESdescription">became a core team member of DSC</div>



                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>

        </div> <!-- MILESTONES CONTENT PATYU -->




        <!-- TESTIMONIALS CONTENT SARU -->
        <div class="md-modal md-effect-1" id="testimonialpopup">
            <div class="md-content">

                <h3>Testimonials</h3>
                <div align="center">
                    <div class="vjJagya20"></div>

                    <!-- Testimonial 1 -->
                    <div style="max-width:400px;">
                        <img src="/public/vcard/vjimages/testimonialsmodal.png" class="vjMILESTONESimage">
                    </div>
                    <div class="vjTESTIMONAILtext">Kamal&#039;s work in the project was extra-ordinary!</div>
                    <div class="vjTESTIMONAILname">Bharath Raam</div>
                    <div class="vjTESTIMONAILcompany">Kamal is a good coder!</div>
                    <div class="vjJagya20"></div>

                    <!-- Testimonial 1 -->
                    <div style="max-width:400px;"><img src="/public/vcard/vjimages/testimonialsmodal.png" class="vjMILESTONESimage"></div>
                    <div class="vjTESTIMONAILtext">Kamal taught me C++ well.</div>
                    <div class="vjTESTIMONAILname">Shriraam</div>
                    <div class="vjTESTIMONAILcompany">He is a good teacher.</div>
                    <div class="vjJagya20"></div>

                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>

        </div> <!-- TESTIMONIALS CONTENT PATYU -->






        <!-- EXPERIENCE CONTENT SARU -->
        <div class="md-modal md-effect-1" id="experiencepopup">
            <div class="md-content">

                <h3>Work Experience</h3>
                <div align="center">
                    <div class="vjJagya20"></div>

                    <!-- EXPERIENCE 1 -->
                    <div style="max-width:400px;"><img src="/public/vcard/vjimages/experiencemodal.png" class="vjMILESTONESimage"></div>
                    <!-- dynamic from and to year -->
                    <div class="vjExperienceYEAR">3 Months</div>
                    <div class="vjEXPERIENCEcompany">Participant</div>
                    <div class="vjEXPERIENCEjobrole">Participated in an Open Source Event by GirlScript Summer of Code in May 2020.</div>
                    <div style="max-width:400px;"><img src="/public/vcard/vjimages/experiencemodal.png" class="vjMILESTONESimage"></div>
                    <!-- dynamic from and to year -->
                    <div class="vjExperienceYEAR">3 Months</div>
                    <div class="vjEXPERIENCEcompany">Mentor</div>
                    <div class="vjEXPERIENCEjobrole">mentored an open source contribution</div>
                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>

        </div> <!-- EXPERIENCE CONTENT PATYU -->





        <!-- EDUCATION CONTENT SARU -->
        <div class="md-modal md-effect-1" id="edicationpopup">
            <div class="md-content">

                <h3>Education</h3>
                <div align="center">
                    <div class="vjJagya20"></div>

                    <!-- EXPERIENCE 1 -->
                    <div style="max-width:400px;"><img src="/public/vcard/vjimages/educationmodal.png" class="vjMILESTONESimage"></div>

                    <!-- dynamic from and to year -->
                    <div class="vjExperienceYEAR">2018-2022</div>
                    <div class="vjEXPERIENCEcompany">Undergraduation</div>
                    <div class="vjEXPERIENCEjobrole">Sathyabama Institute of Science and Technology</div>

                    <div style="max-width:400px;"><img src="/public/vcard/vjimages/educationmodal.png" class="vjMILESTONESimage"></div>

                    <!-- dynamic from and to year -->
                    <div class="vjExperienceYEAR">2 years</div>
                    <div class="vjEXPERIENCEcompany">Higher Secondary</div>
                    <div class="vjEXPERIENCEjobrole">studied in the school</div>


                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>

        </div> <!-- EDUCATION CONTENT PATYU -->




        <!-- COMPANY CONTENT SARU -->
        <div class="md-modal md-effect-1" id="companyepopup">
            <div class="md-content">
                <h3>Company Details</h3>
                <div align="center">

                    <!-- Company Logo -->
                    <img src="/public/imagfc/comp1611236049.png" class="vjCOMPANYlogo">

                    <!-- Company name -->
                    <div class="vjCOMPANYname">Sathyabama Institute of Science and Technology</div>

                    <!-- Company tagline -->
                    <div class="vjCOMPANYtagline">Entry is not important, Exit is!</div>

                    <!-- about company description -->
                    <p class="vjModalNiAndarNaText">In 1987, Dr. Jeppiar established Sathyabama Institute of Science and Technology. Earlier it was known as Sathyabama Engineering College. It is a Christian Minority Educational Institution and was given the status of deemed university in 2001. It offers many courses like Mechanical Engineering, Electronics, and Communication Engineering, Chemical Engineering, Aeronautics Engineering, Automobile Engineering, Electronics and Instrumentation Engineering. Along with engineering courses, it offers undergraduate courses in architecture, design, psychology, English, Physics, Commerce, Financial Accounting, and dental surgery.<br />
                        <br />
                        Also, the college provides postgraduate courses in dental surgery, business administration, biotechnology, structural engineering, building management, English, Physics, and Chemistry. The institute also has the provisions for law, pharmacy courses, and PhD programmes.
                    </p>
                    
                    <div class="vjJagya30"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>

                </div>
            </div>

        </div> <!-- COMPANY CONTENT PATYU -->




        <!-- SOLUTIONS OR PRODUCTS CONTENT SARU -->
        <div class="md-modal md-effect-1" id="solutionpopup">
            <div class="md-content">

                <h3>Solutions We Offer</h3>
                <div align="center">
                    <div class="vjJagya20"></div>
                    <!-- PRODUCT 1 -->
                    <div class="vjEXPERIENCEcompany">Technosummit Website</div>
                    <div class="vjEXPERIENCEjobrole">Created and managed the TechnoSummit 2K20 website</div>
                    <div class="vjEXPERIENCEcompany">Created Digital Business Card</div>
                    <div class="vjEXPERIENCEjobrole">Built a complete clone of Digital Business Card.</div>
                    <div class="vjEXPERIENCEcompany">Created Digital Business Card</div>
                    <div class="vjEXPERIENCEjobrole">Built a complete clone of Digital Business Card.</div>

                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>

        </div> <!-- SOLUTIONS OR PRODUCTS CONTENT PATYU -->




        <!-- SHARE CONTENT SARU -->

        <div class="md-modal md-effect-1" id="shareform">
            <div class="md-content">

                <h3>Share Profile</h3>
                <div>
                    <div class="vjJagya10"></div>
                    <p>Share my Digital vCard in your network.</p>
                    <div class="shareaholic-canvas" data-app="share_buttons" data-app-id="28141164"></div>

                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>
        </div> <!-- SHARE CONTENT PATYU -->


        <!-- Pay CONTENT SARU -->

        <div class="md-modal md-effect-1" id="paymentpopup">
            <div class="md-content">

                <h3>Pay Me</h3>
                <div>
                    <div class="vjJagya10"></div>


                    <div class="center-text">
                        <p>Google Pay</p><a href="https://kamal@oksbi" class="vjModalPayMe" target="_blank">Pay Now</a>
                    </div>
                    <br>

                    <div class="center-text">
                        <p>PayTM</p><a href="https://patym.me/kamaldgrt" class="vjModalPayMe" target="_blank">Pay Now</a>
                    </div>
                    <br>
                    <div class="vjJagya20"></div>



                    <button class="vjModalChokdi md-close">Close Me!</button>



                </div>
            </div>
        </div> <!-- Pay CONTENT PATYU -->



    </div> <!-- POPUP NU MAIN container patyu-->




    <!-- MAIN FRONT CONTENT CONTAINER KHOKHU -->

    <div class="vjAkhuContainer">

        <div class="vjJagya5"></div>

        <!-- CONTACT ME CTA -->

        <div>
            <p class="vjCTAheading">Contact :</p>


            <!-- In all below HREF, there will be user data -->
            <div class="vjCTAinfobox"><a href="tel:9566226251"><img src="/public/vcard/vjimages/call.png" class="vjCTAimage"><span class="vjctamaintext">Call Me</span></a></div>
            <div class="vjCTAinfobox"><a href="mailto:kamaldgrt@gmail.com"><img src="/public/vcard/vjimages/email.png" class="vjCTAimage"><span class="vjctamaintext">Email Me</span></a></div>

            <!-- In whatsapp there is country code without + symbol -->
            <div class="vjCTAinfobox"><a href="https://api.whatsapp.com/send?phone=919566226251&text=Got%20reference%20from%20your%20Digital%20vCard.%20Want%20to%20know%20more%20about%20your%20products%20and%20services."><img src="/public/vcard/vjimages/whatsapp.png" class="vjCTAimage"><span class="vjctamaintext">Whatsapp</span></a></div>

            <!-- -skype-name- is the "skypeid" -->
            <div class="vjCTAinfobox"><a href="skype:https://skype.com/kamaldgrt?chat"><img src="/public/vcard/vjimages/skype.png" class="vjCTAimage"><span class="vjctamaintext">Skype</span></a></div>
            <!-- user will enter messenger link -->

            <div class="vjCTAinfobox"><a href="https:///fb.com/kamaldgrt" target="_blank"><img src="/public/vcard/vjimages/fbchat.png" class="vjCTAimage"><span class="vjctamaintext">FB Chat</span></a></div>


            <div class="vjCTAinfobox md-trigger" data-modal="savemepopup"><img src="/public/vcard/vjimages/save.png" class="vjCTAimage"><span class="vjctamaintext">Save Me</span></div>

            <div class="vjCTAinfobox md-trigger" data-modal="paymentpopup"><img src="/public/vcard/vjimages/pay.png" class="vjCTAimage"><span class="vjctamaintext">Pay Me</span></div>


        </div> <!-- CONTACT ME CTA PATYU -->



        <!-- MY PROFILE CTA -->

        <div>
            <p class="vjCTAheading">Profile :</p>

            <div class="vjCTAinfobox md-trigger" data-modal="aboutmepopup"><img src="/public/vcard/vjimages/aboutme.png" class="vjCTAimage"><span class="vjctamaintext">About Me</span></div>
            <div class="vjCTAinfobox md-trigger" data-modal="skillspopup"><img src="/public/vcard/vjimages/skills.png" class="vjCTAimage"><span class="vjctamaintext">Skills</span></div>
            <div class="vjCTAinfobox md-trigger" data-modal="milestonespopup"><img src="/public/vcard/vjimages/milestones.png" class="vjCTAimage"><span class="vjctamaintext">Milestones</span></div>
            <div class="vjCTAinfobox md-trigger" data-modal="testimonialpopup"><img src="/public/vcard/vjimages/testimonials.png" class="vjCTAimage"><span class="vjctamaintext">Testimony</span></div>
            <div class="vjCTAinfobox md-trigger" data-modal="experiencepopup"><img src="/public/vcard/vjimages/experience.png" class="vjCTAimage"><span class="vjctamaintext">Experience</span></div>
            <div class="vjCTAinfobox md-trigger" data-modal="edicationpopup"><img src="/public/vcard/vjimages/education.png" class="vjCTAimage"><span class="vjctamaintext">Education</span></div>
            <div class="vjCTAinfobox md-trigger" data-modal="shareform"><img src="/public/vcard/vjimages/share.png" class="vjCTAimage"><span class="vjctamaintext">Share This</span></div>

        </div> <!-- MY PROFILE CTA PATYU -->



        <!-- COMPANY CTA -->

        <div>
            <p class="vjCTAheading">Company :</p>
            <div class="vjCTAinfobox md-trigger" data-modal="companyepopup"><img src="/public/vcard/vjimages/company.png" class="vjCTAimage"><span class="vjctamaintext">Company</span></div>
            <div class="vjCTAinfobox md-trigger" data-modal="solutionpopup"><img src="/public/vcard/vjimages/products.png" class="vjCTAimage"><span class="vjctamaintext">Solutions</span></div>
            <!-- website dynamic link -->
            <div class="vjCTAinfobox"><a href="https://kamal.sharma" target="_blank"><img src="/public/vcard/vjimages/website.png" class="vjCTAimage"><span class="vjctamaintext">Website</span></a></div>
            <!-- google map link -->


        </div> <!-- COMPANY CTA PATYU -->



        <!-- SOCIAL FOLLOW -->
        <div>
            <p class="vjCTAheading">Follow Me :</p>

            <!-- ALL DYNAMIC LINK -->
            <a href="https://www.youtube.com/channel/UCji5rGYmh91SPK-CZ2UxtWg" class="vjShareContainer" target="_blank"><i class="fab fa-youtube vjsocialLink"></i></a>
            <a href="https://fb.com" class="vjShareContainer" target="_blank"><i class="fab fa-facebook-f vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-twitter vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-google vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-linkedin-in vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-instagram vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-quora vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-google-play vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-app-store-ios vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-bullhorn vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-bullhorn vjsocialLink"></i></a>
            <a href="https://abc.com" class="vjShareContainer" target="_blank"><i class="fab fa-blogger vjsocialLink"></i></a>
        </div> <!-- SOCIAL FOLLOW PATYU -->

        <div class="vjJagya20"></div>

    </div>
    <!-- MAIN FRONT CONTENT CONTAINER KHOKHU patyu -->



    <div class="vjcopyrightcontainer"><a href="https://digitalcard.bookmark.com/" target="_blank" class="vjNoDecoration">&copy; 2021 Nawazinda Group</a></div>


    <div align="center">

        <a href="/profile" class="vjFooterSignup">Login / Edit vCard</a>
        <a href="https://app.socialmatehub.com/register" class="vjFooterSignup" target="_blank">Create Account</a>
    </div>

    <!-- AA VASTU NE ADVU NAI -->

    <div class="md-overlay"></div><!-- the overlay element -->

    <script>
    // this is important for IEs
    var polyfilter_scriptpath = '/js/';
    </script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>