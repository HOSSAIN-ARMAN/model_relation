<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');

//    $user = factory(\App\User::class)->create();
//    $phone = new \App\Phone();
//    $phone->phone = '999-88-67';
//    $user->phone()->save($phone);

//    $user->phone()->create([
//       'phone' => '9997788',
//    ]);
//
//

//    ------- one_To_many-------

    //    $user = factory(\App\User::class)->create();
//    $user->oneToMany()->create([
//        'title' => 'this is title',
//        'body'  => 'this is body'
//    ]);
//    $oneToMany = $user->oneToMany->first();
//
////    ['update oneToMany Model Data ']
//    $user->oneToMany->first()->title = 'hoga mara';
//    $user->oneToMany->first()->body  = 'this is body';
//    $user->push(); //using push method after updating data;
//    return $user->oneToMany;

//    ---many_to_many  for user -------

//    factory(\App\User::class)->create();

//    $user = \App\User::first();
    //attach
//    $roles = \App\Role::all();
//    $user->roles()->attach($roles);

    //detach
//    $roles = \App\Role::all();
//    $user->roles()->detach($roles);

//    $user->roles()->attach([1, 4, 7]);  here 1, 4, 7 is id number of role table
//    $user->roles()->detach([4]);

//    $user->roles()->sync([4, 7]);

//    $user->roles()->syncWithoutDetaching([3]);

    //    ---many_to_many  for role -------

//    $role = \App\Role::find(2);
//    $role->users()->sync([5]);


//    many_to_many advanced

    $user = \App\User::first();
//    $user->roles()->sync([
//       1=>[
//           'name' => 'custome_name'
//       ]
//    ]);

    dd($user->roles->first()->pivot->name);
    $role = \App\Role::first();
//    dd($role->users->first()->pivot->name);


});
