<div class="admin-serminar-training-container">
    <div class="top-menu">
        <input type="search" id="search-seminar-training" placeholder="Search">
        <button id="add"> add </button>
        <button id="delete">delete</button>
    </div>
    <div class="display-semiar-training">
        <table>
            <tr>
                <th>Module</th>
                <th>Program</th>
                <th>Participants</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Type</th>
                <th></th>
            </tr>
            @foreach ($trainings as $training)
            <tr data-title="{{ $training->title }}" data-location="{{ $training->location }}" data-start_date="{{ $training->start_date }}" data-end_date="{{ $training->end_date}}" 
                data-start_time="{{ $training->start_time }}" data-end_time="{{ $training->end_time}}" data-description="{{ $training->description}}" data-type="{{ $training->type}}" 
                data-participants="{{ $training->participants}}" data-pre_test="{{ $training->pre_training}}" data-post_test="{{ $training->post_training}}">
                <td>{{ $training->id }}</td>
                <td>{{ $training->title }}</td>
                <td>{{ $training->participants }}</td>
                <td>{{ $training->start_date }}</td>
                <td>{{ $training->end_date }}</td>
                <td>{{ $training->type }}</td>
                <td><button class="view">view</button><button class="edit">Edit</button></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="modal-overlay"></div>
    <div class="popup-modal">
        <div class="view">
            <div id="training-title"></div>
            <div id="line-divider"></div>
            <div class="details">
                <div id="main-info">
                    <h3 class="location"></h2>
                    <h3 class="date"></h2>
                    <h3 class="time"></h2>
                </div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                    <h3 class="participants">Participants</h2>
                <div class="bottom-menu">
                    <button id="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-modal1">
        <form wire:submit.prevent="add_seminarTraining">
            <div id="title-div">
                <input wire:model="id" name="id_value" id="id_value" >
                <label for="title-input">Title</label>
                <input wire:model="title" type="text" name="title" id="title-edit">
                <select id="type-edit" wire:model="type">
                    <option value="" >Select Type</option>
                    <option value="Training">Training</option>
                    <option value="Seminar">Seminar</option>
                </select>
                
            </div>
            <div id="training-info">
                <label for="location-input">Location</label>
                <input wire:model="location" type="text" name="location" id="location-edit">
                <div class="dates">
                    <label for="start-date">From</label>
                    <input wire:model="start_date" type="date" name="start-date" id="start-date-edit">
                    <label for="end-date">To</label>
                    <input wire:model="end_date" type="date" name="end-date" id="end-date-edit">
                </div>
                <div class="time">
                    <label for="start-time">From</label>
                    <input wire:model="start_time" type="time" name="start-time" id="start-time-edit">
                    <label for="end-time">To</label>
                    <input wire:model="end_time" type="time" name="end-time" id="end-time-edit">
                </div>
            </div>
            <div id="training-body">
                <label for="description">Description</label>
                <textarea wire:model="description" name="description" id="description-edit" cols="70" rows="5"></textarea>
                <label for="participants-input">Participants</label>
                <input wire:model="participants" type="text" name="participants" id="participants-edit">
            </div>
            <div class="assessment">
                <label for="pre_test">Pre-Traning Assesment Link</label>
                <input wire:model="pre_training" id="pre_test-edit" type="text">
                <label for="post_test">Post-Traning Assesment Link</label>
                <input wire:model="post_training" id="post_test-edit" type="text">
            </div>
            <div id="add-buttons">
                <button id="cancel">Cancel</button>
                <button type="submit" id="add-training">Add</button>
            </div>
        </form>
    </div>
    <div class="add-form">
        <form wire:submit.prevent="add_seminarTraining">
            <div id="title-div">
                <label for="title-input">Title</label>
                <input wire:model="title" type="text" name="title" id="title-input">
                <select id="type" wire:model="type">
                    <option value="" >Select Type</option>
                    <option value="Training">Training</option>
                    <option value="Seminar">Seminar</option>
                </select>
                
            </div>
            <div id="training-info">
                <label for="location-input">Location</label>
                <input wire:model="location" type="text" name="location" id="location-input">
                <div class="dates">
                    <label for="start-date">From</label>
                    <input wire:model="start_date" type="date" name="start-date" id="start-date">
                    <label for="end-date">To</label>
                    <input wire:model="end_date" type="date" name="end-date" id="end-date">
                </div>
                <div class="time">
                    <label for="start-time">From</label>
                    <input wire:model="start_time" type="time" name="start-time" id="start-time">
                    <label for="end-time">To</label>
                    <input wire:model="end_time" type="time" name="end-time" id="end-time">
                </div>
            </div>
            <div id="training-body">
                <label for="description">Description</label>
                <textarea wire:model="description" name="description" id="description" cols="70" rows="5"></textarea>
                <label for="participants-input">Participants</label>
                <input wire:model="participants" type="text" name="participants" id="participants-input">
            </div>
            <div class="assessment">
                <label for="pre_test">Pre-Traning Assesment Link</label>
                <input wire:model="pre_training" id="pre_test" type="text">
                <label for="post_test">Post-Traning Assesment Link</label>
                <input wire:model="post_training" id="post_test" type="text">
            </div>
            <div id="add-buttons">
                <button id="cancel">Cancel</button>
                <button type="submit" id="add-training">Add</button>
            </div>
        </form>
    </div>
</div>



@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-seminar-training.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-seminar-training.js') }}" defer></script>
@endpush