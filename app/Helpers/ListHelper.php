<?php

namespace App\Helpers;

use App\Models\Category;

class ListHelper
{
  public static function getCategories()
  {
    $data = null;
    $data = Category::select('id', 'name');
    $data = array('' => 'Selecione...') + $data->pluck('name', 'id')->toArray();
    return $data;
  }
}
