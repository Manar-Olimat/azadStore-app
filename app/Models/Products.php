<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'color',
        'images',
        'tags',
        'quantity',
        'description',
        'category',
    ];




    public function scopeFilter($query, array $filters){
        //sql query filter by tag
//         if($filters['tag'] ?? false){
// $query->where('tags','like','%'.request('tag').'%');
//         }

//sql query filter by search 
        if($filters['search'] ?? false){
            $query->where('name','like','%'.request('search').'%')
            ->orWhere('category','like','%'.request('search').'%')
            ->orWhere('tags','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%');
                    }


                    //sql query filter by drawer checkboxes 
        if($filters['filter_drawer'] ?? false){
            $query->where('rating','like','%'.request('filter_drawer').'%')
            ->orWhere('category','like','%'.request('filter_drawer').'%')
            ->orWhere('discount',!null);
                    }


             //sql query filter by dropdown 
        if($filters['drop_filter'] ?? false){
             if(request('drop_filter')== 'normal')
            $query->reorder("id", 'desc');
            elseif(request('drop_filter')== 'price_h_l')
           
            $query->reorder("price", 'desc'); 
            
            elseif(request('drop_filter')== 'price_l_h')
            $query->reorder("price", 'asc'); 
            
            elseif(request('drop_filter')== 'newest')
            $query->reorder("created_at", 'desc');
           
                    }
    }




}
