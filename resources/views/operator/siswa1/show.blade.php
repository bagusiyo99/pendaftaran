@extends('layouts.app_sneat')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="/operator/siswa1" class="btn btn-primary mb-3">
                        Kembali</a>
                    <div class="form-group">
                        <label for="">File</label>
                    </div>
                    @if (isset($siswa1))
                        <iframe src="/{{ $siswa1->file }}" width="1200px" height="900px" class="mt-4" alt="">
                    @endif





                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
