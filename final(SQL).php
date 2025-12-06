<?php

// همیشه  مقادیر  واکشی از دیتابیس از نوع ارایه هستند

/*SQL


SHOW databases;
USE  name_db;           DB فعال کردن
CREAT DATABASE name;    // CREATE DATABASE  rwe  CHARACTER  SET  utf8mb4  COLLATE  utf8mb4_general_ci ;
DROP DATABASE name;
SHOW TABLES;
describe name_table;

CREATE TABLE name(
col    type (number)   notnull / unique / DEFULT = "value",
PRIMARY KEY (col , col , ...),
FOREIGN KEY ( col ) REFERENCES table ( col ),
CHECK ( col>=18 AND col='Sandnes')
);

DROP  TABLES  name;
TRUNCATE TABLES name;

type -> int varchar
---------------------------------------------------------------------------------------------------------
ALTER TABLE old_table_name RENAME new_table_name;   بهتره
RENAME TABLE old_table_name TO new_table_name;

ALTER  TABLE  name_table  ADD   name  type;                        اضافه کردن ستون ALTER  TABLE  name_table  ADD   UNIQUE (col);
ALTER  TABLE  name_table  DROP  col   name;                        حذف  کردن جدول
ALTER  TABLE  name_table  ALTER  col   name  type;                 خالی  کردن جدول
ALTER  TABLE  name_table  MODIFY  col   name  type;                تغییر  نوع ستون
ALTER  TABLE  name_table  RENAME  col   old_name  to  new_name;    تغییر نام ستون

INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);

INSERT INTO table_name
VALUES (value1, value2, value3, ...);

DELETE    FROM   table_name   WHERE    condition1    and/or    condition1    and/or    ....;

UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;

-----------------------------------------------------------------------------------------------------------
agg -->> count - sum - avg - min - max
distinct حذف سطر های تکراری
condition -->> col = 12,
               col >= 31,
               col = 'optimal',


هنگام استفاده از این ها در داخل fetch چیزی نگذار
$counter_posts->fetch(PDO::FETCH_ASSOC)   نه
$counter_posts->fetch()                   بله
-----------------------------------------------------------------------------------------------------------

SELECT * FROM table_name;
SELECT table_1.col  ,  table_2.col  ,  ...
SELECT column1, column2, ... FROM name_table;
SELECT column1 as name_optimal_1 , column2 as name_optimal_2 , ...


ORDER  BY  column1 ,  column2 , column3
ORDER  BY  column1 ASC , column3 DESC
ORDER  BY  column1 ASC , column3 , column4 DESC , columns 5


WHERE column_name IN (SELECT column1, column2,... FROM table_name);      //
WHERE column_name NOT IN (SELECT column1, column2,... FROM table_name);  //
FROM table1



/////////////////واکشی ستون دلخواه ,  نامگذاری دلخواه برای ستون
SELECT agg ( All / distinct ) as name_optimal , col  as name_optimal 
FROM   table_name
WHERE  NOT  condition  is null /  exist  /  like  /  in  between  !=   <>   <=   >=   <   >   =  ;
ORDER  BY  column1 ,  column2 , ...  ASC|DESC column3 ASC|DESC , column4 ;
GROUP BY column
HAVING condition
WHERE  NOT  condition1   OR/AND   condition2   OR/AND  ... ;
WHERE  col  between  num  and  num ;                                 // مقداری بین بازه ای
WHERE  col  is null ;                                                // null بررسی وجود یا عدم وجود
WHERE  col  is not null ;
WHERE  col  like = ' char% ';                                        // با  کاراکتر  شروع  میشه
WHERE  col  like = ' %char ';                                        // با  کاراکتر  تمام  میشه
WHERE  col  like = ' %char% ';                                        // وجود  کاراکتر مشخص شده
WHERE  col  like = '--char---';                                      // کاراکتر ان ام با ان شروع شده
WHERE  col  not like = '';
WHERE  col  EXIST (SELECT column1, column2,... FROM table_name);     // بررسی وجود یا عدم وجود سطر
WHERE  col  NOT EXIST (...);
WHERE  col  IN (value1, value2, ...);                                 // بررسی وجود یا عدم وجود سطر


LIMIT number;                                                         // ایجاد تعداد محدودیت


نکته : از هم جدا شوند and/or میتوانند چند شرط داشته باشند که با  WHERE , HAVING
نکته :     join    همان      inner join    است
نکته :  FULL JOIN  همان   FULL OUTER JOIN  است




SELECT ....        table_1.col , table_2.col
FROM ......
INNER  JOIN  table2
LEFT   JOIN  table2
RIGHT  JOIN  table2
ON  table1.col = table2.col ;


SELECT ....        table_1.col = table_2.col
FROM table1
FULL OUTER JOIN Orders ON Customers.CustomerID=Orders.CustomerID;



اتصال همزمان چند جدول برای مثال در inner
SELECT Table4.company, table1.id, table1.value
FROM Table1
    INNER JOIN Table2
        ON Table2.table1_id = Table1.id
    INNER JOIN Table3
        ON Table3.table2_id = Table2.id
    INNER JOIN Table4
        ON Table4.table3_id = Table3.id
*/
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
//  query -->> insert - delet - update - select  یاداوری

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db";    // هنگام ساخت دیتا بیس نیازی به تعریف ان نداریم
// PDO مدیریت خطای در
try {
    // creat PDO contact
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // دلخواه
    $query = "CREATE DATABASE 'db_1' ";
    $pdo->exec($query);

} catch (Exception $e){
    echo "error: ". $e->getMessage(); . " " . $e->getLine();

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . $e->getCode();
}

$stmt = $pdo->prepare("SELECT  name FROM table ")->execute();
$stmt->fetch()
$stmt->fetchAll(PDO::FETCH_ASSOC)



// Create connection  ((  انواع اتصال یه دیتابیس  ))
$conn = mysqli_connect($servername, $username, $password, $DatabaseName);  // PDO اتصال به دیتابیس با
$conn = new mysqli($servername, $username, $password, $dbname);           // اتصال به دیتابیس با mysqli


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// 1  mysqli_
mysqli_query($dbname, "Query");  // (کوِری , نام دیتابیس)

mysqli_error($dbname);
mysqli_connect_error();                  //به کمک تابع ، وضعیت اتصال را بررسی میکنیم

mysqli_set_charset( $dbname, "utf8" );   //سازگاری با زبان فارسی در ارتباط دیتابیس
mysqli_fetch_array();                    //نمایش نتایج از دیتابیس، تبدیل آن‌ها به آرایه در پی اچ پی

mysqli_close($dbname);                //قطع ارتباط با دیتابیس


$conn->set_charset("utf8");
$conn->prepare("SELECT * FROM users WHERE email = :email");
$conn->execute();
$conn->close();


////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
// روش ۲  PDO
// prepare >>>>>>>>> execute  نکته

$pdo = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password ); // PDO اتصال به دیتابیس با
prepare("QUERY");    // ایجاد statement    یا  دسته بندی اطلاعات و دسته بندی
bind_value(3,$email);
bind_param( "sidb" , value1 ,value2 , value3 ); //    bind_param('sidb', $code, $language, $official, $percent)   .است prepare  به جای علامت سوال در
execute();    // اجرای کوئری آماده شده

fetch();      // نمایش یکی یکی نتایج
fetchAll();  // برگرداندن همه نتایج


// غیر استاندارد هستند
exec();
query();      // اجرای مستقیم کوئری




$result = $pdo->query( "INSERT INTO users VALUES('امید', 'omid@sample.com', '123456')" );
$statement = $pdo->prepare("INSERT INTO users VALUES(?, ?, ?)");


$statement = $pdo->prepare("INSERT INTO users VALUES(?, ?, ?)");
$data = ["امید", "omid@sample.com", "123456"];
$result = $statement->execute( $data );


$statement = $pdo->prepare("INSERT INTO users (name,email,password) VALUES(?, ?, ?)");
$statement->bind_param(1, $_POST['name']);
$statement->bind_param(2, $_POST['email']);
$statement->bind_param(3, $password);
$result = $statement->execute();
$result->fetch();
$result->fetchALL(PDO::FETCH_ASSOC);




// تکه کد
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute(['email' => 'example@example.com']);
$users = $stmt->fetch(PDO::FETCH_ASSOC);



// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
//$stmt->bind_param("sss", $firstname, $lastname, $email);
$stmt->bind_value( 1 , $firstname );
$stmt->bind_value( 2 , $lastname );
$stmt->bind_value( 3 , $email );

// bind_param()   vs   bind_param()
// اولی بهتره و اینکه باید هر مورد باید یکی یکی وارد کنیم

