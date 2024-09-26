@extends('layouts.admin')
@section('content')
<div id="calendar"></div>

<script>
    var dias = @json($dias);
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid'],
        events: dias,
    });
    calendar.render();
</script>

{{--
<!-- resources/views/calendar.blade.php -->

<div id="calendar"></div>

<script>
    var dias = @json($dias);
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid'],
        events: function(start, end, timezone, callback) {
            var dias = [];
            for (var i = start; i <= end; i++) {
                var dia = i.format('d/m/Y');
                var vendas = {{ getVendasByDay(dia) }};
                dias = dias.concat(vendas);
            }
            callback(dias);
        },
    });
    calendar.render();
</script>
--}}
@endsection
