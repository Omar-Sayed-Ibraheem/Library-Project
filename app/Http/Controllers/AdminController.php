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
        $data = Category::all();
        return view('admin.book', compact('data'));
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
        $data->Book_Price = $request-> BookPrice;
        $data->Book_description = $request-> Bookdescription;
        $data->Book_Quantity = $request-> BookQuantity;
        $Book_Img = $request->BookImg;
        if($Book_Img)
        {
            $Book_Img_name = time().'.'.$Book_Img->getClientOriginalExtension();
            $request->Book_Img->move('BookImages',$Book_Img_name);
            $data->Book_Img = $Book_Img_name;
        }
        $Book_Author_Img = $request-> BookAuthorImg;
        if($Book_Author_Img)
        {
            $Book_Author_Img_name = time().'.'.$Book_Author_Img->getClientOriginalExtension();
            $request->Book_Author_Img->move('AuthorImages',$Book_Author_Img_name);
            $data->Book_Author_Img = $request-> $Book_Author_Img_name;
        }
        $data->category_id = $request->category;
        $data->save();
        return redirect()->back();
    }

    public function catgeroy_delete($id)
    {
        $data= Category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function catgeroy_edit($id)
    {
        $data = Category::find($id);
        return view('admin.catgeroy_edit', compact('data'));
    }

    public function category_update(Request $request, $id)
    {
        $data = Category::find($id);
        $data->Category_Title = $request->category;
        $data->save();
        return redirect('showcategory_page');
    }
}
