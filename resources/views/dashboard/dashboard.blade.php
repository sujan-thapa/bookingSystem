@extends('layouts.dashboard')

@section('title','Booking System')

@section('css','/css/dashboard/app.css')



@section('id','bodyId')

@section('content')
<div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    {{-- <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>

                        <a href="#" class="nav__logo">Booking System</a>
                    </div> --}}


                    {{-- for profile image --}}

                    <div class="profileImage">
                        <i name="menu-outline" class="nav__toggle material-icons" id="toggleId">toc</i>
                        <a href="#">
                        <img id="profileImage" src="/images/rom.jpg" alt="Admin" width="40">
                        </a>
                    </div>
                    <hr>
                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                            {{-- <ion-icon name="home-outline" class="nav__icon"></ion-icon> --}}
                            <i name="home-outline" class="nav_icon material-icons" >home</i>
                            <span class="nav__name ">Dashboard</span>
                        </a>
                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon> --}}
                            <i name="chatbubbles-outline" class="nav_icon material-icons" >inbox</i>

                            <span class="nav__name">Booking Request</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i name="chatbubbles-outline" class="nav_icon material-icons" >local_taxi</i>
                            <span class="nav__name">Vehicles</span>
                        </a>

                        <div  class="nav__link collapse">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Vehicles</span>
                        </div>

                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> --}}
                            <i name="pie-chart-outline" class="nav_icon material-icons" >info</i>

                            <span class="nav__name">Customer Info</span>
                        </a>

                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> --}}
                            <i name="pie-chart-outline" class="nav_icon material-icons" >info</i>

                            <span class="nav__name">Driver Info</span>
                        </a>
                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="settings-outline" class="nav__icon"></ion-icon> --}}
                            <i name="settings-outline" class="nav_icon material-icons" >settings</i>

                            <span class="nav__name">Settings</span>
                        </a>
                    </div>

                </div>
                <a href="#" class="nav__link">
                    {{-- <ion-icon name="log-out-outline" class="nav__icon"></ion-icon> --}}
                    <i name="log-out-outline" class="nav_icon material-icons" >logout</i>
                    <span class="nav__name">Log Out</span>
                </a>

            </nav>
        </div>


        <h1>Vg Dashboard</h1>







@endsection
