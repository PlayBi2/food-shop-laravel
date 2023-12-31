<header class="max-w-container mx-auto">
    <div class="flex justify-between items-center">
        <div class="flex items-center h-32">
            <a href="/" class="block w-48">
                <img src="https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/logo.png?1658680172137"
                    alt="" class="w-full h-full object-cover object-center">
            </a>
            <ul class="flex ml-10">
                {{-- {{ dd(request()->path()) }} --}}
                <li
                    class="{{ request()->path() === '/' || request()->path() === '' ? 'text-baseColor' : 'text-black' }} mx-2 px-2 py-3 text-base">
                    <a href="/" class="transition-all ease-linear hover:text-baseColor">Trang chủ</a>
                </li>
                <li
                    class="{{ request()->segment(1) === 'gioi-thieu' ? 'text-baseColor' : 'text-black' }} mx-2 px-2 py-3 text-base">
                    <a href="/gioi-thieu" class="transition-all ease-linear hover:text-baseColor">Giới thiệu</a>
                </li>
                {{-- {{ request()->segment(1) }} --}}
                <li class="mx-2 px-2 py-3 text-base relative group">
                    <a href="/products/all"
                        class="{{ request()->segment(1) === 'products' ? 'text-baseColor' : 'text-black' }} transition-all ease-linear hover:text-baseColor">
                        Sản phẩm
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul
                        class="absolute top-full bg-white z-10 left-0 w-52 text-sm shadow-subNav transition-all ease-liner duration-300 hidden rounded-md overflow-hidden group-hover:block">
                        <li class="px-3">
                            <a href="/products/{{ 'vegetable' }}"
                                class="py-3 block border-b-[1px] border-solid border-[#e5e6ec] transition-all ease-linear hover:text-baseColor">
                                Rau củ
                            </a>
                        </li>
                        <li class="px-3">
                            <a href="/products/{{ 'fruit' }}"
                                class="py-3 block border-b-[1px] border-solid border-[#e5e6ec] transition-all ease-linear hover:text-baseColor">
                                Hoa quả
                            </a>
                        </li>
                        <li class="px-3">
                            <a href="/products/{{ 'sea-food' }}"
                                class="py-3 block border-b-[1px] border-solid border-[#e5e6ec] transition-all ease-linear hover:text-baseColor">
                                Hải sản
                            </a>
                        </li>
                        <li class="px-3">
                            <a href="/products/{{ 'nuts' }}"
                                class="py-3 block border-b-[1px] border-solid border-[#e5e6ec] transition-all ease-linear hover:text-baseColor">
                                Các loại hạt
                            </a>
                        </li>
                        <li class="px-3">
                            <a href="/products/{{ 'fresh-food' }}"
                                class="py-3 block transition-all ease-linear hover:text-baseColor">
                                Thực phẩm tươi sống
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mx-2 px-2 py-3 text-base">
                    <a href="/tin-tuc"
                        class="{{ request()->segment(1) === 'tin-tuc' ? 'text-baseColor' : 'text-black' }} transition-all ease-linear hover:text-baseColor">Tin
                        tức</a>
                </li>
                <li class="mx-2 px-2 py-3 text-base"><a href="/lien-he"
                        class="{{ request()->segment(1) === 'lien-he' ? 'text-baseColor' : 'text-black' }} transition-all ease-linear hover:text-baseColor">Liên
                        hệ</a></li>
            </ul>
        </div>
        <div class="flex items-center text-lg">
            <div class="mr-4 relative cursor-pointer py-2 px-2 group">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form action="" method="get"
                    class="group-hover:flex hidden absolute top-full -right-4 items-center bg-bgStriped text-white text-sm rounded-full overflow-hidden">
                    <input type="text" placeholder="Tìm kiếm"
                        class="block bg-transparent outline-none placeholder:text-white px-4 py-2 w-48">
                    <button type="submit" class="px-3 py-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="mr-4 relative py-3 cursor-pointer px-2 group">
                <i class="fa-solid fa-user-plus"></i>
                <div
                    class="absolute top-full -left-20 text-sm w-52 bg-white border-[1px] border-solid border-[#91ad41] px-2 rounded-xl overflow-hidden hidden group-hover:block">
                    @auth
                        <a class="block py-2 text-center my-2 bg-bgStriped text-white rounded-full">
                            {{ auth()->user()->name }}
                        </a>

                        <form action="/logout" method="post" class="block">
                            @csrf
                            <input type="submit"
                                class="block w-full cursor-pointer py-2 text-center my-2 border-solid border-[1px] border-[#ebebeb] transition-all ease-linear hover:bg-[#91ad41] rounded-full hover:text-white"
                                value="Đăng xuất" />
                        </form>
                    @else
                        <a href="/login" class="block py-2 text-center my-2 bg-bgStriped text-white rounded-full">
                            Đăng nhập
                        </a>
                        <a href="/register"
                            class="block py-2 text-center my-2 border-solid border-[1px] border-[#ebebeb] transition-all ease-linear hover:bg-[#91ad41] rounded-full hover:text-white">
                            Đăng ký
                        </a>
                    @endauth
                </div>
            </div>
            @livewire('cart-btn')
        </div>
</header>
