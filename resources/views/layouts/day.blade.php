<div class="card" style="margin-bottom: 10px">
    <div class="card-header font-weight-bold" style="font-size: 19px; background-color: lightgreen">{{$weekday.' '.$day}}</div>
    <table class="table">
        <thead class="thead-dark" >
        <tr>
            <th scope="col">#</th>
            <th scope="col">Урок</th>
            <th scope="col" style="width: 70%">Домашка</th>
            <th scope="col" style="width: 2.33%"><a  href=""><i class="fa fa-edit " style="font-size:25px; text-align: right"></i></a></th>
        </tr>
        </thead>
        <tbody>
        @for ($i=1; $i<=8; $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>Test</td>
                <td><input type="text" name="subject"  style="width:  100%"></td>
                <td><a href=""><i class="fa fa-star-o" style="font-size:24px"></i></a></td>
            </tr>
        @endfor
        </tbody>
    </table>
    <div class="card-body">

    </div>
</div>