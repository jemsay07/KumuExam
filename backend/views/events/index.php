<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Events', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'event_name',
            'location:ntext',
            'date',
            'time',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        // $url = Url::to(['controller/lead-view', 'id' => $model->whatever_id]);
                        return  Html::a('<span class="fa fa-eye"></span>View ', $url, 
                        [ 'title' => Yii::t('app', 'View') ]) ;
                    },
                    'update' => function ($url, $model) {
                        // $url = Url::to(['controller/lead-view', 'id' => $model->whatever_id]);
                        return  Html::a('<span class="fa fa-pencil"></span>Update ', $url, 
                        [ 'title' => Yii::t('app', 'Update') ]) ;
                    },
                    'delete' => function ($url, $model) {
                        $url = Url::to(['events/delete', 'id' => $model->id]);
                        return  Html::a('<span class="fa fa-trash"></span>Delete', $url, 
                        [ 'title' => Yii::t('app', 'Delete'), 'data-method' => 'post' ]) ;
                    },
                ],
                
            ],
        ],
    ]); ?>


</div>
