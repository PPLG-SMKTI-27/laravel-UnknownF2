<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portofolio</title>
    <style>
        :root { color-scheme: light dark; }
        body { 
            margin: 0; 
            font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Noto Sans", "Liberation Sans", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        @media (prefers-color-scheme: dark) {
            body { background: wheat; color: #ededed; }
        }
        @media (prefers-color-scheme: light) {
            body { background: #f7f7f5; color: #171717; }
        }
        
        .card { 
            background: rgba(255,255,255,.9); 
            border: 1px solid rgba(0,0,0,.08); 
            border-radius: 14px; 
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 2px 8px rgba(0,0,0,.1);
        }
        @media (prefers-color-scheme: dark) {
            .card { 
                background: rgba(22,22,22,.9); 
                border-color: rgba(255,255,255,.10);
                box-shadow: 0 2px 8px rgba(0,0,0,.5);
            }
        }
        
        h2 { 
            font-size: 24px; 
            margin: 0 0 30px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 14px;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(0,0,0,.12);
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        
        @media (prefers-color-scheme: dark) {
            input[type="email"],
            input[type="password"] {
                background: rgba(255,255,255,.05);
                border-color: rgba(255,255,255,.16);
                color: #ededed;
            }
        }
        
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }
        
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        button[type="submit"]:hover {
            background-color: #2980b9;
        }
        
        button[type="submit"]:active {
            transform: scale(0.98);
        }
        
        .error {
            color: #e74c3c;
            font-size: 14px;
            padding: 12px;
            background: rgba(231, 76, 60, 0.1);
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        @media (prefers-color-scheme: dark) {
            .error {
                background: rgba(231, 76, 60, 0.2);
                color: #f8695c;
            }
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Login Portofolio</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</div>
