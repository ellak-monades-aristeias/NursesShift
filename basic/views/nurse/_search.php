<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NurseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurse-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'nu_onoma') ?>

    <?= $form->field($model, 'nu_epitheto') ?>

    <?= $form->field($model, 'nu_bathmida') ?>

    <?= $form->field($model, 'nu_is_meiomenou') ?>

    <?php // echo $form->field($model, 'nu_ores_ergasias') ?>

    <?php // echo $form->field($model, 'nu_is_ekpaideuomanos') ?>

    <?php // echo $form->field($model, 'ns_is_proistamenos') ?>

    <?php // echo $form->field($model, 'nu_is_apospasmenos') ?>

    <?php // echo $form->field($model, 'nu_apospasmenos_perigafh') ?>

    <?php // echo $form->field($model, 'nu_upoloipo_adeias') ?>

    <?php // echo $form->field($model, 'nu_upoloipo_repo') ?>

    <?php // echo $form->field($model, 'nu_profile') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
