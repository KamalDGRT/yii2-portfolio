<?php

namespace frontend\controllers;

use Yii;
use common\models\Profilepic;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * ProfilepicController implements the CRUD actions for Profilepic model.
 */
class ProfilepicController extends Controller
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
                    ]
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
     * Lists all Profilepic models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays a single Profilepic model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Profilepic model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Profilepic();

        $model->image = UploadedFile::getInstanceByName('image');
        if (Yii::$app->request->isPost && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Profilepic model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->created_by !== NULL && $model->created_by !== Yii::$app->user->id) {
            throw new ForbiddenHttpException("You do not have permission to edit this article");
        }

        echo $model->avatar;

        $oldAvatar = $model->avatar;
        $oldAvatarPath = Yii::getAlias('@projectroot/users/images/' . $oldAvatar . '.jpg');

        $model->image = UploadedFile::getInstanceByName('image');

        if ($model->image !== NULL) {
            $this->findModel($id)->delete();
            $oldAvatarPath = Yii::getAlias('@projectroot/users/images/' . $oldAvatar . '.jpg');
            if (file_exists($oldAvatarPath)) {
                unlink($oldAvatar);
            }
            $model->isNewRecord = true;
        }

        if ($model->load(Yii::$app->request->isPost) && $model->save()) {
            return $this->redirect(['/site/dashboard']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Profilepic model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['/profilepic/create']);
    }

    /**
     * Finds the Profilepic model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profilepic the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profilepic::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
