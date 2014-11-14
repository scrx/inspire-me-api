<?php




class ProductTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('products')->delete();

        Product::create(array(
            'name' => 'Product Name #1',
            'brand' => 'ProducTBrand',
            'description' => 'My first seeded product supr awesome',
            'kcal' => '123',
            'protein' => '11',
            'sugar' => '12',     
            'fat' => '5',
            'fibre' => '3',
            'price' => 3.33                 
        ));

        Product::create(array(
            'name' => 'Product Name #2',
            'brand' => 'ProducXBrand',
            'description' => 'My 2nd seeded product supr awesome',
            'kcal' => '333',
            'protein' => '0',
            'sugar' => '3',     
            'fat' => '2',
            'fibre' => '11',
            'price' => 6.31  
        ));

        Product::create(array(
            'name' => 'Product Name #3',
            'brand' => 'ProducY Brand',
            'description' => 'My 3rd seeded product supr awesome',
            'kcal' => '55',
            'protein' => '5',
            'sugar' => '5',     
            'fat' => '1',
            'fibre' => '0',
            'price' => 1.31  
        ));        

    }

}