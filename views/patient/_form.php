<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'FEMALE' => 'FEMALE', 'MALE' => 'MALE', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nationality')->dropDownList([ 'BRITISH' => 'BRITISH', 'ENGLISH' => 'ENGLISH', 'IRISH' => 'IRISH', 'SCOTTISH' => 'SCOTTISH', 'OTHER' => 'OTHER', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
