@extends('layouts.app')

@section('content')
 <!-- Page Header-->
 <header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">

    <div class="col-md-6 mx-auto my-5">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        <div class="card">
            <div class="card-body shadow">

                <x-alerts />
                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3 ">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                        @error('title') <span style="font-size: 10px" class="text-danger">
                        {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
                        @error('body') <span style="font-size: 10px" class="text-danger">
                            {{$message}}
                            </span>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                       <input type="file" name="image" id="image" class="form-control">
                       @error('image') <span style="font-size: 10px" class="text-danger">
                        {{$message}}
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-outline-primary w-100">Create Post</button>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection
