<div class="bg-red" style="height: 100vh">
    <style>
        #teste{
            height: calc(100% - 90px);
            /* height: 100%; */
        }
    </style>
    <div class="flex justify-end items-end p-4" style="height:60px;">
        <a href="/"><h1 class="title-auth">NEWS</h1></a>
    </div>

    <div id="teste" class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

        <div>
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</div>
