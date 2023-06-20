@extends('layouts.app')

@section('title' , 'Welcome Page')


@section('content')
    <main class="container ">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="container">
                <div class="text-center m-5">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbabe0pYOfqeFMy-KhIe4zIFU6NE9RpB88WQ&usqp=CAU" alt="logo">
                </div>

                <!--Video-->
                <div class="m-5">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/fWWhSMNurrs?autoplay=1&mute=1" title="Mack Anthem - A new highway semi truck" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection
