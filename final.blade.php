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

 <input   type="text"                    value="{{old('last_name')}}">
 <input   type="checkbox"                value="1"   {{ old('is_special', $model->is_special ?? false) ? 'checked' : '' }}>
 <option   selected="selected" value="{{$key}}"         {{$key == old('category_id') ? 'selected' : ''}}>{{$category}}</option>
 <td class="text-center align-middle">       {{$owner->last_name ? 'موجود نیست' : 'asd' }}</td>

