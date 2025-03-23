@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Zona
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Zona</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('zonas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('zona.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
