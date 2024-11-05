@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-cRed dark:focus:border-cRed focus:ring-cRed dark:focus:ring-cRed rounded-md shadow-sm']) }}>
