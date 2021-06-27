@extends('layouts.app')

@section('content')

    <div class="container">
        @if (!empty(session('mssg_updated')))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('mssg_updated') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex flex-row justify-content-between">
            <h3>دەستکاری شتوومەک</h3>
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">بیسڕەوە <i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
        </div>

        <br>
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            <div class="d-flex flex-wrap justify-content-center">
                @csrf
                @method('PUT')
                <div class="form-group m-2" style="width: 40%;">
                    <label for="name">ناوی شتوومەک</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="text" class="form-control ps-5" value="{{ $product->name }}" name="name"
                            aria-describedby="helpId" placeholder="">
                        <i class="fas fa-box position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group m-2" style="width: 40%;">
                    <label for="barcode">بارکۆد</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="number" class="form-control ps-5" value="{{ $product->barcode }}" name="barcode"
                            aria-describedby="helpId" placeholder="">
                        <i class="fas fa-barcode position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group m-2" style="width: 40%;">
                    <label for="buyprice">نرخی کڕین</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="number" class="form-control ps-5" value="{{ $product->buyprice }}" name="buyprice"
                            aria-describedby="helpId" placeholder="">
                        <i class="fas fa-tag position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group m-2" style="width: 40%;">
                    <label for="sellprice">نرخی فرۆشتن</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="number" class="form-control ps-5" value="{{ $product->sellprice }}" name="sellprice"
                            aria-describedby="helpId" placeholder="">
                        <i class="fas fa-tag position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group m-2" style="width: 40%;">
                    <label for="boughtquantity">عدد کڕاو</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="number" class="form-control ps-5" value="{{ $product->boughtQuantity }}"
                            name="boughtquantity" aria-describedby="helpId" placeholder="">
                        <i class="fas fa-sort-numeric-up-alt  position-absolute m-2"></i>
                    </div>
                </div>
                <div class="form-group m-2" style="width: 40%;">
                    <label for="remainingquantity">عدد ماوە</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="number" class="form-control ps-5" value="{{ $product->remainingQuantity }}"
                            name="remainingquantity" aria-describedby="helpId" placeholder="">
                        <i class="fas fa-sort-numeric-up-alt position-absolute m-2"></i>
                    </div>
                </div>

                <div class="form-group m-2" style="width: 40%;">
                    <label for="expireDate">بەرواری بەسەرچوون</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="date" class="form-control " value="{{ $product->expireDate }}" name="expiredate"
                            aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="form-group m-2" style="width: 40%;">
                    <label for="vendor">وەکیل</label>
                    <div class="d-flex flex-row align-items-center">
                        <input type="text" class="form-control ps-5" value="{{ $product->vendor }}" name="vendor"
                            aria-describedby="helpId" placeholder="">
                        <i class="fas  fa-building position-absolute m-2"></i>
                    </div>
                </div>
                <div class="mt-5 d-flex flex-row w-100 justify-content-center">
                    <button class="text-white w-50 m-2 btn btn-success"
                        href="{{ route('product.update', $product->id) }}">دەستکاری بکە
                        <i class="fas fa-edit"></i></button>
                </div>
            </div>
        </form>

        {{-- buttons --}}


    </div>
@endsection
