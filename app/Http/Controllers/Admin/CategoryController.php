<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * 
 */
class CategoryController extends Controller
{
	
	public function index()
	{
		$cats= Category::paginate(5);
		return view('admin/category/index',[
			'cats'=>$cats
		]);
	}

	public function edit($id)
	{
		$model = Category::find($id);
		return view('admin/category/edit',['model'=>$model]);
	}
	
	public function update($id,Request $request)
	{
		$request->offsetUnset('_token');
		$request->offsetUnset('_method');
		Category::where(['id'=>$id])->update($request->all());
		return redirect()->route('category.index');
	}

	public function destroy($id)
	{
		Category::find($id)->delete();
		return redirect()->route('category.index');
	}
	public function create()
	{
		return view('admin/category/add');
	}
	public function store(Request $request)
	{	
		$this->validate( $request,[
			'name'=>'required|unique:category,name',
			'slug'=>'required|unique:category,slug',
		],['name.required'=>'Tên danh mục không được để trống ',
		'name.unique'=>'Tên danh mục đã có ',
		'slug.required'=>'Slug danh mục không được để trống ',
		'slug.unique'=>'Slug danh mục đã có '
	] );
		Category::create($request->all());
		return redirect()->route('category.index');
	}
}

?>


