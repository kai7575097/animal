@extends('layouts.app')

@section('content')
    <div class=container>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">建立動物表單</div>

                    <div class="card-body">
                        <form method="post" action= "http://homestead.home/api/animal" >
                        @csrf
                            <lable for="type_id" class="col-form-lable text-md-left" >動物分類：</lable>
                            <div class="col-md-6">
                                <input type="radio" name="type_id" value="1"> 貓
                                <input type="radio" name="type_id" value="2"> 狗
                            </div>
                            <lable for="name" class="col-form-lable text-md-left" >動物暱稱：</lable>
                            <div class="col-md-6">
                                <input class="form-control" name="name" required autofocus>
                            </div>
                            <lable for="birthday" class="col-form-lable text-md-left" >生日：</lable>
                            <div class="col-md-6">
                                <input class="form-control" name="birthday" required autofocus>
                            </div>
                            <lable for="area" class="col-form-lable text-md-left" >所在地區：</lable>
                            <div class="col-md-6">
                                <input class="form-control" name="area" required autofocus>
                            </div>
                            <lable for="fix" class="col-form-lable text-md-left" >結紮：</lable>
                            <div class="col-md-6">
                                <input type="radio" name="fix" value="1"> 是
                                <input type="radio" name="fix" value="0"> 否
                            </div>
                            <lable for="description" class="col-form-lable text-md-left" >描述：</lable>
                            <div class="col-md-6">
                                <input class="form-control" name="description" >
                            </div>
                            <lable for="personality" class="col-form-lable text-md-left" >個性：</lable>
                            <div class="col-md-6">
                                <input class="form-control" name="personality" >
                            </div>
                            <button type="submit" class="btn btn-primary"  style="float:right">新增</button><br>
                        </form><br>

                        
                        <div class="card-header">刪除動物表單</div>
                        <div class="card-body">
                        <form method="delete" action= "http://homestead.home/api/animal/{animal}" >
                        @csrf
                            <lable  class="col-form-lable text-md-left" >輸入想刪除編號：</lable>
                                <input  class="form-control" name="$aniaml" >
                            <button type="submit" class="btn btn-primary"  style="float:right">刪除</button>
                        </form>
                        </div>

                    </div>
                </div>

            </div>
        </div> 
    </div>
@endsection

