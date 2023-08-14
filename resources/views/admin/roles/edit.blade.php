<x-admin-layout>
    <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">
        
    
    <!-- Let us create a Back button that will lead us back to index page -->
        <div class="flex m-2 p-2">
            <a href="{{ route('admin.roles.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded">
                Back</a>
        </div>

        <!-- The Form starts here -->
        <div class="max-w-md mx-auto bg-gray-100 p-6 mt-12 rounded">
            <form class="space-y-5" method="POST" action="{{ route('admin.roles.update', $role->id) }}">
                @csrf
        <!-- We need @method('PUT') when we are going to upade data in database. -->
                @method('PUT')                
                          
                <div>
                    <label for="name" class="text-xl">Name</label>
                    <input id="name" type="text" name="name" value="{{$role->name }}"
                        class="block w-full py-3 px-3 mt-2
                            text-gray-800 appearance-none
                            border-2 border-gray-100
                            focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" />
                    @error('name')
                        <span class="text-sm text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-3 mt-10 bg-indigo-400 hover:bg-indigo-600 rounded-md
                        font-medium text-gray uppercase
                        focus:outline-none hover:shadow-none">
                    Update
                </button>

            </form>
             <!-- The Form starts here -->
        </div>
    </div>




    <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">
        <div class="flex m-2 p-2">
            <h2>Permissions</h2>

            <!-- The following loop will display all the selected permission -->
            <div class="max-w-md mx-auto">
                @foreach ($role->permissions as $rp)
                    <span class="m-2 p-2 bg-green-500 rounded-md">{{ $rp->name }}</span>
                @endforeach
            </div>
        </div>
    
            <!-- The Form starts here -->
            <div class="max-w-md mx-auto bg-gray-100 p-6 mt-12 rounded">
            <form class="space-y-5" method="POST" action="{{ route('admin.roles.permissions', $role->id) }}">
                @csrf
                <div>
                    <label class="text-xl" style="max-width: 300px">
                        <span class="text-gray-700">Permissions</span>
                        <select name="permissions[]"
                            class="block w-full py-3 px-3 mt-2
                            text-gray-800 appearance-none
                            border-2 border-gray-100
                            focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md"
                            multiple>
                            @foreach ($permissions as $permission)
                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>       
                            @endforeach
                        </select>
                    </label>

                </div>




    
                    <button type="submit"
                        class="w-full py-3 mt-10 bg-indigo-400 hover:bg-indigo-600 rounded-md
                            font-medium text-gray uppercase
                            focus:outline-none hover:shadow-none">
                        Assign Permissions
                    </button>
    
                </form>
                 <!-- The Form ends here -->
            </div>
        </div>


</x-admin-layout>
