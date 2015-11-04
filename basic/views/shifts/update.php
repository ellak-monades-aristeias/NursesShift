<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shifts */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shifts',
]) . ' ' . $model->sh_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shifts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sh_ID, 'url' => ['view', 'id' => $model->sh_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shifts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
