<?php

use yii\helpers\Html;
use kartik\grid\GridView;
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
        [
            'attribute' => 'ns_nurseID',
            'label' => 'Όνομα Νοσηλευτή',
            'value' => function($model, $index, $dataColumn) {
                // more optimized than $model->role->name;
                $roleDropdown = \app\models\Nurse::dropdown();
                return $roleDropdown[$model->ns_nurseID];
            },
            'filter' => \app\models\Nurse::dropdown(),
            //'filter'=>ArrayHelper::map(\app\models\Nurse::find()->asArray()->all(), 'ID', 'nu_onoma'),
        ],
            [
                'attribute' => 'ns_type',
                'label' => 'Τύπος',
                'value' => 'nsType.description',
                /*'value' => function($model, $index, $dataColumn) {
                    // more optimized than $model->role->name;
                    $roleDropdown = \app\models\Types::dropdown();
                    return $roleDropdown[$model->ns_type];
                },*/ 
                'filter' => \app\models\Types::dropdown(),
            ],
            [
                'attribute' => 'ns_shiftID',
                'label' => 'Ημερομηνία',
                'value' => function($model, $index, $dataColumn) {
                    // more optimized than $model->role->name;
                    $roleDropdown = \app\models\Shifts::dropdown();
                    return $roleDropdown[$model->ns_nurseID];
                },   
                'filter' => \yii\jui\DatePicker::widget(['language' => 'el', 'dateFormat' => 'dd-MM-yyyy']),
                'format' => 'html',
            ],
            'ns_hours',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
    'beforeHeader'=>[
        [
            'columns'=>[
                ['content'=>'Header Before 1', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
                ['content'=>'Header Before 2', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
                ['content'=>'Header Before 3', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
            ],
            'options'=>['class'=>'skip-export'] // remove this row from export
        ]
    ],
    'toolbar' =>  [
        ['content'=>
            Html::button('&lt;i class="glyphicon glyphicon-plus">&lt;/i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Add Book'), 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
            Html::a('&lt;i class="glyphicon glyphicon-repeat">&lt;/i>', ['grid-demo'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>Yii::t('kvgrid', 'Reset Grid')])
        ],
        '{export}',
        '{toggleData}'
    ],
    'pjax' => true,
    'bordered' => true,
    'striped' => false,
    'condensed' => false,
    'responsive' => true,
    'hover' => true,
    'floatHeader' => true,                    
    ]); ?>

</div>
