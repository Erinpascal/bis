<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Good extends Model
{
     protected $fillable=[
        'destination','status_id','customer_id','item','quantity','date','time','reciever'
    ];

  public function getSearchResult(): SearchResult
    {
        $url = route('goods.show', $this->id);

        return new SearchResult(
            $this,
            $this->code,
            $this->destination,
            $this->date,
            $this->time,
            $this->status_id,
            $this->reciever,
            $this->item,
            $url
         );
    }

}
