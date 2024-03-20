@extends('layouts.admin')

@section('title')
<title>Edit Currency</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Edit Currency</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit currency</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('currency.update', $currency->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">currency</label>
                                    <input type="text" name="currency" class="form-control" value="{{ $currency->currency }}" required>
                                    <p class="text-danger">{{ $errors->first('currency') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">status</label>
                                    <select name="status" class="form-control">
                                        <option value="">None</option>
                                        <option value="active" {{ $currency->status == 'active' ? 'selected':'' }}>Active</option>
                                        <option value="deactive" {{ $currency->status == 'deactive' ? 'selected':'' }}>Deactive</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection