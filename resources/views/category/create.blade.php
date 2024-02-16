@extends('category.layout')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>categories
                        <a href="{{ url('categories ')}}" class="btn btn-primary float-end ">add category</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('categories/create ')}}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label >name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" >
                        </div>
                        <div class="mb-3">
                            <label >description</label>
                        <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label >Is Active</label>
                            <input type="checkbox" name="is_active" {{old('is_active')}}>
                        </div>
                        <div class="mb-3">
                            <button type="submit"class="btn btn-primary">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
