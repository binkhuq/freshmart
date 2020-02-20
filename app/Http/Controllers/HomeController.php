<?php 
namespace App\Http\Controllers;

use  App\Models\Product;
use  App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Order_detail;
use App\Models\Comments;
use App\Helper\CartHelper;
use App\Exports\Export;
use Maatwebsite\Excel\Facades\Excel;
/**
 * namespace: chỉ ra thư mục mà class
 */
class HomeController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
        // SELECT * FROM category
        $products = Product::where('status',1)->limit(8)->orderBy('id','ASC')->get(); // SELECT * FROM category LIMIT 0,5
        
        return view('index',compact('products'));
      }


      public function detail($slug)
      {
       $model = Product::where('slug',$slug)->first();
       return view('product-detail',['model'=> $model]);
     }

     public function list()
     {  $products = Product::paginate(8);

      return view('list',['products'=>$products]);
    }
    public function show($slug)
    {  


      $model = Category::where('slug',$slug)->first();
      return view('list-cat',['model'=> $model]);


    }

    public function contact(){
      return view('contact');
    }

    public function about(){
      return view('about');
    }

    public function check(){
     return view('checkout');

   }


   public function getsearch(Request $req ){
     $products=Product::where('name','like','%'.$req->key.'%')->orWhere('sale_price',$req->key)->get();
     return view('search',compact('products'));
   }

   public function comments(Request $request)
   { 
    $this->validate( $request,[
      'name'=>'required',
      'email'=>'required',
      'comments'=>'required',
    ],['name.required'=>'Tên  không được để trống ',
    
    'email.required'=>'Email không được để trống ',
    'comments.required'=>'Ý kiến không được để trống không được để trống ',
  ] );
    Comments::create($request->all());
    return redirect()->route('contact');
  }
  public function checkout(Request $request)
  { 
    $cart= session()->get('cart'); 

    foreach ($cart as $key => $value) {
      $order_detail=new Order_detail;
      $order_detail->name= $request->name;
      $order_detail->email= $request->email;
      $order_detail->phone= $request->phone;
      $order_detail->address= $request->address;
      $order_detail->payment= $request->payment;
      $order_detail->product_id=$key;
      $order_detail->quantity=$value['quantity'];
      $order_detail->product_name=$value['name'];
      $order_detail->price=$value['price'];
      $order_detail->save();
    }
    session()->forget('cart');
    return redirect()->back();

  }
  public function export() 
  {
    return Excel::download(new Export, 'order_detail.CSV');
  }
  
}
?>
