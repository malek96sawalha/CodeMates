<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use App\Models\Review;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

use function Pest\Laravel\startSession;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Session::put('url.intended', url()->previous());
        Session::put('url.single', url()->previous());
        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();
        // $reviews = Review::where('productId',null)->get();
        // dd($reviews);
        // $users = DB::table('users')->get();
        // $volanters = DB::table('paypals')->get();
        
        
        // dd($categories);
        return view('pages.index', compact('categories', 'products', 'users', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function subcategories($id = null)
    {
        $query = products::query();
        $categories = DB::table('categories')->get();

        if ($id !== null) {
            $query->where('categoryId', $id);
        }

        $products = $query->get();

        return view('pages.menu', ['products' => $products, 'categories' => $categories]);
    }

    public function rangefilter(){
        
    }
    public function find($id)
    {

        $categories = DB::table('categories')->get();
        // $products = DB::table('products')->get();
        // $users = DB::table('users')->get();
        $volanters = DB::table('paypals')->get();
        $product = products::findOrFail($id);
        $sameproducts = products::where('categoryId', $product->categoryId)->get();
$Reviews=Review::where('productId',$product->id)->get();

        $startDate = Carbon::parse($product->created_at);
        $endDate = Carbon::now();
        $diffInMinutes = $endDate->diffInMinutes($startDate);
        $diffInHours = $endDate->diffInHours($startDate);
        $diffInDays = $endDate->diffInDays($startDate);
        $diffInMonths = $endDate->diffInMonths($startDate);
       if(isset($quintty)){
            $quintty = session('cart')[$id]['quantity'];
       }else{
         $quintty=0;
       }
        $totalsproduct = 0;
        foreach ($volanters as $volanter) {
            if ($volanter->product_id == $product->id) {

                $totalsproduct += $volanter->amount;
            }
        }
        // $percant = (int) (($totalsproduct / $products->total) * 100);
        $data = [
            'product' => $product,
            'quintty' =>  $quintty ,
            'Reviews'=> $Reviews,
            'sameproducts'=> $sameproducts,
            'diffInMinutes' => $diffInMinutes,
            'diffInHours' => $diffInHours,
            'diffInDays' => $diffInDays,
            'diffInMonths' => $diffInMonths,
            'categories' => $categories,
            'totalsproduct' => $totalsproduct,
            // 'percant'=> $percant,


            // Add more data as needed
        ];
    
        session(['totalsproduct' => $totalsproduct]);

       
        // dd($currentDateTime);
        return  view("pages.singel", $data);
        // ['products' => $products]
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
    }
    public function save(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;
        $category->save();


        return redirect()->route('Admin_Dashboard.Category');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $CategoryList = Category::all();
        return view('Admin_Dashboard/Category', ['categories' => $CategoryList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('Admin_Dashboard.Category_Update')->with('category', $category);
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->image = $request->image;
        $category->description = $request->description;
        $category->save();

        // $admin->password = $request->password;

        // $admin->update();
        return redirect()->route('Admin_Dashboard.Category')->with('success', 'student data dashboard successfully ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function updatee(UpdateCategoryRequest $request, Category $category)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     Category::destroy($id);
    //     return redirect()->route('Admain_Dashbored.Category')->with(['success' => 'Deleted successfully
    //     ']);
    // }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('Admin_Dashboard.Category')->with('success', 'student data dashboard successfully ');
    }
}
