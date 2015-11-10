<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurseshiftSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Nurseshifts');
$this->params['breadcrumbs'][] = $this->title;
$nurseModel = new \app\models\Nurse();

?>
<div class="nurseshift-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Nurseshift'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            //'ns_nurseID',
        [
            'attribute' => 'ns_name',
            'label' => 'Όνομα Νοσηλευτή',
            'value' => function($model, $index, $dataColumn) {
                // more optimized than $model->role->name;
                $roleDropdown = \app\models\Nurse::dropdown();
                return $roleDropdown[$model->ns_nurseID];
            },
            'filter' => \app\models\Nurse::dropdown(),
            //'filter'=>ArrayHelper::map(\app\models\Nurse::find()->asArray()->all(), 'ID', 'nu_onoma', 'nu_epitheto'),
        ],     
            'ns_shiftID',
            'ns_type',
            'ns_hours',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
