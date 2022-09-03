<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $tb = "siswa";

    public function allData()
    {
        return DB::table($tb)->get();
    }

    public function createData($dt)
    {
        DB::table($tb)->insert($dt);
    }

    public function updateData($id, $dt)
    {
        DB::table($tb)->update($id, $dt);
    }

    public function deleteData($id)
    {
        DB::table($tb)->delete($id);
    }
}