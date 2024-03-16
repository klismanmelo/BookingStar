<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    public static function getTable($table)
    {
        return app('db')->table($table);
    }

    public static function getAll($table)
    {
        return self::getTable($table)->get();
    }

    public static function getById($table, $id)
    {
        return self::getTable($table)->where('id', $id)->first();
    }

    public static function create($table, $data)
    {
        return self::getTable($table)->insertGetId($data);
    }

    public static function update($table, $id, $data)
    {
        return self::getTable($table)->where('id', $id)->update($data);
    }

    public static function delete($table, $id)
    {
        return self::getTable($table)->where('id', $id)->delete();
    }
}