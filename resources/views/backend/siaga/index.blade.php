@extends('layouts.backend.appsiaga')

@section('content')
<h1>halaman siaga</h1>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4 class="card-title">{{ __('field.voter') }}</h4>
        <div class="card-header-action">
            <a href="{{ route('backend.pemilih.create') }}" class="btn btn-primary">{{ __('button.add') }}</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ __('field.id') }}</th>
                    <th>{{ __('field.name') }}</th>
                    <th>{{ __('field.email') }}</th>
                    <th>{{ __('field.action') }}</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach($voters as $voter)
                <tr>
                    <td>{{ $voter->id }}</td>
                    <td>{{ $voter->name }}</td>
                    <td>{{ $voter->email }}</td>
                    <td>
                        <a href="{{ route('backend.pemilih.edit', $voter->id) }}" class="btn btn-warning">{{ __('button.edit') }}</a>
                        <form action="{{ route('backend.pemilih.destroy', $voter->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('button.delete') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody> --}}
        </table>
    </div>
</div>
@endsection
