<?php

use app\assets\EstudioAsset;
use app\models\Estudio;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EstudioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

EstudioAsset::register($this);
$this->title = 'Estudios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estudio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Estudio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            'Nome',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Estudio $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 },
            ],
        ],
    ]); ?>


</div>
