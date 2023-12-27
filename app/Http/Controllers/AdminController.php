<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_home() {
        return view('admin.home');
    }
    public function upload_movie() {
        return view('admin.upload_movie');
    }
    public function store_movie(Request $request) {
        /*
        if ($request->hasFile('movie_image')) {
            $form_fields['movie_image'] = $request->file('movie_image')->store('movies', 'public');
        }
        $movie_name = $request->file('movie_image');
        $form_fields['movie_name'] = $movie_name;
        $form_fields = $request->validate([
            'catagory' => 'nullable',
            'rating' => 'nullable',
            'description' => 'nullable'
       ]);

        Movie::create($form_fields);
*/
       $request->file('file')->move(public_path('movies'), $request->file('file')->getClientOriginalName());
       $mov = $request->catagory;
       $movie = new Movie();
       $movie_name = $request->file('file')->getClientOriginalName();
       $movie->movie_image = $movie_name;
       $movie->movie_name = $movie_name;
       $movie->rating = 4;
       $movie->catagory = $mov;
       $movie->description = $mov;
       $movie->save();

       //       return redirect('admin/upload_movie');
       //return response()->json(['success' => $form_fileds['movie_image']]);
    }

    public function submit_selected_movies(Request $request) {
        $selected = $request->selected;
        $username = $request->username;
        $order = new Order();
        $order->username = $username;
        $order->movie_name = $selected;
        $order->save();

        return redirect()->back();

        //Order::create($selected_movies);
        //dd($selected_movies);
      //  return $request->selected;
    }
    public function ordered_movies() {
        return view('admin.ordered_movies', [
            'orders' => Order::latest()->get()
        ]);
    }
    public function delete_order($id) {
        Order::find($id)->delete();

        return redirect()->back();
    }
    public function edit_selected_movie($id) {
        $movie = Movie::find($id);
        return view('admin.edit_selected_movie', ['movie' => $movie]);
    }

    public function save_edited_movie($id, Request $request) {
        $movie = Movie::find($id);
        $movie->movie_image = $request->movie_image;
        $movie->movie_name = $request->movie_name;
        $movie->rating = $request->rating;
        $movie->catagory = $request->catagory;
        $movie->description = $request->description;
        $movie->save();

        return view('admin.edit_selected_movie', ['movie' => $movie]);
    }
}
