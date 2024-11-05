<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-cOrange dark:bg-cOrange border border-transparent rounded-md font-semibold text-xs text-cWhite dark:text-cWhite uppercase tracking-widest hover:bg-cRed dark:hover:bg-cRed focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 trasition-all duration-300 transform hover:scale-110']) }}>
    {{ $slot }}
</button>
