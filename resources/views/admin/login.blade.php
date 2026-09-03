<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - Stock Summit</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/stock_summit_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/stock_summit_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/stock_summit_logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800;900&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-outfit { font-family: 'Outfit', sans-serif; }
        .glass-card {
            background: rgba(12, 15, 46, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
    </style>
</head>
<body class="bg-[#10143d] text-slate-100 antialiased min-h-screen flex items-center justify-center relative overflow-hidden px-4">

    <!-- Subtle Glows -->
    <div class="absolute top-1/4 left-1/4 w-[350px] h-[350px] bg-indigo-500/10 rounded-full blur-[100px] -z-10"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[350px] h-[350px] bg-amber-500/5 rounded-full blur-[100px] -z-10"></div>

    <div class="w-full max-w-md">
        <!-- Logo / Title -->
        <div class="text-center mb-8">
            <h1 class="font-outfit font-black text-3xl uppercase tracking-wider text-white">
                STOCK SUMMIT <span class="text-[#af8a3c]">ADMIN</span>
            </h1>
            <p class="text-slate-400 text-sm mt-2">Manage event archives and configurations</p>
        </div>

        <!-- Login Card -->
        <div class="glass-card border border-slate-800 p-8 rounded-3xl shadow-2xl relative overflow-hidden group">
            <!-- Decorative subtle glow in background -->
            <div class="absolute -inset-px bg-gradient-to-r from-transparent via-[#af8a3c]/10 to-transparent opacity-30 pointer-events-none"></div>

            <form action="{{ route('login') }}" method="POST" class="space-y-6 relative z-10">
                @csrf

                <!-- Email Input -->
                <div class="space-y-2">
                    <label for="email" class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-3.5 rounded-xl bg-slate-900/60 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-[#af8a3c]/60 focus:ring-1 focus:ring-[#af8a3c]/60 transition-all text-sm"
                           placeholder="admin@stocksummit.com">
                    @error('email')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <label for="password" class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Password</label>
                    <input type="password" name="password" id="password" required
                           class="w-full px-4 py-3.5 rounded-xl bg-slate-900/60 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-[#af8a3c]/60 focus:ring-1 focus:ring-[#af8a3c]/60 transition-all text-sm"
                           placeholder="••••••••">
                    @error('password')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full py-3.5 rounded-xl font-semibold text-[#10143d] bg-[#af8a3c] hover:bg-[#cba14b] active:scale-[0.98] transition-all text-sm shadow-lg shadow-[#af8a3c]/10 mt-2">
                    Log In
                </button>
            </form>
        </div>

        <!-- Back to Website -->
        <div class="text-center mt-6">
            <a href="/" class="text-xs text-slate-500 hover:text-slate-300 transition-colors">&larr; Back to Stock Summit Website</a>
        </div>
    </div>

</body>
</html>
