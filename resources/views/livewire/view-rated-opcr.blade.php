<div>
    <div class="col-md-12 text-center">
        <p class="fw-bold">
            OFFICE PERFORMACE COMMITMENT AND REVIEW (OPCR)
        </p>
    </div>

    <div class="col-md-12">
        <p>
            I, <u>{{ Str::upper($user->name) }}</u>, faculty of the College of {{ Str::upper($user->office->name) }},
            commits to deliver and agree to be rated on the attainment of the following targets in accordance with the
            indicated measures for the period January to June 2023.</u>
        </p>
    </div>

    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>Noted by:</th>
                    <th>Verified by:</th>
                    <th>Approved by:</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p class="text-center mt-3">
                                CHALLIZ D. OMOROG, DIT
                            </p>
                            <p class="lh-1 text-center">Dean</p>
                        </td>
                        <td>
                            <p class="text-center mt-3">
                                ESTELITO R. CLEMENTE, PhD
                            </p>
                            <p class="lh-1 text-center">VP for Academic Affairs</p>
                        </td>
                        <td>
                            <p class="text-center mt-3">
                                DULCE F. ATIAN, PhD
                            </p>
                            <p class="lh-1 text-center">Officer-in-Charge</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-12 mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th rowspan="2">MFO/PAP</th>
                        <th rowspan="2">SUCCESS INDICATORS
                            (TARGETS + MEASURES)</th>
                        <th rowspan="2">Actual Accomplishments</th>
                        <th colspan="4">Rating</th>
                        <th rowspan='2'>Remarks</th>
                    </tr>
                    <tr>
                        <th>Q1</th>
                        <th>E2</th>
                        <th>T3</th>
                        <th>A4</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ipcr as $targetFunction => $mfoPaps)
                        <tr>
                            <td colspan="8" class="text-dark bg-warning">{{ Str::upper($targetFunction) }}</td>
                        </tr>
                        @foreach ($mfoPaps as $mfoPap => $targets)
                            <tr>
                                <td rowspan="{{count($targets) + 1}}">{{ $mfoPap }}</td>
                            </tr>
                            @foreach ($targets as $target)
                                <tr>
                                    <td>{{ $target->targets }}</td>
                                    <td>{{ $target->actual_accomplishments }}</td>
                                    <td>{{ $target->q1 }}</td>
                                    <td>{{ $target->e2 }}</td>
                                    <td>{{ $target->t3 }}</td>
                                    <td>{{ $target->a4 }}</td>
                                    <td>{{ $target->remarks }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                        
                    @empty
                        <tr>
                            <td colspan="8">No results</td>
                        </tr>
                    @endforelse
                    <tr>
                        <td colspan="6">STRATEGIC FUNCTION (45%)</td>
                        <td colspan="2">{{ number_format($strategic, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="6">COR FUNCTION (45%)</td>
                        <td colspan="2">{{ number_format($core, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="6">SUPPORT FUNCTION (10%)</td>
                        <td colspan="2">{{ number_format($support, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="6">TOTAL OVERALL RATING</td>
                        <td colspan="2">{{ number_format($strategic + $core + $support, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
