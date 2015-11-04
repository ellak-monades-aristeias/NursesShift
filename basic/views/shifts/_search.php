<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShiftsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shifts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sh_ID') ?>

    <?= $form->field($model, 'sh_date') ?>

    <?= $form->field($model, 'sh_is_argia') ?>

    <?= $form->field($model, 'sh_is_efhmeria') ?>

    <?= $form->field($model, 'sh_is_weekend') ?>

    <?php // echo $form->field($model, 'sh_elaxisto_prosopiko') ?>

    <?php // echo $form->field($model, 'sh_bardia') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
