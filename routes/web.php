<?php

    Route::get('/', [
       'uses' => 'NewShopController@index',
        'as'  => '/'
    ]);


    Route::get('/category-product/{id}',[

        'uses' => 'NewShopController@categoryProduct',
        'as'   => 'category-product'
    ]);

    Route::get('/product-details/{id}/{name}',[
        'uses' => 'NewShopController@productDetails',
        'as'   => 'product-details'
    ]);


    Route::get('/mail-content',[

        'uses' => 'NewShopController@MailContent',
        'as'   => 'mail-option'
    ]);


    Route::get('/category/add', [
        'uses'  =>  'CategoryController@index',
        'as'    =>  'add-category'
    ]);

    Route::post('/category/save', [
        'uses'  =>  'CategoryController@saveCategoryInfo',
        'as'    =>  'new-category'
    ]);

    Route::get('/category/manage',[

        'uses'  =>  'CategoryController@ManageCategoryInfo',
        'as'    =>  'manage-category'
    ]);

    Route::get('/category/unpublished/{id}',[

        'uses'  =>  'CategoryController@UnpublishedCategoryInfo',
        'as'    =>  'unpublished-category'
    ]);

    Route::get('/category/published/{id}',[

        'uses'  =>  'CategoryController@PublishedCategoryInfo',
        'as'    =>  'published-category'
    ]);

    Route::get('/category/edit/{id}',[

        'uses'  =>  'CategoryController@EditCategoryInfo',
        'as'    =>  'edit-category'
    ]);

    Route::post('/category/update/',[

        'uses'  =>  'CategoryController@updateCategoryInfo',
        'as'    =>  'update-category'
    ]);


    Route::get('/category/delete/{id}',[

        'uses'  =>  'CategoryController@deleteCategoryInfo',
        'as'    =>  'delete-category'
    ]);

    Route::get('/brand/add',[

        'uses'  =>  'BrandController@index',
        'as'    =>  'add-brand'
    ]);

    Route::post('/brand/save',[

        'uses'  =>  'BrandController@saveBrand',
        'as'    =>  'new-brand'
    ]);

    Route::get('/brand/manage',[

        'uses'  =>  'BrandController@ManageBrandInfo',
        'as'    =>  'manage-brand'
    ]);


    Route::get('/brand/unpublished/{id}',[

        'uses'  =>  'BrandController@UnpublishedBrandInfo',
        'as'    =>  'unpublished-brand'
    ]);

    Route::get('/brand/published/{id}',[

        'uses'  =>  'BrandController@PublishedBrandInfo',
        'as'    =>  'published-brand'
    ]);


    Route::get('/brand/edit/{id}',[

        'uses'  =>  'BrandController@EditBrandInfo',
        'as'    =>  'edit-brand'
    ]);

    Route::post('/brand/update/',[

        'uses'  =>  'BrandController@updateBrandInfo',
        'as'    =>  'update-brand'
    ]);


    Route::get('/brand/delete/{id}',[

        'uses'  =>  'BrandController@deleteBrandInfo',
        'as'    =>  'delete-brand'
    ]);

    Route::get('/product/add',[

        'uses'  =>  'ProductController@index',
        'as'    =>  'add-product'
    ]);

    Route::post('/product/save',[

        'uses'  =>  'ProductController@saveProductInfo',
        'as'    =>  'new-product'
    ]);


    Route::get('/product/manage',[

        'uses'  =>  'ProductController@manageProduct',
        'as'    =>  'manage-product'
    ]);


    Route::get('/product/edit/{id}',[

        'uses'  =>  'ProductController@editProduct',
        'as'    =>  'edit-product'
    ]);

    Route::post('/product/update',[

        'uses'  =>  'ProductController@updateProduct',
        'as'    =>  'update-product'
    ]);

    Route::post('/cart/add',[
        'uses'  =>  'CartController@AddToCart',
        'as'    =>  'add-to-cart'
    ]);

    Route::get('/cart/show',[
        'uses'  =>  'CartController@showCart',
        'as'    =>  'show-cart'
    ]);

    Route::get('/cart/delete{id}',[
        'uses'  =>  'CartController@deleteCart',
        'as'    =>  'delete-cart-item'
    ]);

    Route::post('/cart/update',[
        'uses'  =>  'CartController@updateCart',
        'as'    =>  'update-cart'
    ]);

    Route::get('/checkout',[
        'uses'  =>  'checkoutController@index',
        'as'    =>  'checkout'
    ]);

    Route::post('/customer/registration',[
        'uses'  =>  'checkoutController@customerSignUp',
        'as'    =>  'register_sign_up'
    ]);
    Route::post('/checkout/customer-login',[
    'uses'  =>  'checkoutController@customerLoginCheck',
    'as'    =>  'customer-login'
    ]);
    Route::get('/checkout/new-customer-login',[
        'uses'  =>  'checkoutController@newCustomerLogin',
        'as'    =>  'new-customer-login'
    ]);
    Route::post('/checkout/customer-logout',[
        'uses'  =>  'checkoutController@customerLogout',
        'as'    =>  'customer-logout'
    ]);



    Route::get('/checkout/shipping',[
        'uses'  =>  'checkoutController@shippingForm',
        'as'    =>  'checkout-shipping'
    ]);
    Route::post('/shipping/save',[
        'uses'  =>  'checkoutController@saveShippingInfo',
        'as'    =>  'new-shipping'
    ]);
    Route::get('/checkout/payment',[
        'uses'  =>  'checkoutController@paymentForm',
        'as'    =>  'checkout-payment'
    ]);

    Route::post('/checkout/order',[
        'uses'  =>  'checkoutController@newOrder',
        'as'    =>  'new-order'
    ]);

    Route::get('/complete/order',[
        'uses'  =>  'checkoutController@completeOrder',
        'as'    =>  'complete-order'
    ]);

    Route::get('/order/manage-order',[
        'uses'  =>  'OrderController@manageOrderInfo',
        'as'    =>  'manage-order'
    ]);
    Route::get('/order/view-order-details/{id}',[
            'uses'  =>  'OrderController@viewOrderDetail',
            'as'    =>  'view-order-details'
    ]);













Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
