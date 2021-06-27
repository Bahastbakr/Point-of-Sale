@extends('layouts.app')

@section('content')

    @if (!empty(session('mssg')))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('mssg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (!empty(session('mssg_destroy')))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('mssg_destroy') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <div class="container d-flex flex-row justify-content-between">
        <h3>شتوومەکەکان</h3>
        <a href="{{ route('product.create') }}" class="btn btn-success text-white">زیادکردنی شتوومەک</a>
    </div>
    <br>
    <div class="container d-flex flex-row flex-wrap">

        @if ($products->isEmpty())
            <h3>هیچ شتوومەکێکت نییە</h3>
        @endif
        @foreach ($products as $product)
            <div class="card m-2 mb-3" style="width: 100%;">
                <div class="d-flex flex-row justify-content-around">
                    <div>
                        <i class="fas fa-box-open fa-7x m-4 "></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-danger">ناوی شتوومەک : {{ $product->name }}
                        </h5>
                        <div class=" d-flex flex-row flex-wrap m-4">
                            <h6 class="w-50">بارکۆد : {{ $product->barcode }} </h6>
                            <h6 class="w-50">نرخی کڕین : {{ $product->buyprice }} </h6>
                            <h6 class="w-50">نرخی فرۆشتن : {{ $product->sellprice }} </h6>
                            <h6 class="w-50">عدد ماوە : {{ $product->remainingQuantity }} </h6>
                            <h6 class="w-50">کاتی زیادکردن {{ $product->created_at }} </h6>
                            <h6 class="w-50">وەکیل : {{ $product->vendor }} </h6>
                        </div>
                    </div>
                    <a role="button" class="btn btn-accent d-flex flex-column justify-content-center "
                        href="{{ route('product.index') }}/{{ $product->id }}"><i
                            class="fas fa-edit align-middle fa-3x"></i></a>
                </div>
            </div>
        @endforeach



    </div>
@endsection
