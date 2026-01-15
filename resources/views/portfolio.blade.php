<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $nama }} - Portfolio</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        :root { color-scheme: light dark; }
        body { margin: 0; font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Noto Sans", "Liberation Sans", sans-serif; }
        .wrap { max-width: 960px; margin: 0 auto; padding: 32px 20px; }
        .card { background: rgba(255,255,255,.9); border: 1px solid rgba(0,0,0,.08); border-radius: 14px; padding: 20px; }
        @media (prefers-color-scheme: dark) {
            body { background: wheat; color: #ededed; }
            .card { background: rgba(22,22,22,.9); border-color: rgba(255,255,255,.10); }
        }
        @media (prefers-color-scheme: light) {
            body { background: #f7f7f5; color: #171717; }
        }
        .muted { opacity: .75; }
        .grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
        @media (min-width: 900px) { .grid { grid-template-columns: 1fr 1fr; } }
        .chips { display: flex; flex-wrap: wrap; gap: 8px; padding: 0; margin: 10px 0 0; list-style: none; }
        .chip { font-size: 13px; padding: 6px 10px; border-radius: 999px; border: 1px solid rgba(0,0,0,.12); background: rgba(0,0,0,.04); }
        @media (prefers-color-scheme: dark) { .chip { border-color: rgba(255,255,255,.16); background: rgba(255,255,255,.06); } }
        h1 { font-size: 28px; margin: 0 0 6px; }
        h2 { font-size: 18px; margin: 0 0 10px; }
        p { margin: 0; line-height: 1.6; }
        .section { margin-top: 18px; }
    </style>
</head>
<body>
<div class="wrap">
    <div class="card">
        <h1>{{ $nama }}</h1>
        <p class="muted">{{ $profesi }}</p>
        <div class="section">
            <p>{{ $deskripsi }}</p>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <ul class="chips">
                @foreach (($skills ?? []) as $skill)
                    <li class="chip">{{ $skill }}</li>
                @endforeach
            </ul>
        </div>

        @if (!empty($namaList))
            <div class="section">
                <h2>Jabatan
                </h2>
                <ul class="chips">
                    @foreach ($namaList as $n)
                        <li class="chip">{{ $n }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="section"></div>

    <div class="grid">
        @foreach (($portfolio ?? []) as $item)
            <div class="card">
                <h2>{{ $item['judul'] ?? 'Project' }}</h2>
                <p class="muted">{{ $item['deskripsi'] ?? '' }}</p>
                <a class="btn" href="/LandingPage">Project</a>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
