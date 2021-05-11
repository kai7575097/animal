@extends('layouts.app')

@section('content')
    <div class=container>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">建立動物表單</div>

                    <div class="card-body">
                        <form method="post" action= "http://homestead.home/api/animal/$animals" >
                            <lable for="type_id" class="col-form-lable text-md-left" >動物分類：</lable>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection

