<?php

use app\models\Estudio;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Jogo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lancamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Estudio_ID')->dropDownList(ArrayHelper::map(
        Estudio::find()
            ->orderBy('Nome')
            ->all(),
        'ID',
        'Nome'
    ), ['prompt' => 'Selecione um estudio: '])
    ?>

    <!-- <?= $form->field($model, 'Estudio_ID')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>