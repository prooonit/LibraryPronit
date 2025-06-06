<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['book_id', 'member_id', 'issue_date', 'return_date'];
    public function book() {
    return $this->belongsTo(Book::class);
    }

    public function member() {
    return $this->belongsTo(Member::class);
  }

    //
}
