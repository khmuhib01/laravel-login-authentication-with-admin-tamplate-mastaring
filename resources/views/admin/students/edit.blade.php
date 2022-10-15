@extends('layouts.master')

@section('title', 'Blog Dashboard')

@section('content')



    <div class="container-fluid px-4">
        <h1 class="mt-4">Student</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Student List</li>
        </ol>
        <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
                <form action="{{ route('admin.student.update', ['id'=>$student->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{ $student->phone }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" value="{{ $student->age }}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </form>
            </div>
          </div>
    </div>

@endsection
