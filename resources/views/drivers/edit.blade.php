@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати модель</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">На головну</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('drivers.update', $driver->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="first_name">Змініть Ім'я</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $driver->first_name }}">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Змініть Прізвище</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $driver->last_name }}">
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Змініть дату народження</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $driver->birth_date }}">
                    </div>

                    <div class="mb-3 w-30">
                        @if($driver->image)
                            <img src="{{ asset('storage/' . $driver->image) }}"
                                 alt="Image"
                                 class="w-25">
                        @elseif($driver->image_url)
                            <img src="{{ $driver->image_url }}"
                                 alt="Image"
                                 class="w-25">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Оберіть нове зображення</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Оберіть зображення</label>
                            </div>
                        </div>
                    </div>

                    <!-- Поле для додавання URL зображення -->
                    <div class="form-group">
                        <label for="image_url">Або введіть URL зображення</label>
                        <input type="url" class="form-control" id="image_url" name="image_url" placeholder="{{ $driver->image_url }}">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редагувати">
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
