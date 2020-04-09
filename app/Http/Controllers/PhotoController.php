<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use App\Events\OrderShipped;
use Illuminate\Support\Facades\Http;
use App\Notifications\InvoicePaid;
use App\Jobs\ProcessPodcast;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

class PhotoController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $users;

    /**
     * Instantiate a new controller instance.
     *
     * @param $users
     */
    public function __construct($users = NULL)
    {
        $this->middleware('auth');

        //$this->middleware('log')->only('index');
        //$this->middleware('subscribed')->except('store');

        $this->users = $users;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return void
     */
    public function index()
    {
        return (new UserResource(User::find(1)))
            ->response()
            ->header('X-Value', 'True');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Photo $photo
     * @return void
     */
    public function show(Photo $photo)
    {
        echo 'dd';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Photo $photo
     * @return Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Photo $photo
     * @return Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Photo $photo
     * @return Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
