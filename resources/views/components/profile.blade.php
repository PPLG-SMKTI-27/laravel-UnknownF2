<div class="profile-container">
    <section class="profile-header">
        <img src="https://via.placeholder.com/150" alt="Profile Avatar" class="profile-avatar">
        <h1>{{ $nama ?? 'Faris' }}</h1>
        <p class="subtitle">{{ $profesi ?? 'Web Developer & Content Creator' }}</p>
    </section>

    <section class="profile-info">
        <h2>About Me</h2>
        <p>
            {{ $deskripsi ?? 'Saya adalah seorang web developer yang passionate dalam membuat aplikasi web yang berkualitas. Saya memiliki pengalaman dalam menggunakan Laravel, Vue.js, dan teknologi web modern lainnya.' }}
        </p>
    </section>

    <section class="profile-section">
        <h3>Keahlian</h3>
        <ul>
            @foreach ($skills ?? ['PHP & Laravel', 'JavaScript & Vue.js', 'Database Design', 'HTML & CSS', 'RESTful API'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </section>

    <section class="profile-section">
        <h3>Pengalaman</h3>
        @if ($pengalaman ?? null)
            @foreach ($pengalaman as $item)
                <div class="experience-item">
                    <h4>{{ $item['posisi'] }}</h4>
                    <p><strong>{{ $item['perusahaan'] }}</strong> - {{ $item['periode'] }}</p>
                    <p>{{ $item['deskripsi'] }}</p>
                </div>
            @endforeach
        @else
            <div class="experience-item">
                <h4>Web Developer</h4>
                <p><strong>PT. Tech Company</strong> - 2023 - Present</p>
                <p>Mengembangkan aplikasi web menggunakan Laravel dan Vue.js</p>
            </div>
            <div class="experience-item">
                <h4>Junior Developer</h4>
                <p><strong>Digital Agency</strong> - 2022 - 2023</p>
                <p>Mengerjakan berbagai proyek web untuk klien</p>
            </div>
        @endif
    </section>

    <section class="profile-section">
        <h3>Hubungi Saya</h3>
        <ul>
            <li>Email: {{ $email ?? 'Unknown@gmail.com' }}</li>
            <li>GitHub: {{ $github ?? 'github.com/Unknown' }}</li>
            <li>Instagram: {{ $instagram ?? 'instagram.com/Unknown' }}</li>
        </ul>
    </section>

    <style>
        .profile-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }
        
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        
        .profile-info {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .profile-section {
            margin-bottom: 30px;
        }
        
        .profile-section h3 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .experience-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .experience-item:last-child {
            border-bottom: none;
        }
    </style>
</div>
