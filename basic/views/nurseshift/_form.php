<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Nurse;
use app\models\Types;

/* @var $this yii\web\View */
/* @var $model app\models\Nurseshift */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurseshift-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'ns_nurseID')->textInput() ?>-->
    <?= $form->field($model, 'ns_nurseID')->dropDownList(
            Nurse::dropdown()   
        )
    ?>

    <?= $form->field($model, 'ns_shiftID')->textInput() ?>

    <?= $form->field($model, 'ns_type')->dropDownList(
            Types::dropdown()
        )
    ?>

    <?= $form->field($model, 'ns_hours')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
