<?php

namespace App\Http\Controllers;

use App\Snippet;

class SnippetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $u_id = auth()->user()->id;
      $snippets = Snippet::where('user_id', $u_id)->get();
      return response()->json($snippets, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      // return request()->all();
      $snippet = new Snippet;
      $snippet->user_id = auth()->user()->id;
      $snippet->title = request()->title;
      $snippet->content = request()->content;
      $snippet->save();

      return response()->json($snippet, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Snippet $snippet)
    {
      return response()->json($snippet, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Snippet $snippet)
    {
      $snippet->user_id = auth()->user()->id;
      $snippet->title = request()->title;
      $snippet->content = request()->content;
      $snippet->update();

      return response()->json($snippet, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Snippet $snippet)
    {
      if($snippet->delete()) {
        return response()->json('Successfully Deleted');
      }
    }
}
