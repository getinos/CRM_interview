<div class="modal-overlay" id="stageSettingsModal">
        <div class="modal">
            <div class="modal-header">
                <h2 class="modal-title">Stage Settings</h2>
                <button class="close-btn" onclick="closeModal('stageSettingsModal')">&times;</button>
            </div>
            <!-- <div id="stagesList">
                <div class="stage-item">
                    <span class="stage-name">Lead</span>
                    <button class="btn btn-danger" onclick="removeStage('lead')">Remove</button>
                </div>
                <div class="stage-item">
                    <span class="stage-name">In Progress</span>
                    <button class="btn btn-danger" onclick="removeStage('progress')">Remove</button>
                </div>
                <div class="stage-item">
                    <span class="stage-name">Closed</span>
                    <button class="btn btn-danger" onclick="removeStage('closed')">Remove</button>
                </div>
            </div> -->

            <div id="stagesList">
                @foreach($stages as $stage)
                    <div class="stage-item">
                        <span class="stage-name">{{ $stage->name }}</span>
                        <form action="{{ route('deleteStage', $stage->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>
                @endforeach
            </div>


            <form action="addStage" method="POST" class="form-group" style="margin-top:1rem;">
            @csrf
            <label class="form-label">Add New Stage</label>
            <div style="display:flex; gap:0.5rem;">
                <input type="text" name="name" class="form-input" placeholder="Stage name" required>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
        </div>
    </div>