# \n	New Line
# \t	Tab

# پاییتون به جای ارایه ، لیست دارد 

#  comment

#  return f"{self.name} is {self.age} years old"
# متغیرها را مستقیم داخل رشته نوشت
# عبارت‌های محاسباتی را داخل رشته قرار داد
# خروجی را خواناتر و کوتاه‌تر کرد


x = "Hello World"     # str
x = 20          	  # int
x = 20.5        	  # float
x = True/False        # bool
x = range(6)


# Specify a Variable Type
y = int(2.8)       # y will be 2
z = float("3")     # z will be 3.0
y = str(2)         # y will be '2'


x = ["apple", "banana", "cherry"]	  # list         #      تغییر     /        تکراری
x = {"apple", "banana", "cherry"}	  # set          #    تغییر     /      غیر تکراری
x = ("apple", "banana", "cherry")	  # tuple        #     غیر تغییر   /          تکراری
x = {"name" : "John", "age" : 36}	  # dict         # تغییر    / غیر تکراری در کلید


print("Hello, World!")
print(x)
print(x + y)


type(x)
type("x")
print(len(a))


def myfunc():
  global x
  x = "fantastic"
  print(x)
  
myfunc()

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
#  (((((( string  ))))))
a = "Hello world"
b = "amir"
c = a + b        # Hello world amir

price = 59
txt = f"The price is {price} dollars"

print(a[2])        # l
print(a[2:10])     # llo worl
print(a[2:10,2])   # l o w r
print(a[-10:-4,2]) # l o w r

print(a.attribute())  # defult

a.capitalize() # Converts the first character to upper case
a.upper()
a.lower()
a.count()	   # Returns the number of times a specified value occurs in a string
a.find("str")
a.replace("old", "new")
a.split()     # رشته بر اساس یک جداکننده مشخص به یک لیست تبدیل میکند
a.strip()     # حذف غضاهای خالی یا کاراکتر های مشخص شده از ابتدا و انتهای یک رشته
a.isdigit()   #  returns True if all the characters are digits
a.isupper()   #  Returns True if all characters in the string are upper case

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
#  (((((( list  ))))))
L = ["apple", "banana", "cherry"]
l2  = [1,2,3,4]
L3 = [True, False, False]

list4 = L + l2  # append two list

print(L)
print(L[-1])
print(L[2:5])
print(L[:4])

L[1] = "orange"
L[3:6] = ["orange","water","apple"]


L.remove("item")
L.insert("item")
L.insert(n,"item")


L.pop()
L.pop(1)
L.append("item")


L.clear()
L.sort()
L.sort(reverse = True)
L.reverse()
x = L.copy()
x = L.index("item")


mylist = L.copy()
mylist = list(L)   # Make a copy of a list with the list() method
print(mylist)


fruits = ['apple', 'banana', 'cherry']
fruits.append("orange")


b = ["Ford", "BMW", "Volvo"]
a.append(b)


fruits = ['apple', 'banana', 'cherry']
x = fruits.count("cherry")
x = fruits.index("cherry")
fruits.insert(1, "orange")


# Add Items
thistuple = ("apple", "banana", "cherry")
y = list(thistuple)
y.append("orange")
thistuple = tuple(y)


# Remove Items
thistuple = ("apple", "banana", "cherry")
y = list(thistuple)
y.remove("apple")
thistuple = tuple(y)


# loop list
thislist = ["apple", "banana", "cherry"]

for x in thislist:
  print(x)

for i in range(len(thislist)):
  print(thislist[i])

i = 0
while i < len(thislist):
  print(thislist[i])
  i = i + 1

newlist = []
for x in fruits:
  if "a" in x:
    newlist.append(x)

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
#  ((((((  Tuple  ))))))
tuple1 = ("apple", "banana", "cherry")
tuple2 = (1, 5, 7, 9, 3)
tuple3 = (True, False, False)
tuple3 = tuple1 + tuple2

print(len(thistuple))

print(thistuple[2:5])  # Access Tuple Items
print(thistuple[:4])
print(thistuple[-4:-1])


thistuple.count(5)
thistuple.index(8)


thistuple = ("apple", "banana", "cherry")
for x in thistuple:
  print(x)


for i in range(len(thistuple)):
  print(thistuple[i])


i = 0
while i < len(thistuple):
  print(thistuple[i])
  i = i + 1



if "apple" in thistuple:
  print("Yes, 'apple' is in the fruits tuple")



newlist = [x for x in range(10)]
newlist = ['hello' for x in fruits]
newlist = [x.upper() for x in fruits]

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
#  ((((((  set   ))))))
s = {"apple", "banana", "cherry"}
s = {1, 5, 7, 9, 3}
set3 = {True, False, False}
s = {"apple", "banana", "cherry"}
print(s)
print(len(s))

print(set(("apple", "banana", "cherry")))  # b change set

s = {"apple", "banana", "cherry"}
mylist = ["kiwi", "orange"]
s.update(mylist)


s.add("orange")
s.update(mylist)

s.remove("banana")
s.discard("banana")

s.pop(1)
s.clear()


s.add("orange")
s.clear()
x = s.copy()
s.pop()
s.remove("banana")


for x in s:
  print(x)

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
#  (((((( dictonary  ))))))

d = {
  "brand": "Ford",
  "electric": False,
  "year": 1964,
  "colors": ["red", "white", "blue"]
}

print(d)
print(d["brand"])

d.clear()
d.keys()
d.values()
d.items()
d.update({"year": 2020})
d.pop("brand")
d.popitem()

d.get("brand")


if "model" in thisdict:
  print("Yes, 'model' is one of the keys in the thisdict dictionary")


for x in thisdict:
  print(x)


for x in thisdict:
  print(thisdict[x])


for x in thisdict.keys():
  print(x)

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
#  (((((( Boolean   ))))))
print(10 > 9)


a = 200
b = 33
if b > a:
  print("b is greater than a")


#  convert tuple into -->> list - set - dict
list((1,2,'asd','fgw','eol'))
set((1,2,'asd','fgw','eol'))
dict((1,2,'asd','fgw','eol'))

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
"""   ((((((( Operator )))))))
+
-
*
/
%
**
//


=
+=
-=
*=
/=
%=
**=
&=
|=
>>=
<<=


==
!=
<
>
<=
>=


and
or
not


is
is not


in
not in


&
|


"""
-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
#   LOOP   $   CONDITION
if 5 > 2:
  print("Five is greater than two!")


a = 33
b = 200
if b > a:
  print("b is greater than a")


if b > a:
  print("b is greater than a")
elif a == b:
  print("a and b are equal")


if myfunc():
  print("YES!")
else:
  print("NO!")


if b > a:
  print("b is greater than a")
elif a == b:
  print("a and b are equal")
else:
  print("a is greater than b")


switch (variable)
{
    case value1:
        // Statements that run if variable == value1
        break;
    case value2:
        // Statements that run if variable == value2
        break;
    case value3:
        // Statements that run if variable == value3
        break;
    default:
        // Statements that run if no case matched
}


match variable:
  case value1:
    code block
  case value2:
    code block
  case value3:
    code block


i = 1
while i < 6:
  print(i)
  i += 1

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------
# ((((((  class  ,  function  )))))

def my_function():
  print("Hello from a function")

my_function()


class myclass():
  def __len__(self):
    return 0


myobj = myclass()
print(bool(myobj))




def my_function(x):
  return 5 * x

my_function(3) # 15



def my_function(x):
  print(x)

my_function(3) # 3



def my_function(animal, name):
  print("I have a", animal)
  print("My", animal + "'s name is", name)

my_function("dog", "Buddy")



x = lambda a : a + 10
print(x(5))           # 15



#    توابع بدون کلاس در حداقل حالت ورودی بدون ورودی باشد ######################
def myfunc(n):
  return lambda a : a * n

mydoubler = myfunc(2)

print(mydoubler(11))



# توابع همراه کلاس در حداقل حالت ورودی .  self دارد ######################
class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age

p1 = Person("John", 36)

print(p1.name)  # John
print(p1.age)   # 36

p1.age = 40
print(p1.age)   # 40



class Car:
  def __init__(self, brand, model):
    self.brand = brand
    self.model = model

  def move(self):
    print("Drive!")



class Boat:
  def __init__(self, brand, model):
    self.brand = brand
    self.model = model

  def move(self):
    print("Sail!")



class Plane:
  def __init__(self, brand, model):
    self.brand = brand
    self.model = model

  def move(self):
    print("Fly!")


car = Car("Ford", "Mustang")       #Create a Car   object
boat = Boat("Ibiza", "Touring 20") #Create a Boat  object
plane = Plane("Boeing", "747")     #Create a Plane object

for x in (car1, boat1, plane1):
  x.move()



# Local Scope

def myfunc():
  x = 300
  print(x)

myfunc()


# Global Scope
def myfunc():
  global x
  x = 300

myfunc()

print(x)


range(3, 10)     # 3   4   ..  10
range(3, 10, 2)  # 3   5   7   9
range(0, 10, 2)  # 

-----------------------------------------------------------------------------------------------------------------
# ((((( map )))))

doubled = map(lambda x: x * 2, numbers)



def square(x):
    return x * x

squares = map(square, nums)
-----------------------------------------------------------------------------------------------------------------
# ((((( filter )))))

even_numbers = filter(lambda x: x % 2 == 0, numbers)


def is_positive(x):
    return x > 0

result = filter(is_positive, numbers)
print(list(result))

-----------------------------------------------------------------------------------------------------------------

mystr = "banana"
myit = iter(mystr)

print(next(myit))    b
print(next(myit))    a
print(next(myit))    n
print(next(myit))    a
print(next(myit))    n
print(next(myit))    a

-----------------------------------------------------------------------------------------------------------------

# ایجاد ماژول
import mymodule
import mymodule as mx
from mymodule import person1


import datetime # ماژول datetime در پایتون برای کار با تاریخ، زمان، اختلاف زمان، و قالب‌بندی تاریخ استفاده می‌شود.
from datetime import datetime
now = datetime.now()


min()
max()
abs()
pow()


import math

x = math.sqrt(64)

x = math.ceil(1.4)
y = math.floor(1.4)
print(x) # returns 2
print(y) # returns 1

-----------------------------------------------------------------------------------------------------------------
# (((((((((---------- OOP ----------)))))))))
# (((((((((---------- OOP ----------)))))))))

class Person:
  def __init__(self, name, age, city, country):
    self.name = name
    self.age = age
    self.city = city
    self.country = country

p1 = Person("Linus", 30, "Oslo", "Norway")

print(p1.name)
print(p1.age)
print(p1.city)
print(p1.country)


class Person:
  def __init__(self, name):
    self.name = name

  def greet(self):
    return "Hello, " + self.name

  def welcome(self):
    message = self.greet()
    print(message + "! Welcome to our website.")

p1 = Person("Tobias")
p1.welcome()


# برای ایجاد کلاسی که عملکرد را از کلاس دیگری به ارث می‌برد، هنگام ایجاد کلاس فرزند، کلاس والد را به عنوان پارامتر ارسال کنید.
# وقتی نمی‌خواهید هیچ ویژگی یا متد دیگری به کلاس اضافه کنید، از کلمه کلیدی pass استفاده کنید.

class ChildClass(ParentClass):
    pass   ساختار کلی


# Example (مثال)

class Person:
    def __init__(self, name):
        self.name = name

    def say_hello(self):
        print(f"Hello, my name is {self.name}")


class Student(Person):   # ارث‌بری از Person
    def study(self):
        print("Student is studying")


# با استفاده از تابع super()، لازم نیست از نام عنصر والد استفاده کنید، عنصر به طور خودکار متدها و ویژگی‌ها را از والد خود به ارث می‌برد.


class Student(Person):
  def __init__(self, fname, lname, year):
    super().__init__(fname, lname)
    self.graduationyear = year                                                                    //  Add Properties

    def welcome(self):
      print("Welcome", self.firstname, self.lastname, "to the class of", self.graduationyear)      //  Add Methods


class Vehicle:
  def __init__(self, brand, model):
    self.brand = brand
    self.model = model

  def move(self):
    print("Move!")


class Car(Vehicle):
  pass

class Boat(Vehicle):
  def move(self):
    print("Sail!")


class Plane(Vehicle):
  def move(self):
    print("Fly!")

car1 = Car("Ford", "Mustang")       #Create a Car object
boat1 = Boat("Ibiza", "Touring 20") #Create a Boat object
plane1 = Plane("Boeing", "747")     #Create a Plane object

for x in (car1, boat1, plane1):
  print(x.brand)
  print(x.model)
  x.move()

--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------

class Node:
    def __init__(self, data = None):
        self.data = data
        self.next = None

class Stack:
    def __init__(self):
        self.top = None
        self.size = 0

    def push(self, data):
            new_node = Node(data)    # یک گره جدید با مقدار data می‌سازد
            if self.top == None:     # اگر پشته خالی باشد
                self.top = new_node  # گره جدید، عنصر بالای پشته می‌شود
            else:                     # اگر پشته خالی نباشد
                new_node.next = self.top  # گره جدید را به top قبلی اشاره می‌کند
                self.top = new_node       # گره جدید می‌شود بالای پشته
            self.size += 1
    
    def pop(self):
        if self.top:               # اگر پشته خالی نباشد
            data = self.top.data         #  مقدار عنصر بالایی ذخیره می‌شود
            if self.top.next:            # عنصر دوم تبدیل به عنصر بالایی می‌شود
                self.top = self.top.next # عنصر دوم تبدیل به عنصر بالایی می‌شود
            else:
                self.top = None     # اگر فقط یک عنصر وجود داشت، پشته خالی می‌شود
            self.size -= 1
            return data       #  مقدار حذف‌شده را برمی‌گرداند
        else:
            return None       # اگر پشته خالی باشد، چیزی برنمی‌گرداند

    def peek(self):                 # این تابع عنصر بالای پشته را بدون حذف کردن برمی‌گرداند
        if self.top:                # اگر پشته خالی نباشد
            return self.top.data    # ، مقدار عنصر بالا را برمی‌گرداند
        else:
            return None             # اگر خالی باشد، None برمی‌گرداند
    
    def printStack(self):          # این تابع تمام عناصر پشته را از بالا به پایین چاپ می‌کند
        current = self.top         # از بالای پشته شروع می‌کنیم
        for _ in range(self.size):
            print(current.data)
            current = current.next  #به گره بعدی می‌رویم

obj = Stack()
obj.push(1)
obj.push(2)
obj.push(3)
obj.printStack()
obj.pop()
obj.printStack()

# گره بعد بعنی در پشته به سمت مقدار پایینی

--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------

class Node:
    def __init__(self, data = None):
        self.data = data
        self.next = None
    
class Queue:
    def __init__(self):
        self.head = None
        self.tail = None
        self.size = 0
    
    def enqueue(self, data):
        new_node = Node(data)
        if self.head == None:    # اگر صف خالی باشد
            self.head = new_node
            self.tail = new_node
        else:                   # اگر صف خالی نباشد
            self.tail.next = new_node    # گره آخر صف به گره جدید اشاره می‌کند
            self.tail = new_node         # گره جدید تبدیل به آخر صف می‌شود
        self.size += 1
        
    def dequeue(self):
        if self.head:                       # اگر صف خالی نباشد
            data = self.head.data
            if self.head.next:              # اگر بیش از یک عنصر وجود داشته باشد
                self.head = self.head.next  # عنصر دوم تبدیل به عنصر اول می‌شود
            else:                    # اگر فقط یک عنصر در صف باشد
                self.head = None     # صف کاملاً خالی می‌شود
                self.tail = None     # صف کاملاً خالی می‌شود
            self.size -= 1
            return data    # مقدار حذف‌شده را برمی‌گرداند
        else:
            return None    # اگر صف خالی باشد، None برمی‌گرداند
    
    def printQueue(self):   # این تابع تمام عناصر صف را از اول به آخر چاپ می‌کند
        current = self.head    # شروع از ابتدای صف
        while current:         # تا زمانی که به انتهای صف نرسیده‌ایم
            print(current.data)      # مقدار گره فعلی چاپ می‌شود
            current = current.next   # به گره بعدی می‌رویم

obj = Queue()
obj.enqueue(1)
obj.enqueue(2)
obj.enqueue(3)
print(obj.dequeue())
print() 
obj.printQueue()


--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------

class Node:     # کلاس برای ساختن نود ها
    def __init__(self, data = None):
        self.data = data
        self.next = None     #  اشاره‌گر به نود بعدی   ،  در ابتدا هیچ نود بعدی وجود ندارد
        
class SinglyLinkedList: # کلاس لیست پیوندی یکطرفه
    def __init__(self):
        self.head = None    # اشاره‌گر به اول لیست
        self.size = 0
    
    def append(self, data):    #
        new_node = Node(data)  #ساخت یک نود جدید با مقدار data
        if self.head == None:         # اگر لیست خالی باشد
            self.head = new_node      #نود جدید، اولین نود لیست می‌شود
        else:          # اگر لیست خالی نباشد
            current = self.head      #از ابتدای لیست شروع می‌کنیم
            while current.next:      #تا زمانی که به آخر لیست نرسیده‌ایم
                current = current.next   #به نود بعدی می‌رویم
            current.next = new_node      # نود جدید را به انتهای لیست وصل می‌کنیم
        self.size += 1
                    
    def delete(self, data):        #
        if self.head.data == data: #اگر مقدار نود اول برابر data باشد
            self.head = self.head.next     #
        else:    # اگر نود اول نباشد
            current = self.head         # current نود فعلی
            prev = self.head            # prev نود قبلی
            while current:              # تا آخر لیست حرکت می‌کنیم
                if current.data == data:       # اگر نود موردنظر پیدا شد
                    prev.next = current.next   # نود فعلی حذف می‌شود
                prev = current             # حرکت به نود بعدی
                current = current.next     # حرکت به نود بعدی

def printList(self):              #   چاپ تمام عناصر لیست
        current = self.head       # شروع از ابتدای لیست
        while current:            # تا زمانی که نود وجود دارد
            print(current.data)        # مقدار نود چاپ می‌شود
            current = current.next     # حرکت به نود بعدی


def reverseLink(self):          # برعکس کردن ترتیب لیست
        prev = None             #  نود قبلی (در ابتدا وجود ندارد)
        current = self.head     # شروع از ابتدای لیست
        while(current != None):      # تا پایان لیست
            next = current.next      # ذخیره نود بعدی
            current.next = prev      # جهت لینک برعکس می‌شود
            prev = current           #  جابه‌جایی prev
            current = next           # حرکت به نود بعدی
        self.head = prev             # سر جدید لیست تنظیم می‌شود
    
    def maximum(self):                #
        current = self.head           # سر جدید لیست تنظیم می‌شود
        maximum = self.head.data      # سر جدید لیست تنظیم می‌شود
        while current:                # پیمایش لیست
            if maximum < current.data:    # اگر مقدار بزرگ‌تری پیدا شد
                maximum = current.data    # به‌روزرسانی بیشترین مقدار
            current = current.next        #
        return maximum            #  برگرداندن بیشترین مقدار
    
    def minimum(self):            # پیدا کردن کوچک‌ترین مقدار لیست
        current = self.head           #  فرض می‌کنیم اولین مقدار کمترین است.
        minimum = self.head.data       #  فرض می‌کنیم اولین مقدار کمترین است.
        while current:    # حرکت در لیست
            if minimum > current.data:     # اگر مقدار کوچک‌تر پیدا شد
                minimum = current.data     # به‌روزرسانی کمترین مقدار
            current = current.next         #
        return minimum           #  برگرداندن کمترین مقدار

obj = SinglyLinkedList()
obj.append(1)
obj.append(2)
obj.append(3)
obj.printList()
print()
obj.reverseLink()
obj.printList()

--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------

class Node:
    def __init__(self, data = None):
        self.data = data     # مقدار ذخیره‌شده در گره
        self.next = None     # اشاره‌گر به گره بعدی
        self.prev = None     #( تفاوت اصلی لیست دوطرفه با یک‌طرفه ) اشاره‌گر به گره قبلی

class DoublyLinkedList():
    def __init__(self):
        self.tail = None    # اشاره‌گر به اول لیست
        self.head = None    # اشاره‌گر به آخر لیست
        self.size = 0       #  تعداد نودهای داخل لیست

    def append(self, data):        #   افزودن یک عنصر جدید به انتهای لیست
        new_node = Node(data)      # ساخت یک نود جدید با مقدار data
        if self.tail == None:      # اگر لیست خالی باشد
            self.tail = new_node       # نود جدید هم اول لیست می‌شود هم آخر لیست
            self.head = new_node       # نود جدید هم اول لیست می‌شود هم آخر لیست
        else:  # اگر لیست خالی نباشد
            new_node.prev = self.head       # اشاره‌گر prev نود جدید به نود قبلی (آخر لیست) وصل می‌شود
            self.head.next = new_node       # نود قبلی به نود جدید اشاره می‌کند
            self.head = new_node        # نود جدید تبدیل به آخر لیست می‌شود
        self.size += 1
    
    def printList(self):          #  چاپ عناصر لیست از ابتدا تا انتها
        current = self.tail       # شروع از ابتدای لیست
        while current:    #  تا زمانی که نود وجود دارد
            print(current.data)  # چاپ مقدار نود فعلی
            current = current.next   # حرکت به نود بعدی


obj = DoublyLinkedList()
obj.append(1)
obj.append(2)
obj.append(3)
obj.printList()
obj.deleteNode(3)
print()
obj.printList()

-----------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------

ژول (Module) یک فایل پایتون است که شامل کدهای آماده مثل توابع، کلاس‌ها، و متغیرها می‌شود و می‌توان آن را در برنامه‌ی دیگر وارد (import) کرد تا از آن استفاده شود.

import math             //  وارد کردن کل ماژول
from math import sqrt   //  وارد کردن تنها یک تابع یا کلاس
import numpy as np      //  تغییر نام ماژول هنگام import

# (((((((((((((((((((-------------------- TREE --------------------)))))))))))))))))))
# (((((((((((((((((((-------------------- TREE --------------------)))))))))))))))))))

# درخت یک ساختار داده غیرخطی و سلسله‌مراتبی است که از مجموعه‌ای از گره‌ها شکیل شده است


#  هر درخت فقط یک ریشه دارد
#  هر گره (به جز ریشه) دقیقاً یک پدر دارد
#  ممکن است صفر یا چند فرزند داشته باشد


# ((((---- اصطلاحات مهم در درخت ----))))

#  اصطلاح	توضیح
#  Node (گره)	         هر عنصر درخت
#  Root (ریشه)	      گره اصلی درخت
#  Parent (پدر)       	گره بالادستی
#  Child (فرزند)	    گره پایین‌دستی
#  Leaf (برگ)	       گره بدون فرزند
#  Degree	     تعداد فرزندان یک گره
#  Level	           سطح گره از ریشه
#  Height	          بیشترین عمق درخت
#  Subtree                 	زیر‌درخت

--------------------------------------------------------------------------------------------
# تفاوت اصلی (BST , DFS)

ویژگی	                       BST	                    DFS
نوع                     	ساختار داده             	الگوریتم 
کاربرد                	 ذخیره داده مرتب         	پیمایش / جستجو
وابسته به درخت؟             	  بله            	 نه (گراف هم می‌شود)
هدف                     	جستجوی سریع            	دیدن همه گره‌ها
مثال                     	درخت اعداد           	preorder, inorder



می‌گوید داده‌ها چطور ذخیره شوند     BST
می‌گوید چطور در ساختار حرکت کنیم   DFS



خروجی مرتب می‌دهد BST در   inorder 
است DFS  نوعی BST جستجو در

--------------------------------------------------------------------------------------------

# ((((---- انواع درخت‌ ها ----))))

#  1 - درخت عمومی (General Tree)
# هر گره می‌تواند هر تعداد فرزند داشته باشد.


#  2 - درخت دودویی (Binary Tree)
#  هر گره حداکثر دو فرزند دارد  ، فرزند چپ و راست


#  3 -   انواع درخت دودویی
#  درخت دودویی کامل       (الف  (Full Binary Tree)     :‌                                  هر گره یا ۰ یا ۲ فرزند دارد 
#    درخت دودویی کامل سطحی  (ب  (Complete Binary Tree) :‌                      تمام سطوح پر هستند به جز شاید آخرین سطح
#    درخت دودویی کامل سطحی  (ج  (Perfect Binary Tree)  :‌      همه گره‌ها دقیقاً دو فرزند دارند و همه برگ‌ها در یک سطح‌اند
#    درخت دودویی نامتوازن   (د  (Skewed Tree)          :‌                                 همه گره‌ها فقط یک فرزند دارند


#  4 - درخت جستجوی دودویی (BST)
# مقادیر سمت چپ < ریشه
# مقادیر سمت راست > ریشه
# پیچیدگی زمانی (در حالت متعادل) : O(log n)
# عملیات مهم BST -->> Insert  Delete  Search


#  5 -  پیمایش درخت (Tree Traversal)


#  ((((((((-------5.1 پیمایش عمقی (DFS)------))))))))
# 1. پیش‌گرد (Preorder)
# Root → Left → Right

# 2. میان‌گرد (Inorder)
# Left → Root → Right

# 3. پس‌گرد (Postorder)
# Left → Right → Root


#  ((((((((-------5.2 پیمایش سطحی (BFS / Level Order)------))))))))
# پیمایش سطح به سطح با استفاده از صف (Queue)


#  6 - پیاده‌سازی درخت دودویی


#  7 -  درخت‌های متعادل (Balanced Trees)

#  ((((((((-------7.1 درخت AVL------))))))))
# اختلاف ارتفاع زیر‌درخت‌ها ≤ 1
# استفاده از چرخش‌ها (Rotation)



#  ((((((((-------7.2 درخت Red-Black------))))))))
# متعادل‌سازی با رنگ‌ها
# استفاده گسترده در کتابخانه‌ها



#  8 -  هیپ (Heap)
Max-Heap: (  پدر ≥ فرزندان ) مقدار هر گره بزرگ‌تر یا مساوی فرزندانش است → ریشه بیشترین مقدار را دارد.
Min-Heap: (  پدر≤ فرزندان ) مقدار هر گره کوچک‌تر یا مساوی فرزندانش است → ریشه کمترین مقدار را دارد.

توجه: Heap الزاماً مرتب کامل نیست؛ فقط رابطهٔ والد–فرزند رعایت می‌شود.

# (((((((((((((((((((-------------------- Practic --------------------)))))))))))))))))))
# (((((((((((((((((((-------------------- Practic --------------------)))))))))))))))))))

# تمرین 1: تشخیص اصطلاحات
# درختی با 15 گره و ارتفاع 3 داریم.
# الف) حداکثر تعداد برگ‌ها؟ ب) حداقل تعداد برگ‌ها؟
# پاسخ: الف) حداکثر برگ‌ها در درخت دودویی کامل سطحی = 2^3 = 8 ب) حداقل برگ‌ها = 1 (درخت کاملاً مایل)
--------------------------------------------------------------------------------------------
# تمرین 2: پیمایش درخت
# درخت زیر را در نظر بگیرید:

  #       A
  #     /   \
  #    B     C
  #   / \     \
  #  D   E     F

# الف) Preorder ب) Inorder ج) Postorder د) Level Order
# پاسخ:
# Preorder: A B D E C F
# Inorder: D B E A C F
# Postorder: D E B F C A
# Level Order: A B C D E F
--------------------------------------------------------------------------------------------

# تمرین 3: خاصیت BST
# درخت زیر یک BST است؟ چرا؟

#         40
#        /  \
#      20    60
#        \
#         50

# پاسخ: ❌ خیر چون 50 در زیر‌درخت چپ 40 قرار گرفته ولی از 40 بزرگ‌تر است.
# تمرین 4: خروجی inorder
# اگر inorder یک BST به صورت زیر باشد:
# 5 10 15 20 25
# چه نتیجه‌ای می‌گیریم؟
# پاسخ: این دنباله حتماً به صورت صعودی مرتب است، پس درخت یک BST معتبر است.
--------------------------------------------------------------------------------------------

#   تمرین 5: محاسبه ارتفاع
# حداقل و حداکثر ارتفاع یک درخت دودویی با 31 گره را بیابید.
# پاسخ:
# حداقل ارتفاع (درخت کامل): log2(31) = 4
# حداکثر ارتفاع (مایل): 30
--------------------------------------------------------------------------------------------

#  تمرین 6: درج در BST
# اعداد زیر را به ترتیب در یک BST درج کنید:
# 50 , 30 , 70 , 20 , 40 , 60 , 80
# پاسخ: درخت نهایی:

#         50
#        /  \
#      30    70
#     / \   / \
#   20  40 60  80
--------------------------------------------------------------------------------------------

# تمرین 7: سوال تستی (کنکوری)
# کدام پیمایش در BST خروجی مرتب می‌دهد؟

#  A) Preorder
#  B) Postorder
#  C) Inorder
#  D) Level Order
--------------------------------------------------------------------------------------------

# 13. جمع‌بندی شب امتحان ⭐
#  inorder در BST همیشه مرتب است
#  Heap حتماً کامل است
#  AVL اختلاف ارتفاع ≤ 1
#  BFS با Queue انجام می‌شود
#  DFS شامل preorder, inorder, postorder است

# اگر وقتت کمه:
# تمرین‌های ۲، ۶، ۷، ۱۰ ← خیلی پرتکرار
# حفظ کردن تفاوت‌ها (BST / Binary Tree / Heap / AVL)

