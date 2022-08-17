<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinPicker extends Model
{
   protected $guarded = [];

   public function status()
   {
       if ($this->up_down == 1){
           return "<span class='badge badge-success'><i class='fa fa-arrow-alt-circle-up'></i></span>";
       }
       return "<span class='badge badge-danger'><i class='fa fa-arrow-alt-circle-down'></i></span>";
   }
   public function user_status()
   {
       if ($this->up_down == 1){
           return "<span style='background-color: green; color: white' >up</span>";
       }
       return "<span style='background-color: darkred; color: white'>down</i></span>";
   }

   public function featured()
   {
       if ($this->featured == 1){
           return "Yes";
       }
       return "No";
   }

}
