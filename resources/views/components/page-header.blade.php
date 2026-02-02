@props(['page_title','page_img'])
<header class="w-full h-[40vh] bg-no-repeat bg-cover bg-center" style="background-image: url('{{$page_img}}')">
    <div class="w-full h-full bg-brand-secondary-color/85 flex justify-center items-center text-slate-200">
        <h1 class="text-6xl font-anton-regular">{{$page_title}}</h1>
    </div>
</header>