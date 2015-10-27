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
    
    <?php
            $nu_is_meiomenou = $model::dropdownNAIOXI();
            $is_meiomenou = $nu_is_meiomenou[$model->nu_is_meiomenou];
            
            $nu_is_ekpaideuomanos = $model::dropdownNAIOXI();
            $is_ekpaideuomanos = $nu_is_ekpaideuomanos[$model->nu_is_ekpaideuomanos];
            
            $ns_is_proistamenos = $model::dropdownNAIOXI();
            $is_proistamenos = $ns_is_proistamenos[$model->ns_is_proistamenos];
            
            $nu_is_apospasmenos = $model::dropdownNAIOXI();
            $is_apospasmenos = $nu_is_apospasmenos[$model->nu_is_apospasmenos];
                   
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'nu_onoma',
            'nu_epitheto',
            'nu_bathmida',
             [
                'label' => 'Είναι μειωμένου ωραρίου;',
                'format' => 'text',
                'value' => $is_meiomenou
            ],
            'nu_ores_ergasias',
            [
                'label' => 'Είναι εκπαιδευόμενος;',
                'format' => 'text',
                'value' => $is_ekpaideuomanos
            ],
            [
                'label' => 'Είναι προϊστάμενος;',
                'format' => 'text',
                'value' => $is_proistamenos
            ],            
           [
                'label' => 'Είναι προϊστάμενος;',
                'format' => 'text',
                'value' => $is_apospasmenos
            ],  
            'nu_apospasmenos_perigafh',
            'nu_upoloipo_adeias',
            'nu_upoloipo_repo',
            'nu_profile',
        ],
    ]) ?>

</div>
