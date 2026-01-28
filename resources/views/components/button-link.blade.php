<a {{ $attributes->merge(['class' => 'inline-flex items-center border p-2 pl-10 pr-10 rounded-md mt-10
    bg-brand-primary-color border-slate-500
    text-white transition
    duration-200
    ease-in-out hover:text-brand-primary-color hover:bg-slate-50 hover:border-slate-900']) }}>
    {{ $slot }}
</a>