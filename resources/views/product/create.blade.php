@extends('layouts.app')
@php
use Carbon\Carbon as time;

@endphp

@section('content')

    <div class="container">
        <h3>زیادکردنی شتوومەک</h3>
        <form action="{{ route('product.index') }}" method="POST" class="m-4">
            @csrf
            <div class="d-flex flex-row flex-wrap justify-content-center ">
                <div class="form-group m-2" style="width: 40%;">
                    <label for="name">ناوی شتوومەک</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="text" class="form-control ps-5" name="name" id="" aria-describedby="helpId"
                            placeholder="">
                        <i class="fas fa-box position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group  m-2" style="width: 40%;">
                    <label for="vendor">وەکیل</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="text" class="form-control ps-5" name="vendor" id="" aria-describedby="helpId"
                            placeholder="">
                        <i class="fas fa-building position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group  m-2" style="width: 40%;">
                    <label for="barcode">بارکۆد</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="number" class="form-control ps-5" name="barcode" id="" aria-describedby="helpId"
                            placeholder="">
                        <i class="fas fa-barcode position-absolute m-2"></i>

                    </div>
                </div>

                <div class="form-group  m-2" style="width: 40%;">
                    <label for="remainingquantity">عدد </label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="number" class="form-control ps-5" name="remainingquantity" id=""
                            aria-describedby="helpId" placeholder="">
                        <i class="fas fa-sort-numeric-up-alt position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group  m-2" style="width: 40%;">
                    <label for="boughtprice">نرخی کڕین </label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="text" class="form-control ps-5" name="boughtprice" id="" aria-describedby="helpId"
                            placeholder="">
                        <i class="fas fa-credit-card position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group  m-2" style="width: 40%;">
                    <label for="sellprice">نرخی فرۆشتن </label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="text" class="form-control ps-5" name="sellprice" id="" aria-describedby="helpId"
                            placeholder="">
                        <i class="fas fa-tags position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group  m-2" style="width: 50%;">
                    <label for="expiredate">بەرواری بەسەرچوون </label>
                    <input type="date" value="{{ time::now()->toDateString() }}" class="form-control " name="expiredate"
                        id="" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center m-4">
                <input type="submit" value="زیادکردن" class="btn btn-primary text-center w-50">
            </div>
        </form>
    </div>
@endsection
