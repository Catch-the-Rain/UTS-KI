use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = ['book', 'publisher'];

    // Enkripsi nilai jika perlu
    // protected $casts = [
    //     'publisher' => 'encrypted',
    // ];
}
