<div class="seminartraining-container">
    <div class="admin-serminar-training-container">
        <div class="top-menu">
            <input wire:model.defer="searchQuery" wire:keydown.enter="search"  type="search" id="search-seminar-training" placeholder="Search">
        </div>
        <div class="display-semiar-training">
            <table>
                <tr>
                    <th>Program</th>
                    <!--<th>Participants</th>-->
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Type</th>
                    <th></th>
                </tr> </tr> <!-- Display search results if available -->
                @if(!empty($trainingSearch))
                    @foreach ($trainingSearch as $training)
                    <tr data-title="{{ $training->title }}" data-location="{{ $training->location }}" data-pre-link="{{ $training->pre_training}}" data-post-link="{{ $training->post_training }}" data-start-date="{{ $training->start_date }}" data-end-date="{{ $training->end_date }}" data-type="{{ $training->type }}"
                        data-start-time="{{ $training->start_time }}" data-end-time="{{ $training->end_time }}" data-participants="{{ $training->participants}}"  data-descriptions="{{ $training->description}}">
                        <td>{{ $training->title }}</td>
                        <!--<td>{{ $training->participants }}</td>-->
                         <td>
                            @if ($training->start_date)
                                {{ \Carbon\Carbon::parse($training->start_date)->format('F j, Y') }}
                            @else
                                N/A
                            @endif
                        </td>
						<td>
                            @if ($training->end_date)
                                {{ \Carbon\Carbon::parse($training->end_date)->format('F j, Y') }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $training->type }}</td>
                        <td><button class="view">View</button></td>
                    </tr>
                    @endforeach
                @else
                @foreach ($trainings as $training)
                <tr data-title="{{ $training->title }}" data-location="{{ $training->location }}" data-pre-link="{{ $training->pre_training}}" data-post-link="{{ $training->post_training }}" data-start-date="{{ $training->start_date }}" data-end-date="{{ $training->end_date }}" data-type="{{ $training->type }}"
                    data-start-time="{{ $training->start_time }}" data-end-time="{{ $training->end_time }}" data-participants="{{ $training->participants}}"  data-descriptions="{{ $training->description}}">
                    <td>{{ $training->title }}</td>
                   <!-- <td>{{ $training->participants }}</td>-->
                      <td>
                            @if ($training->start_date)
                                {{ \Carbon\Carbon::parse($training->start_date)->format('F j, Y') }}
                            @else
                                N/A
                            @endif
                        </td>
						<td>
                            @if ($training->end_date)
                                {{ \Carbon\Carbon::parse($training->end_date)->format('F j, Y') }}
                            @else
                                N/A
                            @endif
                        </td>
                    <td>{{ $training->type }}</td>
                  <td><button class="view">View</button></td>
                </tr>
                @endforeach
            </table>
            <div id="links">
                {{ $trainings->links() }}
            </div>
            @endif
        </div>
    </div>

    <div class="seminar_view" style="display:none;">
        <button id="close">Close</button>
        <div class="seminartraining-banner">
            <img id="seminartraining_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
            <h1 class="banner_h1">Seminars and Trainings</h1>
        </div>
        <div class="seminartraining-main">
            <div class="assessment">
                <div class="pre-training">
                    <button id="pre-test-btn" data-pre-test-url="">Take Pre-Training Assessment</button>
                </div>
                <div class="post-training">
                    <button id="post-test-btn" data-post-test-url="">Take Post-Training Assessment</button>
                </div>
            </div>
            <div class="details-container">
                <div class="details">
                    <h1>Details </h1>
                    <ul>
                        <li id="detail-topic"></li>
                        <li id="detail-date"></li>
                        <li id="detail-time"></li>
                        <li id="detail-location"></li>
                      <li id="detail-type"></li>
                    </ul>
                    <p id="detail-description"></p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/seminartrainingpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/seminar-training.js') }}" defer></script>
@endpush
