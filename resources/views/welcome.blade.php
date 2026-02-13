<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bhagavad Gita - The Divine Song</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        parchment: '#FDFBF7',
                        saffron: '#C05621',
                        charcoal: '#2D3748',
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-parchment font-sans text-charcoal antialiased">
    <div class="min-h-screen flex flex-col">
        <header class="py-12 px-6 text-center">
            <h1 class="font-serif text-5xl md:text-6xl font-bold mb-4">Bhagavad Gita</h1>
            <p class="text-lg text-gray-500 italic">The Divine Song of God</p>
        </header>

        <main class="flex-grow container mx-auto max-w-4xl px-6 pb-24">
            <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-orange-100 mb-12 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-saffron"></div>
                <div class="space-y-6 text-center md:text-left">
                    <p class="font-serif text-2xl md:text-3xl leading-relaxed text-gray-800">
                        धर्मक्षेत्रे कुरुक्षेत्रे समवेता युयुत्सवः ।<br>
                        मामकाः पाण्डवाश्चैव किमकुर्वत सञ्जय ॥ १ ॥
                    </p>
                    <p class="text-lg md:text-xl text-gray-600 leading-relaxed italic">
                        "O Sanjaya, after gathering on the holy field of Kurukshetra, and desiring to fight, what did my sons and the sons of Pandu do?"
                    </p>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('chapters.index') }}" class="inline-flex items-center px-8 py-4 bg-saffron text-white font-semibold rounded-full hover:bg-orange-800 transition-colors shadow-lg shadow-orange-200 uppercase tracking-widest text-sm">
                    Begin Journey
                </a>
            </div>
        </main>

        <footer class="py-8 text-center text-sm text-gray-400 border-t border-orange-50">
            <p>&copy; {{ date('Y') }} Bhagavad Gita App • Built by Bruno 🐕</p>
        </footer>
    </div>
</body>
</html>
