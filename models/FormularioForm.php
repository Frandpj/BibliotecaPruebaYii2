<?php
namespace app\models;

use yii\base\Model;

class FormularioForm extends Model
{
    // Atributos
    public $valorA;
    public $valorB;

    // Metodos
    // Metodo que permite validar los datos del formulario
    public function rules()
    {
        return [
            [['valorA', 'valorB'], 'required'],
            ['valorA', 'number'],
            ['valorB', 'number'],
        ];
    }
}