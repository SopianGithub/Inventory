@props(['name' => 'dashboard', 'link' => '/dashboard', 'icon' => 'dashboard'])


<a
    href="{{ $link }}"
    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700"
    >
    <x-theme.icon-link :name="$icon" />
    <span class="ml-3" sidebar-toggle-item>{{ $name }}</span>
</a>