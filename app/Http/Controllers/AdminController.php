<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //
        // $this->authorize('adminAccess', Auth::user());
        //
        return view('pages.admin.dashboard');
    }

    public function adminProduct()
    {
        //
        // $this->authorize('adminAccess', Auth::user());
        //
        $products = Product::paginate(10);
        // dd($products);
        return view('pages.admin.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addProductView()
    {
        //
        // $this->authorize('adminAccess', Auth::user());
        //
        return view('pages.admin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProduct(Request $request)
    {
        //
        // $this->authorize('adminAccess', Auth::user());
        //
        $data = $request->all();
        // $apiKey = env('IMAGEBB_API_KEY');
        // $imageBBService = new ImageBBService($apiKey);
        // $response = $imageBBService->uploadImage($request->picture);

        // $data['picture'] = $response['data']['display_url'];
        // $data['picture_delete_url'] = $response['data']['delete_url'];

        // auth()->user()->products()->create($data);
        session()->flash('product_added', 'Product Has Been Added');
        return redirect()->route('adminProductPage');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function editProductView(Product $product)
    {

        return view('pages.admin.editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProduct(Product $product, Request $request)
    {

        //
        // Check if the request has a file for the 'picture' field
        $data = $request->all();

        try {
            if ($request->hasFile('picture')) {
                // $apiKey = env('IMAGEBB_API_KEY');
                // $imageBBService = new ImageBBService($apiKey);
                // $response = $imageBBService->uploadImage($request->picture);

                // $data['picture'] = $response['data']['display_url'];
                // $data['picture_delete_url'] = $response['data']['delete_url'];
            }
        } catch (\Throwable $th) {
            return redirect()->route('adminProductPage')->with('error', 'Product Not Updated');
        }
        // Apply patch operation or other updates as needed
        $product->update($data);
        // Optionally, you can return a response or redirect
        return redirect()->route('adminProductPage')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteProduct(Product $product)
    {
        //
        try {
            // Use Eloquent to delete the product
            $product->delete();
            return redirect()->back()->with('success', 'Product Deleted');
        } catch (\Exception $e) {
            // Handle the exception, you can log it or return an error response
            return redirect()->back()->with('error', 'Product Not Deleted');
        }
    }

    public function adminProfile()
    {

        return view('pages.admin.profile');
    }

    public function allUsersView()
    { //
        $users = User::paginate(10);
        return view('pages.admin.allUsers', compact('users'));
    }

    public function roleUpdate(Request $request, User $user)
    {
        //
        $user->role = $request->role;
        $user->save();
        return redirect()->back();
    }

    public function deleteUser(User $user)
    {
        //
        $user->delete();
        return redirect()->back()->with('success', 'User Deleted');
    }

    // public function adminOrdersView()
    // {
    //     // $this->authorize('adminAccess', Auth::user());
    //     //
    //     $orders = Order::paginate(4);
    //     return view('pages.admin.Orders', compact('orders'));
    // }

    // public function adminOrderDetailsView(Order $order)
    // {

    //     return view('pages.admin.OrderDetails', compact('order'));
    // }

    // public function adminOrderUpdate(Order $order, Request $request)
    // {
    //     //
    //     $currentStatus = $order->status;

    //     $newStatus = $request->input('status');

    //     if ($currentStatus == $newStatus) {
    //         session()->flash('error', 'Nothing to change');
    //     } else {
    //         $order->status = $newStatus;
    //         $order->save();
    //         session()->flash('success', 'Status Updated to '. $order->status.'.');
    //     }
    //     return redirect()->back();
    // }
}
