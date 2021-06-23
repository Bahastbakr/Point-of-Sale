@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center align-items-center">
        <a href="{{ route('product.index') }}">
            <div class="card text-center m-2" style="width: 18rem;">
                <div class="card-body">
                    <h1 class="text-center"><i class="fas fa-plus"></i></h1>
                    <h5 class="card-title text-center">زیادکردنی شتوومەک</h5>
                </div>
            </div>
        </a>

        <div class="card text-center m-2" style="width: 18rem;">
            <div class="card-body">
                <h1 class="text-center"><i class="fas fa-cash-register"></i></h1>
                <h5 class="card-title text-center">فرۆشتنی شتوومەک</h5>

            </div>
        </div>
        <div class="card text-center m-2" style="width: 18rem;">
            <div class="card-body">
                <h1 class="text-center"><i class="fas fa-box"></i></h1>
                <h5 class="card-title text-center">کۆگا</h5>

            </div>
        </div>
        <div class="card text-center m-2" style="width: 18rem;">
            <div class="card-body">
                <h1 class="text-center"><i class="fas fa-clipboard-list"></i></h1>
                <h5 class="card-title text-center">فرۆشراو</h5>

            </div>
        </div>
    </div>
@endsection
