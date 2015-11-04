<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shifts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shifts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sh_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'el',
    'dateFormat' => 'yyyy-M-dd',
]) ?>

    <?= $form->field($model, 'sh_is_argia')->dropDownList(
            [0 => 'ΟΧΙ', 1 => 'ΝΑΙ']   // Flat array ('id'=>'label')
        ); ?>

    <?= $form->field($model, 'sh_is_efhmeria')->dropDownList(
            [0 => 'ΟΧΙ', 1 => 'ΝΑΙ']   // Flat array ('id'=>'label')
        ); ?>
    <?= $form->field($model, 'sh_is_weekend')->dropDownList(
            [0 => 'ΟΧΙ', 1 => 'ΝΑΙ']   // Flat array ('id'=>'label')
        ); ?>

    <?= $form->field($model, 'sh_elaxisto_prosopiko')->textInput() ?>

    <?= $form->field($model, 'sh_bardia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
