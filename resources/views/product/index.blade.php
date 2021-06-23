@extends('layouts.app')

@section('content')

    @if (!empty(session('mssg')))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('mssg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <div class="container d-flex flex-row justify-content-between">
        <h3>شتوومەکەکان</h3>
        <a href="{{ route('product.create') }}" class="btn btn-success text-white">زیادکردنی شتوومەک</a>
    </div>
    <br>
    <div class="container d-flex flex-row justify-content-around  flex-wrap">

        <div class="card m-2 mb-3" style="max-width: 100%;">
            <div class="d-flex flex-row justify-content-between">
                <div>
                    <i class="fas fa-box-open fa-7x m-4 "></i>
                </div>
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title text-danger">ناوی شتوومەک : name1
                        </h5>
                        <div class=" d-flex flex-row flex-wrap m-4">
                            <h6 class="w-50">بارکۆد : 1466454547 </h6>
                            <h6 class="w-50">نرخی کڕین : 1700 </h6>
                            <h6 class="w-50">نرخی فرۆشتن : 1500 </h6>
                            <h6 class="w-50">عدد ماوە : -1 </h6>
                            <h6 class="w-50">کاتی زیادکردن 04/06/2021 </h6>
                            <h6 class="w-50">وەکیل : vendor1 </h6>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
