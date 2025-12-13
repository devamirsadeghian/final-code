<?php
/*

در rest یک request از نوع http میاید و در جواب یک response از نوع xml یا json دریافت میکند

در response ها یکstatus داریم وضعیت را نشان میدهد که انواع مختلفی دارد مثلا requset = 200 موفقیت امیز بوده و جوابی داده شده

در api نیازی به متد های edit , create نداریم چرا که اصلا کاری با view نداریم

// در controller مربوط به create  چون عمل validate را انجام دادیم بهتره برای handle کردن خطا ها از ساختار trycatch استفاده کرد

متد های put و patch برای اپدیت کردن هستند که put برای اپدیت همه مقادیر و patch برای اپدیت چند تا از مقادیر است

برای patch کردن میتوان در postman از post استفاده کرد ولی در queryparams باید مقدار _method را patch قرار بدی

دیگه به جای id از token استفاده میشه چون امنییت بالا تره

کلاس هایی که یه کار مشحص انجام میدن پ یک منطقی دارند مانند که در کنترل استفاده میشن ارسال پیامک . پرداخت و ..  از services استفاده میکنیم

در payment دو مقدار برمیگرداند که یکیش status که مقدار yes/no دارد و یک مقدار authority که همان transaction id که مقدار بین ۲۰ تا ۳۰ است

با transaction id در جدول order میشه به مقدار order_details دسترسی پیدا کرد

متد get در api : دریافت اطلاعات
متد post در api :  ارسال اطلاعات



اگر تمام فیلدهای منبع را ارسال می‌کنی (حتی اگر بعضی‌ها تغییر نکرده باشند) → از PUT استفاده کن.
اگر فقط فیلدهایی که می‌خواهی تغییر کنند را ارسال می‌کنی → از PATCH استفاده کن.
    

برای کاستوم کردن query ها از model/repository باید استفاده کرد
برای کاستوم کردن column ها از     resource     باید استفاده کرد



/// ((((  json object  ))))
{
    "key":"value",
    "key":"value"
}


/// ((((  json array  ))))
{
    "user":[
        {
            "id":1,
        "   name":"amir"
    },
    {
        "id":1,
            "name":"amir"
    }
    ]
}
*/

///////////////  ((((((((((      Requeset       )))))))))  (((( در مسیر رو به رو ذخیره میشوند app\Http\Requesets ))))
// پاسخ Requeset ها در قالب html است

class UserRequests extends FormRequest
{
    public function authorize()
    {
        return true;       // سطح دسترسی مجاز شد با true کردن
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'min:1', 'max:255'],
            'last_name' =>  ['required', 'string', 'min:1', 'max:255'],
            'email' =>      ['required', 'email', 'unique:users,email'],
            'password' =>   ['required', 'string', 'min:1', 'max:255'],
            'email.required' => 'برای ایجاد متن دلخواه در یک ریکویست'
        ];

    }
}



//  ((((((((((   create api  manual   )))))))))
// ایجاد route جدید برای api که در کنار فایل های route/api.php  و   route/web.php

// صفحه RouteServiceProvider
class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));      //

            Route::middleware('web')
                ->group(base_path('routes/web.php'));      //

            Route::middleware('api')
                ->prefix('api/asdddd')
                ->group(base_path('routes/asdddd.php'));   // create api  manual
        });
    }
}

// ایجاد controller و قرار دادن در یک پوشه با نام دلخواه Admin/asdddd.php

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();      // کل مقادیر رو میده
        $users = User::paginate(); // مقادیر در غالب چند صفحه میاید
        return response()->json([
            'data' => $users,
        ],200);
    }
}

// صفحه route/asdddd.php
Route::apiResource('users', UserController::class)->only(['show','index']);
Route::apiResource('users', UserController::class)->except(['show','index']);
//                   همان  compact




//  ((((((((((   report exeption  )))))))))

// composer require laravel/telescope
// php artisan telescope:install


// در ادرس http://127.0.0.1:8000/telescope/requests یک صفجه ای برای requset ها باز میشه که در نوار کنار صفحه میتوان
// به request ها و exeption ها دسترسی پیدا کرد





// ((((((( ایجاد مقدار فیک در دیتا بیس یا seeder )))))) شامل ۴ مرحله است

// php artisan make:model name_table -m

//  database/migration/name_table صفحه
public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->foreignId('user_id')->constrained('users');
        $table->timestamps();
    });
}


// php artisan make:factory name_factory

//  database/factories/UserFactory صفحه
class name_factory extends Factory
{
    public function definition()
    {
        return [
            'first_name' => fake()->firstName(),      // اسم تابع firstName رو درست وارد کن
            'last_name' => fake()->lastName(),        // اسم تابع last_name رو درست وارد کن
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}



// php artisan make:seeder name_seeder

//  database/seeder/name_seeder صفحه
class name_seeder extends Seeder
{
    public function run()
    {
        User::factory(100)->create();
    }
}



//  database/seeder/DatabaseSeeder صفحه

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(name_seeder::class);
    }
}




// (((((((((((((((((((((((((((((((          دو مدل خروجی در کنترلر ها         ))))))))))))))))))))))


// 1 - response()->json([])
class ArticleController extends Controller
{
    public function index()
    {
        $Article = Article::all();
        return response()->json([
            'data' => $Article,
        ]);
    }
}



// 2 - resource::collection()
class ArticleController extends Controller
{
    public function index(request $request)
    {
        $users = $usersQuery->paginate();
        return name_resource::collection($users);
    }
}


// php artisan make:resource name_resource
// resource 
class ArticleResource extends JsonResource
{
    public function toArray($request)
    {
        //یکی از دو return پایین
        return parent::toArray($request);        //  کل مقادیر جدول مقصد
        return [                                 //  برخی مقادیر جدول مقصد 
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'full_name' => $this->full_name,
        ];
    }
}


//  ((((((((((   lazy  and  eager loading       and       append  base  model  )))))))))
/* مثلا در جدول article ستونی پا نام user_id  داریم که میتوان از طریق آن به اظلاعات user دسترسی پیدا کنیم که این کار
با ۲ روش امکان پذیر است  . روش اول lazy  است ک همان روال قبل را دارد ول روش eager با کمک تابع اماده with() قابل پیاده سازی است */


//  Article  Model
class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // این کد ها فقط مخصوص روش append است
    protected $with = ['user'];      // در روش append الزامی است

    protected appends = ['col_name'];  // در روش append الزامی است   // نام دلخواه برای ستونی که در بالا تابع ان را نوشتیم
}

////////////////// 1 -  lazy loading
////////////////// 2 -  eager loading
/////////////////// 3 -  append

//  Article  Controller
class ArticleController extends Controller
{
    public function index()
    {
        $Article = Article::all();                                             /////////  lazy
        $Article = Article::with('user: id , first_name , last_name')->get();            // فقط ۳ ستون انتخابی    eager
        $Article = Article::with('user')->get();                              /////////  append
        return response()->json([
            'data' => $Article,
        ],200);
    }
}


// جدول مبدا  user
// جدول مقصد article

//  ((((((((((   api resource  )))))))))  (((( در مسیر رو به رو ذخیره میشوند app\Http\Resources ))))
// برای دسترسی به ستون های خاص و مشخص از جدول مبدا چیزایی که میخاهیم رو واکشی میکنیم و در ای پی ای مینویسیم
// این روش از روش append , eager , lazy  بهتره


// php artisan make:controller name_controller --api
// controller api
class ArticleController extends Controller
{
    public function index(request $request)
    {
        $users = $usersQuery->paginate();
        return name_resource::collection($users);
    }
}


// php artisan make:resource name_resource
// resource 
class ArticleResource extends JsonResource
{
    public function toArray($request)
    {
        //یکی از دو return پایین
        return parent::toArray($request);        //  کل مقادیر جدول مقصد
        return [                                 //  برخی مقادیر جدول مقصد 
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'full_name' => $this->full_name,
        ];
    }
}

// php artisan make:controller name_controller --api
// controller api
class ArticleController extends Controller
{
    public function index(request $request)
    {
        $users = $usersQuery->paginate();
        return name_resource::collection($users);
    }
}


// php artisan make:resource name_resource
// resource_1   ریسورس پیش فرض
class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);        // کل مقادیر جدول مقصد  
    }
}


// php artisan make:resource name_resource
// resource_2     ریسورس کاستوم شده
class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,                        // جدول مقصد  id فقط
            'user' => new resource_1($this->user)     // کل مقادیر جدول مبدا
        ];
    }
}






//  ((((((((((   custom  command   )))))))))  (((( در مسیر رو به رو ذخیره میشوند stubs ))))
// فایل stub : وقتی یک command را صدا میزنیم یک فایلی با فرمت stub اجرا شده که محتویات شبیه به همان چیز اولیه دارد
// فایل های stub مثلا در command باید در مسیر app/console/commans/stub/ApiRequestStub قرار بگیرد
// محتویات فایل stub همان کل مقدار فایل Rerques است و در بالای صفجه مقدار namespace باید {{ namespace }} باشد

class ApiRequestMakeCommand extends GeneratorCommand
{
    protected $signature = 'make:NameApi {{name}}';    // کامندی که یک api میسازه و نامش را میگیرد


    protected $description = 'Command description';       // توضیجات کامند


    public function handle()
    {
        return Command::SUCCESS;
    }

    protected function getStub()
    {
        return __DIR__ . 'Stubs/ApiRequestStub.stub';      // ادرس قایل stub دستی که درست کردیم
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '/Http/ApiRequest';        // مسیری که فایل stub در ان ذخیره شده
    }
}

// حالا برای اجرا بنویس
// php artisan make:NameApi {{  }}
// در controller در مثلا متد store یا index باید در request بنویسی

public function store(name $request)
{
    // .... code ....
}



//  ((((((((((   validition api   )))))))))
// php artisan make:Apirequest  name


// model
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected static $rules = [
    'first_name' => ['required', 'string', 'min:1', 'max:255'],
    'last_name' =>  ['required', 'string', 'min:1', 'max:255'],
    'email' =>      ['required', 'email', Rule::unique('users','email')->ignore($this->user->id)],
    'password' =>   ['required', 'string', 'min:1', 'max:255'],
        ];
}

// name
class UserStoreRequests extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        model::rules([
            'email' =>      ['required', 'email', Rule::unique('users','email')->ignore($this->user->id)],
            'password' =>   ['required', 'string', 'min:1', 'max:255'],
        ]);
    }
}

// app/base/traits             است  traits

trait nameTraits
{
    public static function rules(array $appens = [])
    {
        return array_merge(self::$rules , $appens);
    }
}




// (((((((((((((((((((((((((((((((((((((((  postman   ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((  postman   ))))))))))))))))))))))))))))))))))))))))))))))

// بخش header همان اطلاعاتی که همراه api بوده ارسال میشه

// در متد  GET ُ.  بخش      params       برای ارسال پارامتر استفاده میشه
// در متد POST ُ.  بخش  body(property)   برای ارسال   دیتا  استفاده میشه

// بخش body دارای چند حالته که از مهم تریناش عبارتند از
// form-data :        هر دو مقدار   text , data
// x-.www.url-encode : فقط دارای      text







// (((((((((((((((((((((((((((((((((((((((  swagger   ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((  swagger   ))))))))))))))))))))))))))))))))))))))))))))))

// composer require "darkaonline/l5-swagger"
// php artisan l5-swagger:generate         تست کامنت سواگر




///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////

// Base Controller
// anonition کامنت قبل هر فانکشن

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Example for response examples value"
 * )
 * @OA\PathItem(path="/api")
 */

///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////

/**
 * @OA\Get(                                   // GET
 ** path="/api/V1/home",                      // url api
 ** path="/api/V1/home/{id}",                 // url api    پارامتر میگیرد
 *  tags={"Home Page"},                       // l   زیر شاخه تگ ها
 *  description="get home page data",         // l    توضیجات
 *     @OA\Parameter(                         // l   پارامتر های ورودی
 *          description="product id",
 *          in="path",
 *          name="id",
 *          required=true,
 *          @OA\Schema(
 *             type="integer",
 *             format="int64"و         // l (اختیاری)
 *          ),                        // l اخرش کاما بزار
 *     ),                             // l اخرش کاما بزار
 *   @OA\Response(
 *      response=200,                         // status وضعیت
 *      description="Its Ok",                 // l    خروجی ریسپانس
 *      @OA\MediaType(                        // l   نوع مدیا
 *           mediaType="application/json",    // l   GET نوع خروجی ریسپانس
 *           mediaType="multipart/form-data", // l  POST نوع خروجی ریسپانس
 *      )
 *   )
 *)
 **/

///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////

// خلاصه کد های تو در تو  POST

/**
 * @OA\Post(
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             @OA\Schema(
 *                 @OA\Property(
 *
 *                 ),
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         @OA\MediaType(
 *
 *         )
 *     )
 * )
 **/


/**
 * @OA\Post(
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 // l  شی
 *             ),
 *             @OA\Items(
 *                 @OA\Property(
 *                  // l  ارایه
 *                 ),
 *                  @OA\Property(
 *                      // l  ارایه
 *                  ),
 *             )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         @OA\MediaType(
 *
 *         )
 *     )
 * )
 **/


///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////

///////// مثال ۱
/**
 * @OA\Post(
 ** path="/api/V1/send_sms",
 *  tags={"Auth Api"},
 *  description="use for send verification sms to user",
 *   security={{"sanctum":{}}},          // l  در صورت استفاده از احراز هویت
 * @OA\RequestBody(
 *    required=true,
 *    description="use for send verification sms to user",
 *           @OA\MediaType(
 *           mediaType="multipart/form-data",
 *           @OA\Schema(                                  // l کادر مربوط به ورودی ها
 *           @OA\Property(                                // l برای هر پارامتر ورودی
 *                  property="mobile",                    // عنوان ورودی  (اختیاری)
 *                  description="Enter mobile number",    // توضیحات   (اختیاری)
 *                  type="string",
 *               ),
 *          @OA\Property(                                // l برای هر پارامتر ورودی
 *                   property="mobile",                    // عنوان ورودی  (اختیاری)
 *                   description="Enter mobile number",    // توضیحات   (اختیاری)
 *                   type="string",
 *                ),
 *     )
 *   )
 * ),
 *   @OA\Response(
 *      response=200,
 *      description="Its Ok",
 *      @OA\MediaType(
 *           mediaType="application/json",
 *      )
 *   )
 *)
 **/


///////// مثال ۲
/**
 * @OA\Post(
 ** path="/api/V1/payment",
 *  tags={"payment"},
 *  security={{"sanctum":{}}},
 *  description="send product id in basket to payment",
 * @OA\RequestBody(
 *    required=true,
 *    description="data package for Test",
 *           @OA\JsonContent(               // l  ورودی یک شی که داخلش ارایه تو در  تو است
 *              type ="object"
 *               @OA\Property(
 *                  property="address_id",
 *                  type="integer",
 *                  example="1"
 *               ),
 *              @OA\Property(
 *                  property="items",
 *                  type="array",
 *                  example={{
 *                      "product_id": 2,
 *                      "count": 2,
 *                    }, {
 *                      "product_id": 3,
 *                      "count": 2,
 *                  }
 *               },
 *          @OA\Items(                  // l  مقدار ورودی
 *              @OA\Property(
 *                  property="product_id",
 *                  type="integer",
 *                  example="1",
 *               ),
 *              @OA\Property(
 *                  property="count",
 *                  type="integer",
 *                  example="2",
 *                ),
 *             ),
 *           ),
 *        ),
 *      ),
 *   @OA\Response(
 *      response=200,
 *      description="its Ok",
 *      @OA\MediaType(
 *           mediaType="application/json",
 *      )
 *   )
 *)
 *
 **/

// (((((((((((((((((((((((((((((((((((((((  git   ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((  git   ))))))))))))))))))))))))))))))))))))))))))))))
/*
modify   اصلاح
delete   حذف


-a
-m  massege
-u


git init ./"folder"/
git add                 فقط ۱ فایلی  که تغییر کرده اضافه میشه
git add .              همه فایل هابی که تغییر کرده اضافه میشه
git rm
git status
git commit -m "massage"


// create a new repository on the command line
git init
git add .
git commit -m "massage"
git branch -M main
git remote add name_origin https://www.asd
git push -u name_origin branch_name  ( git push -u origin main )



// push an existing repository from the command line
git remote add name_origin https://www.asd
git branch -M main
git push -u name_origin branch_name

git remote
git push
git log                           ها رو میده commit لیست
git branch -l                     ها رو میده branch لیست
git branch name                              branch ساخت
git checkout -b name         روی ان sweech و branch ساخت
git merge branch-name    فعلی branch به branch اضافه کردن
git rm fileName.paswand


create new branch              از برنچ فعلی یک برنچ میسازه
create new branch from asd     از برنچ دلخواه یک برنچ میسازه

git commit -m "first commit"
git branch -M main


git config --global user.name amir....


// .gitignor
// * یعنی همه المان ها

file1.txt
file2.png
file3.*
*.png
file[1-4].*
/folder1/folder2/file4.html
/folder1/file5.*




////////////////////      راه اندازی پروژه     /////////////////

git clone https://github.com/username/repository.git


composer install
npm install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve


*/



$carOwner = Carowner::all();
$carId = $carOwner[0];
$ownerId = $carOwner[1];

$cars = Car::query()->whereHas('owners',function ($q){
    return $q->where('id',$ownerId);
})->where('id',$carId)->get();

