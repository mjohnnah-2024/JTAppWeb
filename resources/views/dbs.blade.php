




    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Database List</h5>
        </div>
        @foreach ($databases as $dbase )
        <div class="card-body">
            <p class="card-text">Database name: {{ $dbase['database'] }}</p>
            <p class="card-text"> User count: {{ $dbase['userCount'] }}</p>
            <p class="card-text">Table count: {{ $dbase['tableCount']}}</p>
        </div>
        @endforeach

    </div>  

  