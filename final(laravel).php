<?php
/*


//auth : کرده ایم login برای وقتی که
//guest : برای وقتی که مهمان بوده ایم


php artisan   کل دستور ها در سی ام دی را نمایش میدهد

در بالای صفحه هر پوشه ای میتوان با نوشتن سی ام دی در همان مسیر سی ام دی را باز کرد


در فایل env برای جلوگیری از ریست یا خرابی دیتابیس بهتره از local به production تغییر داد
APP_ENV = local
APP_ENV = production


در فایل env برای اینکه به اجبار از سشن استفاده نکنیم database را به file تغییر میدیم
SESSION_DRIVER=database
SESSION_DRIVER=file



// ساخت پروژه
composer global require laravel/installer  نصب 1 بار روی کل سیستم با لاراول
cd desktop
composer create-project laravel/laravel ProjectName      قدیم
laravel new ProjectName                                  جدید 


// اجرای پروژه
cd desktop               (دلخواه) آدرس دهی
cd desktop/ProjectName     در این مرحله یکسری تنظیمات وجود دارد که دست خودته )))) وارد شدن به پوشه پروژه ))))
php artisan serve         پیدا کردن ادرس سرور



// نام صقحات حتما page.blade.php باید باشد تا سینتکس ها کار کند
// {{--  comment          --}}           کامنت          <?=          <h1>$name</h1>    ?>
// {{    varibale or str    }}          php حذف         <?php  echo  <h1>$name</h1>    ?> ====>>>> {{  <h1>$name</h1>  }}
// {!!   varibale or str   !!}    با امنیت پایینhtml و php حذف



// address in php vc blade(laravel)

         ((( php )))                            ((( laravel )))
// include 'folder/file_php';            @include('folder.file_blade.php')
// require 'folder/file_php'';           @extends('layouts.master')


//  Route برای هر یک از صفحات سایت به کمک url تعریف
// میتوان مستقیم از یک صفحه و یا اطلاعات  صفحه استفاده کرد
// نوشته میشود routes/web.php در صفحه route کد های  */


Route::get('/', function () {
    return view('page_blade_php');
    return view('content',['name' =>'ali']);
});



             // { ورودی ۲ }/{ ورودی ۱ }/  'ثابت'
Route::get('pagepanel/{content}/{id}', function ($content,$id=2004) {  // خروجی که در url   نمایش داده میشه
    return $content.$id;          // خروجی که در blade نمایش داده میشه                       خروجی دلخواه ۱
    return $content. "-" .$id ;   // خروجی که در blade نمایش داده میشه                       خروجی دلخواه ۲
})->name('content');






// Route group
// روش 1 (بهتره)
Route::get('/course/index', function () {
    return view('index',['name' =>'ali']);
});
Route::get('/course/first', function () {
    return view('first',['name' =>'ali']);
});
Route::get('/course/second', function () {
    return view('second',['name' =>'ali']);
});




Route::prefix('course')->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/first', function () {
        return view('first');
    });

    Route::get('/second', function () {
        return view('second');
    });
});


// خوب نیست
// روش 2
Route::group(["prefix"=>"account"],function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/', function () {
        return view('content');
    });
});




// استفاده از controller ها به حای تابع که استاندارد است
use App\Enums\OrderDetailsStatus;
use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/login', [MyController::class,'login'])->name('loginName');
Route::post('/form', [MyController::class,'form'])->name('formName');



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// {{{{{{{{--   برای صفحه master   --}}}}}}}}
@include('address.address')             // کل محتوی یک صفجه را به خود اضافه میکند

@yield('id')    // شناسه صفحه ثابت-->     برای محتوی متغیر صفحه ادرس دهی میکنیم


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// {{{{{{{{--   برای صفحه متغییر   --}}}}}}}}
@extends(' blade.php بدون پسوند address_master_page ')    // ارث بری کل محتوی صفحه ای برای ادرس دهی صفحه متغیر-->
//   نکته : همان کار include را انجام میده به علاوه اینکه از section هم در ان استفاده میشه

@section('id')   // شناسه صفحه متغیر
    <!-- html tag  -->
@endsection

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

@section('id')

{{--    html tag    --}}

@show()

{{--    html tag    --}}          // اگر ایدی بالا را پیدا نکرد این محتوی را چاپ میکند

@endsection


(((( MAKE COMPONENT ))))  // روش ۴ بهترین است

// اجباری است  title
// اختیاری است class


// روش 1
//  button.file_blade_php این کد مخصوص صفحه
<button class="{{ $class }}">
    {{ $title }}
</button>


// روش ۲
//     اختیاری title          است index.file_blade_php این کد مخصوص صفحه
@component('button.file_blade_php',['class' => 'class_name' , 'title' => 'value_title' ])

@endcomponent



// روش ۳
@component('file_blade_php',['class' => 'class_name'])                                // روش 3 (بهترین)
@slot('title')
value_title                   //را در خود دارد title محتوی
@endslot
@endcomponent




// روش ۴
// جداگانه ای را سرچ کن cmd در ادرس  بالای صفحه پروژه
php artisan make:component name_component -- view  // وجود view باعث میشه فایل php component دیگر ایجاد نشه چون نیازی به ان نیست

resources/components/name_component.blade.php  در مسیر  name_component  ایجاد فایل  (blade)
app/view/components/name_component.php         در مسیر  name_component  ایجاد فایل   (php) // فایلی که با ان کاری نداریم



resources/view/components/name_component.blade.php     در فایل کامپوننت دلخواه را ایجاد کن

<div>
    <button class="button-5" role="button" style="align-items: center;
    background-clip: padding-box;
    background-color: #fa6400;">
        {{$content}}
    </button>
</div>

// ایجاد شده در صفحات blade باید از روش پایین استفاده کرد component  حالا برای استفاده از
<x-name_component/>
<x-name_btn_component content="محتوی 1"/>      //  $content که در بالا استفاده شده اینجا استفاده کردیم
// ----------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------



// (((( mix laravel )))) // برای استفاده ار کتابخونه های لاراول و تفسیر ان ها از ان استفاده میشه
//کپی میشود public/js-css/app/js-css همزمان در ادرس reasorce/js-css/app/js-css به کمک ان کد های نوشته شده در



// را سرچ کن cmd در ادرس  بالای صفحه پروژه
// را نصب کرده node js ابتدا اخرین نسخه
// node-v
// npm -v
// npm install                           //(باعث ایجاد پوشه node-model در پروژه میشه)
// npm run dev
// npm run production               //(  کم حجم کردن فایل و کد ها  در پابان پروژه )
// npm run build          // (در صورتی  که دستور بالا اجرا نشد) (همزمان کار dev  و production را انجام میده)


/*  ///////////////////////////////////////////////////////////////////  ( install bootstrap)
// برای نصب bootstrap باید node js اول نصب بشه
// حالا cdn ها را وارد کن
// cd desktop/folder_project
// npm i bootstrap                   // نصب bootstrap


// اجرا نکن
composer require laravel/ui
npm install && npm run dev


// در پوشه resources/js/app.js  خط پایین را بنویس
import 'bootstrap/dist/js/bootstrap.bundle';


// در پوشه public فایل css/bootstrap.css را ایحاد کن
// محتویات فایل node_modules/bootstrap/dist/css/bootstrap.rtl.css  در مسیر public/css/bootstrap.css کپی کن

// حالا در قسمت link در صفحاتمان به کمک asset  قایل css را باز میکنیم         asset
{{asset('css/bootstrap.css')}}
........
........

 اجرا کن   npm run dev


// برای استفاده از توابع url , route باید درفایل   rotes/web.php قسمت routing  به انها name دلخواه بدهیم
Route::get('pagepanel/{content}/{id}', function ($content,$id=2004) {  // خروجی که در url   نمایش داده میشه
})->name('name_asd');


<a href="/about"></a>
<a href="{{ url('/name_asd') }}"></a>
<a href="{{ route('name_asd') }}"></a>                            //برای وقتی که یک route با نام دلخواه ایجاد کردیم
*/


/*  ////////////////////////////////////////////////    ((((((((( controller ))))))))
// وجود دارد app/http/controllers/controller در مسیر



{{--    resourse/view/web  کد های صفحه ی    --}}
use App\Http\Controllers\name_controller;



Route::get('/index',[name_controller::class,'name_func']);
//                 اسم صفحه بلید     :: نام کلاس کنترولر



{{--    App\Http\Controllers  کد های صفحه ی    --}}
namespace App\Http\Controller_Name_1;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;     // که ایجاد کردیم DB  استفاده از


class name_controller extends Controller_Name_1
{
    public function name_func(){
        return view('index'); //
    }
}



((((((((((((((((((((((((((((( خلاسه از کویری ها در لاراول ))))))))))))))))))))))))))))))
((((((((((((((((((((((((((((( خلاسه از کویری ها در لاراول ))))))))))))))))))))))))))))))
((((((((((((((((((((((((((((( خلاسه از کویری ها در لاراول ))))))))))))))))))))))))))))))

// DB      کلاس دیتابیس در لاراول
// dd($var)
// ddd($var)


// controller
public function Sliders()
{
    $Products = Product::all();
    return view('Admin.slider.sliders',compact('Products'));
}


// model    فقط یکی از متد های زیر
class Product extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function images(): HasMany
    {
        return $this->hasMany(product::class,'id_product')->latest();
    }
}


------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------
// DB class

{{--    App\Http\Controllers  کد های صفحه ی    --}}
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;  {{-- استفاده میکنی DB برای وقتی که از دیتا بیس شی  --}}


class name_controller extends Controller
{
    public function(){
        return view('index'); //
    }
}


{{--    resourse/view/web  کد های صفحه ی    --}}
use App\Http\Controllers\name_controller;

Route::get('/index',[name_controller::class,'index']);




$var_1 = DB::table('table_name')->where('id',1)->get();       {{-- شرط    id = 1 --}}
$var_1 = DB::table('table_name')->where('id',"=>",1)->get();  {{-- شرط    id =>1 --}}


$var_1 = DB::table('table_name')->get();
return view('index',compact('table_name'));


<body>
@foreach ($table_name as $data)
        <li> {{ $data->id }}</li>
        <li> {{ $data->lastname }}</li>
        <li> {{ $data->id }}</li>
@endforeach
</body>


$var_1 = DB::table('table_name')->tosql(); {{-- کویری به زبان پی اچ پی  ترجمه میکنه --}}




// کردن ، با اضافه کردن مقداری به جدول ، ایدی از مقداری که پاک شده ادامه میابد delet هنگام
// کردن ، با اضافه کردن مقداری به جدول ، ایدی از 0 ادامه میابد truncate هنگام


$query = DB::table('users')->insert([['title'=>'python','body'=>'lorem','name'=>'mr.a']]);

$query = DB::table('users')->where('id',1)->update(['votes'=>1]);

$query = DB::table('users')->where('id',1)->delet();

$query = DB::table('users')->delet();

$query = DB::table('users')->truncate();

dd($query);




////////////////////////////////////////////////    ((((((((( migrate ))))))))

php artisan migrate

php artisan make:migration name_migrate {{-- ایجاد یک میگریشن جدید با نام دلخواه --}}

// جدول مورد نظر در ادرس database/migrate/file_php //
// ساختار جدول را مینویسیم up حالا در جدول مورد نظر در تابع //

class  name_Migrate extends Migration
{
*/
    public function up(): void
    {
        Schema::create('name_table', function (Blueprint $table) {
            $table->id();

            // ویژگی های
            $table->string('code',6);
            $table->string('email')->unique();
            $table->string('email')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_admin')->default(false);


            $table->string('title');
            $table->string('name');
            $table->string('name');
            $table->string('user_name');
            $table->string('password');
            $table->string('phone');
            $table->string('mobile');
            $table->string('address');
            $table->string('email');
            $table->string('body');
            $table->string('photo');
            $table->string('image');
            $table->text('color');
            $table->string('url');
            $table->integer('sold')->default(0);
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_admin')->default(0);
            $table->string('guaranty');
            $table->string('discount')->default(0);
            $table->integer('discount_price')->default(0);
            $table->integer('price');
            $table->bigInteger('price');
            $table->bigInteger('inventory');
            $table->text('description');
            $table->boolean('is_special')->default(false);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->onUpdate('no action');
            $table->string('transaction_id')->nullable();
            $table->string('postal_code');
            $table->string('lat');
            $table->string('lang');
            $table->string('token');

            // حالات خاص و کم استفاده
            $table->string('email')->primary();
            $table->rememberToken();
            $table->morphs('tokenable');
            $table->bigIncrements('id'); // permission id
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');


            $table->timestamp('special_expiration')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('failed_at')->useCurrent();
            $table->timestamps();
        });
    }


//////////  نکات کویری زدن در DB  ///////////
/// // کردن ، با اضافه کردن مقداری به جدول ، ایدی از مقداری که پاک شده ادامه میابد delete هنگام
//// کردن ، با اضافه کردن مقداری به جدول ، ایدی از 0 ادامه میابد truncate هنگام

get()                   // میده
take(6)                 // تعداد مشخص میده
tosql()                                     //  به ما نشان میدهد php مورد نظر را به زبان query



$users = DB::table('users')->get();
dd($users);
return view('index');                       // فقط نمایش خود بلید
return view('index',compact('users');       // برای وقتی که میخام دیتایی از دیتا بیس رو به بلید بفرستم



((((((((((((( CRUD ))))))))))))))  ((((( ارایه میگیرند  update  ,  insert  ))))  ((((( به ترتیب <--  ))))))

$select = DB::table('users')->where('id',1)->get();
$select = DB::table('table_name')->where('id',1)->get();       //  شرط    id = 1
$select = DB::table('table_name')->where('id',"=>",1)->get();   //  شرط    id =>1

$insert = DB::table('users')->insert(['title'=>'python','body'=>'lorem']);                                               // ارسال یک دیتا
$insert = DB::table('users')->insert([['title'=>'python','body'=>'lorem'] , ['title'=>'python','body'=>'lorem']]);       // ارسال چند دیتا

$update = DB::table('users')->where('id',1)->update(['votes'=>1]);    // خام . اول شرط و سپس مقادیر اپدیت میشه  sql عکس

$delete_person = DB::table('users')->where('id',1)->delete();             // فقط تعدادی سطر حذف همراه با ایدی از ادامه
$delete_table = DB::table('users')->delete();                            // کل جدول حذف همراه با ایدی از ادامه

$query = DB::table('users')->truncate();                                 //   کل جدول حذف همراه با ایدی از  0


$users = DB::table('tests')->where('id',2)->get();
$users = DB::table('tests')->insert(['name'=>'amirr','password'=>4533]);
$users = DB::table('tests')->where('id',3)->update(['name'=>'asghar']);
$users = DB::table('tests')->where('id',3)->get();
$users = DB::table('tests')->where('id',5)->delete();
$users = DB::table('tests')->delete();
$users = DB::table('tests')->truncate();
$users = Teacher::all();

//////////  نکات کویری زدن در Model  ///////////
all()                                       //  کل دیت ها رو میده
query()->pluck('colomn','key',);              // فقط استخراج یک یا چند ستون رو واکشی میکنه
find(number)  find([num1,num2,...])         //  کار انجام میده id روی
findOrFail(number)                          //   اگه جواب داد  جواب  رو میاره و جواب نداد صفحه 404 نمایش میده (کار انجام میده id روی)
destroy(number)   destroy([num1,num2,...])  //  کار انجام میده id روی
whereHas()        // بک کویری که میتونه کار relation رو انجام بده
orWhere('title_on','like','%'.$search.'%')
increment('sold')
decrement('count',$order_detail->count)


    // مثال
$users = User::whereHas('posts', function($q){
    $q->where('created_at', '>=', '2015-01-01 00:00:00');
})->get();


    // مثال
$orders = Order::query()->whereHas('order_details',function ($q){
    return $q->where('status',OrderDetailsStatus::rejected->value);
})->where('user_id',$user->id)->where('status',OrderStatus::success->value)->count();




$product = Name_model::where('id',1)->get();               //  شرط where
$product = Name_model::where('id','<=',1)->get();          //  شرط where
$product = Name_model::Orderby('title');                     //  مرتب سازی Orderby
$product = Name_model::where('id',1)->delete();         //  {{-- پاک کردن معمولی --}}  {{-- موقع اضاف کردن از ادامه id جلومیره
$product = Name_model::where('id',1)->truncate();         // پاک کردن معمولی --}}  {{-- موقع اضاف کردن از اول  id جلومیره
$product = Name_model::withTrashed()->find(2);              // پاک کردن سافت
$product = Name_model::onlyTrashed()->find(2)->restore();     // بازگشتن از حالت سافت به معمولی
$product = Name_model::where('id',1)->forceDelete();       // پاک کردن همیشگی
$product = Name_model::all();    // global scope نمایش
$product = Name_model::whitoutGlobalScope('price')->where('id','>',22)->get();    // scope لغو



// نکته : غیر غعال کردن ستون timestamp
class course extends Model
{
    protected $table = 'course';
    // در نظر نگرفتن  ستون های created_at , updated_at کار خوبی نیست
    public $timestamp = false;   {{-- برای در نظر نگرفتن  ستون های created_at , updated_at در هنگام insert  کردن -- }}
}



namespace App\Models;
class course extends Model
{
    protected $fillable = [     //  title , price , body اجازه برای اپدیت ستون های
        'title',
        'price',
        'body',
    ];
    protected $guarded  = [     //   id ,   validation   اجازه برای اپدیت همه ستون ها غیر از
        'id',
        'validation'
    ];
    public $timestamps = false;   // اجازه میده جدولی بدون ستون update_at و created_at باشد و نیازی به پر کردن ان نباشد
}



////////////////////  ((( orm (soft delete  (withTrasheded)  )  )))  اطلاعات برای کاربر حذف شده ولی در دیتابیس هنوز وجود دارد
// Model حالا در صفحه
namespace App\Models;
use Illuminate\Database\Eloquent\softDeletes;      //    ایجاد شده soft delet برای
class course extends Model
{
    use softDeletes;
}

//////////////////////////////////// (global scope (in model)) {{-- در قسمت مدل مینویسیم query یکسری all() برای تابع

namespace App\Models;
class course extends Model
{
protected static function boot()   {{-- نامی دلخواه است boot --}}
{
    parent::boot();
    static::addGlobalScope('price' ,function($query){
        $query->where('price','>',"20000");
    });
}
}


//////////////////////////////////////// (local scope (in model))  اختصاصی در قسمت مدل مینویسیم query یکسری

{{-- Model حالا در صفحه  --}}
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class course extends Model
{
    public function scopePrice($query){                {{-- اول اسم تابع scope دارد و اول کلمه دوم بزرگ است --}}
        $query->where('price','>','2000'); {{-- ولی هنگام استفاده فقط کلمه دوم را بنویس و نیاز به نوشتن scope نیست --}}
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Request (text,email,..)  دریافت اطلاعاتی مانند نوشته از فرم
class MyHomeIs extends Controller
{
    public function form(Request $req){
        dd($req);                 //  کل اطلاعات ورودی ها با تمام جزيیات
        dd($req->all();           //  کل اطلاعات ورودی ها با تمام جزيیات
        dd($req->key);            // مقدار نام وارد شده در فرم  //
        dd($req->get('name','مقدار پیشفرض برای وقتی که اشتباه تایپی داریم'));  //  همان کار بالا را انجام میده
        dd($req->has('name'));    //  وجود مقداری در فرم
        dd($req->only('name'));   //  فقط  مقداری در فرم
        dd($req->except('name')); //   وجود هر مقداری در فرم به جز چیزی که مشخص کردیم
    }
}


// Request (fill,img,..) دریافت اطلاعاتی مانند نوشته از فرم
class MyHomeIs extends Controller
{

public function form(Request $req){
    dd($req->all());                            //  کل اطلاعات موجود در مدیا
    dd($req->file());                           //  کل اطلاعات موجود در مدیا
    dd($req->name->path());                     //                مسیر مدیا
    dd($req->hasfile('name'));                  //      وجود مقداری در مدیا
    dd($req->name->getClientOriginalName());    //            نام اصلی مدیا

}
}


//  (((((((  Relationships )))))))
// در صفجه model جدول مبدا
namespace App\Models;
class User extends Model
{

public function products()                         // اسم تابع جمع و اسم کلاسی که میسازیم فرد است
{
    return $this->hasOne(modelname_table_2::class);                //  Relationships One To One       کد ملی / فرد
    return $this->hasMany(modelname_table_2::class,'foriegnkey_table_2','primarykey_table_self');         //  Relationships One To Many   در مدل فرزند    کامنت / پست
    return $this->belongsTo(modelname_table_2::class,'foriegnkey_table_2','primarykey_table_self');       //  Relationships One To Many   در مدل والد     کامنت / پست
    // حالا برای استفاده از ان در blade  باید بنویسی   varibale->model_func_scope->name_col$   بنویس
    return $this->belongsToMany(modelname_table_2::class);   //  Relationships Many To Many     خیارشور / ترشیجات

    // رابطه یک به یک
    // وقتی جدول مقصد فقط یک ستون با کلید خارجی است
    // وقتی جدول مقصد  چند  ستون با کلید خارجی است
    // رابطه چند به چند

    // فرق self با اینکه خود اسم table رو بدی چیه
    return $this->hasMany(self::class,'foriegnkey_table_2','primarykey_table_self');   //
    return $this->belongsTo(self::class,'foriegnkey_table_2','primarykey_table_self'); //

    // مقدار دیفالت میگیره
    return $this->belongsTo(self::class,'foriegnkey_table_2','primarykey_table_self')->withDefault(['title' => '----']);
    }

}

//////////////////////////////////////////////
// ایجاد یکسری چیزها ((((   migrate     migrate/model     migration    model   controller    component    seeder    ))))))
// migration : فقط یک مایگریشن میسازه
// migrate   : کل مایگریشن های موجود را  جدول  میکنه



// php artisan make: --- folder1/folder2/name_---      // میتوان قبل از ایجاد مستقیم چیزی ان را در پوشه ریخت

// php artisan db:....  --class=NameClass             // ایجاد مقادیر به وسلیه سیدر فقط برای سیدر خاصی (وقتی یک سید جدید نوشتی از بالایی استفاده نکن بلکه از همین استفاده بکن)

// php artisan make:component name_component --view   {{-- وجود view باعث میشه فایل php component دیگر ایجاد نشه چون نیازی به ان نیست --}}

// php artisan make:controller name_controller         // ساخت یک کنترلر وب با نام دلخواه

// php artisan make:controller name_controller --resource   // با نام دلخواه  resourse  ساخت یک کنترلر وب
// php artisan make:controller name_controller -r          // با نام دلخواه  resourse  ساخت یک کنترلر وب
// نوع route ان resourse است

// php artisan make:controller name_controller --api   // ساخت یک کنترلر ای پی ای  با نام دلخواه

// php artisan make:controller name_controller --api --model=User  // ساخت یک کنترلر ای پی ای  با نام دلخواه

// php artisan migrate                                        // ساخت کل ماگریشن ها در دیتا دبیس

// php artisan migrate:reset                                        // ساخت کل ماگریشن ها در دیتا دبیس

// php artisan make:Model Name_model                          //  app/model/Name_model ایجاد شده در ادرس

// php artisan make:migration name_migrate             // ساخت یک ماگریشن جدید با نام دلخواه

// php artisan make:Model name_Model -m                // ساخت همزمان مدل و مایگریشن با اسم فرد و بزرگ

// php artisan make:migration add_sell_columns_product_table --table=products
// اضافه کردن یک ستون به جدول مورد نظر که در فایل ان در مایگشریشن جداگونه ایحاد میشه

// php artisan vendor publish تمام پکیج های پوشه کانفیگ رو میاره و میگه کدوم رو اجرا کنم

// php artisan make:middleware name_middleware         // ساخت میدلور  با نام دلخواه

// php artisan make:factory name_factory               برای استفاده از seeder باید قبلش factory بشه

// php artisan make:factory name_factory --model=User

// php artisan make:seeder name_seeder                 // ساخت سیدر با نام دلخواه

// php artisan db:seed                                 // ایجاد مقادیر به وسلیه سیدر

// php artisan db:seed --class=ArticleSeeder        // ایجاد مقادیر به وسلیه سیدر فقط برای سیدر خاصی (وقتی یک سید جدید نوشتی از بالایی استفاده نکن بلکه از همین استفاده بکن)

// php artisan migrate:fresh --seed                 //  ترکیبی

// php artisan make:resource name_Resource               // میکند extend و  json reource از یک

// php artisan make:resource name_Resource --collection  // میکند extend و  reource collection از یک

// php artisan make:request name_Request

// php artisan make:apiRequest name_Request

// php artisan make:command name_Command

// php artisan stub:publish

// php artisan optimize

// php artisan migrate

// php artisan migrate:fresh

// php artisan migrate:fresh --seed

// php artisan migrate:rollback

// php artisan db:wipe                     drop all table DB


// composer du

//
//  II  انواع توابع اماده موجود در controller ها              index -create - store - show - edit - update - destroy

first(); // اولین مقدار را برمیگرداند
return abort('404');   // ایجاد ارور ۴۰۴


//////////////////////////////////////////////

// ((( middleware )))
php artisan make:middleware name    // اضاقه کردن middleware
// حالا باید ادرس رو در فایل kernal در متقیر $routeMiddleware اضافه کرد

// در بدنه middleware یک متغیر با نام $next  وجود دارد که ریکويست رو به بعدی ها انتقال میده




//   ((( sweetalert in laravel )))    ((( sweetalert سایت  )))
//  composer require realrashid/sweet-alert         installation  در قسمت
// جالا در قسمت usage هر مدلی را که میخای استفاده کنی ان را use کن   use RealRashid\SweetAlert\Facades\Alert
// @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) master در صفحه Configuration در قسمت
// حالا در controller ها هر جایی که خاستی استفاده کن مانند




// ((( Zarinpal )))
// composer require evryn/laravel-toman   (terminal)
// سرچ کن toman pakage laravel
// php artisan vendor:publish --provider="Evryn\LaravelToman\LaravelTomanServiceProvider" --tag=config   (terminal)
// php artisan vendor:publish --provider="Evryn\LaravelToman\LaravelTomanServiceProvider" --tag=lang     (terminal)
// php artisan vendor:publish --provider="Evryn\LaravelToman\LaravelTomanServiceProvider" --tag=config   (env)
// برای بررسی نصب به فایل config برو و فایل toman را جک کن



// در فایل env
// PAYMENT_GATEWAY=zarinpal
// ZARINPAL_MERCHANT_ID=0bcf346fc-3a79-4b36-b936-5ccbc2be0696
// ZARINPAL_SANDBOX=true   (( برای درگاه تستی پرداخت ))






// app/enums
enum NameEnums:string
{
    case Active = 'active';
    case InActive = 'Inactive';

    // ....
}
$table->enum('status')->default(NameEnums::Active->value);


// ((((((((((((((((((((((((((((((((((((((( نکات کلی و خلاصه در laravel )))))))))))))))))))))))))))))))))))))))))))
// ((((((((((((((((((((((((((((((((((((((( نکات کلی و خلاصه در laravel )))))))))))))))))))))))))))))))))))))))))))
// ((((((((((((((((((((((((((((((((((((((( نکات کلی و خلاصه در laravel )))))))))))))))))))))))))))))))))))))))))))
/*

auth()->check()     // اتوماتیک کاربری رو که وارد شده پیدا میکنه البته باید در روتی که اوت داشته باشه     کاربر وارد شده
auth()->user()      // کاربر لاگین شده


// ((( Enums )))   ساخته و استفاده میشن app/enums در مسیر php فایل های

// در عملیات های crud پایین برخی در dd و برخی در صفحه blade به طور compact شده میفرستیم

برای نمایش بهتر قیمت در یک صفجه {{number_format($order->price)}}

وقتی php-class را ایجاد کردیم . برای دسترسی در دیگر جاها فقط کافیه با ctrl+shift+f میتوان ان را پیدا کرد و برای استفاده
از ان فقط کافیه اسمی که قرار دادیم را استفاده کنیم

به صفجه ای که بعد از پرداخت است callback میگویند
به پیام موفقیا امیزی که بعد از پرداخت است success میگویند

جدول order برای سفارشات یک شخص است
جدول order_item برای کل سفارشات است


با اعمال تغییر در composerjson باید دستور composer du را اجرا کنید

در دو دور روش DB و ORM برای فرستادن چیزی به صفحه ای باید compact کرد

در migrate ها توجه کن ستون remember_token نیازی نداریم

برای درخواست و دریافت باید request بزنیم


انواع ورودی در فرم ها
text  --->>>   pass   email
file  --->>>   video  image


در db از دو تابع زیر استفاده کن (همان کار vardump , echo را انجام میدن)
dd('');    // die / dump /
ddd('');   // die / dump / design

وقتی از مدل استفاده میکنی برخی توابع پیشنهاد نشه که باید قیل از ان ها از تابع ()query استفاده بشه

انواع ارور های عددی http status code متنند ارور ۴۰۴

در مدل ها پراپرتی $hidden = [] برای اینه که چیزی برنمیگردد

// constructor prperty promotion   تعریف همزمان متغیر و تابع

قدیمی
private UserService $service;

public function __construct(UserService $userService)
{
    $this->service = $userService;
}

جدید
public function __construct(private UserService $userService)
{
    $this->service = $userService;
}
*/

// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\User\HomeController;
use \App\Http\Controllers\Admin\AdminController;
use \App\Http\Middleware\Admin;

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/register',[HomeController::class,'registerUser'])->name('register.User');

Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/login',[HomeController::class,'loginAdmin'])->name('login.Admin');


Route::prefix('admin')->middleware(Admin::class)->group(function (){
    Route::get('/add',[AdminController::class,'showAdd'])->name('admin.add');
    Route::post('/add',[AdminController::class,'addCourse'])->name('admin.course');

    Route::get('/panel',[AdminController::class,'index'])->name('admin.panel');

    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::post('/update/{id}',[AdminController::class,'update'])->name('admin.update');

    Route::get('/delete/{id}',[AdminController::class,'delete'])->name('admin.delete');
});


namespace App\Models;
class Car extends Model
{
    protected $fillable = [       // بدتره
        'name',
        'color',
        'year',
    ];
    protected $guarded = [        // بهتره
        'id',
    ];
}


namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;  // برای استفاده از کتابخانه     DB
use App\Models\Teacher;           // برای استفاده از   مدل     Teacher

class MyHome extends Controller
{
    public function home()
    {
        $courses = Course::all();
        return view('auth.home',compact('courses'));
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginAdmin(Request $request)
    {
        $user = User::query()->where('name',$request->name)->where('password',$request->password)->where('role',1)->first();
        if ($user !== null){
            Auth::login($user);
            return redirect()->route('admin.panel');
        }
        else{
            return abort('404');
        }
    }

    public function showAdd()
    {
        return view('admin.addCourse');
    }

    public function addCourse(Request $request) // ذخیره کردن فایل مدیا
    {
        if ($request->hasFile('image')) {
            $typeFile = uniqid() . "." . $request->image->extension();
            $request->image->move(public_path('admin'), $typeFile);
            $dataform = $request->all();
            $dataform['image'] = $typeFile;

            Course::query()->create($dataform);

            return redirect()->route('admin.panel');
        }
    }

    public function edit($id){
        $courses = Course::query()->find($id);
//        dd($courses);
        return view('admin.editCourse', compact('courses'));
    }

    public function update(Request $request ,$id)
    {
        $courses = Course::query()->find($id);

        if ($request->hasFile('image')) {
            $typeFile = uniqid() . "." . $request->image->extension();
            $request->image->move(public_path('admin'), $typeFile);
            $dataform = $request->all();
            $dataform['image'] = $typeFile;

            $courses->update($dataform);
//            ddd(11);
            return redirect()->route('admin.panel');
        }
    }
    public function delete($id)
    {
        $courses = Course::query()->find($id);
        $courses->delete();

        return redirect()->route('admin.panel');
    }
}

// {{ Middleware حالا در صفحه }}

namespace App\Http\Middleware;
class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){
            return $next($request);
        }else{
            return abort('404');
        }
    }
}


// {{ Controller  در صفحه }}
public function qqqqqqqqqqqqqqqq($id)
{
    // ۱ - ایتدا کویری بزن و بدون نیاز به شرط در view فقط نمایش بده ُ سپس در view نمایش بده
    $Colors = ProductColor::where('id_product',$id)->get();
    return view('Admin.Product.colors',compact('Colors'));
    /*
    @foreach($ProductImages as $ProductImage)
        <td class="text-center">
            <span><img src="{{asset('AdminAssest/Product-image/'.$ProductImage->images)}}" width="100px" alt=""></span>
        </td>
        <td class="text-center">
            <a href="{{route('Account.Product.DeleteImage',$ProductImage->id)}}" class="bs-tooltip"  data-toggle="tooltip" data-placement="top" title=""  data-original-title="حذف"> <svg xmlns="http://www.w3.org/2000/svg" width="24"  height="24" viewBox="0 0 24 24" fill="none"  stroke="currentColor" stroke-width="2"  stroke-linecap="round" stroke-linejoin="round"  class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path  d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> </a>
        </td>
     */
