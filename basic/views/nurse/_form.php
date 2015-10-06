<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nurse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurse-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'nu_onoma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nu_epitheto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nu_bathmida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nu_is_meiomenou')->textInput() ?>

    <?= $form->field($model, 'nu_ores_ergasias')->textInput() ?>

    <?= $form->field($model, 'nu_is_ekpaideuomanos')->textInput() ?>

    <?= $form->field($model, 'ns_is_proistamenos')->textInput() ?>

    <?= $form->field($model, 'nu_is_apospasmenos')->textInput() ?>

    <?= $form->field($model, 'nu_apospasmenos_perigafh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nu_upoloipo_adeias')->textInput() ?>

    <?= $form->field($model, 'nu_upoloipo_repo')->textInput() ?>

    <?= $form->field($model, 'nu_profile')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
