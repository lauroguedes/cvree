<div>
    <header class="flex flex-col items-center space-y-4">
        <x-tsavatar lg :model="$user"
                    property="name"
                    background="ff0000"
                    color="fff"
                    :options="['rounded' => true, 'size' => 128]"
        />
        <h1 class="uppercase text-2xl font-bold text-gray-500">{{ $user->name }}</h1>
        <div>
            <x-tsbadge icon="user" position="left" class="uppercase" text="Sr. Software Engineer" color="secondary" light />
            <span>at</span>
            <x-tsbadge icon="building-storefront" position="left" class="uppercase" text="Google" color="secondary" light />
        </div>
        <div class="flex space-x-2 text-gray-400">
            <x-tsbadge icon="cake" sm position="left" text="32" color="white" light></x-tsbadge>
            <x-tsbadge icon="map-pin" sm position="left" text="Cork, Ireland" color="white" light />
            <x-tsbadge icon="device-phone-mobile" sm position="left" text="+353 9876432" color="white" light />
        </div>
    </header>
    <aside>{{ $user->email }}</aside>
    <main>content</main>
    <aside>right</aside>
    <footer>footer</footer>
</div>
