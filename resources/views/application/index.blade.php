<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Presenter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav id="navigationBar" class="">
    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-color-3 font-medium rounded-lg text-sm text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Songs<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a data-modal-target="default-modal" data-modal-toggle="default-modal" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">New Song</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete Songs</a>
      </li>
    </ul>
</div>
        <a href="">Settings</a>
        <a href="">Database</a>
    </nav>
    <div id="container">
        <section id="scheduleTab" class="p-2" style="padding-top:4.5%;overflow-y:scroll;">
            <div class="mt-3 mb-3 text-sm">
                <h3 class="font-bold">SCHEDULE - 10AM COMMUNION SERVICE</h3>
            </div>
            <div class="schedule-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3 text-sm">
                <h3 class="mb-3">I. O. M. 351 - ORE OFE SA</h3>
                <p> Add Notes </p>
            </div>
            <div class="schedule-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3 text-sm">
                <h3 class="mb-3">Adura Fun Ose Yii</h3>
                <p> Add Notes </p>
            </div>
            <div class="schedule-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3 text-sm">
                <h3 class="mb-3">Imurasile [Idapo Mimo]</h3>
                <p> Add Notes </p>
            </div>
        </section>
        <section id="previewTab" class="p-2" style="padding-top: 4.5%;overflow-y:scroll;">
            <div class="text-right">
                <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Backgrounds</button>
                <button class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Go Live</button>
            </div>
            <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 1</h3>
                <p class="text-sm">Ore-ofe! – b’ o ti dun to!<br>
	            T’o gba em’ abosi<br>
	            Mo ti sonu, o wa mi ri<br>
	            O si si mi loju</p>
            </div>
            <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 2</h3>
                <p class="text-sm">Or-ofe ko mi ki ‘m’ beru<br>
	            O si l’ eru mi lo<br>
	            B’ ore-ofe na ti han to<br>
	            Nigba mo ko gbagbo</p>
            </div>
            <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 3</h3>
                <p class="text-sm">Or-ofe ko mi ki ‘m’ beru<br>
	            O si l’ eru mi lo<br>
	            B’ ore-ofe na ti han to<br>
	            Nigba mo ko gbagbo</p>
            </div>
            <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 4</h3>
                <p class="text-sm">Or-ofe ko mi ki ‘m’ beru<br>
	            O si l’ eru mi lo<br>
	            B’ ore-ofe na ti han to<br>
	            Nigba mo ko gbagbo</p>
            </div>
        </section>
        <section id="liveTab" style="padding-top:4.5%;overflow-y:scroll;">
        <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 1</h3>
                <p class="text-sm">Ore-ofe! – b’ o ti dun to!<br>
	            T’o gba em’ abosi<br>
	            Mo ti sonu, o wa mi ri<br>
	            O si si mi loju</p>
            </div>
            <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 2</h3>
                <p class="text-sm">Or-ofe ko mi ki ‘m’ beru<br>
	            O si l’ eru mi lo<br>
	            B’ ore-ofe na ti han to<br>
	            Nigba mo ko gbagbo</p>
            </div>
            <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 3</h3>
                <p class="text-sm">Or-ofe ko mi ki ‘m’ beru<br>
	            O si l’ eru mi lo<br>
	            B’ ore-ofe na ti han to<br>
	            Nigba mo ko gbagbo</p>
            </div>
            <div class="preview-item bg-blue-200 hover:bg-blue-600 hover:cursor-pointer hover:text-white p-4 mb-3">
                <h3>VERSE 4</h3>
                <p class="text-sm">Or-ofe ko mi ki ‘m’ beru<br>
	            O si l’ eru mi lo<br>
	            B’ ore-ofe na ti han to<br>
	            Nigba mo ko gbagbo</p>
            </div>
        </section>
    </div>



    <!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add New Song
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div>
                    <form id="addSongForm" method="POST">
                        @csrf
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Song Title</label>
                        <input type="text" id="song-title" name='song-title' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
                    </div>
                    <div class="flex items-center gap-10 mt-5 p-3 bg-gray-200">
                        <div>
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verse Title</label>
                                <input type="text" id="verse-title" name='verse-title' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verse Content</label>
                                <textarea id="verse-content" style="width:300px;" name='verse-content' class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button id="addSongBtn" data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Song</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <script>
        const addSongBtn = document.querySelector("#addSongBtn");
        const songForm = document.querySelector("#addSongForm");
        const addSongFunction = () => {
            let myForm = new FormData(songForm);
            const addSong = fetch("{{ url('/addSong') }}", {
                method: 'POST',
                body: JSON.stringify({
                    'song-title': document.querySelector("#song-title").value,
                    'verse-title': document.querySelector("#verse-title").value,
                    'verse-content': document.querySelector("#verse-content").value,
                    '_token': "{{ csrf_token() }}",
                }),
                headers: {
                    "Content-type": "application/json; charset=UTF-8"
                }
            })
            /*
            for(const pair of myForm.entries()){
                console.log(pair[0], pair[1]);
            }
            */
        }
        addSongBtn.addEventListener('click', addSongFunction);
    </script>
</body>
</html>