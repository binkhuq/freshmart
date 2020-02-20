<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * 
 */
class BannerController extends Controller
{
	
	public function index()
	{
		$banns= Banner::all();
		return view('admin.banner.index',[
			'banns'=>$banns
		]);
	}
	public function edit($id){
		
		$model = Banner::find($id);

		return view('admin/banner/edit',[
			'model'=>$model
			
		]);
		
	}


	public function update($id,Request $request){
		$this->validate($request,[
			'name'=>'required',
			'image' => 'required|unique:banner,image'

		],[
			'name.required' => 'Tên không được để trống',
			'image.required' => 'Ảnh không được để trống',
			'image.unique' => 'Ảnh đã có',
			
			
			
		]);
		$request->offsetUnset('_token');
		$request->offsetUnset('_method');

		
		Banner::where(['id'=>$id])->update($request->only('name','image'));
        return redirect()->route('banner.index'); // quay lại trang trước đó 
        
    }

    public function destroy($id)
    {
    	Banner::find($id)->delete();
    	return redirect()->route('banner.index');
    }
    
    public function create()
    {
    	return view('admin.banner.add');
    }

    public function store(Request $request)
    {	
    	$this->validate($request,[
    		'name'=>'required',
    		'image'=>'required'

    	],[
    		'name.required' => 'Tên không được để trống',
    		
    		'image.required' => 'Ảnh không được để trống'
    		
    	]);
    	
    	Banner::create($request->all());
    	return redirect()->route('banner.index');
    }
}

?>