<?php

//  ?>           =            <?= ?>  برابرند


// ایجاد سرور
// php -S 0.0.0.0:1111;       تا      php -S 0.0.0.0:55555;


$a = 11;
gettype($a);  // نوع متغییر مشخص میشه



PHP_EOL  // <br></br>
// theme     oen dark vivid italic -  grandianto deep ocean   -



// جداکننده هر دستور و اجرا کردن ان  (;)


return[]; // خالی برمیگرداند



// include بهتر از require
// موقع برخورد با یک خطا include ادامه کد را اجرا میکند ولی در require اجرا کد ها متوقف میشود
require "address";
require_once "address";  // بهتره چون یکبار میخونه



include "address";           // برای استفاده از دیگر صفحات
include_once "address";      // 



require / require_once "../../address";       // هر 2 نقطه به یک پوشه قبل تر از همون فایلی که هستیم برمیگرده



// array  خروجی یکسان با توابع مختلف
var_dump($array);
echo "{$array}";






// محل return مهم است
$result = null;
if(4 > 1){
    $result = "yes";
}else{
    $result = "no";
}
return $result;




// برای دسترسی به مقادیر تو در تو ارایه
// برای پر کردن مقادیر ارایه
// برای پر کردن مقادیر    شی


// رفتار با ارایه  $a[div1][div2]...[divn]
فکرکنماشتباهه// رفتار با ارایه  $a => div1 => div2 => ... => divn
// رفتار با شی     $a -> div1 -> div2 -> ... -> divn


$array[$i][0]['key'];   // array  دسترسی به      I        هر مرحله دارای علامت  $ است
$object->i;             // object دسترسی به      I      فقط مرحله اول دارای علامت  $ است





//  انواع متغییر
int;
float;
string;
boolean;
null;



//                        نام پوشه ها ->  کلش حروف کوچک
//     نام فایل ها ->  اولش حروف بزرگ  و  بقیش حروف کوچک


//  comment
#   comment
/*  comment   */  



echo "<tag_html>";
echo php_code;
echo "</tag_html>";


echo "<tag_html>";
echo "<br>";
echo "<hr>";

/* چاپ کردن
echo     $var      یا  "str"
var_dump ($var  یا  "str")
print_r  ($var   یا  "str")
print_f  (" is not avabale %c %d",$a , $b)
*/



echo "salam $var khobi";                    // salam reza khobi   // (بهتره)
echo "salam" . " " . $var. " " . "khobi";   // salam reza khobi   // (بهتره)


echo "salam {$var->fr} khobi";             // باید بین پزانتز بگذاری array , object برای چاپ شی گرایی در 


//   (نیازی به علامت $ ندارند) const , define ثوابت    
const name1 = "ali";
echo name1;


define("name2","arash"); // تعریف در تک کوتیشن و صدا زدن بدون تک کوتیشن     (نیازی به علامت $ ندارند)
echo name2;



// Data type
$a = 4;
$a = 12.4;
$a = "salam";
$a = true;


// ARRAY                                    " " => [ ]
$a1 = array('bmw', 'benz');
$a2 = ['bmw', 'benz'];         //بهتره


// 1 indexed array
$a3 = array('bmw', 'benz', 'ferari');
$a3 = array(['bmw', 'benz', 'ferari'], ['peykan', 'pride', 'zian']);

// 2 associative array
$a4 = array('11' => 'bmw',
    '22' => 'benz',
    '33' => 'ferari'
);


// 3 multy dimention array with index
$a5 = array(
    array('11' => 'bmw', '22' => 'benz', '33' => 'ferari'),
    array('11' => 'bmw', '22' => 'benz', '33' => 'ferari')
);

// 3 multy dimention array with associative
$a6 = array(
    'aval' => ['11' => 'bmw', '22' => 'benz', '33' => 'ferari'],
    'dovom' => ['11' => 'bmw', '22' => 'benz', '33' => 'ferari']
);

// ترکیبی
$a7 = array(
    'aval' => [
        '11' => ['ali' => 'aaaaa', 'bahar' => 'bbbbb'],
        '22' => ['saman' => 'sssss', 'zahra' => 'zzzzz']
    ],
    'dovom' => [
        33 => ['reza' => 'rrrrre', 'tara' => 'ttttt'],
        44 => ['hasan' => 'hhhhh', 'araef' => 'aaaaa']
    ]
);

print_r($a7);

print_r($a7["aval"]);

print_r($a7['aval']["22"]);
print_r($a7['aval']["22"]['zahra']);
print_r($a7['dovom'][33]);
print_r($a7['dovom'][33]["tara"]);



// 4  create by key  & value
$keyyyy = [];
$valuee = [];


$com = array_combine($keyyyy,$valuee);



// باشد associative array ارایه چند بعدی حتما باید


// object یا array باشد نه string  باید نوع مقادیر آن DB برای ذخیره کردن اطلاعات در 

$array = array('bmw', 'benz');

get_object_vars();                        // فقط داخل تابع اعمال  میشه           کل ارایه
$json = json_encode($array);                                       // کل جیسون
$obj = json_decode(json_encode($array));  or $obj = json_decode($json); //  کل   شی

$a= (object) json;  // خارج شی ولی داخل جیسون
$a= (array) object; // خارج جیسون ولی داخل شی



// OOP
// ایجاد شی از کلاس پیشفرض کیبورد کلاس بدون استفاده از کلاس آماده  
$a = new stdClass;
$a->name = 'amir';
$a->last = 'sadeghi';
$a->age = 24;




//call by refrence
$b = $a;
$b->age = 33;
echo $b->age; // 33
echo $a->age; // 33


//call by value
$b = clone $a;
$b->age = 33;
echo $b->age; // 33
echo $a->age; // 24





// فرق خروجی ارایه و شی در هنگام اکو کردن
$aaa = array('name'=>'ali','phone'=>913,'age'=>22);

$bbb = new stdClass();
$bbb->name='ali';
$bbb->phone=913;
$bbb->age=22;



echo "salam" . $aaa["name"] . "ali";
echo "salam" . $aaa[0] . "ali";

echo "salam" . $bbb->name . "ali";



// parametr    &   argoman
function  name(parametr){
}
name(argoman);


class ClassName
{
    function FunctionName($var_1 ,$var_2 = 'developer' , $var_3 = null)
    {
        echo " name is $var_1 $var_2 iss";
    }
}

ClassName::FunctionName('amir','developer','sadeggi');



// دستورات شرطی

if (condition) {

}



if (condition) {

} else {

}

// ternary operation
$retVal = (condition) ? a : b ;


if (condition) {

}else if (condition){

}else if (condition){

}else {

}


switch ($variable) {
    case 'value':
        عملیات;
        break;


    case 'value':
        عملیات;
        break;


    case 'value':
        عملیات;
        break;


    default:
        عملیات;
}



// ((((((( foreach مختص ارایه های  مقداری است ))))))))))
$array = [ ]

for ($i=0; $i < ; $i++) {
    # code...
}




// ((((((( foreach مختص ارایه های کلید و مقداری است ))))))))))

foreach ($variable as $key) {              // کمتر استفاده میشه

}

foreach ($variable as $value) {            // کمتر استفاده میشه

}

foreach ($variable as $key => $value) {    // بیشتر استفاده میشه
    var_dump($variable[$key]);  یکسان
    var_dump($value);         یکسان
}
*/

<?php
if ($a == 5):
    echo "a equals 5";
    echo "...";
elseif ($a == 6):
    echo "a equals 6";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;
?>



<?php
// مثال
$user = array(['ali', 'salehi', 29], ['hasan', 'falahi', 34]);

for ($i = 0; $i < 2; $i++) {
    echo "my name is {$user[$i][0]} and last name {$user[$i][1]} and my age {$user[$i][2]}  <br>";
}


$player = array(
    'ali' => [
        'role' => 'st',
        'age' => 22,
        'email' => 'ali@gmail.com'
    ],
    'saeed' => [
        'role' => 'rb',
        'age' => 25,
        'email' => 'saeed@gmail.com'
    ],
);

foreach ($player as $key => $value) {    // بیشتر استفاده میشه
    var_dump($player[$key]);  // role  age  email
    echo '<br>';
    var_dump($value);         // role  age  email
    echo '<br>';
    var_dump($key);           //  ali   saeed
    echo '<br>';
    var_dump($player);       // all
    echo '<br>';
    var_dump($value['role']); // st  rb
}




$arr = array(1, 2, 3, 4, 5);

foreach ($arr as $value) {
    echo "{$value}"; // 1 2 3 4 5
}



// FUNCTION
//  در خارج تابع قرار دارد echo در بدنه تابع قرار دارد و return
//  باشد string - int - float - boolean نوع ورودی ها میتواند از نوع های

function doLogin4($name, string $last, $phone = '01933333333', $email = null)
{
    return "--(($name))---(($last))---(($phone))---(($email))";
}
echo doLogin4("javad", "fathi", "123", "fateh@gmai.com"); // javad  fathi   123   fateh@gmai.com
// name اجباری 
// last اجباری و نوع ان حتما رشته باشد
// phone اختیاری ، در صورت داشتن ورودی همان ورودی و در صورت نداشتن مقدار پیشفرض است
// email اختیاری ، در صورت داشتن ورودی همان ورودی و در صورت نداشتن مقدار خالی است



function doLogin3(string $email = "amirrrrrrr", $pass = 1111111)
{
    return "your email is --(($email))-- and your password --(($pass))--";
}
echo doLogin3(); //  پیشفرض   پیشفرض
echo doLogin3('', ''); //   خالی     خالی
// وقتی هیچ ورودی نگیرد مقادیر پیشفرض میاید
// وقتی  ورودی ''  بگیرد مقادیر  خالی  میاید



function sda(int $a, int $b): float // مشخص کردن نوع خروجی بعد پرانتز
{
    return $a + $b;
}
$result = sda(5, 10.36); // error
$result = sda(5, 10); //  ok
echo $result;



// anymose function
// نام ندارند و میتوان ان ها را به متغیری نسبت داد 
$fun_1 = function (int $a, int $b): float {
    return $a + $b;
};
print_r($fun_1(4, 7));


// مثال رشته کوچک و بزرگ در رشته ورودی
function str_1(string $name)
{
    return [
        "lower" => strtolower($name),
        "upper" => strtoupper($name)
    ];
}
print_r(str_1('asdfg'));



// global varibale
class Class_global
{
    public function glo()
    {
        global $as;
    }
}
echo $as;    // not access



$a = 10;
$b = 20;
// ذخیره شده است $GLOBALS با تعریف متغییر های بالا ، هر کدام در متغییر جهانی
$GLOBALS['a'];



$obj1 = new stdClass();

$obj2 = $obj1;        // call by refrence   با مقدار دهی شی 2 ، شی 1 نیز تغییر کرده
$obj2 = clone $obj1;  // call by value      با مقدار دهی شی 2 ، شی 1 بدون تغییر میماندا



//       مقادر زا دز خود ذخیره میکند static
function  number()
{
    static $x= 10;
    $x++;
    echo $x;
}




echo "<pre>";         نمایش بهتر مقادیر
print_r($_SERVER);
echo "</pre>";


(((((((((((((((((((((((((( $GLOBALS ))))))))))))))))))))))))
//  superGlobal - variable
//  $GLOBALS  ====>>>>  _SERVER   _REQUEST  _GET  _POST  ... =====>>>>   $GLOBALS[_REQUEST]   $GLOBALS[_GET]   ....
//  $_SERVER  ==>> ( چند مدل )
//  $_REQUEST
//  $_GET      // قابل مشاهده است $_GET  در   a در  href مقدار ارسالی
//  $_POST
//  $_SESSION
//  $_COOKIE
//  $_FILES


// برای نمایش همه موارد بهتره در بین پرانتز باشد



((((((((((((((((((((((((( $_SERVER )))))))))))))))))))))))))
//  [HTTP_HOST]
//  [MYSQL_HOME]
//  [HTTP_USER_AGENT]
//  [SERVER_SOFTWARE]
//  [SCRIPT_FILENAME]
//  [REQUEST_URI]
//  [REQUEST_METHOD]
//  [PHP_SELF]
//  [HTTP_ACCEPT]
//  [REQUEST_TIME]


isset()     // قرار دارد
!isset()    // قرار ندارد


die("massage");                                   //متوقف کردن اجرای ادامه کد
die;


//////////////////////////////////  $_GET
if (!empty($_GET['txt_1'] && $_GET['txt_2'])) {               // بررسی فیلد ها
    echo "خوش آمدید".$_GET['txt_1'].$_GET['txt_2'];
}else{
    echo "فیلد خالی است";
}


///////////////////////////  $_POST
if(isset($_POST['submit'])){                                     //  بررسی ارسال
    if($_SERVER['REQUEST_METHOD'] == 'POST'){                    // بالا بردن امنیت
        if (isset($_POST['txt_1'] && $_POST['txt_2'])){          // بررسی فیلد ها
            echo "خوش آمدید".$_POST['txt_1'].$_POST['txt_2'];
        }
    }
}


// تابع اماده ()time
time();         // all time
date_default_timezone_set("iran");   // پیشفرض کزدن کل رمان

// چند مذل از فرمت های این تایع
echo date("Y");    // year   2025
echo date("y");    // year    25
echo date("m");    // month
echo date("l");    // week
echo date("d");    // day
echo date("h");    // hour
echo date("i");    // minute
echo date("s");    // second
//.................
echo data();



// $_COOKIE
// setcookie($name ,$value ,$expires_or_options ,$path ,$domain ,$secure ,$httponly );    ایجاد کوکی
$cookie_name = "user";
$cookie_value = "ali";
setcookie($cookie_name, $cookie_value, time() + 86400, "/");   // ایجاد کوکی
setcookie($cookie_name, $cookie_value, time() - 1   , "/");   // حذف کوکی



// $_SESSION
session_start();               // ایجاد کردن

$_SESSION['key'] = value;     // session کردن set
$_SESSION['key'] = new_value; // session کردن set

session_unset();                  // حذف
session_destroy();    // حذف  (محکم کاری)





echo __LINE__ ;   // در چه خطی رخ داده
echo __FILE__ ;   // پوشه فایل کنونی رو میده
echo __DIR__  ;   // مسیر فایل کنونی رو میده

((((((((( class بدنه داخل کن اعمال   )))))))))
__FUNCTION__;       // داخل بدنه تابع
__CLASS__;         // داخل بدنه تابع
__METHOD__;        // داخل بدنه تابع

((((((((( trait بدنه داخل کن اعمال   )))))))))
__NAMESPACE__;    // داخل بدنه trait
__TRAIT__;        // داخل بدنه trait



function test0()
{
    echo __FUNCTION__ . '<br>';
}
echo test0();



class Class_test1
{
    public function test1()
    {
        echo __CLASS__ . '<br>';
    }
}
$var = new Class_test1();
echo $var->test1();




class Class_test2
{
    static public function test2(string $str)
    {
        echo "$str is set";
    }
}

$var = new Class_test2();         // روش 1
echo $var->test2('amir');

//                                 باشد میتوان از این استفاده کرد static اگر کیبورد
echo Class_test2::test2('amir');  // static روش 2 به کمک     



class Class_test3
{
    public function test3()
    {
        echo __NAMESPACE__ . '<br>';
    }
}
$var = new Class_test3();
echo $var->test3();




///////////////    $_FILES      (upload file)

move_uploaded_file( $from , $to );


<form action="page.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button type="submit" name="submit"></button>
</form>

$_FILES['image'];  //



var_dump($_FILES['image']); // array => name full_path  type   tmp_name   error   size مثلا    شامل ۶ مقدار است که عبارتند از==>> $_FILES['image']['name]
$_FILES['image']['name'];      //
$_FILES['image']['full_path']; //
$_FILES['image']['type'];      //
$_FILES['image']['tmp_name'];  //
$_FILES['image']['error'];     //
$_FILES['image']['size'];      // bite



// روش ۱
$fileName = basename($_FILES['image']['name']);
$fileTemp = $_FILES['image']['tmp_name'];
move_uploaded_file($fileTemp, __DIR__ ."image/". $fileName);

// روش ۲
move_uploaded_file($_FILES['image']['tmp_name'] , __DIR__ ."/images/" . $_FILES['image']['name']);




(((((((((((((            string ('string') ($string)          )))))))))))))
// str1    'string....'    string

    //I      str1        رشته مورد نظر
    //I      separator   شرط
    //I         ''       تکه رشته

is_string('str1');               // ورودی رشته است یا نه که خروجی بولین است

strlen('str1');                  // طول رشته
str_word_count('str1');    // تعداد کلمات رشته را حساب کن


substr('str1',num);                   //l     کاراکتر اول رشته حذف num
strstr('str1','separator');           // حذف کاراکتر های شرط به قبل


strpos('str1', تکه );            // جایگاه شروع کاراکتر اولین تکه در رشته اصلی حساس به رشته اصلی
strtok('str1','separator');           // هر کلمه به عنوان یک رشته


ucwords('str1');                 // اول همه کلمات بزرگ

ucfirst('str1');                 // فقط اول حروف بزرگ
lcfirst('str1');                 // اولین حروف کوچک

strtoupper('str1');              // کل رشته بزرگ
strtolower('str1');              // کل رشته کوچک


ltrim('str1','');            // از چپ تکه رشته حذف
rtrim('str1','');            // از راست تکه رشته حذف
trim('str1','');             // از 2 طرف  تکه رشته حذف
nl2br('str1');                           // slice
number_format('',num);       //تا رشته را تکه تکه میکند n تا n


explode('separator','str',num);  //  تبدیل رشته به ارایه تکه تکه شده با شرط
implode('separator','arr',num);   //  تبدیل ارایه به رشته تکه تکه شده با شرط


str_replace('old','new','str1');// جایگذاری رشته جدید به جای رشته قبلی در رشته اصلی
str_repeat('',num);                // تکرار رشته به تعداد دلخواه

strrev('str1');                              // reserse str
str_shuffle('str1');                               // حروف را مخلوط کرده

str_split('str1','num');               // num خروجی ارایه           اختیاری

strcmp('str1','str2');          // مقایسه تعداد حروف بین ۲ رشته


md5('str1');                     // رشته را به حروف خاص تبدیل میکنه

printf(" string %u  %s ",$str , $integer); // جایگذاری متغییر به جای پلیس هولدر

str_starts_with('str1','separator');
str_ends_with('str1','separator');


htmlentities('');
html_entity_decode('');
htmlspecialchars('');
htmlspecialchars('');
strip_tags('');




file_exists($name_file);             // اطمینان ازوجود فایل
is_readable($name_file);             // چک میکنه فایل قابل خواندنه








(((((((((((((            array ('array')  ($arr)          )))))))))))))
// برای وقتی که چند ویژگی برای یک متعییر میخای قراا بدی . از ارایه کمک بگیر
// arr1    'array....'    $array_1


// برای توابع نیازی ذخیره در متغییر نیست که دارای علامت ** است و در جلوی تابع در ادیتور مینویسه array
   is_array('arr1');               // ورودی ارایه است یا نه که خروجی بولین است
   count('arr1');                  // تعداد اعضا** sizeof('arr1');                 // تعداد اعضا
   array_key_exists(key,'arr1');        //وجود کلید مورد نظر در ارایه
   in_array(value,'arr1');              // وجود مقدار مورد نظر در ارایه

   array_keys('arr1');                  // کلید های ارایه رو میده
   array_values('arr1');                // مقدار های ارایه رو میده
** shuffle('arr1');                     // مقادیر را مخلوط کرده
** sort('arr1');                        // مقادیر را مرتب کرده
   max('arr1');                         // بیشترین مقدار
   min('arr1');                         // کمترین مقدار
   end('arr1');                         // اخرین مقدار

   array_sum('arr1');                   // مجموع مقادیر رو میده
   array_rand('arr1');                  // رندوم کلید برمیگردونه

   compact(value1,value2,...);      // اتصال چند ایتم به صورت خروجی ارایه ای
** extract('arr1');        echo "$key1 $key2 ..."; // متغیر هایی را از روی کلید ها و مقادیر یک آرایه ایجاد می کند. کلید ها نام متغیر و مقادیر، مقدار متغیر هستند

   array_chunk('arr1',num);             // تا تکه تکه میکند n تا n
   array_merge('arr1','arr2','arr3',...);           // ارایه به هم متصل میکند

   array_unique('arr1');                          // مقادیر واحد رو میده
   array_reverse('arr1');                   // ترتیب مقادیر رو عکس میکنه
   array_search(value,'arr1');          // مقداری رو جست و جو میکنه
   array_diff('arr1','arr2','arr3',...); // مقادیر متفاوت نسبت به ارایه اول برمیگرداند
   array_slice('arr1',index);           // از ایندکس مورد نظر به قبل حذف میشه


**  array_shift('arr1');                                        //  از اولین عضو  حذف
**  array_unshift('arr1',value1,value2,...);    //  به اولین عضو  اضافه
**  array_pop('arr1');                                         //  از اخرین عضو  حذف
**  array_push('arr1',value1,value2,...);       // به اخرین عضو اضافه

   array_combine('$arr1','arr2');    // اتصال دو ارایه که اولی کلید و دومی مقدار است

   array_fill( index , number , value );  // از ایندکس مورد نظر به تعداد 3 , مقدار 5 رو تکرار میکنه

   array_map("function",$arr1);
   array_filter($arr1,"function");        // اعمال یک تابع روی یک ارایه






function odd(int $number)
{
    if($number % 2 == 1){
        return $number;
    }
}
echo odd(5);


$arr1 = array(1,2,3,4,5,6,7,8,9);
array_filter($arr1,'odd');        // اعمال یک تابع روی یک ارایه



get_object_vars(); //  را برمیگرداند object های Property از array     (فقط داخل تابع اعمال  میشه)


?>


// (((((((((((((((((((((((((((((             Exception             )))))))))))))))))))))))))))))
// خطاها از جلسه 56 تا 62
// Exception : شی هایی از نوع خطا
// ارور ها رو نمیشه هندل (مدیریت) کرد ولی اکزپتشن ها رو میشه


set_exception_handler("my_exception_handler"); //


// error type (php error level)
// تمام نوع های زیر یک کد باینری دارد
error_reporting('یک یا چند مدل از انواع زیر  ');  // (  |  |  |  ) با توجه به ورودی که میگیره حین اجرای برنامه ، ارور هایی را نشون میده
error_reporting(E_ALL)(-1);    // نمایش همه مدل ارور
error_reporting(E_ERROR);      // خطا بزرگ که اجرا متوقف
error_reporting(E_PARSE);      // خطا بزرگ که اجرا متوقف
error_reporting(E_WARNING);    // خطا دارد ولی اجرا میشود
error_reporting(E_NOTICE);     // ارور کم اهمیت تر که اجرا میشه
error_reporting(E_DEPRECATED); //
error_reporting(E_STRICT);     //





// C:\xampp\apache\conf\extra\httpd-vhosts
// باید بسازی errorelog , acces_log در فایل بالا دو خط
// ساخته میشه error , acces دوفایل  C:\xampp\apache\logs  درمسیر


// توابع اماده زیر ورودی ندارند
get_defined_functions();  // تا اینجای کدها ، توابع  هایی که تعریف شدن در قالب ارایه میده
get_defined_vars();       // تا اینجای کدها متغییر هایی که تعریف شدن در قالب ارایه میده
debug_zval_dump();        // تمام رفرنس هایی  که به یک متغییر نسبت داده شده را برمیگرداند
debug_print_backtrace();  // مسیر صدا زدن توابع رو نشون میده (در خروجی از اخر به اول بخوان)

<?php

// میتوان تکه به تکه کد ها را دیباگ کرد xdebuge به کمک ابزاری به نام 



// جلسه 59 سون لرن

// کرد handle میتوان گرفت و  object ها را در قالب Exception
// بشه catch  میشه باید (throw) try   هر چیزی که
// هر چیزی که پرتاب  میشه باید گرفته بشه

$ex = new Exception();  // یک نوع خطا ران تایم هستش یعنی حین اجرای برنامه ایجاد میشه 


throw new Exception("متن خطای دستی");           // دستی Exception ایجاد
throw new DivisionByZeroError("متن خطای دستی"); // ...
throw new PDOException("متن خطای دستی");        // ...
throw new ErrorException("متن خطای دستی");      // ...
//....


try {
    // هر کدی که احتمالا خطایی رو ایجاد بکنه اینجا قراره میگیره
    // نمیشه dump وقتی چیزی خطایی دارد و در این بلاک باشد ، خطایی رخ نمیده و چیزی
    // اجرا میشوند catch به محض برخورد با یک خطا ، ادامه دستورات اجرا نمیشه و به سراغ دستورات

    throw new Exception("متن خطای دستی");
    throw new DivisionByZeroError("متن خطای دستی");
    throw new PDOException("متن خطای دستی");
    throw new ErrorException("متن خطای دستی");


} catch (Throwable $th) {
    // تمام اطلاعات  $th رخ میده را در یک شی try اولین خطایی که در
    //را در ان قرار میده و به ان میتوان به ان دسترسی داشته باشیم
    // این بلاک چندبار میتونه تکرار بشه


    // Throwable انواع توابع مهم خطای

    echo $th->getMessage();  // پیام خطای مورد نظر
    echo $th->getLine();     // در چه خطی رخ داده
    echo $th->getFile();     // در چه فایلی رخ داده
    echo $th->getCode();     // نوع کد خطا مثلا 404
    echo $th->getTrace();    //
    echo $th->getPrevious(); //


} catch (Throwable $th) {
    //
}finally{
    // خطا در هر صورتی که رخ بده اجرا خواهد شد
}



try {
    echo sum_1(4); // error because 2 argumant resive
    throw new Exception("ارور دستی");
} catch (Exception $th) {
    $mass = $th->getFile() . "line:" . $th->getLine() . "massage" . $th->getMessage . PHP_EOL;
    echo $mass;
} catch (PDOException $th) {
    $mass = "error PDO";
} catch (Error $th) {
    $mass = "error manual";
}finally{
    echo "<br>finally text";
}



// ساخت اگزپتشن دستی (Exception manual) (خطاهایی که معادلشون تعریف نشده پس باید ساخته بشه)
class DivisionByZeroError extends Exception{}  // مثال
class PDOException extends DBException{}       // مثال




// مثال اگزپتشن دستی
class DivisionByZeroError extends Exception{}

$orange = 15;        // تعداد پرتقال
$person = rand(0,4); // تعداد  افراد
$sahme = $orange/$person;
echo "sahme har nafar : $sahme";

try {
    if($person == 0){
        throw new DivisionByZeroError("0 is failled");
    }
} catch (DivisionByZeroError $objDiv) {
    echo "no Person";
    echo $objDiv->getTrace();
    echo $objDiv->getPrevious();
}finally{
    echo "finally";
}




(((((((((((((((((           composer            )))))))))))))))))
// ساخته میشود vendor/autoload.php در مسیر ، autoload فایل composer با نصب 
// کنیم include را اول پروژه autoload این فایل به طور خودکار تمام پکیچ ها را در خود لود میکند و ما فقط باید فایل
// همه پکیج ها را در خود دارد packagist.org  سایت



(((((((((((((((((    composer  راهنمای نصب      )))))))))))))))))
// را نصب کن composer اول فایل
// ایجاد میشه composer پوشه C:\Program Files حالا در مسیر 
// را به صورت دستی ایجاد کن composer_phar پوشه C:\Program Files حالا در مسیر 
// را اجرا کنی cmd باید composer_phar در پوشه
// php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"    پیش نیاز حذف کامپوزر
// php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
// php composer-setup.php                   نصب کامپوزر
// php -r "unlink('composer-setup.php');"   حذف کامپوزر



(((((((((((((((((    composer  استفاده از       )))))))))))))))))/*
را باز کن terminal را در قسمت php فایل
composer init                             راه اندازی
vendor/name                               هر پکیج دارای یک وندور و اسم است که این نام ها باید دلخواه و کوچک باشند  
Description                               توضیح دلخواه برای پیکج
Author                                    skip
Minimum Stability                         stable            (stable - beta - dev - RC - alpha)
Package Type                              library
License                                   MIT
Search for a package                      name_package      نام پکیج مورد نظر
Enter the version constraint to require   0 ta ...          عدد ورژن پکیج
lative path                               skip
Do you confirm generation                 yes/no            json ذخیره تمام مقادیر بالا در فایلی با فرمت 
Would you like to install dependencies    yes/no            vendor در پوشه ای با نام json نصب پکیج های فایل


اجرا کنیم git bash برای نصب پکیج های لازم در پروژه ها کافیه فقط فایل جیسون را در پوشه پروژه بریزی و دستور پایین را در 
composer require name_package   نصب پکیج*/



die();    die;     // بستن ریکوست
nl2br();     // هر مقدار در یک خط
sleep(3);    // کد پی اچ پی با 3 ثانیه تاخیر اجرا شده
mkdir(address,0777,true)  // ایجاد پوشه
header("location:page.php");



$varibale         // استفاده مستقیم از متغیر مستقیم
$this->varibale;  // استفاده از متغیر با کمک شی           better



$obj = new class_name();  // متد های از شی در دیتابیس

$obj->find(number);   // سطری با ایدی (کلید اصلی) را میده
$obj->delete(number); // سطری با ایدی (کلید اصلی) را حذف میکنه


---------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------
((((((((((((((((((((((((((((((   OOP   ))))))))))))))))))))))))))))))


// garbage callacture : را صدا زده ایم ولی از ان ها استفاده نکردیم method , property , object
// حذف کردن آنها قبلا توسط برنامه نویس انجام میشد ولی حالا خود کامپایلر ها ان را حذف میکنند


// property : متغییر های داخلی کلاس اند (داخل کلاس بودن مهمه)  (varibale)
// method   : تابع  های داخلی کلاس اند (داخل کلاس بودن مهمه)   (function)



// ((((( ترتیب کلمات کلیدی که البته همگی با هم نمیان )))))
class AAA
{
    abstract final public  static function name ():int;
}




public function FunctionName():string  // نکته : Method declaration
{
    # code                      // نکته : Method body
}




class Person
{
    public $Name;
    public $Age1 = 10;
    protected $Age2 = 20;
    protected $numberMoney='"sadeghi"';
    public function play()
    {
        echo $this->Name . " plays ";           //
    }
}

$man = new Person();
$man->Name = "ali";
$man->play();        // خروجی : ali plays


echo $man->Name;   // ali          (فراخوانی (متغیر
echo $man->Age1;   // 10           (فراخوانی (متغیر
echo $man->Age2;   // error        (فراخوانی (متغیر
echo $man->Age3;   // error        (فراخوانی (متغیر
echo $man->play(); // ali plays     (فراخوانی (تابع 


echo Person::class;  // اسم کلاس
echo Person::$Age3;  // پراپرتی استاتیک




////////////////////////////////////////////////////////////////////////////////////////////
// ((((( oop )))))   (((((  انواع دسترسی ها با کلمات کلیدی  )))))

class person
{
    public $Name;
    public $Family;
    const Age=22;

    public function showFullName()
    {
        echo $this->Name;
        echo "<hr>";
        echo $this->Family;
        echo "<hr>";
        echo self::Age;
        echo "<hr>";
        echo person::Age;
        echo "<hr>";
        echo self::class;
        echo "<hr>";
        echo person::class;
    }
}

$man = new person();
$man->Name = "ali";
$man->Family = "sadeghi";
$man->showFullName();





////////////////////////////////////////////////////////////////////////////////////////////
////// ((((  const  )))))  ((((   برای تعریف پروپرنی های ثابت از const کمک بگیر   ))))
///
const  key = "value11";
echo key;



////////////////////////////////////////////////////////////////////////////////////////////
// (((((  final  )))))

// برای منع کردن است به معنی تمام شدن که دیگر برای کاری مناسب نیست مثلا
//            داشته باشند child ها  class  اجازه نمیده
//         داشته باشند override ها method  اجازه نمیده
//   ها مقدارشان قابل تغییر باشد property اجازه نمیده


final class base
{
    final public $name;
    final private $name;
    final protected $name;
    final public function tset ()
    final private function tset ()
    final protected function tset ()
    {

    }
}



final class math{
    final public $pi = "3.14";
    final public static $title = "math class";  // چرا اجازه نمیده
    final public function(){                    // چرا اجازه نمیده
        return $pi;
    }
}



////////////////////////////////////////////////////////////////////////////////////////////
// (((((  access modifiers )))))  (( سطح دسترسی ))  ((  اجازه دسترسی به متغییرها و توابع را در  کلاس ها ، میده ))

private :      getter,setter  در داخل کلاس به ان دسترسی داریم       ،      به کمک
protected :      در داخل کلاس به ان دسترسی داریم       ،      به کمک     بچه هاش
public :                                            در همه جا به ان دسترسی داریم



// میباشد protected , private , غیر قابل دسترسی است یعنی تعریف نشده property وقتی میگوییم
// باشد public , protected , private بهتره به ترتیب access modify سطح دسترسی در       */



class A
{
    public $pub  = 1;
    private  $pri= 2;
    protected $pro = 3;

    function inside_public ()
    {
        echo $this->pub;
    }

    function inside_private()
    {
        echo $this->pri;
    }

    function inside_protected ()
    {
        echo $this->pro;
    }
}


$a = new A();
echo $a->pub;      //      1
echo $a->pri;      // fatal error
echo $a->$pro;     // fatal error

$a->inside_public();    // 1
$a->inside_private();   // 2
$a->inside_protected(); // 3



////////////////////////////////////////////////////////////////////////////////////////////
// (((((  public )))))

class Fruit
{
    public $name = 1;

    public function test ()
    {
        return $this->name;   // دسسترسی داخل کلاس
    }
}

$f = new Fruit();
echo $f->name;  //    دسسترسی داخل کلاس       1




////////////////////////////////////////////////////////////////////////////////////////////
// (((((  protected )))))

class Fruit
{
    protected $name;
}

class apple extends Fruit
{
    public function test ()
    {
        $this->name = "amir";
        return $this->name;
    }
}

$f = new apple();
echo $f->test();




////////////////////////////////////////////////////////////////////////////////////////////
// (((((  private )))))

class Fruit
{
    private $name;

    function test ()
    {
        return $this->name;   // دسسترسی داخل کلاس
    }

    function setter($name)
    {
        $this->name = $name;   // دسسترسی در setter
    }

    function getter ()
    {
        return $this->name;   // دسسترسی در getter
    }
}

$f = new Fruit();
$f->setter("ali");
echo $f->getter();





////////////////////////////////////////////////////////////////////////////////////////////
// ((((( inheritance )))))    (( وراثت ))

// راهنمایی --->>>       A  --->>>  C  --->>>  L,D             پدر و فرزند هیکچکس نیست B
// class A{}
// class B{}
// class C extends A
// class L extends C
// class D extends C

class A{
    public $public = "A:public";
    private $private = "A:Private";
    protected $protected = "A:protected";
    function test()
    {
        $this->public . " | "  . $this->private . " | " .$this->protected;
    }
}

$a1 = new A();
echo $a1->test();   //    A:public | A:Private | A:protected

//--------------------------------------------------------------------------------------------------------------------

class C extends A{
    private $private = "A:Private";  // در دسترس است $this->private در صورت تعریف
    function testc()
    {
        $this->protected = "A:protected(modify by C)"; // دارد A:protected(modify by C) مقدار $this->protected در صورت تعریف
        return $this->public . " | " .$this->private . " | " .$this->protected. " | ";
    }
}

$a1 = new C();
echo $a1->testc();   //    A:public | A:Private | A:protected(modify by C)


//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------

class A
{
    public $color = "red";

    public function getColor(){
        echo $this->color;
    }
}


class B extends A
{
    public $age = 24;

    public function getColor()
    {
        echo $this->color;
    }
}


class C extends B
{
    public function getOne()
    {
        echo $this->color;
        echo $this->age;
    }
}

$c = new C();
echo $c->color . "<br>";          // red
echo $c->age . "<br>";            // 24
echo $c->getColor() . "<br>";     // red
echo $c->getOne() . "<br>";       // red  24




////////////////////////////////////////////////////////////////////////////////////////////
////// ((((( __construct  __destruct )))))

// صدا زده میشود __construct ساخته میشود object هنگامی که
// صدا زده میشود __destruct  حذف  میشود  object هنگامی که

// __construct : نیاز به مقدار دهی اولیه دارد
// __destruct  : نیازی به چیزی ندارد خودش پیشفرض کار ها رو انجام میده

class Car{
    public $brand;
    public $model;
    public $color;
    public function __construct($brand,$model,$color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;

        echo "construct : $this->brand | $this->model | $this->color";
    }

    public function __destruct(){
        echo "destruct : $this->brand | $this->model | $this->color";
    }


    public function printInfo(){
        echo "printInfo : $this->brand | $this->model | $this->color";
    }
}



////////////////////////////////////////////////////////////////////////////////////////////
////// (((( setter  getter )))))


// setter : چون برای مقدار دهی یا اپدیت کردن است ---->>> حتما ورودی میگیره و نیاز به مقدار دهی اولیه دارد     
// getter : میشود return حتما در بدنه ان چیزی

// را اول کلمه مورد نظر بیاوریم get,set باید کلمه getter,setter برای نامگذاری 


class example2{
    public$name;
    private $age;
    private $nationalcode;
    protected $income;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setNationalCode(rand(100,10000));
    }

    # setter
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setIncome($income)
    {
        $this->$income = $income;
    }

    public function setNationalCode($nationalcode)
    {
        $this->nationalcode = $nationalcode;
    }


    # getter
    public function getname()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getIncome()
    {
        return $this->nationalcode;
    }

    public function getNationalCode()
    {
        return $this->nationalcode;
    }
}

var_dump($object instanceof Class_father);      // پدر هست یا نه class از نوع object چک میکنه این instanceof
var_dump($User instanceof Table);


////////////////////////////////////////////////////////////////////////////////////////////
////// ((((( extends ))))

class father
{
    public $age = 22;
}


class child extends father
{
    public function age()
    {
        return $this->age;
    }
}

$obj = new child();
echo $obj->age();
echo "<br>";


/*


چهار اصل در شی گرایی
1.encapsolation: کپسوله سازی متدها و پراپرتی ها
2.inheritance  : وراثت
3.polymorphys  : شخصی سازی متد با تابع پدر
4.abstract   : ( abstract_class  ,  interface ) مخفی کردن جزییاتی که به ان نیازی نیست به وسیله 2 مکانیزم وابسته است


((((((((((((     1.encapsolation  : کپسوله سازی متدها و پراپرتی ها    ))))))))))))


((((((((((((((((((((            2.inheritance  : وراثت           ))))))))))))))))))))

ایجاد کرده ایم و دیگر جدول ها از از ارث بری کرده اند BaseModel در اینجا مثلا برای کار با دیتا بیس یک 

{{-- است BaseModel این کد مخصوص صفحه --}}                               */

abstract class BaseModel
{
    protected $db;
    protected $table;
    protected $primaryKey = "id";
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        } catch (\Throwable $th) {
            die("connection failed: " . $th->getMessage());
        }
    }

    public function select($id)
    {
        $sql = "select * from users where id = id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

// {{-- است User این کد مخصوص جدول --}} 
include 'BaseModel.php';

class User extends BaseModel
{
    protected $table = "Users";          // جدول متغییره
    public function mostCommentArticle(){ // متد جداگانه و مختص این کلاس
    }
}

// {{-- است Task این کد مخصوص جدول --}} 
include 'BaseModel.php';

class Task extends BaseModel
{
    protected $table = "Tasks";          // جدول متغییره
    public function mostCommentArticle(){ // متد جداگانه و مختص این کلاس
    }
}

// ((((((((((((((((((((    3.polymorphys  : شخصی سازی متد یا تابع پدر    ))))))))))))))))))))

overriding : شخصی سازی متد یا تابع پدر که نام و ورودی ها در کلاس بچه دقیقا یکی است

class Shape
{
    protected $name = "shape";
    public function draw(){
        echo $this->name . PHP_EOL;
    }
}


class square extends Shape{
    protected $name = "square";

    # overriding
    public function draw(){
        echo "مثلث";
    }
}


class Circle extends Shape{
    protected $name = "Circle";

    # overriding
    public function draw(){
        echo "دایره";
    }
}



$shape = new shape();
$square = new square();
$Circle = new Circle();


$shapes = [$shape,$square,$Circle];
foreach ($shapes as $data) {
    $data->draw();
}


// خروجی
$square->draw();   // مثلث
$Circle->draw();   // دایره





//((((((((    4.abstract  :      وابسته است abstract_class  ,  interface   به 2 مکانیزم  ))))))))))))))


// هستند abstract ها interface
// abstract  : مخفی کردن جزییات ) کلیات )         extends
// interface : جزِعیات                            implements


//////////////   abstract_class
abstract class ParentClass {
    abstract public function someMethod3($name, $color):string;
    abstract public function someMethod2($name, $color);
}



abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

class Audi extends Car {
  public function prodoce() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

$audi = new audi("Audi");
echo $audi->prodoce();




abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
public function prefixName($name) {
    if ($name == "John Doe") {
    $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
    $prefix = "Mrs.";
    } else {
    $prefix = "";
    }
    return "{$prefix} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");




////////////////////////////////////////////////////////////////////////////////////////////
// (((((  interface )))))

interface InterfaceName {
    public function someMethod1();
    public function someMethod2($name);
    public function someMethod3();
}



interface Animal {
    public function makeSound();
}

class Cat implements Animal {
public function makeSound() {
    echo " Meow ";
    }
}

class Dog implements Animal {
public function makeSound() {
    echo " Bark ";
    }
}

class Mouse implements Animal {
public function makeSound() {
    echo " Squeak ";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal) {
$animal->makeSound();
}



// مفهوم مثال بالا
interface I1{
    public function a();
}

interface I2 extends I1{
    public function b();
}

interface I3 extends I2{
    public function c();
    public function d();
}

class C implements I3{
    # implements of  a(),b(),c(),d()    دسترسی به تمام توابع در این کلاس
}


class ClassName extends AnotherClass implements Interface_1 , Interface_2 , ... ;
{
    # کلاسی که از پدر ارث بری کرده و همزمان از چند اینترفیس استفاده میکند
}


class Base implements Interface_1 , Interface_2 , ... ; // interface کردن چندین پدر در implements



////////////////////////////////////////////////////////////////////////////////////////////
// (((((  trait )))))

// را اضافه میکنند یعنی فرزند از چند پدر ارث بری میکند یعنی توابع مشترک بین چند کلاس multy inheritance قابلیت
// های مشترک برای ارث بری funtionality یک مکانیزمی برای به اشتراک گذاشتن
// کمک گرفت instanceof استفاده کرد بلکه باید از new برای ساخت شی نمیتوان از کیبورد
// میباشد acces_modifire ، method , property ها دارای class مانند
// برای دسترسی به ان ها استفاده کرد use  برای استفاده از ان باید از کیبورد
// پیشرفته است trait خودش به طور پیش فرض دارای laravel

// singletone:استفاده میشه instancof باید از متد،new باید فقط 1 شی ساخته شود که برای ساخت ان از کیبورد singletone ، trait هر


trait traitClass1
{
    public $name;
    private function showFullName()
{
    echo "hi trait_1";
    }
}


trait traitClass2
{
    public $name;
    private function showFullName()
{
    echo "hi trait_2";
    }
}


class myClass
{
    use TraitClass1;
    use TraitClass2{
    showFullName as public;                                      // تغییر سطح دسترسی
    showFullName as public ppp;        // تغییر سطح دسترسی و تغییر اسم دلخواه method
}
    use TraitClass2{
    TraitClass2::showFullName insteadof traitClass1;  // تغییر اولویت در trait ها
    }
}

$obj = new myClass();

$obj->showFullName();  // hi trait_1
$obj->showFullName();  // hi trait_2
$obj->ppp();            // hi trait_2



// استغاده همزمان extends و implements
class database  extends         mysqli       implements  databaseInterface {...}
class database implements databaseInterface   extends         mysqli        {...}



////////////////////////////////////////////////////////////////////////////////////////////
// ((((( static )))))

// استفاده کرده اند دسترسی پیدا کنیم static بدون نیاز به ساخت شی میتوانیم به متد و پراپرتی هایی که از
// این دسترسی به متد و پراپرتی ها به کمک :: انجام میشه
// مشترک باشد  :  کاربرد  object نگه داری که بین همه static اطلاعاتی را در قالب



// class /static   members   --->>>   public static $varibale = "value"  or   public static function example(){}
// object/instance members   --->>>   public $varibale = "value"         or   public function example(){}
----------
//  استفاده کن class_name::method_or_property()                 اعضای کلاس که برای دسترسی از
//  استفاده کن $a::method_or_property()    $a = new class_name  اعضای کلاس که برای دسترسی از



// پنج مدل استفاده از کلید های مهم
//1//  $this->obj;                                         به  شی اشاره دارد this

//2//  self::$method_or_property                     به کلاس کاستم اشاره دارد self   وقتی پراپرتی در کنار تابع تعریف شده
//3//  self::class                                 به کلاس  پیشفرض اشاره دارد self

//4//  class_name::method_or_property()
//5//  $a::method_or_property()           $a = new class_name

//6//  static::class <-- self::class      داره اجرا میشه class کدام object ازطریق        late static binding مفهوم


// self              که داخل ان نوشتیم اشاره میکنه class همیشه به
// static      های ان کار میکنیم object هایی که با class همیشه به


class Sheep{
    private $name;
    private static $count;
    public function __construct()
    {
        $this->name = "sheep" . rand(100,999);  // 1
        self::$count;                           // 2
        self::class;                            // 3
    }
    public static function getCount(){
        return self::$count;
    }
}

$s1 = new Sheep();

echo Sheep::getCount();                           // 4
echo $s1::getCount();                             // 5



//((((((((((((((((      late static binding       )))))))))))))))))))            خط 1530
// استفاده میکنیم static::class  از ، self::class به جای استفاده از

self::class;   //
static::class; // بهتره



//((((((((((((((((        utility class        )))))))))))))))))))   ((((اند static))))
//مجموعه توابع مرتبطی که باهم به عنوان جعبه ابزار دورهم جمع میکنند تا بدون ساخت شی،سریع تر از انها استفاده کرد
// است static های ان method همه
// مربوط به یک موضوع است



// را در یک کلاس دور هم جمع کرده ایم url مثلا در اینجا تمامی توابع کار با
class Url{

    public static function getCurrent()
    {
        $url = (isset($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]."".$_SERVER[REQUEST_URI]";
        return $url;
    }

    public static function segments($url =null){
        if ($url =null) {
            $url::getCurrent();
        }
        $url = str_replace(["https://","http://"],'',$url);
        $segments = explode("/",$url);
        return $url;
    }

    public static function params(){
        return $_REQUEST;
    }
}

var_dump(Url::getCurrent());
var_dump(Url::segments());
var_dump(Url::params());



//((((((((((((((((      namespace         )))))))))))))))))))
// تکراری داریم که مشکل تداخل اسم را حل کرده و اصل فضا رو مشخص میکنه  fun , class راهکاری برای وقتی که
// برای استفاده از دیگر صفحات حتما از ان استفاده کن includes حتما از
// داد use میتوان اسم دلخواه به as با کیبورد 
// model : کلاس هایی به نمایندگی از جداول پایگاه داده اند
// به عنوان یک استاندارد حتما در نام گذاری از App استفاده کن


// ها را یکی بگذار namespace , class , folder در پروژه ها نام 
// وجود دارد که باید رعایت شود namespace برای نامگذاری psr4 یک استاندارد به نام 


// namespace  :     php نامگذاری  برای  فایل             namespace App\folder_name;
// use        :     php استفاده   از   فایل              use App\folder_name\class_name;


//  روش 1 (object ایجاد)
$userUtil  = new App\Utilities\User();
$userModel = new App\Models\User();


//  روش 2 (use استفاده از)           (((((((((( بهتره )))))))))))
use App\Utilities\User as user_u;
use App\Models\User    as user_m;

$userUtil  = new user_u();
$userModel = new user_m();




//((((((((((((((((((((      autoload         )))))))))))))))))))))))
// vendor/autoloding :    میشود include را انجام میدهد و همان اول برنامه autolod کل فرایند
//استفاده  spl_autoload_register  ("") در نظر بگیرد،از تابع اماده با نام autoload بداند تابعی را به عنوان php برای اینکه
// کمک بگیری use از  object میشه و فقط کافیه هنگام ساخت include با استفاده از ان فقط فایل های مورد نیاز 
spl_autoload_register("نام تابع مورد نظر");  // در نظر گرفته میشه autoload تابع مورد نظر  به عنوان




// ((((((((((((((((((((          Magic Methods          )))))))))))))))))))))))

// این توابع دارای کاربرد های خاصی اند که با __ شروع میشن
// property توابع مربوط به :    other 15 function
//  method  توابع مربوط به :   __call   ,   __callStatic

class A
{
    public function __construct(){}
    public function __destruct(){}
    public function __serialize(){}
    public function __unserialize(){}
    public function __sleep(){}
    public function __wakeup(){}
    public function __invoke(){}
    public function __set_state(){}
    public function __toString(){}
    public function __debugInfo(){}
    public function __clone(){}
    public function __set(){}
    public function __get(){}
    public function __isset(){}
    public function __unset(){}
    public function __call($name , $argumant){}
    public function __callStatic(){}
}

// __construct   :  هنگام ساخت شی صدا زده میشه و اجازه دسترسی به پراپرتی بدون ساخت شی را میدهد
// __destruct    : هنگام حذف شی صدا زده میشه

// __serialize   : صدا زده میشه  __sleep()  تبدیل کرده  و قبل از     str     آن را به ، varibale با گرفتن
// __unserialize : صدا زده میشه  __wakeup() تبدیل کرده  و قبل از   varibale  آن را به ،    str   با گرفتن

// __sleep       : فعال میشه  sleep  ،  serialize   هنگام صدا زدن تابع
// __wakeup      : فعال میشه  wakeup ، unserialize  هنگام صدا زدن تابع

// __invoke      : صدا بزنی ، این تابع صدا زده میشه function را شبیه به obj اگر بخواهی
// __set_state   : 
// __toString    : است object یک str معادل
// __debugInfo   : را صدا میزنی ، ارایه ای را برمیگرداند vardump هر موقع که 
// __clone       : کپی بگیری clone را object هر موقع یک 
//--------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------
// متد با نام و عمل یکسان داریم ولی صرفا ورودی خروجی های تفاوتی داریم class در یک
// میشه آن را پیاده سازی کرد magic method مجاز نیست ولی میتوان به کمک php این کار در

// __set       :است در این صورت مقداری را میگیرد یا اپدیت میکند inaccesable را میخای بگیری ولی property وقتی مقدار
// __get       :                است در این صورت مقداری را میدهد inaccesable را میخای بگیری ولی property وقتی مقدار
// __isset     : استفاده میکنی isset() یا تابع اماده object وقتی از
// __unset     : استفاده میکنی unset() یا تابع اماده object وقتی از

// __call      : است argumant , name دارای 2 ورودی
// __callStatic: 
// ----------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------

class Connection
{
    protected $link;
    private $dsn, $username, $password;
    public $foo;

    public function __construct($dsn, $username, $password ,$foo)               //////////  __construct  /////////////
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
        $this->foo = $foo;
    }


    public function __destruct(){                                               //////////  __destruct  /////////////
        echo "destroy object";
    }


    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }


    public function __serialize(): array                                       //////////  __serialize   //////////////
    {
        return [
          'dsn' => $this->dsn,
          'user' => $this->username,
          'pass' => $this->password,
        ];
    }


    public function __unserialize(array $data): void                          ///////////  __unserialize   ////////////
    {
        $this->dsn = $data['dsn'];
        $this->username = $data['user'];
        $this->password = $data['pass'];

        $this->connect();
    }


    public function __sleep()                                                  //////////    __sleep    /////////////
    {
        return array('dsn', 'username', 'password');
    }


    public function __wakeup()                                                 //////////   __wakeup   ///////////////
    {
        $this->connect();
    }


    public function __toString()                                             ////////////  __toString   /////////////
    {
        return self::class;
    }


    public function __debugInfo() {
        return [
            'propSquared' => $this->foo,
            'line_errore' => __LINE__,
            'direction' => __DIR__
        ];
    }

    public function __clone(){                                                 ////////////  __clone   /////////////
        echo "an object was cloned!!"
    }

}
$class = new Connection('Hello');
echo $class;                     // Hello



class CallableClass
{
    public function __invoke($x)                                              ////////////  __invoke   /////////////
    {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));  // int(5)
//                               bool(true)



// overloading مفهوم
class Sum{
    public function sum_1($a,$b){
        return $a+$b;
    }

    public function sum_2($a,$b,$c){
        return $a+$b+$c;
    }

    public function sum_3($a,$b,$c,$d){
        return $a+$b+$c+$d;
    }
}


// ((((((((((((((((((((           UML diagram          )))))))))))))))))))))))
// ابزاری برای دیزاین کردن اپلیکیشن  /   ابزاری برای طراحی ساختار نرم افزار هایی 
// مناسب است UML برای طراحی gliffy سایت


// به شکل کج نوشته میشوند abstract توابع 
//        یک زیر خط دارند  static   توابع


//   +   public    : 
//   #   protected : 
//   -   private   : 
//   /   drived    : 
//   ~   package   : 




// (((((((((((((((((((((((((((((((((((((((   نکات کلی و خلاصه در php    ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   نکات کلی و خلاصه در php    ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   نکات کلی و خلاصه در php    ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   نکات کلی و خلاصه در php    ))))))))))))))))))))))))))))))))))))))))))))))

header('location:page.php'); // به فلان صفحه برو
basename();  // مسیر فایل تا قبل خود فایل رو میده


filetemp // مسیری که فایبل باز میشه ُ دقسقا همان سرور دستی که با  php -S 0.0.0.0:1111; ساخته میشه


prepare('sql code');     // اطلاعات ارسالی به  دیتا بیس
bindvalue(number,$var);   //
execute($pass , $_GET['name'] , ... );  // همان کار bindvalue را انجام میدهد


rowcount();   // تعداد کوعری مثبت رو میده


$statment;  //
$results;   //


cookie    // در مرورگر کاربر ذخیره میشه
session   // در مروررگر و سرور ذخیره میشه


// معمولا session به کمک  username , phone , email ذخیره میشه

// تگ a یک نوع $_GET  حساب میاد و به کمک session فرستاده میشه

// ستون role معمولا ۳ حالت برای افراد boss , admin , user دارد

// ستون status برای تغییر وضعیت کاربر است که ۰ برای ناشناس و ۱ برای ثبت شده است

// در login اگر با email ثبت نام کردی . برای ورودی باید از email و password میباشد
// در login اگر با phone ثبت نام کردی . برای ورودی باید از phone و password میباشد


// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))

<?php
if ($a == 5): ?>
A is equal to 5
<?php endif; ?>



<?php
if ($a == 5):
    echo "a equals 5";
echo "...";
elseif ($a == 6):
    echo "a equals 6";
echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;
?>


session_start();

define("BASE_PATH",__DIR__);
define("BAS_URL","http://0.0.0.0:2222/");
define("DOMAIN",currentDomain(),"9_blog_mvc_177");

define("ERROR",true);

define("HOST",'localhost');
define("DB_NAME",'9_blog_mvc_177');
define("USERNAME",'amir');
define("PASSWORD",'password');


require_once 'database/database.php';
$db = new database\Database();



namespace database;

use PDO;             // در بیس پی اچ پی وجود دارد
use PDOException;    // در بیس پی اچ پی وجود دارد

// برای رفع خطای        PDO
// برای رفع خطای   PDOException

class Database
{
    private $dbHost = HOST;
    private $dbName = DB_NAME;
    private $dbUsername = USERNAME;
    private $dbPassword = PASSWORD;
    private $conn;

    public function __construct()
{
        try {
            $this->conn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUsername, $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "hi ";
        } catch (PDOException $e) {
            echo 'خطای اتصال: ' . $e->getMessage();
}
    return $this->conn;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Select($query, $value = null)
{
        try {
            $result = $this->conn->setAttribute($query);
            if ($value == null) {
            $result->execute();
            } else {
                $result->execute($value);
    }
        } catch (PDOException $e) {
            echo 'خطای اتصال: ' . $e->getMessage();
            return false;
}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function Insert($table, $fields, $data)
{
        try {
            $stmt = $this->conn->prepare("INSERT INTO" . $table . "(" . implode(', ', $fields) . " ,created_at) VALUES ( :" . implode(', :', $fields) . " , now() );");
            $stmt->execute(array_combine($fields, $data));
            return true;
        } catch (PDOException $e) {
            echo 'خطای اتصال: ' . $e->getMessage();
            return false;
}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
    public function Update($table,$id, $fields, $datas)
{
        $sql="UPDATE ".$table ."SET";
        foreach(array_combine($fields,$datas)as $field => $data){
        if($data){
        $sql.="`".$field . " ` = ? ,";
        }else{
        $sql.="`".$field . " ` = NULL ,";
}
}

        $sql .= " WHERE id = ?";
        try{
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(array_merge(array_filter(array_values($datas)), [$id]));
        return true;

        }catch (PDOException $e) {
            echo 'خطای اتصال: ' . $e->getMessage();
            return false;
}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function Delete($table,$id)
{
        $sql = "DELETE FROM ". $table . "WHERE id=? ;";
        try{
            $stmt=$this->conn->prepare($sql);
            $stmt->execute([$id]);
            return true;

        }catch (PDOException $e) {
            echo 'خطای اتصال: ' . $e->getMessage();
            return false;
}
}
}


$results = $pdo->prepare("INSERT INTO menus (title,parent,sort) VALUES ( ? , ? , ? )");
$results = $pdo->prepare("SELECT menus      name=?      and    pass=?      and    sort=?  ");
$results = $pdo->prepare("SELECT menus      name=:name  and   pass=:pass    and  sort=:sort  ");
$results->bindValue(1,$title);
$results->bindValue(2,$parent);
$results->bindValue(3,$sort);
$results->execute();
$result=$smt->fetchAll();
if(password_verify($password,$result[0]['password'])){  // [0] چون قرار بوده با دیتای اول در دیتابیس مقایسه بشه
header('location:index.php');
}else{
$error=true;
}}

$msg_success = "";

<?php if($msg_success){ ?>
    <script> window.alert("ویرایش انجام شد");</script>
<?php } ?>


<script>
    window.alert("<?= $errorSuccess ?>");
</script>


<?php if($error){ ?>
    <script>
        toastr.error("کاربری با چنین مشخصاتی یافت نشد     ");
    </script>
<?php } ?>


<?php foreach ($menus as $menu){ ?>
<tr>
    <td><?= $counter++?></td>
    <td><?= $menu['title'] ?></td>
    <td><?php if($user['role'] == 1){ echo "کاربر عادی";}elseif ($user['role'] == 2){ echo "مدرس";}elseif ($user['role'] == 3){ echo "مدیر یا ادمین";}?></td>
    <td>
        <a href="deletemenu.php?id=<?= $menu['id'] ?>"  style="text-decoration: none" class="btn btn-danger btn-sm text-white">delete</a>
        <a href="editmenu.php?id=<?= $menu['id'] ?>" style="text-decoration: none" class="btn btn-warning btn-sm text-dark">edit</a>
    </td>
</tr>
<?php } ?>


<select name="parent" class="form-select mt-2" id="category">
    <?php foreach ($menus as $menu){ ?>
    <option value="<?= $menu['id'] ?>"><?= $menu['id'] ?></option>
    <?php } ?>
</select>


<?php
if ($data['article']->user_id == $_SESSION['user_id']) { ?>
<div class="d-flex justify-content-between">

    <a href="" class="btn btn-dark">ویرایش</a>

    <form action="<?php echo URLROOT;?>/article/delete<?php echo $data['article']->id ?>" method="POST">
        <button class="btn btn-light" type="submit">حذف</button>
    </form>
</div>
<?php } ?>