<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\models\Aboutme;
use common\models\Company;
use common\models\Companylogo;
use common\models\Contact;
use common\models\Project;
use common\models\Social;
use yii\helpers\Html;
use frontend\assets\DefaultthemeAsset;
use common\widgets\Alert;
use yii\helpers\Url;
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

    <!-- Content for Popups begin here!-->
    <?php
    $achievementCount = count($achievementModel);
    $educationCount = count($educationModel);
    $experienceCount = count($experienceModel);
    $productCount = count($productModel);
    $skillsCount = count($skillsModel);
    $socialCount = count($socialModel);
    $testimonialCount = count($testimonialModel);
    ?>


    <!-- Cotent for Popups begin here!-->

    <div class="vjModalContainer">

        <!-- SAVE ME POP UP Content Begins here -->
        <div class="md-modal md-effect-1" id="savemepopup">
            <div class="md-content">
                <h3>Save to Phone Book</h3>
                <div align="center">
                    <div class="vjJagya10"></div>
                    <p>Save my Contact Information in your phone book</p>
                    <div class="vjJagya10"></div>

                    <p class="vjModalNiAndarNaText">
                        <strong>Step : 1 - </strong>
                        Download this
                        <a href="/kamal-4/download">VCF File</a>
                    </p>

                    <p class="vjModalNiAndarNaText">
                        <strong>Step : 2 - </strong>
                        Open the VCF File
                    </p>

                    <p class="vjModalNiAndarNaText">
                        <strong>Step : 3 - </strong>
                        Save To Contacts
                    </p>

                    <div class="vjJagya20"></div>
                    <button class="vjModalChokdi md-close">Close Me!</button>
                </div>
            </div>
        </div>
        <!-- SAVE ME POP UP CONTENT ENDS HERE -->

        <!-- ABOUT ME POP UP CONTENT BEGINS HERE -->
        <?php
        if ($aboutmeModel instanceof Aboutme) { ?>
            <div class="md-modal md-effect-1" id="aboutmepopup">
                <div class="md-content">
                    <h3>About me</h3>
                    <div align="center">
                        <div class="vjJagya30"></div>
                        <?php if (isset($aboutmeModel->aboutme)) { ?>
                            <p class="vjModalNiAndarNaText"><?php echo $aboutmeModel->aboutme; ?></p>
                        <?php } ?>
                        <div class="vjJagya30"></div>
                        <button class="vjModalChokdi md-close">Close Me!</button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- ABOUT ME POP UP CONTENT ENDS HERE -->

        <?php if ($skillsCount > 0) { ?>
            <!-- SKILLS POP UP CONTENT BEGINS HERES -->
            <div class="md-modal md-effect-1" id="skillspopup">
                <div class="md-content">
                    <h3>Skills and Expertise</h3>
                    <div align="center">
                        <div class="vjJagya20"></div>

                        <?php
                        foreach ($skillsModel as $skillObject) { ?>
                            <p class="vjModalSKILLSNaText"><?php echo $skillObject->skillname; ?></p>

                            <div class="vjSkillFullBar">
                                <div class="vjSkillData" style="width:<?php echo $skillObject->skillvalue ?>%;"></div>
                            </div>

                        <?php } ?>

                        <div class="vjJagya30"></div>
                        <button class="vjModalChokdi md-close">Close Me!</button>
                    </div>
                </div>
            </div>
            <!-- SKILLS POP UP CONTENT ENDS HERE -->
        <?php } ?>

        <?php if ($achievementCount > 0) { ?>
            <!-- MILESTONES CONTENT BEGINS HERE -->
            <div class="md-modal md-effect-1" id="milestonespopup">
                <div class="md-content">

                    <h3>Achievements</h3>
                    <div align="center">
                        <div class="vjJagya20"></div>

                        <?php
                        foreach ($achievementModel as $achievementObject) { ?>
                            <div style="max-width:400px;">
                                <img src="/public/vcard/vjimages/milestonecup.png" class="vjMILESTONESimage">
                            </div>
                            <div class="vjMILESTONESheading"><?php echo $achievementObject->ach_name; ?></div>
                            <div class="vjMILESTONESdescription"><?php echo $achievementObject->description; ?></div>

                        <?php } ?>

                        <div class="vjJagya20"></div>
                        <button class="vjModalChokdi md-close">Close Me!</button>
                    </div>
                </div>

            </div>
            <!-- MILESTONES CONTENT ENDS HERE -->
        <?php } ?>

        <?php if ($testimonialCount > 0) { ?>
            <!-- TESTIMONIALS CONTENT BEGINS HERE -->
            <div class="md-modal md-effect-1" id="testimonialpopup">
                <div class="md-content">

                    <h3>Testimonials</h3>
                    <div align="center">
                        <div class="vjJagya20"></div>

                        <?php
                        foreach ($testimonialModel as $testimonialObject) { ?>
                            <div style="max-width:400px;">
                                <img src="/public/vcard/vjimages/testimonialsmodal.png" class="vjMILESTONESimage">
                            </div>
                            <div class="vjTESTIMONAILtext"><?php echo $testimonialObject->tagline; ?></div>
                            <div class="vjTESTIMONAILname"><?php echo $testimonialObject->test_name; ?></div>
                            <div class="vjTESTIMONAILcompany"><?php echo $testimonialObject->message; ?></div>
                            <div class="vjJagya20"></div>

                        <?php } ?>

                        <button class="vjModalChokdi md-close">Close Me!</button>
                    </div>
                </div>
                <!-- TESTIMONIALS CONTENT ENDS HERE -->
            </div>
        <?php } ?>

        <?php if ($experienceCount > 0) { ?>
            <!-- EXPERIENCE CONTENT BEGINS HERE -->
            <div class="md-modal md-effect-1" id="experiencepopup">
                <div class="md-content">
                    <h3>Work Experience</h3>
                    <div align="center">
                        <div class="vjJagya20"></div>

                        <?php
                        foreach ($experienceModel as $experienceObject) { ?>
                            <div style="max-width:400px;"><img src="/public/vcard/vjimages/experiencemodal.png" class="vjMILESTONESimage"></div>
                            <div class="vjExperienceYEAR"><?php echo $experienceObject->duration; ?></div>
                            <div class="vjEXPERIENCEcompany"><?php echo $experienceObject->exp_name; ?></div>
                            <div class="vjEXPERIENCEjobrole"><?php echo $experienceObject->description; ?></div>

                        <?php } ?>

                        <div class="vjJagya20"></div>
                        <button class="vjModalChokdi md-close">Close Me!</button>
                    </div>
                </div>

            </div>
            <!-- EXPERIENCE CONTENT ENDS HERE -->
        <?php } ?>

        <?php if ($educationCount > 0) { ?>
            <!-- EDUCATION CONTENT BEGINS HERE -->
            <div class="md-modal md-effect-1" id="edicationpopup">
                <div class="md-content">

                    <h3>Education</h3>
                    <div align="center">
                        <div class="vjJagya20"></div>

                        <?php
                        foreach ($educationModel as $educationObject) { ?>
                            <div style="max-width:400px;"><img src="/public/vcard/vjimages/educationmodal.png" class="vjMILESTONESimage"></div>
                            <div class="vjExperienceYEAR"><?php echo $educationObject->duration; ?></div>
                            <div class="vjEXPERIENCEcompany"><?php echo $educationObject->edu_name; ?></div>
                            <div class="vjEXPERIENCEjobrole"><?php echo $educationObject->description; ?></div>
                        <?php } ?>

                        <div class="vjJagya20"></div>
                        <button class="vjModalChokdi md-close">Close Me!</button>
                    </div>
                </div>

            </div>
            <!-- EDUCATION CONTENT ENDS HERE -->
        <?php } ?>

        <?php
        if ($companyModel instanceof Company) { ?>
            <!-- COMPANY CONTENT BEGINS HERE -->
            <div class="md-modal md-effect-1" id="companyepopup">
                <div class="md-content">
                    <h3>Company Details</h3>
                    <div align="center">
                        <!-- Company Logo -->
                        <?php
                        if ($companylogoModel instanceof Companylogo) {
                            if (isset($companylogoModel->has_image)) {
                                echo Html::img($companylogoModel->getImageUrl(), [
                                    'class' => 'vjCOMPANYlogo',
                                ]);
                            }
                        } else {
                            echo Html::img(Yii::$app->params['frontendUrl'] . 'public/imgfc/defaultcompany.png', [
                                'class' => 'vjCOMPANYlogo',
                            ]);
                        } ?>

                        <?php if (isset($companyModel->company_name)) { ?>
                            <!-- Company name -->
                            <div class="vjCOMPANYname"><?php echo $companyModel->company_name; ?></div>
                        <?php } ?>

                        <?php if (isset($companyModel->tagline)) { ?>
                            <!-- Company tagline -->
                            <div class="vjCOMPANYtagline"><?php echo $companyModel->tagline; ?></div>
                        <?php } ?>

                        <?php if (isset($companyModel->about)) { ?>
                            <!-- about company description -->
                            <p class="vjModalNiAndarNaText"><?php echo $companyModel->about; ?></p>
                        <?php } ?>

                        <div class="vjJagya30"></div>
                        <button class="vjModalChokdi md-close">Close Me!</button>
                    </div>
                </div>
            </div>
            <!-- COMPANY CONTENT ENDS HERE -->
        <?php } ?>

    </div>
    <!-- Cotent for Popups Ends here!-->
    <?php
    if ($productModel instanceof Project){?>
    <div class="md-modal md-effect-1" id="solutionpopup">
        <div class="md-content">

            <h3>Solutions We Offer</h3>
            <div align="center">
                <div class="vjJagya20"></div>
                <?php
                        foreach ($productModel as $productObject) { ?>
                <!-- PRODUCT 1 -->
                <div class="vjEXPERIENCEcompany"><?php echo $productModel->product_name;?></div>
                <div class="vjEXPERIENCEjobrole"><?php echo $productModel->description;?></div>
                <?php }?>
                <div class="vjJagya20"></div>
                <button class="vjModalChokdi md-close">Close Me!</button>
            </div>
        </div>

    </div> <!-- SOLUTIONS OR PRODUCTS CONTENT PATYU -->
    <?php } ?>




    <!-- MAIN VISIBLE CONTAINER:- Has the details to be presented to the user -->

    <div class="vjAkhuContainer">

        <div class="vjJagya5"></div>

        <!-- CONTACT ME Side Heading -->
        <?php
        if ($contactModel instanceof Contact) {
            $vcardInfo = []; ?>
            <div>
                <p class="vjCTAheading">Contact :</p>

                <!-- In all below HREF, there will be user data -->

                <?php if (isset($contactModel->phone)) {
                    $vcardInfo["phone"] = $contactModel->phone; ?>
                    <div class="vjCTAinfobox">
                        <a href="tel:<?php echo $contactModel->phone; ?>">
                            <img src="/public/vcard/vjimages/call.png" class="vjCTAimage">
                            <span class="vjctamaintext">Call Me</span>
                        </a>
                    </div>
                <?php } ?>

                <?php if (isset($contactModel->email)) {
                    $vcardInfo["email"] = $contactModel->email; ?>
                    <div class="vjCTAinfobox">
                        <a href="mailto:<?php echo $contactModel->email; ?>">
                            <img src="/public/vcard/vjimages/email.png" class="vjCTAimage">
                            <span class="vjctamaintext">Email Me</span>
                        </a>
                    </div>
                <?php } ?>

                <?php if (isset($contactModel->whatsapp)) { ?>
                    <div class="vjCTAinfobox">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contactModel->whatsapp; ?>&text=Got%20reference%20from%20your%20Digital%20vCard.%20Want%20to%20know%20more%20about%20your%20products%20and%20services.">
                            <img src="/public/vcard/vjimages/whatsapp.png" class="vjCTAimage">
                            <span class="vjctamaintext">Whatsapp</span>
                        </a>
                    </div>
                <?php } ?>

                <!-- -skype-name- is the "skypeid" -->
                <?php if (isset($contactModel->skype)) { ?>
                    <div class="vjCTAinfobox">
                        <a href="skype:<?php echo $contactModel->skype; ?>?chat">
                            <img src="/public/vcard/vjimages/skype.png" class="vjCTAimage">
                            <span class="vjctamaintext">Skype</span>
                        </a>
                    </div>
                <?php } ?>

                <!-- user will enter messenger link -->
                <?php if (isset($contactModel->fb)) { ?>
                    <div class="vjCTAinfobox">
                        <a href="<?php echo $contactModel->fb; ?>" target="_blank">
                            <img src="/public/vcard/vjimages/fbchat.png" class="vjCTAimage">
                            <span class="vjctamaintext">FB Chat</span>
                        </a>
                    </div>
                <?php } ?>

                <div class="vjCTAinfobox md-trigger" data-modal="savemepopup">
                    <img src="/public/vcard/vjimages/save.png" class="vjCTAimage">
                    <span class="vjctamaintext">Save Me</span>
                </div>

                <div class="vjCTAinfobox md-trigger" data-modal="paymentpopup">
                    <img src="/public/vcard/vjimages/pay.png" class="vjCTAimage">
                    <span class="vjctamaintext">Pay Me</span>
                </div>

            </div> <!-- CONTACT Details ends here! -->
        <?php } ?>

        <!-- MY PROFILE SIDE HEADING-->
        <div>
            <p class="vjCTAheading">Profile :</p>

            <div class="vjCTAinfobox md-trigger" data-modal="aboutmepopup">
                <img src="/public/vcard/vjimages/aboutme.png" class="vjCTAimage">
                <span class="vjctamaintext">About Me</span>
            </div>

            <?php
            if ($skillsCount > 0) { ?>
                <div class="vjCTAinfobox md-trigger" data-modal="skillspopup">
                    <img src="/public/vcard/vjimages/skills.png" class="vjCTAimage">
                    <span class="vjctamaintext">Skills</span>
                </div>
            <?php } ?>

            <?php
            if ($achievementCount > 0) { ?>
                <div class="vjCTAinfobox md-trigger" data-modal="milestonespopup">
                    <img src="/public/vcard/vjimages/milestones.png" class="vjCTAimage">
                    <span class="vjctamaintext">Milestones</span>
                </div>
            <?php } ?>

            <?php
            if ($testimonialCount > 0) { ?>
                <div class="vjCTAinfobox md-trigger" data-modal="testimonialpopup">
                    <img src="/public/vcard/vjimages/testimonials.png" class="vjCTAimage">
                    <span class="vjctamaintext">Testimony</span>
                </div>
            <?php } ?>

            <?php
            if ($experienceCount > 0) { ?>
                <div class="vjCTAinfobox md-trigger" data-modal="experiencepopup">
                    <img src="/public/vcard/vjimages/experience.png" class="vjCTAimage">
                    <span class="vjctamaintext">Experience</span>
                </div>
            <?php } ?>

            <?php

            if ($educationCount > 0) { ?>
                <div class="vjCTAinfobox md-trigger" data-modal="edicationpopup">
                    <img src="/public/vcard/vjimages/education.png" class="vjCTAimage">
                    <span class="vjctamaintext">Education</span>
                </div>
            <?php } ?>
            <?php

            if ($productCount > 0) { ?>
    <div class="vjCTAinfobox md-trigger" data-modal="edicationpopup">
        <img src="/public/vcard/vjimages/products.png" class="vjCTAimage">
        <span class="vjctamaintext">Product</span>
    </div>
<?php } ?>


        </div>
        <!-- MY PROFILE ENDS HERE -->


        <?php if ($companyModel instanceof Company) { ?>
            <div>
                <p class="vjCTAheading">Company :</p>
                <div class="vjCTAinfobox md-trigger" data-modal="companyepopup">
                    <img src="/public/vcard/vjimages/company.png" class="vjCTAimage">
                    <span class="vjctamaintext">Company</span>
                </div>

                <div class="vjCTAinfobox md-trigger" data-modal="solutionpopup">
                    <img src="/public/vcard/vjimages/products.png" class="vjCTAimage">
                    <span class="vjctamaintext">Solutions</span>
                </div>

                <!-- website dynamic link -->
                <div class="vjCTAinfobox">
                    <a href="https://kamal.sharma" target="_blank">
                        <img src="/public/vcard/vjimages/website.png" class="vjCTAimage">
                        <span class="vjctamaintext">Website</span>
                    </a>
                </div>

                <!-- google map link -->
                <div class="vjCTAinfobox">
                    <a href="https://gmap.me/campfishblood" target="_blank">
                        <img src="/public/vcard/vjimages/location.png" class="vjCTAimage">
                        <span class="vjctamaintext">Location</span>
                    </a>
                </div>

            </div>
        <?php } ?>
        <!-- COMPANY Side Heading Ends Here -->

        <!-- SOCIAL FOLLOW -->
        <?php
        if ($socialCount > 0) { ?>
            <div>
                <p class="vjCTAheading">Follow Me :</p>

                <?php
                foreach ($socialModel as $socialObject) {
                    echo Html::a(
                        '<i class="' . $socialObject->getIconClass()[$socialObject->link_type] . ' vjsocialLink"></i>',
                        Url::to($socialObject->soc_url, true),
                        [
                            'class' => 'vjShareContainer',
                            'target' => '_blank',
                        ],
                    );
                }
                ?>
            </div>
        <?php } ?>
        <!-- SOCIAL FOLLOW ENDS HERE -->

        <div class="vjJagya20"></div>

    </div>
    <!-- MAIN FRONT CONTENT CONTAINER ENDS HERE -->



    <div class="vjcopyrightcontainer"><a href="#" target="_blank" class="vjNoDecoration"></a></div>


    <div align="center">
        <?= Html::a(
            'Login / Edit vCard',
            ['/site/dashboard'],
            ['class' => 'vjFooterSignup'],
        )
        ?>

        <?= Html::a(
            'Create Account',
            ['/site/signup'],
            [
                'class' => 'vjFooterSignup',
                'target' => '_blank',
            ],
        )
        ?>
    </div>


    <div class="md-overlay"></div>

    <script>
        // this is important for IEs
        var polyfilter_scriptpath = '/js/';
    </script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
