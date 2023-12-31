<div>
    <div class="row">
        @can('view-users')
            <div class="col-lg-3 col-md-3 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-user"></i></span>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6" style="">
                                    <a class="dropdown-item" href="{{ route('users.index') }}">View More</a>
                                </div>
                            </div>
                        </div>
                        <span>Users</span>
                        <h3 class="card-title text-nowrap mb-1">{{ \App\Models\User::count() }}</h3>
                    </div>
                </div>
            </div>
        @endcan
        <div class="col-md-12">
            <div id='calendar'></div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    nextDayThreshold:'00:00',
                    initialView: 'dayGridMonth',
                    events: {!! $data !!}
                });

                calendar.render();
            });
        </script>
    @endpush
</div>
