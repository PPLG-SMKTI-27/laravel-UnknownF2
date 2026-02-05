
@extends('Layout')

@section('title', 'Portfolio')

@section('styles')
    <style>
        :root { color-scheme: light dark; }
        body { margin: 0; font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Noto Sans", "Liberation Sans", sans-serif; }
        
        .logout-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        
        .logout-btn:hover {
            background-color: #c0392b;
        }
        .debug-btn {
            position: fixed;
            top: 20px;
            right: 140px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        .debug-btn:hover { background-color: #2574a9; }
        
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
        
        .profile-container {
            max-width: none;
            margin: 0;
            padding: 0;
        }
        .profile-container .profile-header {
            margin-bottom: 20px;
        }
        .profile-container .profile-avatar {
            width: 120px;
            height: 120px;
        }
        .profile-container .profile-header h1 {
            font-size: 28px;
            margin: 0 0 6px;
        }
        .profile-container .profile-info {
            background: transparent;
            padding: 0;
            margin-bottom: 15px;
        }
        .profile-container .profile-section h3 {
            font-size: 18px;
            border-bottom: 1px solid rgba(0,0,0,.12);
            margin: 15px 0 10px;
        }
        .profile-container .profile-section ul {
            margin: 0;
            padding-left: 20px;
        }
        .profile-container .profile-section ul li {
            margin: 5px 0;
        }
    </style>
@endsection

@section('content')
    <a href="{{ route('logout') }}" class="logout-btn">Logout</a>
    
    <div class="wrap">
        <div class="card">
            <x-profile 
                :nama="$nama ?? 'Faris'"
                :profesi="$profesi ?? 'Web Developer & Content Creator'"
                :deskripsi="$deskripsi ?? ''"
                :skills="$skills ?? []"
                :email="$email ?? 'Unknown@gmail.com'"
                :github="$github ?? 'github.com/Unknown'"
                :instagram="$instagram ?? 'instagram.com/Unknown'"
            />
        </div>

        @if (!empty($namaList))
            <div class="section">
                <div class="card">
                    <h2>Jabatan</h2>
                    <ul class="chips">
                        @foreach ($namaList as $n)
                            <li class="chip">{{ $n }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="section"></div>

        @if (empty($portfolio ?? []))
            <div class="section">
                <div class="card">
                    <p>Tidak ada data projects.</p>
                </div>
            </div>
        @else
            <div class="grid">
                @foreach ($portfolio as $item)
                    <div class="card">
                        <h2>{{ $item['judul'] ?? 'Project' }}</h2>
                        <p class="muted">{{ $item['deskripsi'] ?? '' }}</p>
                        <a class="btn" href="/LandingPage">Project</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

  
        <div class="section">
            <div class="card">
                <h2>Daftar Siswa</h2>
                <ul class="chips">
                    @foreach ($siswa ?? [] as $s)
                        <li class="chip">{{ $s['nama'] ?? $s }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endsection