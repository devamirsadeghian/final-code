<?php
/////////////


@if ($var<1)
    salam amir {{ $var }} sale .

@else
    by amir {{ $var }} sale .

@endif





<!-- است if برعکس -->
@unless ($var<1)
    salam amir {{ $var }} sale .

@endunless
by amir {{ $var }} sale .





@if ($var ==1)
    i have record

@elseif($var > 2)
    i have two records

@elseif($var > 3)
    i have three records

@else
    i dont have any records

@endif





@switch($type)
    @case(1)
        text first .
        @break
    @case(2)
        text second .
        @break
    @default
        text end .

@endswitch




@for ($i = 0; $i < 4 ; $i++)
    current value is {{ $i }} end . <br>
@endfor




@foreach ($collection as $item)
    <p> this is user {{ $item }} value . </p> <br>
    @empty
    <p> none value . </p>
@endforeach




<!-- نداریم collectin  برای وقتی که مقداری در empty است ولی فقط قسمت foreach همان -->
@forelse ($collection as $item)
    <p> this is user {{ $item }} value . </p> <br>

@empty
    <p> NO USER EXIST </p>
@endforelse



@while (true)
    <p>I'm looping forever.</p>
@endwhile


// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))
// (((((((((((((((((((((((((((((((((((((((   code نمونه کد     ))))))))))))))))))))))))))))))))))))))))))))))


{{--  تابع اماده Str نیازی به use کردن در صفجه blade ندارد  --}}
{{Str::limit($Product->description,$limit=20,$end="...")}} {{-- محدود کردن تعداد حروف کلمات --}}



@foreach ($courses as $course )
    <tr>
        <td>{{$course->title}}  </td>
        <td>{{$course->master}}  </td>
        <td><img width="75px" src="{{asset('Admin/' .$course->image )}}" alt=""> </td>
        <td>
            <a href="{{route('admin.edit',$course->id)}}" class="button button1">ویرایش</a>
            <a href="{{route('admin.delete',$course->id)}}" class="button button2">حذف</a>
        </td>
    </tr>

@endforeach




<form action="{{route('admin.update',$courses->id)}}" method="Post" enctype="multipart/form-data">
    @csrf

    <h1>ویرایش دوره</h1>

    <label for="name">اسم دوره :</label>
    <input type="text" id="title" name="title" value="{{$courses->title}}" />

    <label for="name">اسم مدرس :</label>
    <input type="text" id="master" name="master" value="{{$courses->master}}" />

    <label for="email">تصویر دوره :</label>
    <input type="file" id="image" name="image"/>

    <button type="submit"> ثبت </button>

</form>





{{--ثابت میباشد master_page محتوی صفحه--}}
{{--محتوی صفحات دیگر تغیر میباشد--}}



<!----------- مثالی از master_page ---------->

{{--  صفحه ثابت --}}
<head>
    <title> master_blade  صفحه </title>
</head>

<body>
<div>header</div>
<p>content</p>

@yield('id')

<p>footer</p>

</body>



{{--  صفحه متغیر --}}
<head>
    <title> صفحه متغیر</title>
</head>
<body>
@extends(' blade.php بدون پسوند address_master_page ')  // جایگاهش مهم نیست

<div>header</div>

@section('id')                                      // جایگاه مهم است
    <h1></h1>
@endsection

<p>footer</p>
</body>







{{--    استفاده از Belongsto در صفحه blade مثلا نمایش رنگ های یک محصول--}}
{{--    روش 1--}}
    @php
        $Products = $Product->productcolor
    @endphp
    @foreach($Products as $Product)
        {{$Product->color}}
    @endforeach


{{--    روش 2--}}
    @foreach($Product->productcolor as $Product)
        {{$Product->color}}
    @endforeach