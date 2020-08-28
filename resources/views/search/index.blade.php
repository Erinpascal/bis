<form action="search" method="GET">
    <input type="text" name="code" class="form-control" <br>
                <button type="submit" class="btn btn-primary">SEARCH</button>
            </div>
        </div>
        <table class="table table-bordered" width="500">
            <tr>
                <td><font color="white">RESULT :</font></td>
            </tr>
            @foreach($good as $good)
            <tr>
                <td>{{ $good->code }}</td>
                <td>{{ $good->destination }}</td>
            </tr>
            @endforeach
        </table>
    </form>
