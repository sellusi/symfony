<?php
namespace App\Service;
interface IModelManager
{
    public function getAll();
    public function insert($object);
    public function updateSession($value);
    public function delete($index);
    public function deleteAll();
    public function get($index);
    public function filerBy($key, $value);
    public function count();
    public function select($index);
}