<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\PricingType;
use App\Models\ProductDetail;
use App\Models\ProductAttribute;
use App\Models\Attribute;

use Yajra\Datatables\Datatables;
use Auth;
use DB;
use Response;

use App\Traits\ImageUpload;

class VendorController extends Controller
{
    use ImageUpload;

    public function __construct()
    {
        $this->middleware(['auth', 'role:2']);
    }

    /***************************************
     * Vendor Dashboard Related
    ****************************************/
    public function index(Request $request)
    {
        $storeList = Store::where('owner_id', '=', Auth::user()->id)->get();
        $storeCount = $storeList->count();

        $prodList = Product::join('stores', 'stores.id', '=', 'products.store_id')->where('owner_id', '=', Auth::user()->id)->get();
        $prodCount = $prodList->count();

        $srvList = Service::join('stores', 'stores.id', '=', 'services.store_id')->where('owner_id', '=', Auth::user()->id)->get();
        $srvCount = $srvList->count();
        return view('vendor', compact('storeCount', 'prodCount', 'srvCount'));
    }

    /*****************************
     * Yajra AJAX Related
    ******************************/
    public function StoreListing(Request $request)
    {
        if ($request->ajax()) {
            $data = Store::select('*')->where('owner_id', Auth::user()->id);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }

    public function productListing(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('products.*', 'stores.owner_id')
            ->leftJoin('stores', 'stores.owner_id', '=', 'products.store_id')
            ->where('stores.owner_id', '=', Auth::user()->id);

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }

    /*****************************
     * Simnple AJAX Related
    ******************************/
    public function fetchProductByStore(Request $request)
    {
        $data = Product::select('id', 'name')->where('store_id', '=', $request->store_id)->get();
        return Response::json($data);
    }

    /*****************************
     * Product Detail Related
    ******************************/
  
    public function createProductDetails()
    {
        $cats = Category::where('cat_type', '=', '1')->get();
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        $pricingTypes = PricingType::all();
        return view('product-details.create', compact('cats', 'stores', 'pricingTypes') );
    }

    public function storeProductDetails(Request $request)
    {
            $matchThese = array('product_id'=>$request->product_id, 'product_code'=>$request->product_code);

            ProductDetail::updateOrCreate($matchThese,
                [
                    'product_id'=>$request->product_id,
                    'product_code'=>$request->product_code,
                    'details'=>$request->details,
                    'category_id'=>$request->category_id,
                    'stock_unit'=>$request->stock_unit,
                    'price'=>$request->price,
                    'discount'=>$request->discount,
                    'discount_start'=>$request->discount_start,
                    'discount_end'=>$request->discount_end,
                    'price_type_id'=>$request->price_type_id
                ]
            );

        return redirect()->route('vendDash');
    }

    public function ecitProductDetails($id)
    {
        $cats = Category::where('cat_type', '=', '1')->get();
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        $pricingTypes = PricingType::all();
        $productdetail = ProductDetail::where('id', $id)->first();

        return view('product-details.edit', compact('cats', 'stores', 'pricingTypes', 'productdetail') );
    }

    public function displayAllProductDetails()
    {
        $productdetails = ProductDetail::paginate(20);
        return view('product-details.index', compact('productdetails'));
    }

    public function displayProductDetails($id)
    {
        $productdetail = ProductDetail::where('id', $id)->first();
        return view('product-details.show', compact('productdetail'));
    }  

    public function renovateProductDetails(Request $request)
    {
        $matchThese = array('product_id'=>$request->product_id, 'product_code'=>$request->product_code);

            ProductDetail::updateOrCreate($matchThese,
                [
                    'product_id'=>$request->product_id,
                    'product_code'=>$request->product_code,
                    'details'=>$request->details,
                    'category_id'=>$request->category_id,
                    'stock_unit'=>$request->stock_unit,
                    'price'=>$request->price,
                    'discount'=>$request->discount,
                    'discount_start'=>$request->discount_start,
                    'discount_end'=>$request->discount_end,
                    'price_type_id'=>$request->price_type_id
                ]
            );

        return redirect()->route('vendDash');
    }

    public function eradicateProductDetails($id)
    {
        ProductDetail::where('id', $id)->delete();
        return redirect()->route('vendDash');
    }

    /*****************************
     * Product Attribute Related
    ******************************/
    public function createProductAttributes()
    {
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        $attributes = Attribute::all();
        return view('product-attributes.create', compact('stores', 'attributes') );
    }

    public function storeProductAttributes(Request $request)
    {
            $matchThese = array('product_id'=>$request->product_id, 'attribute_id'=>$request->attribute_id, 'vals'=>$request->vals);

            ProductAttribute::updateOrCreate($matchThese,
                [
                    'product_id'=>$request->product_id,
                    'attribute_id'=>$request->attribute_id,
                    'vals'=>$request->vals
                ]
            );

        return redirect()->route('vendDash');
    }

    public function editProductAttributes($id)
    {
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        $attributes = Attribute::all();
        $productdetail = ProductAttribute::where('id',$id)->first();

        return view('product-attributes.edit', compact('productdetail', 'stores', 'attributes') );
    }

    public function displayProductAttributes($id)
    {
        $productdetail = ProductAttribute::where("id", $id)->first();
        return view('product-attributes.show', compact('productdetail'));
    }
    /*******************
     * Service Related
    ********************/
    public function createService()
    {
        $cats = Category::where('cat_type', '=', '0')->get();
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        $pricingType = PricingType::all();
        return view('services.create', compact('cats', 'stores', 'pricingType') );
    }

    public function storeService(Request $request)
    {
        $matchThese = array('name'=>$request->name, 'store_id'=>$request->store_id);

        if($request->hasFile('service_img')){
            $serv_image = $request->file('service_img');
            $serv_folder = 'stores/'.$request->store_id."/services/";
            $serv_path =  $this->saveImages($serv_image, $serv_folder, 500);

            Service::updateOrCreate($matchThese,
                [
                    'name'=>$request->name,
                    'service_code'=>$request->service_code,
                    'service_detail'=>$request->service_detail,
                    'service_img'=>$serv_path,
                    'store_id'=>$request->store_id,
                    'category_id'=>$request->category_id,
                    'price_type_id'=>$request->price_type_id
                ]
            );
          }
        return redirect()->route('vendDash');
    }
    
    public function editService($id)
    {
        $cats = Category::where('cat_type', '=', '0')->get();
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        $pricingType = PricingType::all();
        $service = Service::where('id',$id)->first();

        return view('services.edit', compact('cats', 'stores', 'pricingType', 'service') );
    }

    public function renovateService(Request $request)
    {
        $matchThese = array('name'=>$request->name, 'store_id'=>$request->store_id, 'id'=>$request->service_id);

        if($request->hasFile('service_img')){
            $serv_image = $request->file('service_img');
            $serv_folder = 'stores/'.$request->store_id."/services/";
            $serv_path =  $this->saveImages($serv_image, $serv_folder, 500);

            Service::updateOrCreate($matchThese,
                [
                    'name'=>$request->name,
                    'service_code'=>$request->service_code,
                    'service_detail'=>$request->service_detail,
                    'service_img'=>$serv_path,
                    'store_id'=>$request->store_id,
                    'category_id'=>$request->category_id,
                    'price_type_id'=>$request->price_type_id
                ]
            );
        }
        return redirect()->route('vendDash');
    }

    public function eradicateService($id)
    {
        Service::where('id', $id)->delete();
        return redirect()->route('vendDash');
    }

    public function displayService($id)
    {
        $service = Service::where("id", $id)->first();
        return view('services.show', compact('service'));
    }

    public function displayAllServices()
    {
        $services = Service::paginate(20);
        return view('services.index', compact('services'));
    }

    /****************
     * Store Related
    ****************/
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matchThese = array('store_name'=>$request->store_name, 'owner_id'=>Auth::user()->id);
        Store::updateOrCreate($matchThese,
            [
                'store_name'=>$request->store_name,
                'store_address'=>$request->store_address,
                'store_address2'=>$request->store_address2,
                'store_phone'=>$request->store_phone,
                'owner_mobile'=>$request->owner_mobile,
                'owner_id'=>Auth::user()->id,
                'lat'=>$request->mlat,
                'lng'=>$request->mlong
            ]
        );

        return redirect()->route('vendDash')->withSuccess('Saved');
    }

    public function displayStore($id)
    {
        $store = Store::where("id", $id)->first();
        return view('stores.show', compact('Store'));
    }

    public function displayAllStores()
    {
        $stores = Store::paginate(20);
        return view('stores.index', compact('stores'));
    }

    public function eradicateStore($id)
    {
        Store::where('id', $id)->delete();
        return redirect()->route('vendDash');
    }

    /*********************
    * Product Related
    **********************/
    public function createProduct()
    {
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        return view('products.create', compact('stores') ); 
    }

    public function storeProduct(Request $request)
    {
        $matchThese = array('name'=>$request->name, 'store_id'=>$request->store_id);
        Product::updateOrCreate($matchThese,
            [
                'name'=>$request->name,
                'store_id'=>$request->store_id
            ]
        );

        return redirect()->route('vendDash');
    }

    public function editProduct($id)
    {
        $stores = Store::where('owner_id', Auth::user()->id)->get();
        $product = Product::where('id', $id)->first();
        return view('products.edit', compact('stores', 'product') ); 
    }

    public function renovateProduct(Request $request)
    {
        $matchThese = array('id'=>$request->product_id);
        Product::updateOrCreate($matchThese,
            [
                'name'=>$request->name,
                'store_id'=>$request->store_id
            ]
        );
        return redirect()->route('vendDash');
    }

    public function displayAllProducts()
    {
        $products = Product::paginate(20);
        return view('products.index', compact('products'));
    }

    public function displayProduct($id)
    {
        $product = Product::where("id", $id)->first();
        return view('products.show', compact('product'));
    }

    public function eradicateProduct($id)
    {
        $product = Product::where('id',$id);
        $product->delete();
        return redirect()->route('vendDash');
    }
}
