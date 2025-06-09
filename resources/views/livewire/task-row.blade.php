<tbody>
@foreach($tasks as $task)
    <tr class="odd:bg-white  even:bg-gray-50  border-gray-200">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
            {{ $task->title }}
        </th>
        <td class="px-6 py-4">
            Silver
        </td>
        <td class="px-6 py-4">
            Laptop
        </td>
        <td class="px-6 py-4">
            $2999
        </td>
        <td class="px-6 py-4">
            <a href="#" class="font-medium text-green-500  hover:underline">Done</a>
            |
            <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
            |
            <a href="#" class="font-medium text-red-600  hover:underline">Remove</a>
        </td>
    </tr>
@endforeach
</tbody>
