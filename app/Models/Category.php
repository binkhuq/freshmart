<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['name','status','slug','parent_id'];

    // ORM - OBKECT RELARION MAPPING
    // lấy ra danh sách sản phẩm theo danh mục
    // 1 Category có n Category
    public function products(){
        return $this->hasMany(Product::class,'category_id','id')->where('status',1);
    }


    public function chils(){
        return $this->hasMany(Category::class,'parent_id','id');
    }
}

?>