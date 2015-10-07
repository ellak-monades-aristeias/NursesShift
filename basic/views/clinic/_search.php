<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClinicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'cl_name') ?>

    <?= $form->field($model, 'cl_proistamenos') ?>

    <?= $form->field($model, 'cl_tomearxhs') ?>

    <?= $form->field($model, 'cl_dieuthunths') ?>

    <?php // echo $form->field($model, 'cl_phone1') ?>

    <?php // echo $form->field($model, 'cl_phone2') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
