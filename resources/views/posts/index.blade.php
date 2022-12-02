@extends('layouts.app')

@section('content')
 <!-- Page Header-->
 <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
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

    <div class="col-md-10 mx-auto my-5">
        <div class="card shadow">
            <div class="card-body ">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Date</th>
                            <th>Actions</th>

                        </tr>
                        <tbody>
                            
                        </tbody>
                    </thead>

                </table>

            </div>
        </div>
    </div>
</div>

@endsection
