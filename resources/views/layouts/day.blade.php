<div class="card {{$d}}" style="margin-bottom: 10px">
    <div class="card-header font-weight-bold" style="font-size: 19px; background-color: lightgreen">{{$weekday.' '.$day}}</div>
    <form method="get" >
        @csrf
        <table class="table">

            <thead class="thead-dark" >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Урок</th>
                    <th scope="col" style="width: 55%">Домашка</th>
                    <th scope="col" style="width: 2.33%"><a  href=""><i class="fa fa-edit " style="font-size:25px; text-align: right"></i></a></th>
                </tr>
            </thead>
            <tbody>

                    @for ($i=1; $i<=8; $i++)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>
                                <select id="{{'lesson-select-'.$d.'-'.$i}}" class="form-control">
                                    <option></option>
                                    @foreach ($lessons as $lesson)
                                        <option value="{{$lesson->id}}" name="{{'lesson'.$i}}">{{$lesson->lesson_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><input type="text" onchange="saveHomework('{{$i}}','{{$date}}','{{$d}}')" class="homework" id="{{'homework-'.$d.'-'.$i}}" style="width:  100%"></td>
                            <td><a href=""><i class="fa fa-star-o" style="font-size:24px"></i></a></td>
                        </tr>
                    @endfor
                        <tr class="text-center">
                            <th></th>
                            <td></td>
                            <td>
                               <!-- <span><input type="submit" id="save_homework" class="btn btn-success" style="margin-bottom: 5px" value="Зберегти домашку"></span> -->
                                <span><button type="button" id="save_shedule" onclick="saveSchedule('{{$d}}','{{$date}}')" class="btn btn-success">Змінити розкад</button></span>
                            </td>
                            <td></td>
                        </tr>


            </tbody>

        </table>
    </form>

</div>