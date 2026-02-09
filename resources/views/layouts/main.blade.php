<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TaxiYa - Grand Taxi Search Results</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1e3a8a", // Deep Royal Blue
                        "primary-light": "#3b82f6",
                        "background-light": "#f6f8fa",
                        "background-dark": "#0f172a",
                        "brand-blue": "#2563EB", // Royal Blue
                        "brand-orange": "#F59E0B",
                        "brand-accent": "#3b82f6",
                        "brand-dark-blue": "#1e40af",
                        "brand-teal": "#2563EB", // Overriding previous teal with blue for easy replacement
                        "brand-dark-teal": "#1e40af", // Overriding previous dark teal
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "brand": ["Outfit", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                    backgroundImage: {
                        'moroccan-pattern': "url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231e3a8a' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")",
                        'header-gradient': "linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.6))",
                        'header-gradient-dark': "linear-gradient(to right, rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.6))",
                    },
                    boxShadow: {
                        'glass': '0 4px 30px rgba(0, 0, 0, 0.1)',
                        'glow': '0 0 15px rgba(37, 99, 235, 0.3)',
                    }
                },
            },
        }
    </script>
<style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }
        .dark ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 50%;
            background-color: #2563EB;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-200 min-h-screen flex flex-col transition-colors duration-200">
    @include('partials.homeheader')
    @yield('content')
    @include('partials.footer')
</body>
