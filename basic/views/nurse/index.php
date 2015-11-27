<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Nurses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Nurse'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'fullName',
            'nu_bathmida',
            'nu_is_meiomenou',
            // 'nu_ores_ergasias',
            // 'nu_is_ekpaideuomanos',
            // 'ns_is_proistamenos',
            // 'nu_is_apospasmenos',
            // 'nu_apospasmenos_perigafh',
            // 'nu_upoloipo_adeias',
            // 'nu_upoloipo_repo',
            // 'nu_profile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
