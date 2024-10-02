<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Borrow;

class HomeController extends Controller
{
    public function index()
    {
        $data = Book::all();
        $dataC = Category::all();
        return view('home.index', compact('data'));
    }

    public function book_details($id)
    {
        $data = Book::find($id);
        return view('home.book_details', compact('data'));
    }

    public function search_book(Request $request)
    {
        $search = $request->search;
        $data = Book::where('Book_Title','LIKE', '%'.$search.'%')->get();

        return view('home.explore', compact('data'));
    }

    public function borrow_books($id)
    {
        $data = Book::find($id);
        $book_id = $id;
        $quantity = $data->Book_Quantity;

        if($quantity >= '1')
        {
            if(Auth::id())
            {
                $user_id = Auth::user()->id;
                $borrow = new Borrow;
                $borrow -> book_id = $book_id;
                $borrow -> user_id = $user_id;
                $borrow -> save();

                return redirect()->back()->with('message', 'The request Submitted');

            }
            else
            {
                return redirect('/login');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'there no quantity for this book');
        }
        return view('home.borrow_books', compact('data'));
    }

    public function explore()
    {
        $data = Book::all();
        return view('home.explore', compact('data'));
    }
}
