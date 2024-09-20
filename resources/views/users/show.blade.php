@extends('layout.app')
@section('content')
<form action ="{{ route('users.update',$users->id) }}" method= "post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="first-name">الاسم الأول:</label>
            <input type="text" id="first-name" name="first-name" required value="{{ $user->name }}" >
        </div>

        <div class="form-group">
            <label for="last-name">الاسم الأخير:</label>
            <input type="text" id="last-name" name="last-name" required value="{{ $user->last-name }}">
        </div>

        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="dob">تاريخ الميلاد:</label>
            <input type="date" id="dob" name="dob" required  value="{{ $user->dob }}">
        </div>

        <div class="form-group">
            <label for="phone">رقم الموبايل:</label>
            <input type="tel" id="phone" name="phone" required  value="{{ $user->phone }}">
        </div>

        <div class="form-group radio-group">
            <label>الجنس:</label>
            <div>
                <label for="male">ذكر</label>
                <input type="radio" id="male" name="male"  required  value="{{ $user->male }}">
            </div>
            <div>
                <label for="male">أنثى</label>
                <input type="radio" id="male" name="male"  required  value="{{ $user->male }}">
            </div>
        </div>

        <div class="form-group">
            <label for="location">موقع السكن:</label>
            <input type="text" id="location" name="location" required  value="{{ $user->location }}">
        </div>

        <button class="styled-button" >تعديل</button>
    </form>

   

@endsection
