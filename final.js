 sudo update-alternatives --config php


// var  const  let  نگذاشتن این کلمات مشکل ایجاد نمیکند
// قسمت های خلاصه نوشته نشده
// 25 to 35 - 36
// متغیر جدید yep  ,  asd
//this = شی یا تابع یا .. که به ان اشاره داریم
// ارور های js را در console نمایش میده
// npm install -g eslint
// eslint --init
// XML  : زبان داده - ذخیره و انتقال داده‌ها - داده‌ها در قالب تگ‌ها -



<p arrtinute="value"></p>

<script src="src/script.js"></script> // ادرس دهی


//document صفحه وب
//console  کد جاوااسکریپت
//window   پنجره بالای صفحه



document.write(a / 'string');

console.log(a / 'string');

window.alert(a / 'string');
window.confirm(a / 'string');           //  خروجی f/t دارد که میشه در یک متغییر ذخیره کرد
window.prompt(a / 'string');   // ورودی داخا کادر رو میشه در یک متغییر ذخیره کرد


// / h1 / p / ....innerText = // را تغییر میده html محتوی
// / h1 / p / ....innerHTML = // رو در خروجی نشون میده html محتوی




// Data Type
var a, name;
var a = 12;
var name = 'ali';
var bool = false;

var a,s,d,f,g;    // تعریف جند متغییر با هم



var a = 'ali';    // متغیر پویا
const a = 'ali';  // متغیر ثابت
let a = 'ali';    // متغیر محدوده کوچک




//STRING
var b = 'hi'; ///////////// (hi)
var c = 'hi' + 8; ///////// (hi8)
var d = 'hi' + 8 + 7; ///// (error)
var e = 'hi' + (8 + 7); /// (hi15)
var f = 8 + 'hi'; ///////// (8hi)



//BOOL
var isa = false / true; // true,false
var isa = (a == b) /////// true,false


// نکته
// var a = {}   شی
// var a = []   آرایه



//OBJECT
var a = {             // بهتره
    name: 'amir',
    last: 'sadeghi',
    age: 24,
    id: 11171117
};


var a = new Object();
a.name = 'amir';
a.last = 'sadeghian';
a.age = 24;
a.id = 11171117;




document.write(a); ////////کل شی
document.write(a.name); //amir
document.write(a.last); //sadeghi
document.write(a.age); ///24
document.write(a.id); ////11171117


//ARRAY
var a = [22, 'ali', false, 4.56];                    // بهتره
var b = new Array(22, 'ali', false, 4.56);

console.log(a[0]);   // 22
console.log(a[1]);   // ali

----------------------------------------------------------------------------------------------------------------------
// ARRAY متد های

a.includes(val); ////ایا این مقدار در این ارایه وجود دارد یا خیر
a.reverse();//////// مقادیر برعکس
a.shift() ///////////از اول حذف
a.unshift(val) //////به اول اضافه
a.pop() /////////////از اخر حذف
a.push(val) /////////به اخر اضافه



yep = a.slice() ////کپی میکنه
a.splice(startIndexNum,delCountNum,'additem1','additem2','...');  ('اختیاری','اجباری','اختیاری');
a.indexOf(value,index) ////////جست و حو مقداری از ایندکسی که مامشخص میکنیم
a.join("")  ////////بر اساس داخل پرانتز ارایه را به  رشته تبدیل میکند
a.split("") //////// بر اساس داخل پرانتز رشته را به ارایه تبدیل میکند   a=string

array.filter(callback(element, index, array), thisArg)
a.filter(user => user.age >= 18, index, value);
// example
const users = [
  { name: 'Ali', active: true },
  { name: 'Reza', active: false },
  { name: 'Sara', active: true }
];

const activeUsers = users.filter(user => user.active);          // خروجی یکسان
const activeUsers = users.filter(user => user.active == true);  // خروجی یکسان

console.log(activeUsers);
// [{ name: 'Ali', active: true }, { name: 'Sara', active: true }]








// Function
function findbigger(a, b) {
    a > b ? console.log(a) : console.log(b);
}

var a = 3;
var b = 5;
console.log(findbigger(a, b));





// Anymous function نام ندارد و به متغیر میتوان نسبت داد
var yep = function (a, b) {
    let final;
    a > b ? final = [a] : final = [b];
    return final;
}

console.log(yep(7, 3));





// Immediateky invoke function موقع تعریف اجرا میشن
var yep = (function (a, b) {
    var final;
    a > b ? final = [a] : final = [b];
    return final;
})(4, 9);

console.log(yep);





// OBJECT anymous function
var j = {
    name : 'amir',
    last : 'sadeghi',
    age : 25,
    maxAge : function (){                                       // مهم  //
        return ++this.age + ++j.age;
    }
}
document.write(j.maxAge());






// OBJECT constructer
function obj(title, age) {
    obj.t = title,
    obj.a = age,
    obj.v = function () {
        return ++obj.age;
        }
}

var a = new obj('farsi', 1800);

////////////////////////////////////////////////////////////

try {

} catch (error) {

}finally{

}

////////////////////////////////////////////////////////////

if (condition) {

}

//////////////////////////////////////////////////////////

if (condition) {

} else {

}

//////////////////////////////////////////////////////////
// Ternary operation
condition ? شرط1 : شرط2;

function findBigger(g,h){
    g > h ? document.write(g) : document.write(h);
}
findBigger(7,1);

//////////////////////////////////////////////////////////

if (condition) {

} else if (condition) {

} else if (condition) {

} else if (condition) {

} else if (condition) {

} else {

}

////////////////////////////////////////////////////////

var x=5;

switch (x) {
    case 1:
        document.write('1');
        break;

    case 2:
        document.write('2');
        break;

    case 3:
        document.write('3');
        break;

    case 4:
        document.write('4');
        break;

    case 5:
        document.write('5');
        break;

    case 6:
        document.write('6');
        break;

    case 7:
        document.write('7');
        break;

    default:
        document.write('null');
}

///////////////////////////////////////////////////////

var a = start;
while (end) {    // yes -->> (true)  (number)  ()           no -->>  (false)  (0)
    condition;
    step;
}

///////////////////////////////////////////////////////

var a = start;
do {
    condition;
    step;
} while (end);

///////////////////////////////////////////////////////

for (let a = start , end, step) {
    condition
}

var k = [11,22,33,44,55];

for (let i=0; i < 5; i++) {
    document.write(k[i]);
}

//////////////////////////////////////////////////////
// for           --->  arr  []
// for key in    --->  obj  {}
// for value of  --->  arr  []

var ar = ['bmv', 'benz', 'peykan'];
var ob = {
    name: 'mac',
    age: 18
}


for (const key in object) {         // object
    console.log(key);
    console.log(object[key]);
}


for (const value of array) {        // array
    console.log(value);
}


//////////////////////////////////////////////////////

//                                                  Spread Operator
// در اصل از ارایه مبدا یک کپی میگیره و کاری با مقادیر ان ندارد  ( یه جورایی مانند  CallByValue در php است )

const m = ['a','b','c'];
const n = ['d','e','f',m];
const o = ['d','e','f',...m];

console.log(...m);      // {a b c}
console.log(n);         // {a b c d e f}
console.log(o);         // {a b c {d e f}}  تو در تو

////////////////////////////////////////////////////////////////////

function sum(x,y,z){
    console.log(x,y,z);
}

var num =[1,2,3];

sum(num[0],num[1],num[2]);      // 6
sum(...num);                    // 6



var arr_1 = [1,2,3];
var arr_2 =[...arr_1];

////////////////////////////////////////////////////////////////////
// 4 روش 
document.getElementById('id')
document.getElementsByClassName('class')
document.getElementsByTagName('tag-name')
document.querySelector('selecion')
// document.querySelectorAll('selecion')   // کمتر استفاده میشه


// گرفتن مقدار یک المان
document.getElementById.value
document.querySelector('').value

/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
    
//   ('')  ===>>>  getElementBy...    |   querySelector    |    createElement    قسمت واکشی تگ برای خلاصه کردن حذف شده
//   خلاصه شده ۴ روش بالا
.id
.class
.className
.className = val
.classList
.classList = val


.classList[0]
.classList[1]
.classList[2]

    

.classList.add('any');
.classList.remove('any');
.classList.toggle('any');   // toggle اگر داشت ان را میگیره و اگر نداشت ان را میده


.value

    
.attributes              // همه ویژگی ها رو میده

.getAttribute('name')    // وجود یک ویژگی رو میده
.hasAttribute('name')    // true  or  false
    
.setAttribute('name', 'val')
.removeAttribute('name')


.style
.style.color
.style.color = 'red'



// کامل
//       querySelector   -->>(( به حای ان از سه حالت زیر هم میتوان استفاده کرد  getElementBy...    |   querySelector    |    createElement
document.querySelector('').id
document.querySelector('').class
document.querySelector('').className
document.querySelector('').className = val                  // کلاس جدید نسبت میده
document.querySelector('').classList                        // read only


document.querySelector('').classList[0]
document.querySelector('').classList[1]
document.querySelector('').classList[2]

document.querySelector('').classList.add('any')            // چون read only است باید با تابع برای ان چیزی اعمال کنی
document.querySelector('').classList.remove('any')

document.querySelector('').attributes                               // همه ویژگی ها رو میده
document.querySelector('').getAttribute('name')        // وجود یک ویژگی رو میده
document.querySelector('').hasAttribute('name')        // true  or  false

document.querySelector('').setAttribute('name', 'val')
document.querySelector('').removeAttribute('name')


//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

// createElement |  createTextNode  |  appendChild
x = document.createElement('p')
y = document.createTextNode('meghdar')
x.appendChild(y)



var names = ["ali","amir","asghar","mohammad"];

function createUl(){

    for (const name of names) {

        var node = document.createElement("p");

        var textNode = document.createTextNode(name);

        node.appendChild(textNode);

        document.getElementById("myId").appendChild(node);

    }
}

createUl();

//////////////////////////////////////////////////////////////////////

// مثال عدد رندوم

const DIV = document.getElementById("myDiv");
const Par = document.getElementById("myP1");
const Button = document.getElementById("myBtn");


function RandomeNumber() {
    Par.innerHTML = Math.random();
}

function RemoveEventFromDIV() {
    DIV.removeEventListener('mousemove', RandomeNumber);
}

Button.addEventListener('click', RemoveEventFromDIV);
DIV.addEventListener('mousemove', RandomeNumber);

////////////////////////////////////////////////////////////////////

//change inline css (((console))) هر نوع تگ در سی اس اس
document.querySelector('').style
document.querySelector('').style.color
document.querySelector('').style.color = 'red'

document.querySelector('').style.cssText = {
    padding : 2rem;
    color   : white;
    ...
}


////////////////////////-------------event (رویداد)------------///////////////////////////
////////////////////////-------------event (رویداد)------------///////////////////////////
////////////////////////-------------event (رویداد)------------///////////////////////////
/*
((((((((((-------🖱️Mouse Events---------))))))))))

click → کلیک
dblclick → دابل کلیک
mousedown → فشردن دکمه ماوس
mouseup → رها کردن دکمه
mousemove → حرکت ماوس
mouseenter → ورود ماوس (بدون bubbling)
mouseleave → خروج ماوس (بدون bubbling)
mouseover → ورود ماوس (با bubbling)
mouseout → خروج ماوس
contextmenu → کلیک راست




((((((((((-------⌨️ Keyboard Events--------))))))))))

keydown → فشردن کلید
keyup → رها کردن کلید
keypress → (قدیمی – توصیه نمی‌شود)




((((((((((-------📝 Form Events--------))))))))))

submit → ارسال فرم
change → تغییر مقدار (بعد از blur)
input → تغییر لحظه‌ای مقدار
focus → فوکوس گرفتن
blur → از دست دادن فوکوس
reset → ریست فرم




((((((((((-------📄 Document / Window Events--------))))))))))

DOMContentLoaded → آماده شدن DOM
load → لود کامل صفحه
resize → تغییر سایز صفحه
scroll → اسکرول صفحه
beforeunload → قبل از خروج
unload → خروج از صفحه




🧩 نکات طلایی
همیشه به‌جای onclick از addEventListener استفاده کن
input بهتر از change برای فیلدهای متنی
DOMContentLoaded سریع‌تر و بهتر از load
mouseenter / mouseleave بدون bubbling هستند
*/
    
// 1- inline event in tag html                   ((((((((((((((((((((اصلا روش خوبی نیست)))))))))))))))))
// 2- select event in tag html                  addEventListener('event', function)             removeEventListener('event', function)
// 3- event with Anymous function
// 4- Jquery



//روش 1
const el = document.getElementBy...('');

function fun1_1() {
    alert('any');
}
el.addEventListener('click', fun1_1);


// روش 2
const el = document.getElementBy...('');

el.addEventListener('click', function () {
    alert('any');
});


// روش 3
const el = document.getElementBy...('');

el.onclick = () => {
    alert('any');
}


//   روش 4
$('p').click(function () {
    alert('any');
})

////////////////////////////////////////////////////////////////////////

// boblin    اول تگ ((داخلی))  فعال و سپس تگ ((خارجی))  فعال
const DIV1  =  document.getElementById("myDiv");
const pElement = document.getElementById("myP1");

DIV1.addEventListener('click', function () {
    alert("You Clicked on DIV");
});

pElement.addEventListener('click', function () {
    alert("You Clicked on P");
});



// boblin    اول تگ ((خارجی))  فعال و سپس تگ ((داخلی))  فعال
const DIV1 = document.getElementById("myDiv");
const pElement = document.getElementById("myP1");

DIV1.addEventListener('click', function () {
    alert("You Clicked on DIV");
}, true);

pElement.addEventListener('click', function () {
    alert("You Clicked on P");
}, false);


////////////////////////////////////////////////////////////////////////

// مثال معروف عدد رندوم
const DIV = document.getElementById("myDiv");
const Par = document.getElementById("myP1");
const Button = document.getElementById("myBtn");


function RandomeNumber() {
    Par.innerHTML = Math.random();
}

function RemoveEventFromDIV() {
    DIV.removeEventListener('mousemove', RandomeNumber);
}


DIV1.addEventListener('mousemove', RandomeNumber);
Button.addEventListener('click', RemoveEventFromDIV);


////////////////////////////////////////////////////////////////////////

// arrow function           --->>>>           function () {}               --->>>        () => {}
//                                            function (enter){return}     --->>>        (enter) => {return}
// نکته : وقتی بدنه تابع  return باشد میتوان علامت {} را حذف کرد



function (a,b){
    return a + b;
}

(a, b) => {
    return a + b;
}




function add(a, b){
    document.write( a + b );
}

(a, b) => a + b;





function (a){
    return a;
}

(a) => a;

a => a;

////////////////////////////////////////////////////////////////////////

const fun = async () => {};

//                                                  Promise
//   در جاوااسکریپت یک شیء است که نماینده‌ی نتیجه‌ی نهایی یک عملیات ناهم‌زمان به شما اجازه می‌دهد تا با عملیات‌هایی که
//  ممکن است در asynchronous باشد  یعنی در آینده کامل شوند (یا شکست بخورند) به شیوه‌ای ساخت‌یافته و قابل‌مدیریت کار کنید


//     یک Promise می‌تواند در یکی از سه وضعیت زیر باشد
//   - Pending   : (در حال انتظار):   عملیات هنوز کامل نشده است
//   - Fulfilled : (موفق)         :   عملیات با موفقیت انجام شده و نتیجه دارد
//   - Rejected  : (رد شده)       :   عملیات با خطا مواجه شده است



//   then()       مدیریت نتیجه‌ی عملیات‌های غیرهمزمان
//   all()        promise  اجرای همزمان همه
//   async        تمام توابع . خروجیشون بازگشتی است و به ما پرومیس برمیگردونن
//   ا  Promise ها دارای  سه پاسخ pending , fullFilled , Rejected هستند که برای حل این مورد باید از await ها استفاده کرد
//  stringify()   ورودی ها را به یک جیسون از نوع رشته میکنه



const  condition = true;
const meeting = new Promise((resolve, reject) => {
    if (condition){
        const meetDetails = {
            name : 'amir',
            location : 'esf',
            time : '1:00 PM',
        };
        resolve(meetDetails);
    }else {
        reject(new Error("meet canceled..."));
    }
});


const  addToCalander = meetingDetails2 => {

    const calender = ' ${meetDetails.name} is scheduled at ${meetDetails.time}  on  ${meetDetails.time}';
    return Promise.resolve(calender);
};


meeting.then(addToCalander)
    .then((res) => console.log(res))
    .catch((res) => console.log(res))



const Promise1 = Promise.resolve("Promise 1 Complete");
const Promise2 = new Promise((res,rej) => {
    setTimeout( () => {
        res("Promise 2 Complete");
    },20);
});

Promise.all([Promise1,Promise2]).then(res => console.log(res));






function getMassage(callback){

    return new Promise((resolve,reject) =>{

        setTimeout(function (){
            callback("hello call back");
        },200)
    });
}

function myFunction(massage){
    console.log(massage);
}

getMassage(myFunction);







const firstFunction = () => {
    return new Promise((resolve, reject) =>{
        setTimeout(() =>{
            console.log("First Function Executed");
            resolve("resolved After 3 Sec");
        },2000);
    });
};

async function SecondFunction(){
    console.log("Calling FirstFunction");
    const firstFunctionResult = await firstFunction();

    console.log(firstFunctionResult);
}

SecondFunction();

console.log("End");

////////////////////////////////////////////////////////////////////

// async  &  await :    در جاوااسکریپت ابزارهایی برای مدیریت عملیات ناهم‌زمان هستند که کد را خواناتر، ساده‌تر و شبیه به کد هم‌زمان می‌کنند
// async :               را بازمیگرداند promis وقتی قبل از یک تابع قرار می‌گیرد، آن تابع را به یک تابع ناهم‌زمان تبدیل می‌کند که همیشه یک
// await :                              حل شود یا متوقف شود promise استفاده میشود و باعث میشود اجرا کد تا زمانی که async فقط درون تابع

// ا fetch یک promise بازمیگرداند
// ا await منتظر میماند تا fetch کامل شود و سپس نتیجه را در response ذخیره میکند
//ا توابع async   همیشه یک  promis  را باز میگرداند و حتی اگر مقدار ساده ای را return کند
// ا await فقط در توابع async قابل استفاده است
// اگر promise شکست بخورد . await خطا را به catch منتقل میکند


async function getData() {
    let response = await fetch('https://jsonplaceholder.typicode.com/posts/1');
    let data = await response.json();
    console.log(data);
}



async function loadUser() {
    try {
        let res = await fetch('/user');
        let user = await res.json();
        console.log(user);
    } catch (err) {
        console.error('خطا در دریافت اطلاعات:', err);
    }
}

////////////////////////////////////////////////////////////////////

fadeOut(4);  // چهار ثانیه طول میکشه تا محو بشه
fadeIn(4);   // چهار ثانیه طول میکشه تا ظاهر بشه


// به مدت میلی ثانیه تاخیر اجرا میشه
setTimeout(function () {

}, interval);

setInterval(function () {

}, interval);

////////////////////////////////////////////////////////////////////

// localStorage  ذخیره داده روی مرورگر
// با بستن مرور گر مقادیر ذخیره شده باقی می مانند

localStorage.setItem('key', 'value');
localStorage.removeItem('key');
localStorage.getItem('key');


////////////////////////////////////////////////////////////////////

// sessionStorage  ذخیره داده روی مرورگر
// با بستن مرور گر مقادیر ذخیره شده حذف میشن

sessionStorage.setItem('key', 'value');
sessionStorage.removeItem('key');
sessionStorage.getItem('key');


////////////////////////////////////////////////////////////////////

//  چون حجم داده بیشتری در خود ذخیره میکند و نیاز به اتصال دایم به اینترنت ندارد  indexedDB
window.indexedDB.open( 'name_new' , 1 );




// add data DB



// get data DB



// delet data DB




////////////////////////////////////////////////////////////////////

// location
window.location.host ;                 // نام وب سایت
window.location.href ;                 // url کل
window.location.protocol ;             // http / https
window.location.pathname ;             // مسیری که از پورت به بعد هستیم
window.location.reload ;               // کل صفحه ریلود میشه
window.location.replace('any') ;   // می اید url جای


////////////////////////////////////////////////////////////////////

// پیماش بین صفحات وب بر اساس چیزی که میبینیم : history
window.history.forward()
window.history.back()



// مثال
const el_1 =document.getElementsByClassName('myBtn1');
const el_2 =document.getElementsByClassName('myBtn2');


el_1.addEventListener('click',()=>{
    window.history.forward()
})
el_2.addEventListener('click',()=>{
    window.history.back()
})

////////////////////////////////////////////////////////////////////
//      (((((((((((((((((((((((        OOP         )))))))))))))))))))))))
//      (((((((((((((((((((((((        OOP         )))))))))))))))))))))))
//      (((((((((((((((((((((((        OOP         )))))))))))))))))))))))


// در کلاس ها برای تعریف تابع نیازی به نوشتن خود کلمه function نیست
// abstract : چیز هایی که نیاز نیستند در دسترس باشند را از دسترس خارج میکنیم که باید
// this --->>>  let  تبدیل شود
// this.speed = 120;       let speed = 120;
// this.maxSpeed = function () {      let maxSpeed = function () {
//     console.log(speed * 1/2);          console.log(speed * 1/2);
// }


// this : به اون شی ای اشاره دارد که از روی کلاسی ساخته شده است


// getter :   اند میتوانیم به مقدار آنها دسترسی پیدا کنیم private هایی که property برای
// setter :   اند میتوانیم به آنها مقدار داد یا شرط داد private هایی که property برای


// super(name) :  این تابع به کلاس پدر اشاره دارد و  به تمام متد و پراپرتی ها دسترسی دارد


// is-A  (  هست ) : گربه یک حیوان است  -  دانشجو یک شخص است  -  دایره یک شکل هندسی است
// has-A ( دارد ) :      گربه دو دست دارد  -  دانشجو کتاب  دارد  -  دایره  ضلعی  ندارد


// Syntactic Sugar : به ویژگی‌هایی در زبان‌های برنامه‌نویسی گفته می‌شود که نوشتن کد را ساده‌تر، خواناتر و زیباتر می‌کنند، بدون اینکه عملکرد واقعی برنامه تغییر کند


// hosting : است و برای اینه که بتوانیم تابعی را قبل از تعریف کردن  صدا بزنیم function نیست بلکه فقط برای  class اصلا برای







function rectangle(zele, color) {
    this.z = zele;
    this.c = color;
    this.masahat = function () {
        final = zele * 4;
        console.log(final);
    }
}

const rec_1 = new rectangle(6);


//  Add  property  OOP
rec_1.size = {1000}

const asd = 'size';
rec_1[asd] ={1000}



//  Delete  property  OOP
delete rec_1.size;

delete rec_1[asd];


////////////////////////////////////////////////////////////////////

//                            Factory Function
function  createCircle(radius){

    return {
        radius : radius,
        draw : function (){
            console.log('draw');
        }
    }
}

const  circle = createCircle(1);

////////////////////////////////////////////////////////////////////

//                           Constructor Function

function Circle(radius){
    console.log('this :', this);
    this.radius = radius;
    this.draw = function () {
        console.log('draw');
    };
}

const NewObject1 = new Circle(2);
const NewObject2 = new Circle(3);

////////////////////////////////////////////////////////////////////

class user {
    constructor(username, email) {
        this.username = username;
        this.email = email;
    }

// Instance Method

getInfo(){
    return `نام کاربری ${this.username} و ایمیل ${this.email}`;     // برای نمایش مقادیر شی و ارایه از {}$ کمک بگیر
}

////////////////////////////////////////////////////////////////////

// Static Method

static validateEmail(){
    if (!email || email.trim() == "")
        return false;

if (!email.includes("@"))
    return false;

return true
}
}

const user1 = new User("amir","amir@gmail.com");
const user2 = new User("mani","mani@gmail.com");

user1.getInfo();


const  Isvalid = User.validateEmail("amir@gmail.com");
const  user = new User ("amir","amir@gmail.com");

////////////////////////////////////////////////////////////////////

// Type Category
// 1 - Primitive types ( call by  value   )--->>>  Number   String   Boolean   Undefined   Null  Symbol
// 2 - Reference types ( call by Reference)--->>>  Array   Object  Function

////////////////////////////////////////////////////////////////////

// سطح دسترسی
declaration();
dec();

// Function declaration
function declaration () {}

// Function Expression
const dec = function declaration () {}  // این مدل نوشتن اصلا پیشنهاد نمیشه چون طولانی تره

////////////////////////////////////////////////////////////////////

// داشتن یا نداشتن پرانتز در استفاده از یک تابع
class Car{
    drive(){
        console.log(this)
    }
}

const  pride = new Car();


pride.drive();                     // اگر drive پرانتز داشته باشه یعنی ان تابع اجرا شده
const driveFunction = pride.drive; // اگر drive پرانتز نداشته باشه پی میتوان به متغییری نسبت داد

////////////////////////////////////////////////////////////////////

// Instance Method : متد هایی اند که از روی شی ساخته میشن
// Static   Method : متعلق به اشیایی گه از روی کلاس ساخته میشن نیستند بلکه ماعلق خود کلاس هستند


class user {
    constructor(username, email) {
        this.username = username;
        this.email = email;
    }

    // Instance Method
    getInfo(){
        return `نام کاربری ${this.username} و ایمیل ${this.email}`;
    }


    // Static Method
    static validateEmail(){
        if (!email || email.trim() == "")
            return false;

        if (!email.includes("@"))
            return false;

        return true
    }
}

const user1 = new User("amir","amir@gmail.com");
const user2 = new User("mani","mani@gmail.com");

user1.getInfo();


const  Isvalid = User.validateEmail("amir@gmail.com");
const  user = new User ("amir","amir@gmail.com");

////////////////////////////////////////////////////////////////////

// private (#)  برای استغاده از این خصوصیت در پراپرتی و متد ها از علامت هشتک استفاده کن

class Wallet {
    money1;                // public property
    #money2;               // private Property

    constructor() {
        this.money1 = 0;   // public  Method
        this.#money2 = 0;  // private Method
    }
}

const mohammad = new Wallet();

////////////////////////////////////////////////////////////////////

class BankAccount {
    #balance = 0;

    get balance() {
        return this.#balance.toLocaleString();
    }

    set balance(amount) {
        if (amount < 0){
            throw new Error(" مقدار باید مثبت باشد");
        }
        this.#balance = amount;
    }
}

const  account = new BankAccount();
account.balance = 100;

////////////////////////////////////////////////////////////////////

class  Shape {
    #color;

    constructor(color) {
        this.#color = color;
    }
    move() {
        console.log('move');
    }
}
class Triangle extends Shape {

    constructor(color) {
        super(color);
    }
    draw() {
        console.log('3');
    }
}

const  shape  = new Shape();
const  triangle = new Triangle();

shape.move();
triangle.move();

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// AJAX : فناوری ارتباطی - ارسال و دریافت داده از سرور بدون رفرش صفحه -AJAX ممکن است از XML استفاده کند (یا JSON)
    
//  AJAX  :  مفهوم / تکنیک  -       مستقل از پیاده‌سازی
//  XHR   :   ابزار   - یکی از راه‌های پیاده‌سازی AJAX


    
// یک تکنیک برای ارسال و دریافت داده از سرور بدون رفرش شدن صفحه.
// XMLHttpRequest (XHR) یک API جاوااسکریپت است که برای پیاده‌سازی AJAX استفاده می‌شود.


    

// ابزارها و روش‌های پیاده‌سازی AJAX
//  1 - XMLHttpRequest (old)       2 - fetch API (new)         3 - کتابخانه‌ها و فریم‌ورک‌ها مانند jquery (old)


//  ((((((((((((((((((((((((         1 - XMLHttpRequest        )))))))))))))))))))))))))))

// XML(GET)
function xmlGet() {

    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'fileLocationProject',true);

    xhr.onload = function () {
        if (this.status == 200)
            document.getElementsByName('div').innerHTML = this.responseText;
        var user = JSON.parse(this.responseText)          //   loadUser()               parse برای تجزیه داده های جیسون
    }
}


// XML(POST)
function xmlPost() {

    var xhr = new XMLHttpRequest();

    var params = 'firstName' + firstName.value + "&" + 'lastName' + lastName.value;

    xhr.open('POST', 'url',true);

    xhr.setRequestHeader('content-type' , 'application/x-www-form-urlencoded');

    xhr.send(params);
}



xhr.readyState; //  ۵ مقدار خروجی دارد
// 1 - unsend
// 2 - opened
// 3 - header_recived
// 4 - loading
// 5 - done


xhr.onprogress = function (){
    console.log("readyState",xhr,readyState);
};


xhr.onreadystatechange = function (){
    DIV.innerHTML = this.responseText;
};


// Example ( مثال کلی )
var P = document.getElementsByName('myP1');
var Btn = document.getElementsByName('myBtn');

function LoadText() {

    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'test.text',true);

    xhr.onload = function () {
        if (this.status == 200)                                              // let div = document.getElementsByName('div')
            P.innerHTML = this.responseText;
    }

    xhr.send();
}

Btn.addEventListener('click',LoadText);

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
//  ((((((((((((((((((((((((            2 - Fetch API           )))))))))))))))))))))))))))

// Fetch(GET)
function getUsers() {
    fetch("url.json")
        .then((res) => res.json())          // خروجی صحیح به جیسون تبدیل شده
        .then((json) => {                   //  خروجی جیسون در مقدار هایی ریحته شده
            let output = "";
            json.forEach(function (user) {
                output += `<ul>
<!--//                     <li>${user.id}</li>-->
<!--//                     <li>${user.name}</li>-->
<!--//                     <li>${user.email}</li>-->
<!--// </ul>-->`;
            });
            document.getElementById("output").innerHTML = output;
        });
}

getUsers();

/* HTML
<body>
    <div id='output'></div>
</body>
 */



// Fetch(POST)
function  addPost(e) {
    e.preventDefault();                                // از رفرش شدن صفحه جلوگیری میکند

let TitleValue = document.getElementById("title").value;
let BodyValue = document.getElementById("body").value;

fetch("url.api", {
    method: "POST",
    headers:    {
        Accept: "application/json, text/plain, */*",    //  response نوع
        "content-type": "application/json",             //  header مقدار
    },
    body: JSON.stringify({ title: TitleValue, body: BodyValue}),
})
.then((res) => res.json())
.then((json) => console.log(json));
}

document.getElementById("addPost").addEventListener("submit",addPost);

/* HTML
<body>
    <div class="container">
        <input type="text"  id="title"  placeholder="title">
        <input type="text"  id="body"   placeholder="body">
        <input type="submit" class="form-control">
    </div>
</body>
 */

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
//  ((((((((((((((((((((((((         3 - AJAX (JQUERY)        )))))))))))))))))))))))))))

/*
<body>
<form id="loginform" method="post">
    <div>

        <input type="text"       name="username"    id="username" />
        <input type="password"   name="password"    id="password" />
        <input type="submit"     name="loginBtn"    id="loginBtn" value="Login" />

    </div>
</form>
*/

$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login.php',                   // ارسال درخواست به اینجا
            data: $(this).serialize(),          // خودش مقادیر رو مرتب شده میکنه
            massage : {"massage manuale"},
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                if (jsonData.success == "1")
                {
                    location.href = 'my_profile.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
            error: function(response)
            {
                var jsonData = JSON.parse(response);

                // user is logged in unsuccessfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    location.href = 'my_profile.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
       });
     });
});
/*
</body>
</html>
*/

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// یکی اند
btn1 = document.getElementById('asd');
btn1 = $('#asd')        // فقط ایدی
btn1 = $('div#asd')     // تگ به همراه ایدی


btn1.html(any)          //
ready()  // وقتی کل صفحه لود شد




$.ajax({
    type : "POST",
    url  : 'https://www.zxczxc.com/user/1',    // ارسال درخواست به اینجا
    data : $(this).serialize(),                // ارسال داده
    massage : {"massage manuale"},             // مقدار دستی
    data : Input.val(),                        // وارد شده input مقداری که در
    success: function(response){               // خودش مقادیر رو مرتب شده میکنه
        $('#id').html(response);
    }
})


var ad = document.getElementsByTagName('div');
ad.keyup(function(e){
    fadeOut(4); // چهار ثانیه طول میکشه تا محو بشه
    fadeIn(4);  // چهار ثانیه طول میکشه تا ظاهر بشه
});





// 🧠 جمع‌بندی سریع
// ✔️ پروژه با jQuery → Ajax jQuery (بهتر از مستقیم نوشتن XHR)
// ✔️ پروژه Vanilla JS → XMLHttpRequest مناسبه
// ✔️ پروژه مدرن → fetch / Axios



---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$.ajax({
    url: "server.php",          // آدرس فایل سرور
    type: "GET",                // نوع درخواست (GET, POST, PUT, DELETE)
    data: {                     // داده‌های ارسالی
        name: "Ali",
        age: 25
    },
    dataType: "json",           // نوع داده دریافتی از سرور
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    async: true,                // async یا sync (پیش‌فرض true)
    cache: false,               // جلوگیری از کش شدن (مخصوص GET)
    timeout: 5000,              // تایم‌اوت (میلی‌ثانیه)

    beforeSend: function () {   // قبل از ارسال درخواست
        console.log("در حال ارسال...");
    },

    success: function (response) {  // موفقیت
        console.log(response);
    },

    error: function (xhr, status, error) { // خطا
        console.log(error);
    },

    complete: function () {     // بعد از اتمام (موفق یا خطا)
        console.log("تمام شد");
    }
});



// url: "/api/users"                                    آدرس سرور یا API
// dataType: "json"   // json | xml | html | text       نوع داده‌ای که از سرور انتظار داریم:
// contentType: "application/json"                      contentType: "application/json"
// complete                                             همیشه اجرا می‌شود:



//🔹 ارسال فایل با AJAX (FormData)

var formData = new FormData($("#myForm")[0]);

$.ajax({
    url: "upload.php",
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function (res) {
        console.log(res);
    }
});


