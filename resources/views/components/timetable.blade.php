<table class="w-[180px] h-[300px] pl-6  mx-3 mt-0  items-center" >
    <tbody class="font4 pl-6 uppercase text-gray-600">
    @foreach($timetable as $time => $number)
        <tr class="font4   py-2 border-b ">
            <td class = "w-[30%] px-2">{{$number}} LESSON</td>
            <td class = "w-[30%] font4">{{$time}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
