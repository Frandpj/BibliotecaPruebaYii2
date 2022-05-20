<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

// Importaciones de modelos
use app\models\FormularioForm;

class SitioController extends Controller
{
    /**
     * Redirecciona a la página de inicio
     */
    public function actionInicio()
    {
        $model = new FormularioForm();

        // Si el formulario se ha enviado correctamente y es valido
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Validación correcta
            $valorRespuesta = 'El resultado es: '.($model->valorA + $model->valorB);
            return $this->render('inicio', ['mensaje' => $valorRespuesta, 'model' => $model]);
        }

        return $this->render('inicio', ['mensaje' => '', 'model' => $model]);
    }
}








?>