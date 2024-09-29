<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $user_type = Auth()->user()->usertype;

            if($user_type == 'Admin')
            {
                return view('admin.index');
            }
            else if ($user_type == 'user')
            {
                return view('home.index');
            }
        }
        else 
        {
            return redirect()->back();
        }
    }

    public function category_page()
    {
        return view('admin.category');
    }

    public function showcategory_page()
    {
        $data = Category::all();
        return view('admin.showcategory', compact('data'));
    }

    public function book_page()
    {
        return view('admin.book');
    }

    public function showbook_page()
    {
        $data = Book::all();
        return view('admin.showbook', compact('data'));
    }

    public function showusers_page()
    {
        $data = User::all();
        return view('admin.showusers', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->Category_Title = $request-> category;

        $data->save();
        return redirect()->back();
    }

    public function add_book(Request $request)
    {
        $data = new Book;
        $data->Book_Title = $request-> BookTitle;
        $data->Book_Author = $request-> BookAuthor;
        $data->Book_Print_Num = $request-> BookPrintNum;

        $data->save();
        return redirect()->back();
    }
}
