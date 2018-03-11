<?php

namespace app\controllers\rest;

use Yii;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;

class PatientController extends ActiveController
{
    public $modelClass = 'app\models\Patient';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
        ];
        
        return $behaviors;
    }
}
