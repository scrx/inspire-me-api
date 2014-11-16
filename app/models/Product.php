<?php

// app/models/Comment.php

class Product extends Eloquent {
        // let eloquent know that these attributes will be available for mass assignment
    protected $fillable = array('name','brand', 'description','capacity','carb','kcal','protein','sugar','fat','saturated_fat','fibre','price'); 
}
      