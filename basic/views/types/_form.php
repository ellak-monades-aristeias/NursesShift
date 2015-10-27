<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Types */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="types-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'ID')->textInput() ?>-->

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'isReduced')->textInput() ?>-->
    <?= $form->field($model, 'isReduced')->dropDownList(
            [0 => 'ΟΧΙ', 1 => 'ΝΑΙ']   // Flat array ('id'=>'label')
        ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
