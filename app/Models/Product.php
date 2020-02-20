<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * summary
 */
class Product extends Model
{
	protected $table = 'product';

	protected $fillable = ['name','status','slug','image','image_list','price','sale_price','category_id','content'];

    // lấy ra danh mục của sản phẩm
    // 1 product thuộc 1 Category
	public function cat(){
		return $this->hasOne(Category::class,'id','category_id');
	}
	
}

?>