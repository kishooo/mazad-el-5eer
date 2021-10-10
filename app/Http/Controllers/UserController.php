<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

//use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{

  public function login(){
    return view('login');
  }

  public function index(){
   $products =DB::select('SELECT * FROM products Where appeared =1');

    return view('index-2',['products'=>$products]);
  }
  public function Hide(Request $request){
    $productId=$request->product;

    DB::table('products')
      ->where('id',$productId)
      ->update(['appeared'=>0]);

    $getWinner = DB::table('bidder')
                ->select('products.*','users.*')
                ->join('products','products.id','=','bidder.idProduct')
                ->join('users','users.id','=','bidder.idUser')
                ->where('products.id',$productId)
                ->groupBy('products.id')
                ->get();
    if(!is_null($getWinner)){
      return response()->json(['finalWinner'=>$getWinner[0]->name]);
    }
    else{
      return response()->json(['finalWinner'=>"no one"]);
    }
  }
  public function CreateProduct(Request $request){

    return view('AddProducr');
  }
  public function DoCreateProduct(Request $request){
    $request->validate([
            'Name' => 'required',
            'description'=>'required',
            'startPrice' => 'required|integer',
            'Image' => 'required|mimes:jpg,png,jpeg|max:5048'
    ]);
    $newImageName = time().'-'.$request->name . '.'.$request->Image->extension();
    $request->Image->move(public_path('images'), $newImageName);

    DB::table('products')->insert(['buyNow'=>$request->input('buyNow'),'idSeller'=>1,'title'=>$request->input('Name'),'img'=>$newImageName,'startPrice'=>$request->input('startPrice'),'desc'=>$request->input('description'),'currentPrice'=>$request->input('startPrice')]);
    $product = DB::select('SELECT * FROM products ORDER BY id DESC LIMIT 1');
    DB::table('products')
      ->where('id',$product[0]->id)
      ->update(['deadline'=>DB::raw("createdAt + INTERVAL 7 MINUTE")]);
    return redirect("/");
  }
  public function SubmitValues(Request $request){
    $value = $request->value;
    $productId = $request->productId;

    $products =DB::select('SELECT * FROM products Where id ='.$productId);

    if($value<$products[0]->currentPrice){
      return response()->json(['success'=>false]);
    }

    $bidders=DB::table('bidder')->insert(['idProduct'=>$productId,'idUser'=>1,'price'=>$value]);

    DB::table('products')
      ->where('id',$productId)
      ->update(['currentPrice'=>$value]);


      return response()->json(['success'=>true,'currentValue'=>$request->value]);
  }
  public function MyBid(){
    $bidders=DB::select('SELECT * FROM bidder Where idUser =1');
    $bidderProduct = DB::table('bidder')
              ->select('products.*')
              ->join('products','products.id','=','bidder.idProduct')
              ->where('idUser','=',1)
              ->groupBy('products.id')
              ->get();
    return view('product-list',['bidders'=>$bidderProduct]);
  }
  public function CheckWinner(Request $request){

    $productId = $request->productId;

    $userBidder=DB::select('SELECT * FROM bidder Where idUser = 1 && idProduct = '.$productId.' ORDER BY id DESC LIMIT 1');
    $bidder=DB::select('SELECT * FROM bidder Where  idProduct = '.$productId.' ORDER BY id DESC LIMIT 1');
    if(is_null($userBidder)||is_null($bidder)||empty($userBidder)||empty($bidder)){
      return response()->json(['winning'=>false]);
    }else{
      if($userBidder[0]->idUser==$bidder[0]->idUser){
        return response()->json(['winning'=>true,'id'=>$bidder[0]->idUser]);
      }else{
        return response()->json(['winning'=>false,'id'=>$bidder[0]->idUser]);
      }
    }

  }
  public function BuyNow(Request $request){

    $productId = $request->productId;
    $type = $request->type;

    $product=DB::select('SELECT * FROM products Where id='.$productId);

    if($type == 1){
      $bidders=DB::table('bidder')->insert(['idProduct'=>$productId,'idUser'=>1,'price'=>$product[0]->buyNow]);

      DB::table('products')
        ->where('id',$productId)
        ->update(['currentPrice'=>$product[0]->buyNow,'deadline'=>DB::raw("createdAt + INTERVAL 0 SECOND")]);
        return response()->json(["check"=>1,$product[0]->buyNow]);
    }else{
        return response()->json(["check"=>1,$product[0]->buyNow]);
    }



  }



}
