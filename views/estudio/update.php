<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Estudio $model */

$this->title = 'Atualizar Estudio: ' . $model->Nome;
$this->params['breadcrumbs'][] = ['label' => 'Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nome, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estudio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
