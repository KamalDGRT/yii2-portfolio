<?php

namespace frontend\controllers;

use common\models\Aboutme;
use common\models\Achievement;
use common\models\Company;
use common\models\Companylogo;
use common\models\Contact;
use common\models\Education;
use common\models\Experience;
use common\models\Integration;
use common\models\Project;
use common\models\Profilepic;
use common\models\Skill;
use common\models\Social;
use common\models\Testimonial;
use Yii;
use common\models\Theme;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ThemeController implements the CRUD actions for Theme model.
 */
class ThemeController extends Controller
{
    // Having it here changes for all the actions
    // inside this Controller.
    public $layout = 'normal/main.php';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => AccessControl::class,
                'only' => ['create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['view'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Theme models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays a single Theme model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($username)
    {
        $userModel = User::findByUsername($username);

        if(isset($userModel->id)) {
            $this->layout = false;

            $aboutmeModel = Aboutme::findByCreator($userModel->id);

            if (!($aboutmeModel instanceof Aboutme))
                throw new NotFoundHttpException('About Me Fields have not been filled!');

            $achievementModel = Achievement::findByCreator($userModel->id);

            $companyModel = Company::findByCreator($userModel->id);
            $companylogoModel = Companylogo::findByCreator($userModel->id);
            $contactModel = Contact::findByCreator($userModel->id);

            $educationModel = Education::findByCreator($userModel->id);
            $experienceModel = Experience::findByCreator($userModel->id);
            $integrationModel = Integration::findByCreator($userModel->id);

            $productModel = Project::findByCreator($userModel->id);
            $profilepicModel = Profilepic::findByCreator($userModel->id);
            
            $skillsModel = Skill::findByCreator($userModel->id);
            $socialModel = Social::findByCreator($userModel->id);
            $testimonialModel = Testimonial::findByCreator($userModel->id);
            $themeModel = Theme::findByCreator($userModel->id);

            $titleString =  $aboutmeModel->firstname . " " . 
                            (isset($aboutmeModel->lastname) ? $aboutmeModel->lastname: ""). " - ".
                            (isset($aboutmeModel->profession) ? $aboutmeModel->profession: ""). " at ".
                            (isset($companyModel->company_name) ? $companyModel->company_name: "");

            return $this->render('default', [
                'aboutmeModel' => $aboutmeModel,
                'achievementModel' => $achievementModel,
                'companyModel' => $companyModel,
                'companylogoModel' => $companylogoModel,
                'contactModel' => $contactModel,
                'educationModel' => $educationModel,
                'experienceModel' => $experienceModel,
                'integrationModel' => $integrationModel,
                'productModel' => $productModel,
                'profilepicModel' => $profilepicModel,
                'skillsModel' => $skillsModel,
                'socialModel' => $socialModel,
                'testimonialModel' => $testimonialModel,
                'themeModel' => $themeModel,
                'titleString' => $titleString,
            ]);
        }

        throw new NotFoundHttpException('This User Does Not Exist!');
    }

    /**
     * Creates a new Theme model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Theme();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Theme model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Theme model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Theme model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Theme the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Theme::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Downloads the contact Information
     * @return mixed
     */
    public function actionDownload()
    {
        return $this->render('download');
    }
}
