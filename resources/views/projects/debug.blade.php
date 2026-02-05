@extends('Layout')

@section('title', 'Projects Debug')

@section('styles')
    <style>
        :root { color-scheme: light dark; }
        body { margin: 0; font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Noto Sans", "Liberation Sans", sans-serif; }

        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid rgba(0,0,0,.08); padding: 8px; text-align: left; }

        .logout-btn { display:none; }

        @media (prefers-color-scheme: dark) {
            body { background: wheat; color: #000000; }
            .card { background: rgba(22,22,22,.9); border-color: rgba(255,255,255,.10); }
            th, td { border-color: rgba(255,255,255,.10); }
        }
        @media (prefers-color-scheme: light) {
            body { background: #f7f7f5; color: #171717; }
        }

        .wrap { max-width: 960px; margin: 0 auto; padding: 32px 20px; }
        .card { background: rgba(255,255,255,.9); border: 1px solid rgba(0,0,0,.08); border-radius: 14px; padding: 20px; }

        .muted { opacity: .75; }
        .table-wrap { overflow:auto; }
    </style>
@endsection

@section('content')
    <div class="wrap">
        <div class="card">
            <h1>Daftar Projects</h1>

            @if($projects->isEmpty())
                <p>Tidak ada data projects.</p>
            @else
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->title }}</td>
                                    <td>{{ $p->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection