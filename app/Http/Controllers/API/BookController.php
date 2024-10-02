<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Borrow;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string',
            'available' => 'required|boolean',
        ]);

        Book::create($request->all());

        return response()->json(['message' => 'Book added successfully'], 201);
    }
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return response()->json(['message' => 'Book updated successfully'], 200);
    }
    public function destroy($id)
    {
        Book::destroy($id);
        return response()->json(['message' => 'Book deleted successfully'], 200);
    }

    public function reserve($id)
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

    public function getCategories()
    {
        $data = Category::all();
        return view('admin.showcategory', compact('data'));
    }
}
