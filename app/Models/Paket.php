<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use SoftDeletes;

    protected static function paket() {
        if (Auth::check()) {
            static::creating(function ($model) {
                $model->created_by = auth()->id();
                $model->updated_by = auth()->id();
            });
            static::updateing(function ($model) {
                $model->updated_by = auth()->id();
            });
            static::deleting(function ($model) {
                $model->deleted_by = auth()->id();
                $model->save();
            });
        }
    }
}
