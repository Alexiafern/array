<?php
class ClassData
{
    private $key;

    public function getKey(){return $this->key;}
    public function setKey($key){$this->key = $key;}

    public function sortData($arr)
    {
        array_multisort(array_map(function ($element){
            return $element[$this->getKey()];
        },$arr),SORT_ASC, $arr);
        return $arr;
    }
}
?>