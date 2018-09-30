<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Http\Requests\PhotoRequest;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photo.index', [
            'photos' => Photo::withCount('comments')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Photo::class);
        return view('photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request)
    {
        $this->authorize('store', Photo::class);

        $name = uniqid(date('HisYmd'));
        
        $extension = $request->file('image')->extension();
        
        $nameFile = "{$name}.{$extension}";

        $upload = $request->file('image')->storeAs('images', $nameFile);

        if(!$upload){
            return redirect()
                ->back()
                ->with('error', 'Falha ao salvar imagem.')
                ->withInput();
        }
        
        $photo = Photo::create([
            'name'          => $nameFile,
            'title'         => $request->title,
            'description'   => $request->description,
            'author'        => $request->author,
        ]);

        if( !$photo ){
            return redirect()
                ->back()
                ->withInput();
        }

        return redirect()->route('photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('photo.show', [
            'photo' => Photo::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit', Photo::class);
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
        $this->authorize('update', Photo::class);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('destroy', Photo::class);
    }
}
