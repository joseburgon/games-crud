<div class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            {!! Form::label('name', 'Game Name', ['class' => 'block text-sm font-medium text-gray-700']) !!}
            {!! Form::text('name', null, [
                'id' => 'name',
                'required',
                'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'
            ]) !!}
            @error('name')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-6 sm:col-span-3">
            {!! Form::label('game_url', 'Game URL', ['class' => 'block text-sm font-medium text-gray-700']) !!}
            {!! Form::url('game_url', null, [
                'id' => 'game_url',
                'required',
                'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'
            ]) !!}
            @error('game_url')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-6">
            {!! Form::label('description', 'Description', ['class' => 'block text-sm font-medium text-gray-700']) !!}
            {!! Form::textarea ('description', null, [
                'id' => 'description',
                'rows' => '3',
                'placeholder' => 'Game description',
                'required',
                'class' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md'
            ]) !!}
            @error('description')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-6 sm:col-span-3">
            {!! Form::label('image_url', 'Image URL', ['class' => 'block text-sm font-medium text-gray-700']) !!}
            {!! Form::url('image_url', null, [
                'id' => 'image_url',
                'required',
                'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'
            ]) !!}
            @error('image_url')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-6 sm:col-span-3">
            {!! Form::label('status', 'Status', ['class' => 'block text-sm font-medium text-gray-700']) !!}
            {!! Form::select('status', ['running' => 'Running', 'down' => 'Down', 'developing' => 'Developing'], null, [
                'required',
                'class' => 'mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'
            ]) !!}
            @error('status')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

    </div>
</div>
