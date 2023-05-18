<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [

            'thumb'=> 'required|url|max:255',
            'title'=> 'required|max:50',
            'price'=> 'required|max:10',
            'sale_date'=> 'required|date_format:Y-m-d',
            'description'=> 'required|min:30|max:5000',
        ];

        $message = [
            'required' => 'Il campo :attribute non può essere vuoto',
            'url' =>"URL non valido",
            'max'=> ":attribute non può avre più di :max caratteri",
            'min'=> ":attribute non può avre meno di :min caratteri",
            'date_format' => "La data inserita deve avere il formato :format"
        ];

        $request->validate($rules, $message);

        $comic_data = $request->all();

        $newComics = new Comic();
        $newComics->thumb = $comic_data["thumb"];
        $newComics->title = $comic_data["title"];
        $newComics->price = $comic_data["price"];
        $newComics->sale_date = $comic_data["sale_date"];
        $newComics->description = $comic_data["description"];
        $newComics->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $rules = [

            'thumb'=> 'required|url|max:255',
            'title'=> 'required|max:50',
            'price'=> 'required|max:10',
            'sale_date'=> 'required|date_format:Y-m-d',
            'description'=> 'required|min:30|max:5000',
        ];

        $message = [
            'required' => 'Il campo :attribute non può essere vuoto',
            'url' =>"URL non valido",
            'max'=> ":attribute non può avre più di :max caratteri",
            'min'=> ":attribute non può avre meno di :min caratteri",
            'date_format' => "La data inserita deve avere il formato :format"
        ];

        $request->validate($rules, $message);

        $comic = Comic::find($id);
        $dataComic = $request->all();
        $comic->update($dataComic);

        return redirect()->route('comics.show',['comic' => $comic->id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index');
        
    }
}
