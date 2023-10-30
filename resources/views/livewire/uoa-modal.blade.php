<!-- modal-component.blade.php -->

<div>
    <button wire:click="openModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Open Modal
    </button>

    @if ($isModalOpen)
        <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div
                    class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                    <svg wire:click="closeModal" class="fill-current text-white" xmlns="http://www.w3.org/2000/svg"
                        width="18" height="18" viewBox="0 0 18 18">
                        <path
                            d="M13.51 5.49a.75.75 0 0 1 1.06 1.06L9.06 9l5.51 5.51a.75.75 0 1 1-1.06 1.06L8 10.06l-5.51 5.51a.75.75 0 0 1-1.06-1.06L6.94 9 .43 3.49a.75.75 0 0 1 1.06-1.06L8 7.94l5.51-5.51a.75.75 0 0 1 1.06 0z">
                        </path>
                    </svg>
                </div>

                <div class="modal-content py-4 text-left px-6">
                    <p class="text-2xl font-semibold">This is a modal!</p>
                    <p class="text-sm text-gray-700 mt-4">You can put any content here.</p>
                </div>
            </div>
        </div>
    @endif
</div>
