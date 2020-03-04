<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 2/4/2020
 * Time: 12:17 PM
 */

//НАЙТИ ИМЯ НАСЛЕДНИКА getTableName()

abstract class Model
{
    public $id;

    //поиск одной записи в бд; в параметре передаем массив ключ => значение, для формирования строки в where
    public function findAll($columnValue = [])
    {
        $table = $this->getClassName(); // TODO: Change the autogenerated stub
        $sql = sql::select($table, $columnValue);
        return $sql;
    }

    function findOne($columnValue = [])
    {
        $table = $this->getClassName(); // TODO: Change the autogenerated stub
        $sql = sql::selectOne($table, $columnValue);
        //TODO: $sql = sql::selectOne($table, $columnValue);
        //de(sql::select($table,$columnValue));

        //todo USE $this->load($sql)
        //$this->load($sql);
        $this->load($sql);
        return $sql;
    }

    function load($fieldData = null)
    {
        //заполняем модель данних через массив переданний методу
        foreach ($fieldData as $key => $value) {
            //if(is_null($value) || strlen($value) == 0) $this->$key['value'] = 0;
            $this->$key['value'] = $value;
        }
    }

    function save($updateValue = [])
    {
        $updateValue = $this->get_object_mass();
        $fieldValue = $this->get_object_mass();
        $table = $this->getClassName();
        if (is_null($fieldValue['id']['value'])) {
            array_shift($fieldValue);
            var_dump($fieldValue);
            $insertId= sql::insert($table, $fieldValue);
            $this->load($fieldValue);
            $this->id = $insertId;
        } elseif ($fieldValue['id']) {
            echo "update";
            var_dump($fieldValue);
            sql::update($table,$fieldValue, $fieldValue['id']['value']);
            $this->load($updateValue);
        } else {
            return false;
        }
    }

    function newSave(){
        //получаем все доступние свойства класса, таблицу, с которой будем работать и переменние которие подлежат ручному вводу
        $updateValue =  $fieldValue = $this->get_object_mass();
        $table = $this->getClassName();
        $manualInputVars = $this->getManualInputVars();

        //валидация переменних, которие подлежат ручному вводу
        $check = $this->validation($manualInputVars);

        //если не существует id - создаем запись, иначе обновляем, в случае аномального результата условия викидиваем false
        if (is_null($fieldValue['id']['value'])) {
            //формируем массив "ключ" => "значение" для запроса insert
            if($check){
                $fieldValueForInsert = [];
                foreach ($manualInputVars as $key => $keyArray) {
                    $fieldValueForInsert[$key] = $keyArray['value'];
                }
                $insertId= sql::insert($table, $fieldValueForInsert);
                $this->id['value'] = $insertId;
            }
            else return false;
        } elseif ($fieldValue['id']['value']) {
            echo "update";
            $fieldValueForUpdate = [];
            foreach ($manualInputVars as $key => $keyArray) {
                $fieldValueForUpdate[$key] = $keyArray['value'];
            }
            var_dump($fieldValueForUpdate);
            sql::update($table, $fieldValueForUpdate, $fieldValue['id']['value']);
            $this->load($updateValue);
        } else {
            return false;
        }
        return true;
    }

    function get_object_mass()
    {
        $mass = get_object_vars($this);
        return $mass;
    }

    protected function getClassName()
    {
        $mass = strtolower(explode("Model_", get_class($this))[1]);
        return $mass;

    }

    protected function validation($arrayForCheck){
        foreach($arrayForCheck as $key => $keyArray){
            $checkValue = $keyArray['value'];
            if(strlen($checkValue) < 1 && $keyArray['validation']['type'] == 'input'){
                echo "Задано пустое значение в поле: $key<br />"; return false;
            }
            if(gettype($checkValue) != $keyArray['validation']['type']){
                if($keyArray['validation']['type'] == 'numeric' && !is_numeric($checkValue)) {
                    echo gettype($checkValue), '-  тип значения; тип в указании обьекта', $keyArray['validation']['type'];
                    echo "Не корректное значение введено в поле: " . $key;
                    return false;
                }
            }
            if(strlen($checkValue) > $keyArray['validation']['maxLength']){
                echo "Не корректное значение введено в поле: ".$key;
                return false;
            }
        }
        return true;
    }

    protected function getManualInputVars(){
        $allObjectVars = get_object_vars($this);
        $manualInputObjectVars = [];
        foreach($allObjectVars as $key => $keyArray){
            if($keyArray['manualInput'] === true) $manualInputObjectVars[$key] = $allObjectVars[$key];
        }
        return $manualInputObjectVars;
    }

    public function generateForm($values = false){
        $manualInputVars = $this->getManualInputVars();
        $htmlForm = "";
        foreach($manualInputVars as $key => $keyArray){
            $value = ($values === true) ? $keyArray['value'] : '';
            if($keyArray['form'] == 'input'){
                $htmlForm .= "<input type='input' name = '$key' placeholder='Enter your $key' value='$value'><br />";
            }
            if($keyArray['form'] == 'checkbox'){
                if($keyArray['value'] == 1) $htmlForm .= "<input type='checkbox' name = '$key' value='1' checked>Есть в наличии<br />";
                else $htmlForm .= "<input type='checkbox' name = '$key' value='1'>Есть в наличии<br />";
            }
        }
        return $htmlForm;
    }

    public function delete(){
        $table = $this->getClassName();
        $title = $this->title['value'];
        $delete = sql::delete($table, ['id' => $this->id['value']]);
        echo "Удалили обьект: $title";
    }

}
