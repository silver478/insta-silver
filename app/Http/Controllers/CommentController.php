<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller

{
  public function show(\App\Post $post){
    return view('posts.comment',compact('post'));
}
public function store(\App\Post $post){
  $data = request()->validate([
      'comment' => '']);
      $post->comments()->forceCreate(['post_id'=>$post->id,
          'comment' => $data['comment'],'username'=>request()->user()->username]);
      return  redirect('/p/'.$post->id);
}

}
