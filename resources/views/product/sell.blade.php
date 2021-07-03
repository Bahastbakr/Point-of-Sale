@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex flex-lg-row align-items-start flex-column flex-row">
            <div class=" card m-2 shadow p-3 p-4 d-flex flex-column ">
                <div class=" form-group ">
                    <input type="number" id="number" class="form-control " placeholder="بارکۆد">
                </div>

                <br>

                <div class="d-flex flex-row flex-wrap justify-content-center">
                    <button id="1" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">1</button>
                    <button id="2" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">2</button>
                    <button id="3" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">3</button>
                    <button id="4" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">4</button>
                    <button id="5" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">5</button>
                    <button id="6" class=" w-25 m-2  p-2 col-md-4 btn btn-accent" style="font-size: 25px;">6</button>
                    <button id="7" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">7</button>
                    <button id="8" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">8</button>
                    <button id="9" class=" w-25 m-2  p-2 col-md-4 btn btn-accent" style="font-size: 25px;">9</button>
                    <button id="clear" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;"><i
                            class="fa fa-times" aria-hidden="true"></i></button>
                    <button id="0" class=" w-25 m-2 p-2 col-md-4 btn btn-accent" style="font-size: 25px;">0</button>
                    <button id="erase" class=" w-25 m-2  p-2 col-md-4 btn btn-accent" style="font-size: 25px;"><i
                            class="fas fa-backspace"></i></button>

                </div>
                <br>
                <button type="button" class="btn search_product btn-accent ">زیادکردن</button>
            </div>

            <div class=" shadow w-100 m-2 card p-4">
                <div class="d-flex flex-lg-row flex-column justify-content-between">
                    <h5>شتوومەکە زیادکراوەکان : <span id="added_products"></span>
                    </h5>
                    <h5>کۆی گشتی : <span id="total"> 0 </span>IQD</h5>
                </div>

                <form method="post" id="product_form">
                    @csrf
                    <button type="submit" style="display: none;" id="sell" class="btn btn-success w-100">بیفرۆشە</button>
                    <table id="products" class="table table-responsive">
                        <thead>
                            <th>ناو</th>
                            <th>نرخ</th>
                            <th class="text-center">دانە</th>
                            <th>کردارەکان</th>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
@endsection
