@extends('layouts.add')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <p style="color: black;" class="text-center">ADD QUESTION</p>
                            <textarea id="" class="form-control" name="question" placeholder="Question"></textarea>
                        </div>

                        <div class="col-md-12">
                            <select class="custom-select custom-select-sm" >
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('SUBMIT') }}
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection