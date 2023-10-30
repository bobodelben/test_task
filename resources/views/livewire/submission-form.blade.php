<div class="p-6">
    <form wire:submit.prevent="submit" class="max-w-md mx-auto">
        @foreach ($questions as $question)
            <div class="mb-4">
                <x-input-label for="{{ $question['field'] }}"
                    class="block text-gray-700 text-sm font-bold mb-2">{{ $question['field'] }}:</x-input-label>

                @if ($question['type'] === 'number')
                    <x-text-input wire:model="answers.{{ $question['field'] }}" type="number"
                        id="{{ $question['field'] }}" class="block w-full" />
                @elseif($question['type'] === 'checkbox')
                    @foreach ($question['options'] as $option)
                        <input wire:model="answers.{{ $question['field'] }}" type="checkbox" id="{{ $option }}"
                            name="{{ $question['field'] }}[]" value="{{ $option }}" class="mr-2">
                        <label for="{{ $option }}" class="text-sm">{{ $option }}</label><br>
                    @endforeach
                @elseif($question['type'] === 'select')
                    <select wire:model="answers.{{ $question['field'] }}" id="{{ $question['field'] }}"
                        name="{{ $question['field'] }}"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option :value="null" selected>Select an option</option>
                        @foreach ($question['options'] as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                @else
                    <x-text-input wire:model="answers.{{ $question['field'] }}" type="text"
                        id="{{ $question['field'] }}" />
                @endif
            </div>
        @endforeach

        <div class="flex justify-end">
            <x-primary-button id="submit" name="submit" type="submit">
                Submit
            </x-primary-button>
        </div>
    </form>
</div>
