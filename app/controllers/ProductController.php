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

                // First we fetch the Request instance
        $request = Request::instance();

        // Now we can get the content from it
        $content = $request->getContent();

        $product = json_decode($content);

        //$product = $content_array['product'];
         //   $result = json_decode($content);
        
       $product = Product::create(array(
             'name' => $product->name,
             'brand' => $product->brand,
             'description' => $product->description,
             'capacity' => $product->capacity,
             'kcal' => $product->kcal,
             'protein' => $product->protein,
             'fat' => $product->fat,
             'saturated_fat' => $product->saturated_fat,             
             'carb' => $product->carb,
             'sugar' => $product->sugar,
             'fibre' => $product->fibre,
             'price' => $product->price                      
        ));

        return Response::json(array('status' => 200, 'mesg' => 'saved successfully!'));
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
