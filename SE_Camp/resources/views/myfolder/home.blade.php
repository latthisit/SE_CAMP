<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('CSS/home.css')}}">
</head>
<body>
    @extends('layouts.default')

    @section('title', 'Homepage')

    @section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Information Form</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="information-form">
            <div class="personal-information">
                <h1>Personal Information</h1>
            </div>
            <div class="personal-form">
                <form action="#">
                    <div class="Name">
                        Name <br>
                        <input type="text" id="Name" placeholder="Name">
                    </div>
                    <div class="Last-Name" >
                        Lastname <br>
                        <input type="text" placeholder="LastName">
                    </div>
                    <div class="HBD">
                        Birthday
                         <br>
                        <input type="date">
                    </div>
                    <div class="Age">
                        Age <br>
                        <input type="text" placeholder="Age">
                    </div>
                    <div class="Gender">
                        Gender <br>
                            <input id="radio_a" type="radio" name="same_radio-sex"/>
                            <label for="radio_a">Male</label>

                            <input id="radio_b"type="radio" name="same_radio-sex"/>
                            <label for="radio_b">Female</label>

                            <input id="radio_b"type="radio" name="same_radio-sex"/>
                            <label for="radio_b">Alternative Gender</label>
                    </div>
                    <div class="Address">
                        Address <br>
                        <textarea name="" id="" cols="30" rows="4" placeholder="Please Enter Information"></textarea>
                    </div>
                    <div class="Picture">
                        Picture <br>
                        <input id="Picture-input" type="file">
                    </div>
                    <div class="color">
                        Color <br>
                        <select name="" id="">
                            <option value=""
                            disabled
                            selected>-</option>
                            <option value="">สีแดง (Red)</option>
                            <option value="">สีเขียว (Green)</option>
                        </select>
                    </div>
                    <div class="music">
                        Music Style
                        <br>
                        <input id="radio_a" type="radio" name="same_radio"/>
                        <label for="radio_a">Folk</label>

                        <input id="radio_b"type="radio" name="same_radio"/>
                        <label for="radio_b">Country</label>

                        <input id="radio_b"type="radio" name="same_radio"/>
                        <label for="radio_b">etc.</label>
                    </div>
                    <div class="submit">
                        <input type="checkbox">
                            (Consent to collect your information.)
                    </div>
                    <div class="submit-button">
                        <button>Submit</button>
                        <input class = "reset-box"type="reset" name="" id="">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.content -->
    @endsection
</body>
</html>

