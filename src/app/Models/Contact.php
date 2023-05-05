<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = ['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion'];

    public function Gender($value)
    {
            if ($value == 1) {
                $value = '男性';
            } else {
                $value = '女性';
            }
        return $value;
    }

    /**
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */


    public function scopeFullnameSearch($query,$keyword)
    {
        if(!empty($keyword)){
            $query->where('fullname', 'like', '%' . $keyword . '%');
        }
    }

    public function scopeGenderSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('gender', '=', $keyword);
        }
    }

    public function scopeTimesStampsSearch($query, $from, $to)
    {
        if(!empty($from) || !empty($to)){
            if(empty($to)){
                $to = date('Y-m-d');
                // dd($to);
            }elseif(empty($from)){
                //日付の最小値を設定
                $from = date('1901-12-14');
            }

            $query->whereBetween('created_at', [$from, $to]);
        }
    }
    public function scopeEmailSearch($query, $keyword)
    {
        if(!empty($keyword)){
            $query->where('email', 'like', '%' . $keyword . '%');
        }
    }
}