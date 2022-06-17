<x-admin-layout>
    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 bg-white rounded-t-2xl flex items-center">
          <h6>Users</h6>
          <a href="{{ route('dashboard.users.create') }}" class=" ml-4 inline-block px-6 py-3 font-bold text-center bg-gradient-cyan uppercase align-middle transition-all rounded-lg cursor-pointer leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs text-white">Create</a>
        </div>
        <x-admin-messages />
        <div class="flex-auto px-0 pt-2 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Role</th>
                  <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($users))
                    @foreach ($users as $user)
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-size-sm h-9 w-9 rounded-xl" alt="user1" />
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 leading-normal text-size-sm">{{ $user->name }}</h6>
                                    <p class="mb-0 leading-tight text-size-xs text-slate-400">{{ $user->email }}</p>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap shadow-transparent">
                                @if ($user->is_active)
                                    <span class="bg-gradient-lime px-3.6-em text-size-xs-em rounded-1.8 py-2.2-em inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Active</span>
                                @else
                                    <span class="bg-gradient-red px-3.6-em text-size-xs-em rounded-1.8 py-2.2-em inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Inactive</span>
                                @endif
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="font-semibold leading-tight text-size-xs text-slate-400">{{ Str::ucfirst($user->role->name) }}</span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <a href="{{ route('dashboard.users.edit', $user->id) }}" class="font-semibold leading-tight text-size-xs text-slate-400"> Edit </a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['dashboard.users.destroy', $user->id]]) !!}
                                    <button type="submit" class="font-semibold leading-tight text-size-xs text-red-600">Delete</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <x-admin-alert>No Records Found</x-admin-alert>
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>

    <div class="p-4 text-sm border-t mt-2">
        {{ $users->onEachSide(2)->links() }}
    </div>
</x-admin-layout>