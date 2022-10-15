<?php

namespace App\Http\Controllers;

use App\Models\CommentController;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CommentControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $allcomment= CommentController::all();
             return   view("live")->with("allcomment",$allcomment);
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

        //"commenttext","username"

        $comentinfo=[
            "commenttext"=>$request->commenttext,
            "username"=>Cookie::get('infofromcookies')
        ];

        CommentController::create($comentinfo);

        $allcomment= CommentController::all();

        $allcomment= CommentController::all();
        $videourl= Video::all()->last();
        return view("live")->with("videourl",$videourl->videourl)->with("allcomment",$allcomment)->with("usn",Cookie::get('infofromcookies'));


        return   view("live")->with("allcomment",$allcomment);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function show(CommentController $commentController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentController $commentController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentController $commentController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentController  $commentController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentController $commentController)
    {
        //
    }
}
