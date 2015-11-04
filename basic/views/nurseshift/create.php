<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurseshift */

$this->title = Yii::t('app', 'Create Nurseshift');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nurseshifts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurseshift-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
