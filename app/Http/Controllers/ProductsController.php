<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Cart;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class ProductsController extends Controller
{

    public function cart()
    {
        return view('pages.cart');
    }
    public function saveProductToSession(Request $request)
    {
        $valueToAdd = $request->input('data');

        $cart = session()->get('cart', []);
        $product = Products::findOrFail($valueToAdd);
        

        if (isset($cart[$valueToAdd])) {
            $cart[$valueToAdd]['quantity']++;
        } else {
            $cart[$valueToAdd] = [
                "id" => $product->id,
                "name" => $product->name,
                "img" => $product->img,
                "price" => $product->price,
                'cartDescription' => $product->cartDescription,
                "quantity" => 1
            ];
        }

        if (Auth::check()) {
            $user = Auth::user();
            $cartproducts = Cart::where('userId', $user->id)->get();

            foreach ($cart as $cartItem) {
                $existingCartItem = $cartproducts->where('productId', $cartItem['id'])->first();

                if ($existingCartItem) {
                    // Update the quantity of the existing cart item
                    $existingCartItem->quantity += $cartItem['quantity'];
                    $existingCartItem->save();
                } else {
                    // Create a new cart item
                    Cart::create([
                        'userId' => $user->id,
                        'productId' => $cartItem['id'],
                        'quantity' => $cartItem['quantity'],
                    ]);
                }
            }
        }
        else {

            session()->put('cart', $cart);
        }
        // session()->put('cart', $cart);
      

        // Push $valueToAdd onto the session array

        

        return response()->json(['message' => 'Value added to session array successfully']);
    }
    public function addToCart($id)
    {
        $product = Products::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,

                'product_id'=>$product->id,
                "name" => $product->name,
                "img" => $product->img,
                "price" => $product->price,
                'cartDescription'=> $product ->cartDescription,
                "quantity" => 1
            ];
        }
        if (Auth::check()) {

            session()->put('cart', $cart);
            $user = Auth::user();
            foreach ($cart as $cartItem) {
                dd($cartItem);
                Cart::create([
                    'userId' => $user,
                    'productId' => $cartItem['id'],
                    'quantity' => $cartItem['quantity'],
                ]);
            }
        } else {

            session()->put('cart', $cart);
        }
      
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function update2(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');

        }
        return redirect()->back();
    }



    // filter 
    public function search_products(Request $request, $id=null)
    {
        $categories = Category::all();
        $query = Products::whereBetween('price', [$request->rangemin, $request->rangemax]);

        if ($id!=null) {
            $query->where('categoryId', $id);
        }   

        $products = $query->get();

        return view('pages.menu', compact('products', 'categories'));
    }
    public function sort_by(Request $request,$id=null)
    {
        // dd($request);
        $categories = Category::all();

        if ($request->lowest_price == 'A-Z') {
            $products = Products::orderBy('name', 'asc')->get();
            if ($id != null) {
                $products = Products::orderBy('name', 'asc')->where('categoryId', $id)->get();
            }
        }
        if ($request->highest_price == 'Z-A') {
            $products = Products::orderBy('name', 'desc')->get();
            if ($id != null) {
                $products = Products::orderBy('name', 'desc')->where('categoryId', $id)->get();
            }
        }
        return view('pages.menu', compact('products', 'categories'))->render();
    }

public function discount(Request $request){
        $discounts=Discount::all();
        $discountPercent = 1;
        $active="tt";
        foreach ($discounts as $value) {
           if ($request->discount == $value->description ) {
            if ($value->active) {
                
                $discountPercent = $value->discountPercent;
                $active= 'the code has been added successfully';
            }else{
                    $discountPercent = 0;

                    $active = 'The code has expired';
            }
}else{
    
    $discountPercent=0;
    $active = 'The code is invalid';
}
        }
        return view('pages.cart',compact('discountPercent', 'active'));

}

    public function showcheackout (){
        //         if (count(session('cart')) > 0 && Auth::check()) {
        //             $userId = Auth::user()->id;

        //             foreach (session('cart') as $cartItem) {
        //                 // dd($cartItem);
        //                 Cart::create([
        //                     'userId' => $userId,
        //                     'productId' => $cartItem['id'],
        //                     'quantity' => $cartItem['quantity'],
        //                 ]);
        //             }

        //             session()->forget('cart');
        //    session()->get('cart', []);

        //         }
        $products=[];
        if (Auth::check()) {
            $user = Auth::user();
            $cartItems = Cart::where('userId', $user->id)->get();
            $cart = [];

            foreach ($cartItems as $cartItem) {
                // Fetch the associated product details
                $product = Products::find($cartItem->productId);

                // Create an array with the desired product details
                $products[$cartItem->productId] = [
                    "id" => $cartItem->productId,
                    "product_id" => $product->productId,
                    "name" => $product->name,
                    "img" => $product->img,
                    "price" => $product->price,
                    'cartDescription' => $product->cartDescription,
                    "quantity" => $cartItem->quantity
                ];
            }



         
        }

    

            return view('pages.cheackout',compact('products'));
}




    public function ourproject()
    {
        $categories = Category::all();
        $products = products::all();
        $users = User::all();
        // $volanters = DB::table('paypals')->get();
        
        return view('pages.products', compact('categories', 'products', 'users', 'volanters'));
    }
    public function product($id)
          {
                    $products = products::find($id);
                    $volanters = Volunteer::all();
                    return view('pages.single',compact('products' ,'volanters'));
          }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        
        return view('Admin_Dashboard.products', ['products' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Products::all();
        
        return view('Admin_Dashboard.Project_Create', ['products' => $products]);
    }
    
    public function view($id)
    {
        $productList= products::find($id);
        return view('Admin_Dashboard.products_view',['products'=>$productList]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breif' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'location' => 'required|string',
            'period' => 'required|string',
            'time' => 'required|string',
            'total' => 'required|numeric',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'breif.required' => 'The brief field is required.',
            'breif.string' => 'The brief field must be a string.',
            'description2.required' => 'The description2 field is required.',
            'description2.string' => 'The description2 field must be a string.',
            'description3.required' => 'The description3 field is required.',
            'description3.string' => 'The description3 field must be a string.',
            'location.required' => 'The location field is required.',
            'location.string' => 'The location field must be a string.',
            'period.required' => 'The period field is required.',
            'period.string' => 'The period field must be a string.',
            'time.required' => 'The time field is required.',
            'time.string' => 'The time field must be a string.',
            'total.required' => 'The total field is required.',
            'total.numeric' => 'The total field must be a number.',
            'image.image' => 'The image must be a valid JPEG, PNG, JPG, or GIF file.',
            'image.mimes' => 'The image must have a valid extension (jpeg, png, jpg, gif).',
            'image.max' => 'The image must be no larger than 2048 KB.',
        ]);
        $product=  new products;
        $product->name= $request->name;
        $product->breif= $request->breif;
        $product->description2= $request->description2;
        $product->description3= $request->description3;
        $product->location= $request->location;
        $product->period= $request->period;
        $product->time= $request->time;
        $product->total= $request->total;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $product->image =  $imageName;
        }
        $product->save();
        Alert::success('Added Successfuly', ' ');
        
        return redirect()->route('Admin_Dashboard.Projects');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        $productList= products::all();
        return view('Admin_Dashboard.Projects',['products'=>$productList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $product = products::find($id);
        return view('Admin_Dashboard.Projects_Update')->with('product', $product);
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breif' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            // 'location' => 'required|string',
            // 'period' => 'required|string',
            // 'time' => 'required|string',
            // 'total' => 'required|numeric',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'breif.required' => 'The brief field is required.',
            'breif.string' => 'The brief field must be a string.',
            'description2.required' => 'The description2 field is required.',
            'description2.string' => 'The description2 field must be a string.',
            'description3.required' => 'The description3 field is required.',
            'description3.string' => 'The description3 field must be a string.',
            // 'location.required' => 'The location field is required.',
            // 'location.string' => 'The location field must be a string.',
            // 'period.required' => 'The period field is required.',
            // 'period.string' => 'The period field must be a string.',
            // 'time.required' => 'The time field is required.',
            // 'time.string' => 'The time field must be a string.',
            // 'total.required' => 'The total field is required.',
            'total.numeric' => 'The total field must be a number.',
            'image.image' => 'The image must be a valid JPEG, PNG, JPG, or GIF file.',
            'image.mimes' => 'The image must have a valid extension (jpeg, png, jpg, gif).',
            'image.max' => 'The image must be no larger than 2048 KB.',
        ]);
        
        $product = products::find($id);

        $product->name= $request->name;
        $product->shortDescription= $request->breif;
        $product->longDescription= $request->description2;
        $product->cartDescription= $request->description3;
        // $product->prot= $request->location;
        $product->price= $request->price;
        $product->cartDescription= $request->time;
        // $product->total= $request->total;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $img = $request->file('image');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('images/'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $product->image = $imageName;
        }
        $product->save();
        
        Alert::success('Updated Successfuly', ' ');

        return redirect()->route('Admin_Dashboard.Projects')->with('success', 'student data dashboard successfully ');

          }

          /**
           * Remove the specified resource from storage.
           *
           * @param  \App\Models\products  $products
           * @return \Illuminate\Http\Response
           */
          public function destroy($id)
          {
         $products = Products::find($id);
          $products->delete();
         return redirect()->route('Admin_Dashboard.Projects')->with('success', 'student data dashboard successfully ');
          }
}
