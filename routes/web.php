<?php

use Illuminate\Support\Facades\Route;

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
//*---------
//setup bien trong route:
Route::pattern('slug','(.)*');
Route::pattern('id','[0-9]*');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/khoa-hoc',function(){
    echo "Xin chào Chiến Bùi";
});

Route::get('/the-thao/{name}',function($name){
        echo  "Thể thao trong nước : ". $name;
});

Route::get('/demo-chinh/{slug}-{id}',function($slug,$id){
    echo "lever1 : ".$slug;
    echo "<br/>";
    echo "lever2 :".$id;
});


/*
Một sooss hellper hữu ích:
  1, str::limit -> cắt 1 chuỗi với 1 số ký tự nhất định
  2,str::slug ->Giúp tạo đường dẫn thân thiện
  3, str::tỉtle -> Viết hoa mỗi chữ cái đầu
  4, bcrypt -> hầm mã hóa
  5, asset('')


*/