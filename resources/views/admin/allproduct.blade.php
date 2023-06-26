@extends('admin.layouts.template')
@section('page_title')
All Product - Single Ecom
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page</span> All Categories</h4>
      @if (session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
        </div>
      @endif
    <div class="card">
        <h5 class="card-header">Available Category Information</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Sub Catagory</th>
                <th>Product</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>Id</td>
                    <td>Electronics</td>
                    <td>10</td>
                    <td>100</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection