@extends('layouts.admin')

@section('content')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blog</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm pt-1 pr-1" style="width: 140px;">
                            <button type="button" onclick="addBlog()" class="btn btn-primary float-right"><i class="fas fa-pen"></i> Dodaj blog</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Slika</th>
                            <th>Naslov</th>
                            <th>Tekst</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $b)
                        <tr>
                            <td>{{$b->id}}</td>
                            <td><img src="{{asset($b->imagePath)}}" alt="" width="100"></td>
                            <td>{{ $b->mne->title }}</td>
                            <td>{{ $b->mne->text }}</td>
                            <td></td>
                            <td><td class="project-actions text-right">
                                <button class="btn btn-info" type="button" onclick="editBlog({{$b->id}})">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Izmijeni
                                </button>
                                <button class="btn btn-danger" type="button" onclick="setupDeleteModal({{$b->id}})">
                                    <i class="fas fa-trash">
                                    </i>
                                    Izbriši
                                </button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    @endsection
