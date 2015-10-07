<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clinic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cl_name')->textInput() ?>

    <?= $form->field($model, 'cl_proistamenos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cl_tomearxhs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cl_dieuthunths')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cl_phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cl_phone2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
