@extends('admin.admin')
@section('is_title', 'dashboard')
@section('is_title_konten', 'dashboard' )
@section('is_konten')

<!-- <h1>project {{$p}}</h1>
<h1>siswa {{$s}}</h1> -->
<div class="row " style="margin-left:auto; margin-right:auto;">        
    <div class="col-lg-4 col-md-12">
            <div class="my-3 shadow rounded">
                <div class="pt-4 text-center" >
                    <i class="fa fa-user fa-4x" style="color:  #4CB1CF; "></i>        
                    <p style="font-size:24px;"> {{$s}}</p>
                </div>
                <div class="pt-2" style="background-color: #4CB1CF; height:40px;">
                    <h2 class="text-center" style="color:white; font-size:14px;">Siswa</h2>                
                </div>            
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="my-3 shadow rounded">
                <div class="pt-4 text-center" >
                    <i class="fa fa-heart fa-4x" style="color:  #F0433D; "></i>        
                    <p style="font-size:24px;">600</p>
                </div>
                <div class="pt-2" style="background-color: #F0433D; height:40px;">
                    <h2 class="text-center" style="color:white; font-size:14px;">Likes</h2>                
                </div>            
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="my-3 shadow rounded" style="">
                <div class="pt-4 text-center" >
                    <i class="fa fa-camera fa-4x" style="color:  #f0ad4e; "></i>        
                    <p style="font-size:24px;">{{$p}}</p>
                </div>
                <div class="pt-2" style="background-color: #f0ad4e; height:40px;">
                    <h2 class="text-center" style="color:white; font-size:14px;">Project</h2>                
                </div>            
            </div>
        </div>
    </div>
@endsection
