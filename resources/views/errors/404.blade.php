<x-library-layout>
<div style="display: flex; justify-content: center; align-items: center; height: 70vh; text-align: center;">
    <div>
        <h1 style="font-size: 6rem; font-weight: bold; color: #e3342f; margin: 0;">404</h1>
        <h2 style="font-size: 2rem; color: #4a5568;">Oops! Page not found.</h2>
        <p style="color: #718096; margin-bottom: 2rem;">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <a href="{{ url('/') }}" 
           style="background-color: #3490dc; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
            Return Home
        </a>
    </div>
</div>
</x-library-layout>