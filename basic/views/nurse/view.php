<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nurse */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nurses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'nu_onoma',
            'nu_epitheto',
            'nu_bathmida',
            'nu_is_meiomenou',
            'nu_ores_ergasias',
            'nu_is_ekpaideuomanos',
            'ns_is_proistamenos',
            'nu_is_apospasmenos',
            'nu_apospasmenos_perigafh',
            'nu_upoloipo_adeias',
            'nu_upoloipo_repo',
            'nu_profile',
        ],
    ]) ?>

</div>
