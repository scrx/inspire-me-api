<?php

class ProductController extends \BaseController {




    // public function __construct()
    // {
    //     $this->afterFilter(function ($response) {
    //         $response->headers->set('Access-Control-Allow-Origin', '*');
    //         return $response;
    //     });
    // }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Product::get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Product::create(array(
            'name' => Input::get('name'),
            'brand' => Input::get('brand')
        ));

        return Response::json(array('success' => true));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return Response::json(array('success' => true));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


}
