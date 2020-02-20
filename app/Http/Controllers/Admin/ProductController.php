<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * namespace: chỉ ra thư mục mà class
 */
class ProductController extends Controller
{
    /**
     * summary
     */

    public function index()
    {
        //$cats = Category::all(); // SELECT * FROM category
        $products = Product::paginate(10); // SELECT * FROM category LIMIT 0,5
        return view('admin.product.index',[
            'products' => $products
        ]);
    }

    public function show ($id){

        $model = Product::find($id);

        return view('admin/product/show',[
            'model'=>$model
        ]);
    }

    public function edit($id){
        $cats = Category::all(); // SELECT * FROM category 
        $model = Product::find($id);

        return view('admin/product/edit',[
            'model'=>$model,
            'cats' => $cats
        ]);
    }

    public function update($id,Request $request){
        $this->validate($request,[
            'name' => 'required',
            'category_id' => 'required',
            'slug' => 'required|unique:product,slug,'.$id,
            'price' => 'required|numeric|min:0|not_in:0',
            'sale_price' => 'required|numeric|min:0|lt:price',
        ],[
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm đã có trong CSDl',
            'slug.required' => 'Slug sản phẩm không được để trống',
            'slug.unique' => 'Slug sản phẩm đã có trong CSDl',
            'sale_price.lt' => 'Giá khuyến mãi phải < giá gốc',
            'price.min' => 'Giá phải > 0',
            'price.not_in' => 'Giá phải > 0',
        ]);

        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        Product::where(['id'=>$id])->update($request->all());
        return redirect()->route('product.index'); // quay lại trang trước đó 
        
    }

    public function destroy($id){
        Product::find($id)->delete();
        return redirect()->back(); // quay lại trang trước đó 
    }

    public function create (){
        $cats = Category::orderBy('name','ASC')->get(); // SELECT * FROM category 
        return view('admin.product.add',compact('cats'));
    }
    // use Illuminate\Http\Request;
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'category_id' => 'required',
            'slug' => 'required|unique:product,slug',
            'price' => 'required|numeric|min:0|not_in:0',
            'sale_price' => 'required|numeric|min:0|lt:price',
        ],[
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm đã có trong CSDl',
            'slug.required' => 'Slug sản phẩm không được để trống',
            'slug.unique' => 'Slug sản phẩm đã có trong CSDl',
            'sale_price.lt' => 'Giá khuyến mãi phải < giá gốc',
            'price.min' => 'Giá phải > 0',
            'price.not_in' => 'Giá phải > 0',
        ]);

        Product::create($request->all());
        return redirect()->route('product.index'); // quay lại trang trước đó 
    }

}
?>