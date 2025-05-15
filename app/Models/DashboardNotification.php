<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardNotification extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'is_read', 'message', 'type'];

    // Specify the table name
    protected $table = 'notifications';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

