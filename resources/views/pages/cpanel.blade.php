@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto newpost-container"  style="{background-color: #2a9055}">
                <form action="" method="post">
                    @csrf
                    <div id="newpost" class="row">
                        <div class="input-container">
                            <div>
                                <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('عنوان') }}</label>
                            </div>
                            <div>
                                <input type="text" name="title" id="title">
                            </div>
                        </div>
                        <div class="input-container">
                            <div>
                                <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('محتوا') }}</label>
                            </div>
                            <div>
                                <textarea name="body" id="body"></textarea>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="button-container">
                                <input type="button" value="ذخیره" name="insert-bu" id="insert-bu" onclick="insertPost(this)">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
