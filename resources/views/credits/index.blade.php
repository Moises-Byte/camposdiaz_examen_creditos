@extends('layouts.app')

@section('title', 'Cartera de creditos')

@section('content')
    <div class="header">
        <h1>Cartera de créditos</h1>
        <p>Lista de créditos registrados en el sistema.</p>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de pago</th>
                    <th>Plazo</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($credits as $credit)
                    <tr>
                        <td>{{ $credit->id }}</td>
                        <td>{{ $credit->tipo_pago }}</td>
                        <td>{{ $credit->plazo }}</td>
                        <td>{{ optional($credit->clients)->name ?? 'Cliente no disponible' }}</td>
                        <td>{{ $credit->monto }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="empty">No hay créditos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
