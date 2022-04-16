<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Post::all();
        $posts = Post::all();
        return view('all-posts')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  $post = Post::create([
            'TieuDe' => $request->TieuDe,
            'idChuDe' => $request->idChuDe,
            'TrichDan' => $request->TrichDan,
            'NoiDung' => $request->NoiDung,
            'Anh' => $request->Anh,
            'TacGia' => $request->TacGia,
            'NgayDang' => $request->NgayDang,
            'LuotXem' => $request->LuotXem,
        ]);
        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $post = Post::find($id);

        $post->TieuDe = $request->TieuDe;
        $post->idChuDe = $request->idChuDe;
        $post->TrichDan = $request->TrichDan;
        $post->NoiDung = $request->NoiDung;
        $post->Anh = $request->Anh;

        $post->save();
        return $post;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePostStatus(Request $request, $id)
    {
        $post = Post::find($id);
       
        $post->TrangThai = $request->TrangThai;

        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();
        return $post;
    }
}
