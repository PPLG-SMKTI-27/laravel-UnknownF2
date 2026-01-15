<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - {{ $nama }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
        }
        header {
            background: #222;
            color: white;
            padding: 30px;
            text-align: center;
        }
        section {
            background: white;
            margin: 20px;
            padding: 30px;
            border-radius: 8px;
        }
        .card {
            background: #fafafa;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 4px solid #0d6efd;
        }
        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>{{ $nama }}</h1>
    <p>{{ $profesi }}</p>
</header>

<section>
    <h2>Tentang Saya</h2>
    <p>{{ $deskripsi }}</p>
</section>

<section>
    <h2>Skill</h2>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</section>

<section>
    <h2>Portfolio</h2>
    @foreach($portfolio as $item)
        <div class="card">
            <h3>{{ $item['judul'] }}</h3>
            <p>{{ $item['deskripsi'] }}</p>
        </div>
    @endforeach
</section>

<footer>
    <p>&copy; {{ date('Y') }} - {{ $nama }}</p>
</footer>

</body>
</html>
