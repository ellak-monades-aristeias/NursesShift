<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShiftsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Shifts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shifts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Shifts'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sh_ID',
            'sh_date',
            'sh_is_argia',
            'sh_is_efhmeria',
            'sh_is_weekend',
            // 'sh_elaxisto_prosopiko',
            // 'sh_bardia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
