<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi (fillable)


    protected $fillable = ['course_id', 'lecturer_id', 'room_id', 'user_id', 'day', 'start_time', 'end_time'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
