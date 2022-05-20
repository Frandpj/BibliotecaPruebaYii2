<?php

/** @var app\models\FormularioForm $model */
/** @var app\models\FormularioForm $mensaje */


use yii\helpers\Html;

// Genera las instrucciones html que requiere un formulario
use yii\widgets\ActiveForm;
?>

<?php
if ($mensaje) {
    echo Html::tag('div', Html::encode($mensaje), ['class' => 'alert alert-danger']);
}
?>

Hola usuario

<!-- Abre el formulario -->
<?php $formulario = ActiveForm::begin(); ?>

<!-- Genera los inputs que están en el modelo -->
<?= $formulario->field($model, 'valorA'); ?>
<?= $formulario->field($model, 'valorB'); ?>

<div class="form-group">
    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
</div>

<!-- Cierra el formulario -->
<?php $formulario->end(); ?>