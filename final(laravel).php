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


         ((( php )))                            ((( laravel )))
// include 'folder/file_php';            @include('folder.file_blade.php')
// require 'folder/file_php'';           @extends('layouts.master')  */

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/', function () {
    return view('page_blade_php');
    return view('content',['name' =>'ali']);
});


Route::get('/login', [MyController::class,'login'])->name('loginName');     // استفاده از controller ها به حای تابع که استاندارد است
Route::post('/form', [MyController::class,'form'])->name('formName');       // استفاده از controller ها به حای تابع که استاندارد است



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
Route::group(["prefix"=>"course"],function () {
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

//////////////////////////((((((((--------- COMPONENT ---------)))))))))//////////////////////////    // روش 3 بهترین است
//////////////////////////((((((((--------- COMPONENT ---------)))))))))//////////////////////////
         
//  برای محتوی متغیر است  : نکته  {{ $varibale}}  متغیر
         
// روش 1
<button class="{{ $class }}">   اختیاری
    {{ $title }}                 اجباری
</button>

// روش 2
@component('button.file_blade_php',['class' => 'class_name' , 'title' => 'value_title' ])

@endcomponent


//  روش 3  (Anonymous Component — ساده‌ترین نوع)  ( دارد view فقط فایل )
php artisan make:component name_component -- view  // وجود view باعث میشه فایل php component دیگر ایجاد نشه چون نیازی به ان نیست

         
//  روش 4  (Class-based Component — حرفه‌ای‌تر)    ( هم دارد php فایل view علاوه بر )
php artisan make:component name_component




// مثال

resources/components/name_component.blade.php  در مسیر  name_component  ایجاد فایل  (blade)
app/view/components/name_component.php         در مسیر  name_component  ایجاد فایل   (php) // فایلی که با ان کاری نداریم

<div class="card">
    <div class="card-header">
        {{ $header }}
    </div>

    <div class="card-body">
        {{ $slot }}
    </div>
</div>


// ((((((  صفحه دلخواه  ))))))
// ایجاد شده در صفحات blade باید از روش پایین استفاده کرد component  حالا برای استفاده از
<x-name>
    <x-slot name="header">
         عنوان کارت      //  $content که در بالا استفاده شده اینجا استفاده کردیم
    </x-slot>
    محتوای کارت          //   $slot   که در بالا استفاده شده اینجا استفاده کردیم
</x-card>



//////////////////////////((((((((--------- mix laravel---------)))))))))//////////////////////////
//////////////////////////((((((((--------- mix laravel---------)))))))))//////////////////////////
             
//کپی میشود public/js-css/app/js-css همزمان در ادرس reasorce/js-css/app/js-css به کمک ان کد های نوشته شده در

// را سرچ کن cmd در ادرس  بالای صفحه پروژه
// را نصب کرده node js ابتدا اخرین نسخه
// node-v
// npm -v
// npm install                  //(باعث ایجاد پوشه node-model در پروژه میشه)
// npm run dev
// npm run production           //(  کم حجم کردن فایل و کد ها  در پابان پروژه )
// npm run build                // (در صورتی  که دستور بالا اجرا نشد) (همزمان کار dev  و production را انجام میده)
             
////////////////////////((((((((--------- install bootstrap---------)))))))))///////////////////////
////////////////////////((((((((--------- install bootstrap---------)))))))))///////////////////////
// برای نصب bootstrap باید node js اول نصب بشه
// حالا cdn ها را وارد کن
// cd desktop/folder_project
// npm i bootstrap                   // نصب bootstrap


// در پوشه resources/js/app.js  خط پایین را بنویس
import 'bootstrap/dist/js/bootstrap.bundle';


// در پوشه public فایل css/bootstrap.css را ایحاد کن
// محتویات فایل node_modules/bootstrap/dist/css/bootstrap.rtl.css  در مسیر public/css/bootstrap.css کپی کن

// حالا در قسمت link در صفحاتمان به کمک asset  قایل css را باز میکنیم         asset
{{asset('css/bootstrap.css')}}

 اجرا کن   npm run dev
 
////////////////////////((((((((--------- ها query خلاصه ---------)))))))))///////////////////////
////////////////////////((((((((--------- ها query خلاصه ---------)))))))))///////////////////////

DB           // کلاس دیتابیس در لاراول
dd($var)
ddd($var)

first()         // اولین داده ای که رسید رو برمیداره
get()           // میده
take(6)         // تعداد مشخص میده
tosql()         //  به ما نشان میدهد php مورد نظر را به زبان query
query()->pluck('colomn','key',);              // فقط استخراج یک یا چند ستون رو واکشی میکنه
find(number)  find([num1,num2,...])         //  کار انجام میده id روی
findOrFail(number)                          //   اگه جواب داد  جواب  رو میاره و جواب نداد صفحه 404 نمایش میده (کار انجام میده id روی)
destroy(number)   destroy([num1,num2,...])  //  کار انجام میده id روی
whereHas()        // بک کویری که میتونه کار relation رو انجام بده
orWhere('title_on','like','%'.$search.'%')
increment('sold')
decrement('count',$order_detail->count)
Orderby('title');                       //  مرتب سازی Orderby
withTrashed()->find(2);                 // پاک کردن سافت
onlyTrashed()->find(2)->restore();      // بازگشتن از حالت سافت به معمولی
where('id',1)->forceDelete();           // پاک کردن همیشگی
all();                                  // global scope  (کل دیت ها رو نمایش میده )
whitoutGlobalScope('price')->where('id','>',22)->get();    // scope لغو


$model->delete()              //   حذف نرم
$model->restore()             //   بازیابی 
$model->forceDelete()         //   حذف کامل
Model::withTrashed()->get()   //   گرفتن همه (با حذف‌شده‌ها)
Model::onlyTrashed()->get()   //   فقط حذف‌شده‌ها


/// // کردن ، با اضافه کردن مقداری به جدول ، ایدی از مقداری که پاک شده ادامه میابد delete هنگام
//// کردن ، با اضافه کردن مقداری به جدول ، ایدی از 0 ادامه میابد truncate هنگام


$var_1 = DB::table('table_name')->where('id',1)->get();       {{-- id = 1 --}}
$var_1 = DB::table('table_name')->where('id',"=>",1)->get();  {{-- id =>1 --}}


// کردن ، با اضافه کردن مقداری به جدول ، ایدی از مقداری که پاک شده ادامه میابد delet هنگام
// کردن ، با اضافه کردن مقداری به جدول ، ایدی از 0 ادامه میابد truncate هنگام


////////////////////////((((((((--------- migrate---------)))))))))///////////////////////
////////////////////////((((((((--------- migrate---------)))))))))///////////////////////

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

            $table->timestamp('special_expiration')->nullable();     // استفاده میشه deleted at بیشتر برای ستونی مانند
            $table->timestamp('failed_at')->useCurrent();
            $table->timestamps();                                    // دارد created at , updated at  پیشفرض
        });
    }

////////////////////////((((((((--------- CRUD---------)))))))))///////////////////////
////////////////////////((((((((--------- CRUD---------)))))))))///////////////////////

$select = DB::table('users')->where('id',1)->get();
$select = DB::table('table_name')->where('id',1)->get();       //  شرط    id = 1
$select = DB::table('table_name')->where('id',"=>",1)->get();   //  شرط    id =>1

$insert = DB::table('users')->insert(['title'=>'python','body'=>'lorem']);                                               // ارسال یک دیتا
$insert = DB::table('users')->insert([['title'=>'python','body'=>'lorem'] , ['title'=>'python','body'=>'lorem']]);       // ارسال چند دیتا

$update = DB::table('users')->where('id',1)->update(['votes'=>1]);    // خام . اول شرط و سپس مقادیر اپدیت میشه  sql عکس

$delete_person = DB::table('users')->where('id',1)->delete();             // فقط تعدادی سطر حذف همراه با ایدی از ادامه
$delete_table = DB::table('users')->delete();                            // کل جدول حذف همراه با ایدی از ادامه

$query = DB::table('users')->truncate();                                 //   کل جدول حذف همراه با ایدی از  0

////////////////////////((((((((---------  fillable   guarded  timestamp   SoftDeletes ---------)))))))))///////////////////////
////////////////////////((((((((---------  fillable   guarded  timestamp   SoftDeletes ---------)))))))))///////////////////////

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
     public $timestamp = false;      // برای در نظر نگرفتن  ستون های created_at , updated_at در هنگام insert
    use SoftDeletes;               // اجازه ایجاد حذف نرم مدل    
}

////////////////////////((((((((--------- global scope (in model) ---------)))))))))///////////////////////
////////////////////////((((((((--------- global scope (in model) ---------)))))))))///////////////////////

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

////////////////////////((((((((--------- local scope (in model) ---------)))))))))///////////////////////
////////////////////////((((((((--------- local scope (in model) ---------)))))))))///////////////////////

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

////////////////////////((((((((--------- Request Function ---------)))))))))///////////////////////
////////////////////////((((((((--------- Request Function ---------)))))))))///////////////////////

class MyHomeIs extends Controller
{
    public function form(Request $request){
    
         // ----------------------------Request (text)-----------------------------
         
        dd($request);                 //  کل اطلاعات ورودی ها با تمام جزيیات
        dd($request->all();           //  کل اطلاعات ورودی ها با تمام جزيیات
        dd($request->key;            // مقدار نام وارد شده در فرم  //
        dd($request->get('name','مقدار پیشفرض برای وقتی که اشتباه تایپی داریم'));  //  همان کار بالا را انجام میده
        dd($request->has('name'));    //  وجود مقداری در فرم
        dd($request->only('name'));   //  فقط  مقداری در فرم
        dd($request->except('name')); //   وجود هر مقداری در فرم به جز چیزی که مشخص کردیم

        
         // ----------------------------Request (fill)-----------------------------

       dd($request->file());                           //  کل اطلاعات موجود در مدیا
       dd($request->name->path());                     //                مسیر مدیا
       dd($request->hasfile('name'));                  //      وجود مقداری در مدیا
       dd($request->name->getClientOriginalName());    //            نام اصلی مدیا


       dd($request->user());
       dd($request->validated([
                 'key' => required|string
       ]));
    }
}


////////////////////////((((((((--------- Relationships ---------)))))))))///////////////////////
////////////////////////((((((((--------- Relationships ---------)))))))))///////////////////////

Model::class   //  رابطه با مدل مشخص دیگر
self::class    //  رابطه خودارجاعی ساده
static::class  //  وقتی ارث‌بری / توسعه‌پذیری مهمه


class User extends Model
{

public function products()                         // اسم تابع جمع و اسم کلاسی که میسازیم فرد است
{
    return $this->hasOne(modelname_table_2::class);                //  Relationships One To One       کد ملی / فرد
    return $this->hasMany(modelname_table_2::class,'foriegnkey_table_2','primarykey_table_self');         //  Relationships One To Many   در مدل فرزند    کامنت / پست
    return $this->belongsTo(modelname_table_2::class,'foriegnkey_table_2','primarykey_table_self');       //  Relationships One To Many   در مدل والد     کامنت / پست
    // حالا برای استفاده از ان در blade  باید بنویسی   varibale->model_func_scope->name_col$   بنویس
    return $this->belongsToMany(modelname_table_2::class);   //  Relationships Many To Many     خیارشور / ترشیجات

    // hasOne           رابطه یک به یک
    // hasMany          وقتی جدول مقصد فقط یک ستون با کلید خارجی است
    // belongsTo        وقتی جدول مقصد  چند  ستون با کلید خارجی است
    // belongsToMany   رابطه چند به چند 

    // مقدار دیفالت میگیره
    return $this->belongsTo(self::class,'foriegnkey_table_2','primarykey_table_self')->withDefault(['title' => '----']);
    }

}

////////////////////////((((((((--------- php artisan ---------)))))))))///////////////////////
////////////////////////((((((((--------- php artisan ---------)))))))))///////////////////////

// ایجاد یکسری چیزها ((((   migrate     migrate/model     migration    model   controller    component    seeder    ))))))
// migration : فقط یک مایگریشن میسازه
// migrate   : کل مایگریشن های موجود را  جدول  اجرا میشه و اگر مقدار جدیدی ست شد قثط همان را اجرا میکنه و کاری با قبلیا نداره


// php artisan make: --- folder1/folder2/name_---      // میتوان قبل از ایجاد مستقیم چیزی ان را در پوشه ریخت

// php artisan db:....  --class=NameClass             // ایجاد مقادیر به وسلیه سیدر فقط برای سیدر خاصی (وقتی یک سید جدید نوشتی از بالایی استفاده نکن بلکه از همین استفاده بکن)

// php artisan make:component name_component            //   php , blade  دو فایل
// php artisan make:component name_component --view     //        blade   فقط

// php artisan make:controller name_controller         // ساخت یک کنترلر وب با نام دلخواه

// php artisan make:controller name_controller --resource   // با نام دلخواه  resourse  ساخت یک کنترلر وب
// php artisan make:controller name_controller -r           // با نام دلخواه  resourse  ساخت یک کنترلر وب

// php artisan make:controller name_controller --api   // ساخت یک کنترلر ای پی ای  با نام دلخواه

// php artisan make:controller name_controller --api --model=User  // ساخت یک کنترلر ای پی ای  با نام دلخواه

// php artisan migrate                                        // ساخت کل ماگریشن ها در دیتا دبیس

// php artisan migrate:reset                                        // ساخت کل ماگریشن ها در دیتا دبیس

// php artisan migrate:fresh

// php artisan migrate:fresh --seed

// php artisan migrate:rollback

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

// php artisan db:wipe                     drop all table DB

// composer install           //  نصب  پکیج‌ها

// composer update            //  آپدیت پکیج‌ها

// composer dump-autoload     //  فقط رفرش autoload
// composer du

////////////////////////((((((((--------- middleware ---------)))))))))///////////////////////
////////////////////////((((((((--------- middleware ---------)))))))))///////////////////////

php artisan make:middleware name    // اضاقه کردن middleware
// حالا باید ادرس رو در فایل kernal در متقیر $routeMiddleware اضافه کرد

// در بدنه middleware یک متغیر با نام $next  وجود دارد که ریکويست رو به بعدی ها انتقال میده

////////////////////////((((((((--------- sweetalert ---------)))))))))///////////////////////
////////////////////////((((((((--------- sweetalert ---------)))))))))///////////////////////

//  composer require realrashid/sweet-alert         installation  در قسمت
// حالا در قسمت usage هر مدلی را که میخای استفاده کنی ان را use کن   use RealRashid\SweetAlert\Facades\Alert
// @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) master در صفحه Configuration در قسمت

////////////////////////((((((((--------- Zarinpal ---------)))))))))///////////////////////
////////////////////////((((((((--------- Zarinpal ---------)))))))))///////////////////////

// composer require evryn/laravel-toman   (terminal)
// سرچ کن toman pakage laravel
// php artisan vendor:publish --provider="Evryn\LaravelToman\LaravelTomanServiceProvider" --tag=config   (terminal)
// php artisan vendor:publish --provider="Evryn\LaravelToman\LaravelTomanServiceProvider" --tag=lang     (terminal)
// php artisan vendor:publish --provider="Evryn\LaravelToman\LaravelTomanServiceProvider" --tag=config   (env)
// برای بررسی نصب به فایل config برو و فایل toman را جک کن

// (((((( env در فایل )))))) 
// PAYMENT_GATEWAY=zarinpal
// ZARINPAL_MERCHANT_ID=0bcf346fc-3a79-4b36-b936-5ccbc2be0696
// ZARINPAL_SANDBOX=true   (( برای درگاه تستی پرداخت ))

////////////////////////((((((((--------- enums ---------)))))))))///////////////////////
////////////////////////((((((((--------- enums ---------)))))))))///////////////////////

// app/enums
enum NameEnums:string
{
    case Active = 'active';
    case InActive = 'Inactive';
}

$table->enum('status')->default(NameEnums::Active->value);  // طریقه استفاده

////////////////////////((((((((--------- laravel نکات ---------)))))))))///////////////////////
////////////////////////((((((((--------- laravel نکات ---------)))))))))///////////////////////
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


میگویند props  ها داده دریافت میکنند که به این داده ها  component

SoftDeletes  :  اطلاعات برای کاربر حذف شده ولی در دیتابیس هنوز وجود دارد

return abort('404');   // ایجاد ارور ۴۰۴

url()->previous()   //   blade     //  به صفحه ای که هستیم به صفحه قبلی در صورتی که وجود داشته باشد میبرد و اگر نداشت به صفحه اصلی میره

return  back()     //  controller   //  بعد انجام کاری به همان صفحه برمیگردیم

findOrFail      // برای edit , delete  ولی در صورتی که در ورودی  model $model باشد دیگه نایزی به اعمال ان نیست
*/


//  whereHas  مثال از تابع  
$users = User::whereHas('posts', function($q){
    $q->where('created_at', '>=', '2015-01-01 00:00:00');
})->get();


$orders = Order::query()->whereHas('order_details',function ($q){
    return $q->where('status',OrderDetailsStatus::rejected->value);
})->where('user_id',$user->id)->where('status',OrderStatus::success->value)->count();



// این Query Builder برمی‌گرداند و هیچ رکوردی هنوز بازیابی نشده یعنی باید در ادامه یکی از موارد زیر را بزنی
// model::query->...->...->...->...->get()
// model::query->...->...->...->...->first()
// model::query->...->...->...->...->paginate()
// model::query->...->...->...->...->limit()


// برای نمایش قیمت که سه تا سه تا با کاما جدا شده از number_format استفاده کن


// وقتی کویری زدی در مقدار value اصلا $key قرار نده بلکه باید $car->id قرار بدی چون ممکنه
// مقادیری که کرفتی به ترتیب در دیتابیس ثبت نشده باشند


// Route::get("list/{car?}/{owner?}",[CarsController::class,'index'])->name(index);  دو مقدار فرستاده که نامشان دلخواه است
// public function edit(Owner $owner) {} حتما باید نام متغییر  در ورودی تابع با نام ورودی در route برابر باشد



// تابع latest() در لاراول آخرین رکوردها را بر اساس یک ستون زمانی مرتب می‌کند و به‌صورت پیش‌فرض رکوردها را از جدیدترین به قدیمی‌ترین برمی‌گرداند
// مرتب سازی نزولی  lastest != oldest مرتب سازی صعودی


// protected $table                                                                 نام جدول دیتابیس‌ای را مشخص می‌کند که این مدل به آن متصل است
// protected $casts                      مناسب تبدیل کند  PHP مشخص می‌کنید که وقتی داده‌ای از دیتابیس خوانده یا ذخیره می‌شود ، لاراول آن را به نوع
// protected $date   (تبدیل میکند  Carbon لاراول ستون را به یک شی )  مدیریت شوند Carbon  برای مشخص کردن ستون‌هایی است که باید به صورت تاریخ/زمان



// نوع ستون         مناسب
// DATE         فقط تاریخ (مثلاً روز انقضای بیمه)
// DATETIME       ا                                                                                                    2020-12-12 13:04:32                               تاریخ + زمان دقیق
// TIMESTAMP    تاریخ+زمان و نیاز به ذخیره UTC و auto-update      1767083400


(( create ))
 <input   type="text"       name="last_name"          value="{{old('last_name')}}">

(( create )) 
<input   type="checkbox"   name="is_special"         value="1"   {{ old('is_special', $model->is_special ?? false) ? 'checked' : '' }}>

(( edit ))
<option selected="selected" value="{{$key}}"         {{$key == old('category_id') ? 'selected' : ''}}>{{$category}}</option>

(( edit ))
<td class="text-center align-middle">                {{$owner->last_name ? 'موجود نیست' : 'asd' }}</td>





