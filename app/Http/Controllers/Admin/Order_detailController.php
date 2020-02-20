<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Order_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
/**
 * 
 */
class Order_detailController extends Controller
{
	
	public function index()
	{
		
		$orders= Order_detail::orderBy('id','DESC')->get();
		return view('admin.order_detail.index',[
			'orders'=>$orders
		]);
	}
	public function edit($id)
	{
		$model = Order_detail::find($id);
		return view('admin/order_detail/edit',['model'=>$model]);
	}
	public function update($id,Request $request){
		$this->validate($request,[
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'address' => 'required',
			'payment' => 'required',
			'status' => 'required'

		],[
			'name.required' => 'Không được để trống',
			'email.required' => 'Không được để trống',
			'phone.required' => 'Không được để trống',
			'address.required' => 'Không được để trống',
			'payment.required' => 'Không được để trống',
			'price.required' => 'Không được để trống',
			'status.required' => 'Không được để trống',
		]);

		$request->offsetUnset('_token');
		$request->offsetUnset('_method');

		Order_detail::where(['id'=>$id])->update($request->all());
        return redirect()->route('order_detail.index'); // quay lại trang trước đó 
        
    }

    public function destroy($order_id)
    {
    	Order_detail::find($order_id)->delete();
    	return redirect()->route('order_detail.index');
    }
   
    
    
}

?>