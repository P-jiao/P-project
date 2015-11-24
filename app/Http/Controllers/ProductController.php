<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/11
 * Time: 8:31
 */

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request as Request;
use Illuminate\Routing\Controller;
use App\Contracts\Mailer as Mailer;
class ProductController extends Controller

{
    public function index(){
        $products = Product::all();
        return view('product.index',['product' =>$products]);
    }

    public function show($id){
        $p = Product::find($id);
        return view('product.show',['product' =>$p]);
    }

    public function edit($id=null){
        if (isset($id))
            $p = Product::find($id);
        else
        {
            $p = new Product();
        }
        return view('product.edit',['product' =>$p]);
    }

    public function save(Request $request,$id=null){
        if (isset($id)){
            Product::updateOrCreate(["id"=>$id],$request->input());
        }
        else
        {
            Product::create($request->input());
        }
        return redirect("/products");
    }

    public function delete($id){
        Product::find($id)->delete();
        return redirect("/products");
    }



    public function send(MailerService $mm){
        $mm->send("send");
    }
    public function receive(MailerService $mm){
        $mm->receive("receive");
    }

}