<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SupplierEntry;
class Product extends Model
{
    public function quantity()
    {
    	return $this->hasMany(SupplierEntry::class);
    }
    public function supplier()
    {
    	return $this->quantity()->where('user_id',auth()->user()->id);
    }
    public function getTotalQuantityAttribute($value='')
    {
    	$count = 0;
    	if (!$this->quantity->isEmpty()) {
    		foreach ($this->quantity as $quantity) {
    			$count += $quantity->product_count;
    		}
    	}
    	return $count;
    }
}
