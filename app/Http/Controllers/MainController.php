<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Book_Category;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function contact() {
        return view('contact');
	}

    public function homeindex() {
        $books = Book::all();
        return view('home', ['books' => $books]);
    }

    public function pubindex() {
        $publishers = Publisher::all();
        return view('publisher', ['publishers' => $publishers]);
    }

    public function detail($id){
        $book = Book::findOrFail($id);
        return view('detail',compact('book'));
    }

    public function list($id){
        $category = Category::findOrFail($id);
          return view('category', compact('category'));
    }

    # for adding data via webpage create // manually
/*    public function create() {
		return view('create');
	}

    # add data to database > temp
    public function store(Request $request)
    {
    /*   
        $file = $request->file(key: 'image');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;
    */ 

    /* Book Category     
    $message = array(
        'book_id.required' => 'Please add book id',
        'category_id.required' => 'Please add category id'
    );

        $request->validate([
            'book_id' => 'required',
            'category_id' => 'required'
            ],$message);

    Book_Category::create([
        'book_id' => $request->book_id,
        'category_id' => $request->category_id
    ]);
  */

    /* Book 
        $book = new Book();
        $book->publisher_id = $request->publisher_id;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->synopsis = $request->synopsis;
        $book->image = $imageName;
        $book->save();
  */

    /* Publisher  
        $publisher = new Publisher();
        $publisher->name = $request->name;
        $publisher->address = $request->address;
        $publisher->phone = $request->phone;
        $publisher->email = $request->email;
        $publisher->image = $imageName;
        $publisher->save();
    */

     /* Category 
        $message = array(
            'name.required' => 'Please Category Name',
        );

            $request->validate([
                'name' => 'required|min:5|max:50',
                ],$message);

        Category::create([
            'name' => $request->name,
        ]);
       
        return redirect('/');    
    }   */
}
