<style>
    .button {
        background-color: rgb(37 99 235);
    }

    .button:hover {
        background-color: rgb(29 78 216);
    }
</style>

<div class="min-h-screen flex flex-col items-center bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    
    <div class="w-full sm:max-w-md mt-3 px-6 py-3 bg-white shadow overflow-hidden sm:rounded-lg text-center" style="font-size: 14px;">
        <span>Already have an account? 
            <a class="hover:underline" style="color: #5469d4" href="{{ route('login') }}">Sign in</a>
        </span>
    </div>
</div>
