<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;




    // protected $fillable = ['title','excerpt','body'];
    // digunakan untuk memperbolehkan menggunakan fill Post::create dengan cara manual

  protected $guarded = ['id'];

  protected $with = ['catagory', 'author'];
  //penambahan with('author', 'catagory') untuk membuat web lebi optimal


  public function scopeFilter($query, array $filters)
  {

    $query->when( $filters['search'] ?? false, function($query, $search) {
        return $query->where('title','like','%' .  $search . '%')
        ->orWhere('body','like','%' .  $search . '%');
    });


    $query->when($filters['catagory'] ?? false, function($query, $catagory){
        return $query->whereHas('catagory', function($query) use ($catagory){
            $query->where('slug', $catagory);
        });
    });
    
    
    $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
            $query->where('username', $author)
        )
    ); 
    // contoh menggunaka erofuncation

  }



  public function catagory()
  {
    return $this->belongsTo(Catagory::class);
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function getRouteKeyName()
  {
    return 'slug';
  }

  public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}

