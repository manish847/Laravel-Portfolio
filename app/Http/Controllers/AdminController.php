<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    function index(){
        return 'Manish Pathak';
    }

    public function viewUsers(){
        return view('html.admin.user.view-users');
    }
    public function addUser(){
        return view('html.admin.user.add-user');
    }
    public function userProfile(){
        return view('html.admin.user.user-profile');
    }

    public function viewPosts(){
        return view('html.admin.post.view-posts');
    }
    public function addPost(){
        return view('html.admin.post.add-post');
    }
    public function postCategories(){
        return view('html.admin.post.post-categories');
    }

    public function viewProducts(){
        return view('html.admin.product.view-products');
    }
    public function addProduct(){
        return view('html.admin.product.add-product');
    }
    public function productCategories(){
        return view('html.admin.product.product-categories');
    }

}
