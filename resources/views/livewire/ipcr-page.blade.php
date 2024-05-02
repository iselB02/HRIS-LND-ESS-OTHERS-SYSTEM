<div class="ipcr-container">
    <div class="ipcr-banner">
        <img id="ipcr_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 id="ipcr-h1">Individual Performance Commitment and Review</h1>
    </div>
    <div class="ipcr-main">
        <div id="ipcr-col1">
            <h2>Attach IPCR File</h2>
            <img id="fileattach-icon" src="{{ asset('images/attach-file.png') }}" alt="plm">
            <label ><input type="file"></label>
        </div>
        <div id="ipcr-col2">
            <h2>Encode IPCR Targets</h2>
            <table>
                <tbody>
                    <tr>
                        <td><h3>Distribution/dissemination and discussion of syllabus with the students by the end of the first week of classes</h3></td>
                        <td><h3>100% distribution/
                            dissemination and discussion of the syllabus with the students by the end of the first week of classes in all assigned subjects.</h3></td>
                    </tr>
                    <tr>
                        <td><h3>Application of various teaching methods/style relevant in teaching the assigned subject based on the OBTL Plan.</h3></td>
                        <td><h3>50% application of the identified teaching methods/style relevant in teaching the assigned subject based on the OBTL Plan.</h3></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="ipcr-col3">
            <h2>Encode IPCR ratings</h2>
            <table>
                <tbody>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                </tbody>
            </table>
            <div class="average">
                <label >Average: <input type="text"></label>
            </div>
            <div><button type="submit">Submit</button></div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/ipcrpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/ipcrpage.js') }}" defer></script>
@endpush