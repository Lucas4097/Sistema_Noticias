<div class="bg-red" style="height: 100vh">
    <style>
        #teste{
            height: calc(100% - 60px);
            /* height: 100%; */
        }
    </style>
    <div class="flex justify-end items-center p-6" style="height:60px;">
        <h1 class="">teste</h1>
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
